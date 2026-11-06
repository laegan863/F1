{{--
    Cascading Province -> City/Municipality -> Barangay selector (PSGC API).
    Option values are the place NAMES (what the database stores); the PSGC code
    is kept in data-code so the next level can be fetched. Previously selected
    values (old input / existing record) are restored automatically.

    Params: $prefix (permanent|current|relative)
--}}
@php
    $vals = [
        'province' => old($prefix.'.province'),
        'city'     => old($prefix.'.city'),
        'barangay' => old($prefix.'.barangay'),
    ];
@endphp
<div class="row g-3 psgc-address" data-prefix="{{ $prefix }}"
     data-province="{{ $vals['province'] }}" data-city="{{ $vals['city'] }}" data-barangay="{{ $vals['barangay'] }}">
    <div class="col-md-4">
        <label class="form-label">Province <small class="text-danger">*</small></label>
        <select class="form-select" name="{{ $prefix }}[province]" data-level="province">
            <option value="">Loading provinces...</option>
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">City / Municipality <small class="text-danger">*</small></label>
        <select class="form-select" name="{{ $prefix }}[city]" data-level="city" disabled>
            <option value="">Select city</option>
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Barangay <small class="text-danger">*</small></label>
        <select class="form-select" name="{{ $prefix }}[barangay]" data-level="barangay" disabled>
            <option value="">Select barangay</option>
        </select>
    </div>
</div>

@once
@push('psgc-script')
<script>
(function () {
    const API = 'https://psgc.gitlab.io/api';
    const NCR = '130000000';
    const cache = {};
    const getJSON = (url) => cache[url] || (cache[url] = fetch(url).then(r => {
        if (!r.ok) throw new Error('PSGC request failed');
        return r.json();
    }));
    const byName = (a, b) => a.name.localeCompare(b.name);
    const norm = (s) => (s || '').toString().trim().toLowerCase();

    function fill(select, items, placeholder, wanted) {
        select.innerHTML = '';
        select.add(new Option(placeholder, ''));
        let matched = false;
        items.forEach(it => {
            const o = new Option(it.name, it.name);
            o.dataset.code = it.code;
            if (wanted && (norm(it.name) === norm(wanted) || it.code === wanted)) { o.selected = true; matched = true; }
            select.add(o);
        });
        // Keep a value we could not match (e.g. legacy free-text) instead of silently dropping it
        if (wanted && !matched) {
            const o = new Option(wanted + ' (saved value)', wanted);
            o.selected = true;
            select.add(o);
        }
        select.disabled = false;
        return matched;
    }

    function setError(select, msg) {
        select.innerHTML = '';
        select.add(new Option(msg, ''));
        select.disabled = true;
    }

    function init(box) {
        const prov = box.querySelector('[data-level="province"]');
        const city = box.querySelector('[data-level="city"]');
        const brgy = box.querySelector('[data-level="barangay"]');
        let want = { city: box.dataset.city, barangay: box.dataset.barangay };

        const loadBarangays = () => {
            const code = city.selectedOptions[0]?.dataset.code;
            brgy.innerHTML = '<option value="">Select barangay</option>';
            brgy.disabled = true;
            if (!code) return;
            brgy.options[0].text = 'Loading...';
            getJSON(`${API}/cities-municipalities/${code}/barangays/`)
                .then(d => { fill(brgy, d.sort(byName), 'Select barangay', want.barangay); want.barangay = null; })
                .catch(() => setError(brgy, 'Could not load barangays'));
        };

        const loadCities = () => {
            const code = prov.selectedOptions[0]?.dataset.code;
            city.innerHTML = '<option value="">Select city</option>';
            brgy.innerHTML = '<option value="">Select barangay</option>';
            city.disabled = brgy.disabled = true;
            if (!code) return;
            city.options[0].text = 'Loading...';
            const url = code === NCR
                ? `${API}/regions/${NCR}/cities-municipalities/`
                : `${API}/provinces/${code}/cities-municipalities/`;
            getJSON(url)
                .then(d => {
                    const matched = fill(city, d.sort(byName), 'Select city', want.city);
                    want.city = null;
                    if (matched) loadBarangays(); else want.barangay = null;
                })
                .catch(() => setError(city, 'Could not load cities'));
        };

        prov.addEventListener('change', loadCities);
        city.addEventListener('change', loadBarangays);

        getJSON(`${API}/provinces/`)
            .then(d => {
                const list = d.slice().sort(byName);
                list.unshift({ name: 'Metro Manila (NCR)', code: NCR });
                if (fill(prov, list, 'Select province', box.dataset.province)) loadCities();
            })
            .catch(() => setError(prov, 'Could not load provinces (check internet connection)'));
    }

    document.addEventListener('DOMContentLoaded', () => document.querySelectorAll('.psgc-address').forEach(init));
})();
</script>
@endpush
@endonce

{{--
    Shared diagnosis block (primary site -> remarks) for the first page of Forms 2-4.
    All checkbox values are the site NAMES (some used to submit numeric keys).
--}}
@php
    $fuSites = \App\Http\Controllers\FollowUpFormController::CANCER_SITES;
    $fuSiteCols = array_chunk($fuSites, (int) ceil(count($fuSites) / 3));
    $fuOld = fn ($k) => (array) old($k, []);
    $fuStaging = [
        'FIGO Staging System (International Federation of Gynecology and Obstetrics)',
        'Ann Arbor Staging System',
        'Breslow Thickness and Clark Level (for Skin Cancer)',
        'Durie-Salmon Staging System',
        'Biomarker/Hormone Receptor Status',
        'The Child-Pugh Score (for Liver Cancer)',
        'Enneking Classification',
        'Musculoskeletal Tumor Society (MSTS) classification',
        'Nottingham Grading System',
        'Not Applicable',
    ];
@endphp

<div class="mb-3">
    <label class="form-label fw-bold">Primary Cancer Site <small class="text-danger">*</small></label>
    <div class="row">
        @foreach($fuSiteCols as $col)
            <div class="col-md-4">
                @foreach($col as $site)
                    <div class="form-check">
                        <input type="checkbox" name="primary_cancer_site[]" value="{{ $site }}" id="fu_site_{{ $loop->parent->index }}_{{ $loop->index }}"
                               class="form-check-input" {{ in_array($site, $fuOld('primary_cancer_site')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="fu_site_{{ $loop->parent->index }}_{{ $loop->index }}">{{ $site }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <div class="col-md-6 mt-2">
            <input type="text" name="primary_cancer_site_other" value="{{ old('primary_cancer_site_other') }}" class="form-control" placeholder="Others, specify">
        </div>
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Laterality <small class="text-danger">*</small></label>
    <div class="d-flex flex-wrap gap-3">
        @foreach(['Left', 'Right', 'Bilateral', 'Not applicable', 'Unknown'] as $label)
            <div class="form-check">
                <input type="radio" name="laterality" value="{{ $label }}" id="fu_lat_{{ $loop->index }}" class="form-check-input"
                       {{ strcasecmp((string) old('laterality'), $label) === 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="fu_lat_{{ $loop->index }}">{{ $label }}</label>
            </div>
        @endforeach
    </div>
</div>

<div class="row g-3 mb-3">
    <div class="col-md-8">
        <label class="form-label fw-bold">Histologic Diagnosis <small class="text-danger">*</small></label>
        <input type="text" name="histologic_diagnosis" class="form-control" value="{{ old('histologic_diagnosis') }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-bold">ICD-10 <small class="text-danger">*</small></label>
        <input type="text" name="icd10" class="form-control" value="{{ old('icd10') }}" placeholder="e.g. C50.9">
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Group Clinical Stage <small class="text-muted">(optional)</small></label>
    <div class="d-flex flex-wrap gap-3">
        @foreach(['Stage 0', 'Stage I', 'Stage II', 'Stage III', 'Stage IV', 'Unknown'] as $label)
            <div class="form-check">
                <input type="radio" name="clinical_stage" value="{{ $label }}" id="fu_stage_{{ $loop->index }}" class="form-check-input"
                       {{ old('clinical_stage') === $label ? 'checked' : '' }}>
                <label class="form-check-label" for="fu_stage_{{ $loop->index }}">{{ $label }}</label>
            </div>
        @endforeach
    </div>
</div>

<div class="row g-3 mb-3">
    @foreach(['t' => 'T (Tumor)', 'n' => 'N (Nodes)', 'm' => 'M (Metastasis)', 's' => 'S (Staging)'] as $tumor => $label)
        <div class="col-md-3">
            <label class="form-label fw-bold">{{ $label }} <small class="text-muted">(optional)</small></label>
            <input type="text" name="stage[{{ $tumor }}_stage]" class="form-control" value="{{ old('stage.' . $tumor . '_stage') }}">
        </div>
    @endforeach
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Other Staging Used <small class="text-muted">(optional)</small></label>
    <div class="row">
        @foreach(array_chunk($fuStaging, 5) as $col)
            <div class="col-md-6">
                @foreach($col as $label)
                    <div class="form-check">
                        <input type="checkbox" name="other_staging[]" value="{{ $label }}" id="fu_os_{{ $loop->parent->index }}_{{ $loop->index }}" class="form-check-input"
                               {{ in_array($label, $fuOld('other_staging')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="fu_os_{{ $loop->parent->index }}_{{ $loop->index }}">{{ $label }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Other Remarks <small class="text-muted">(optional)</small></label>
    <textarea name="other_remarks" class="form-control" rows="2">{{ old('other_remarks') }}</textarea>
</div>

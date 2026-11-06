{{-- Shared footer for Form 1 wizard steps. The layout script injects Previous/Next controls. --}}
@php $isEdit = ($mode ?? 'create') === 'edit'; @endphp
<div class="card-footer d-flex align-items-center gap-2" data-section-controls>
    <button type="button" onclick="handleSubmit()" data-submit-btn class="btn {{ $isEdit ? 'btn-success' : 'btn-primary' }} ms-auto">
        @if($isEdit)
            <i class="fa fa-check me-1"></i> Save changes
        @elseif(!empty($finalStep))
            <i class="fa fa-check me-1"></i> Save &amp; finish
        @else
            Save &amp; continue <i class="fa fa-angle-double-right ms-1"></i>
        @endif
    </button>
</div>

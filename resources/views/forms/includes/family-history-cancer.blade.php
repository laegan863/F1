<label class="form-label fw-bold">If yes, what cancer site/s? (multiple allowed)</label>
<div class="row">
    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Adrenal"
                   class="form-check-input rounded-circle"
                   {{ in_array('Adrenal', old('cancer_sites', [])) ? 'checked' : '' }}>
            Adrenal
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Anus"
                   class="form-check-input rounded-circle"
                   {{ in_array('Anus', old('cancer_sites', [])) ? 'checked' : '' }}>
            Anus
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Biliary Tract"
                   class="form-check-input rounded-circle"
                   {{ in_array('Biliary Tract', old('cancer_sites', [])) ? 'checked' : '' }}>
            Biliary Tract
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Acute Lymphocytic Leukemia"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Acute Lymphocytic Leukemia', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Acute Lymphocytic Leukemia
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Acute Myelogenous Leukemia"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Acute Myelogenous Leukemia', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Acute Myelogenous Leukemia
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Chronic Lymphocytic Leukemia"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Chronic Lymphocytic Leukemia', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Chronic Lymphocytic Leukemia
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Chronic Myelogenous Leukemia"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Chronic Myelogenous Leukemia', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Chronic Myelogenous Leukemia
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Myelodysplastic Syndromes"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Myelodysplastic Syndromes', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Myelodysplastic Syndromes
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Blood - Plasma Cell Disorders"
                   class="form-check-input rounded-circle"
                   {{ in_array('Blood - Plasma Cell Disorders', old('cancer_sites', [])) ? 'checked' : '' }}>
            Blood - Plasma Cell Disorders
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Bone"
                   class="form-check-input rounded-circle"
                   {{ in_array('Bone', old('cancer_sites', [])) ? 'checked' : '' }}>
            Bone
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Brain"
                   class="form-check-input rounded-circle"
                   {{ in_array('Brain', old('cancer_sites', [])) ? 'checked' : '' }}>
            Brain (Central Nervous System)
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Breast"
                   class="form-check-input rounded-circle"
                   {{ in_array('Breast', old('cancer_sites', [])) ? 'checked' : '' }}>
            Breast
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Cervix"
                   class="form-check-input rounded-circle"
                   {{ in_array('Cervix', old('cancer_sites', [])) ? 'checked' : '' }}>
            Cervix
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Colon"
                   class="form-check-input rounded-circle"
                   {{ in_array('Colon', old('cancer_sites', [])) ? 'checked' : '' }}>
            Colon
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Esophagus"
                   class="form-check-input rounded-circle"
                   {{ in_array('Esophagus', old('cancer_sites', [])) ? 'checked' : '' }}>
            Esophagus
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Eyes and Orbit"
                   class="form-check-input rounded-circle"
                   {{ in_array('Eyes and Orbit', old('cancer_sites', [])) ? 'checked' : '' }}>
            Eyes and Orbit
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Gallbladder"
                   class="form-check-input rounded-circle"
                   {{ in_array('Gallbladder', old('cancer_sites', [])) ? 'checked' : '' }}>
            Gallbladder
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Gastroesophageal Junction"
                   class="form-check-input rounded-circle"
                   {{ in_array('Gastroesophageal Junction', old('cancer_sites', [])) ? 'checked' : '' }}>
            Gastroesophageal Junction
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Hodgkin Lymphoma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Hodgkin Lymphoma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Hodgkin Lymphoma
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Hypopharynx"
                   class="form-check-input rounded-circle"
                   {{ in_array('Hypopharynx', old('cancer_sites', [])) ? 'checked' : '' }}>
            Hypopharynx
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Kaposi Sarcoma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Kaposi Sarcoma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Kaposi Sarcoma
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Kidney"
                   class="form-check-input rounded-circle"
                   {{ in_array('Kidney', old('cancer_sites', [])) ? 'checked' : '' }}>
            Kidney
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Larynx"
                   class="form-check-input rounded-circle"
                   {{ in_array('Larynx', old('cancer_sites', [])) ? 'checked' : '' }}>
            Larynx
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Leukemia"
                   class="form-check-input rounded-circle"
                   {{ in_array('Leukemia', old('cancer_sites', [])) ? 'checked' : '' }}>
            Leukemia
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Lip/Oral Cavity"
                   class="form-check-input rounded-circle"
                   {{ in_array('Lip/Oral Cavity', old('cancer_sites', [])) ? 'checked' : '' }}>
            Lip/Oral Cavity
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Liver"
                   class="form-check-input rounded-circle"
                   {{ in_array('Liver', old('cancer_sites', [])) ? 'checked' : '' }}>
            Liver
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Lung"
                   class="form-check-input rounded-circle"
                   {{ in_array('Lung', old('cancer_sites', [])) ? 'checked' : '' }}>
            Lung
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Melanoma of Skin"
                   class="form-check-input rounded-circle"
                   {{ in_array('Melanoma of Skin', old('cancer_sites', [])) ? 'checked' : '' }}>
            Melanoma of Skin
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Mesothelioma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Mesothelioma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Mesothelioma
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Multiple Myeloma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Multiple Myeloma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Multiple Myeloma
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Nasopharynx"
                   class="form-check-input rounded-circle"
                   {{ in_array('Nasopharynx', old('cancer_sites', [])) ? 'checked' : '' }}>
            Nasopharynx
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Non-Hodgkin Lymphoma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Non-Hodgkin Lymphoma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Non-Hodgkin Lymphoma
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Oral Cavity"
                   class="form-check-input rounded-circle"
                   {{ in_array('Oral Cavity', old('cancer_sites', [])) ? 'checked' : '' }}>
            Oral Cavity
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Oropharynx"
                   class="form-check-input rounded-circle"
                   {{ in_array('Oropharynx', old('cancer_sites', [])) ? 'checked' : '' }}>
            Oropharynx
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Ovary"
                   class="form-check-input rounded-circle"
                   {{ in_array('Ovary', old('cancer_sites', [])) ? 'checked' : '' }}>
            Ovary
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Pancreas"
                   class="form-check-input rounded-circle"
                   {{ in_array('Pancreas', old('cancer_sites', [])) ? 'checked' : '' }}>
            Pancreas
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Paranasal Sinus"
                   class="form-check-input rounded-circle"
                   {{ in_array('Paranasal Sinus', old('cancer_sites', [])) ? 'checked' : '' }}>
            Paranasal Sinus
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Peritoneal"
                   class="form-check-input rounded-circle"
                   {{ in_array('Peritoneal', old('cancer_sites', [])) ? 'checked' : '' }}>
            Peritoneal
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Prostate"
                   class="form-check-input rounded-circle"
                   {{ in_array('Prostate', old('cancer_sites', [])) ? 'checked' : '' }}>
            Prostate
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Rectum"
                   class="form-check-input rounded-circle"
                   {{ in_array('Rectum', old('cancer_sites', [])) ? 'checked' : '' }}>
            Rectum
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Renal Pelvis/Ureters"
                   class="form-check-input rounded-circle"
                   {{ in_array('Renal Pelvis/Ureters', old('cancer_sites', [])) ? 'checked' : '' }}>
            Renal Pelvis/Ureters
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Salivary Glands"
                   class="form-check-input rounded-circle"
                   {{ in_array('Salivary Glands', old('cancer_sites', [])) ? 'checked' : '' }}>
            Salivary Glands
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Skin"
                   class="form-check-input rounded-circle"
                   {{ in_array('Skin', old('cancer_sites', [])) ? 'checked' : '' }}>
            Skin
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Small Bowel"
                   class="form-check-input rounded-circle"
                   {{ in_array('Small Bowel', old('cancer_sites', [])) ? 'checked' : '' }}>
            Small Bowel
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Soft Tissue Sarcoma"
                   class="form-check-input rounded-circle"
                   {{ in_array('Soft Tissue Sarcoma', old('cancer_sites', [])) ? 'checked' : '' }}>
            Soft Tissue Sarcoma
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Spinal Cord"
                   class="form-check-input rounded-circle"
                   {{ in_array('Spinal Cord', old('cancer_sites', [])) ? 'checked' : '' }}>
            Spinal Cord
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Stomach"
                   class="form-check-input rounded-circle"
                   {{ in_array('Stomach', old('cancer_sites', [])) ? 'checked' : '' }}>
            Stomach
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Testis"
                   class="form-check-input rounded-circle"
                   {{ in_array('Testis', old('cancer_sites', [])) ? 'checked' : '' }}>
            Testis
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Thymus"
                   class="form-check-input rounded-circle"
                   {{ in_array('Thymus', old('cancer_sites', [])) ? 'checked' : '' }}>
            Thymus
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Thyroid"
                   class="form-check-input rounded-circle"
                   {{ in_array('Thyroid', old('cancer_sites', [])) ? 'checked' : '' }}>
            Thyroid
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Unknown Primary"
                   class="form-check-input rounded-circle"
                   {{ in_array('Unknown Primary', old('cancer_sites', [])) ? 'checked' : '' }}>
            Unknown Primary (Occult Primary)
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Urinary Bladder"
                   class="form-check-input rounded-circle"
                   {{ in_array('Urinary Bladder', old('cancer_sites', [])) ? 'checked' : '' }}>
            Urinary Bladder
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Uterus"
                   class="form-check-input rounded-circle"
                   {{ in_array('Uterus', old('cancer_sites', [])) ? 'checked' : '' }}>
            Uterus
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Vagina"
                   class="form-check-input rounded-circle"
                   {{ in_array('Vagina', old('cancer_sites', [])) ? 'checked' : '' }}>
            Vagina
        </div>
        <div class="form-check">
            <input type="checkbox" name="cancer_sites[]" value="Vulva"
                   class="form-check-input rounded-circle"
                   {{ in_array('Vulva', old('cancer_sites', [])) ? 'checked' : '' }}>
            Vulva
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input rounded-circle"
                   value="{{ old('cancer_sites_other') }}" onclick="HandleOtherOptions()" name="cancer_sites_other" id="other" {{ old('cancer_sites_other') == 'yes' ? 'checked' : '' }}>
            <label class="form-check-label">Others, specify:</label>
        </div>
        @if(old('cancer_sites_other') == 'yes')
            <div id="others">
                <input type="text" class="form-control mt-1"
                    name="cancer_sites_other_value" value="{{ old('cancer_sites_other_value') }}"
                    placeholder="Specify if others" required
                >
            </div>
        @endif
    </div>
</div>

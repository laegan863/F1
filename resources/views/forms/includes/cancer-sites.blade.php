<div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th style="width:30%">Cancer Site</th>
                <th style="width:20%">Year of Diagnosis</th>
                <th style="width:25%">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cancerSites = [
                    "Adrenal","Anus","Biliary Tract","Blood - Acute Lymphocytic Leukemia",
                    "Blood - Acute Myelogenous Leukemia","Blood - Chronic Lymphocytic Leukemia",
                    "Blood - Chronic Myelogenous Leukemia","Blood - Myelodysplastic Syndromes",
                    "Blood - Plasma Cell Disorders","Bone","Brain (CNS)","Breast","Cervix",
                    "Colon","Esophagus","Eyes and Orbit","Gallbladder","Gastroesophageal Junction",
                    "Hodgkin Lymphoma","Hypopharynx","Kaposi Sarcoma","Kidney", "Larynx","Leukemia",
                    "Lip/Oral Cavity","Liver","Lung","Melanoma of Skin","Mesothelioma","Multiple Myeloma",
                    "Nasopharynx","Non-Hodgkin Lymphoma","Oral Cavity","Oropharynx","Ovary","Pancreas",
                    "Paranasal Sinus","Peritoneal","Prostate","Rectum","Renal Pelvis/Ureters","Salivary Glands",
                    "Skin","Small Bowel","Soft Tissue Sarcoma","Spinal Cord","Stomach","Testis","Thymus","Thyroid",
                    "Unknown Primary (Occult Primary)","Urinary Bladder","Uterus","Vagina","Vulva"
                ];
            @endphp

            @foreach($cancerSites as $index => $site)
            <tr>
                <td>
                    <div class="form-check">
                        <input type="checkbox"
                               class="form-check-input cancer-check rounded-circle"
                               name="patient_diagnosed_w_cancer[{{ $site }}][specify]"
                               value="{{ $site }}"
                               id="cancer_{{ $index }}"
                               {{ old("patient_diagnosed_w_cancer.$site.specify") == $site ? 'checked' : '' }}>
                        <label class="form-check-label" for="cancer_{{ $index }}">{{ $site }}</label>
                    </div>
                </td>
                <td>
                    <input type="number"
                           class="form-control year-input"
                           name="patient_diagnosed_w_cancer[{{ $site }}][year]"
                           placeholder="YYYY"
                           value="{{ old("patient_diagnosed_w_cancer.$site.year") }}"
                           {{ old("patient_diagnosed_w_cancer.$site.specify") ? '' : 'disabled' }}>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                               class="form-check-input rounded-circle status-input"
                               name="patient_diagnosed_w_cancer[{{ $site }}][status]"
                               value="Active"
                               {{ old("patient_diagnosed_w_cancer.$site.status") == 'Active' ? 'checked' : '' }}
                               {{ old("patient_diagnosed_w_cancer.$site.specify") ? '' : 'disabled' }}>
                        <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                               class="form-check-input rounded-circle status-input"
                               name="patient_diagnosed_w_cancer[{{ $site }}][status]"
                               value="Remission"
                               {{ old("patient_diagnosed_w_cancer.$site.status") == 'Remission' ? 'checked' : '' }}
                               {{ old("patient_diagnosed_w_cancer.$site.specify") ? '' : 'disabled' }}>
                        <label class="form-check-label">Remission</label>
                    </div>
                </td>
            </tr>
            @endforeach

            {{-- Others row --}}
            <tr>
                <td>
                    <div class="form-check">
                        <input type="checkbox"
                               class="form-check-input rounded-circle cancer-check"
                               value="Others"
                               id="cancer_others"
                               {{ old("patient_diagnosed_w_cancer.others.specify") ? 'checked' : '' }}>
                        <label class="form-check-label" for="cancer_others">Others, specify:</label>
                        <input type="text"
                               class="form-control mt-1"
                               name="patient_diagnosed_w_cancer[others][specify]"
                               placeholder="Specify if others"
                               value="{{ old("patient_diagnosed_w_cancer.others.specify") }}"
                               {{ old("patient_diagnosed_w_cancer.others.specify") ? '' : 'disabled' }}>
                    </div>
                </td>
                <td>
                    <input type="number"
                           class="form-control year-input"
                           name="patient_diagnosed_w_cancer[others][year]"
                           placeholder="YYYY"
                           value="{{ old("patient_diagnosed_w_cancer.others.year") }}"
                           {{ old("patient_diagnosed_w_cancer.others.specify") ? '' : 'disabled' }}>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                               class="form-check-input rounded-circle status-input"
                               name="patient_diagnosed_w_cancer[others][status]"
                               value="Active"
                               {{ old("patient_diagnosed_w_cancer.others.status") == 'Active' ? 'checked' : '' }}
                               {{ old("patient_diagnosed_w_cancer.others.specify") ? '' : 'disabled' }}>
                        <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                               class="form-check-input rounded-circle status-input"
                               name="patient_diagnosed_w_cancer[others][status]"
                               value="Remission"
                               {{ old("patient_diagnosed_w_cancer.others.status") == 'Remission' ? 'checked' : '' }}
                               {{ old("patient_diagnosed_w_cancer.others.specify") ? '' : 'disabled' }}>
                        <label class="form-check-label">Remission</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

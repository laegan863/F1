@extends('reports.app')
@section('title', 'REPORTING FORM 0B: Medicines Availed by Cancer Patients Enrolled in CSPMAP')
@section('content')
    <!-- CSPMAP MEDICINE -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="2" class="border border-gray-400 text-center py-1">CSPMAP MEDICINE</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">FREQUENCY OF AVAILMENT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Asparaginase 10,000 IU vial',
                'Bicalutamide 50 mg',
                'Bleomycin (as Sulfate) 15 mg Vial',
                'Calcium Folinate (Leucovorin Calcium) 50 mg vial',
                'Capecitabine 500 mg Tablet',
                'Carboplatin 150 mg vial',
                'Carboplatin 450 mg vial',
                'Cisplatin 1 mg/mL, 10 mL vial',
                'Cisplatin 1 mg/mL, 50 mL vial',
                'Cyclophosphamide 500 mg powder vial',
                'Cytarabine 100 mg/mL 1 mL vial',
                'Cytarabine 100 mg/mL 5 mL vial',
                'Dacarbazine 200 mg vial',
                'Dactinomycin (Actinomycin D) 500 mcg powder vial',
                'Diazepam 5 mg/mL, 2 mL amp',
                'Diphenhydramine (as Hydrochloride) 50 mg/mL, 1 mL Amp',
                'Docetaxel 20 mg/mL, 1 mL vial',
                'Docetaxel 40 mg/mL, 2 mL vial',
                'Doxorubicin 10 mg vial',
                'Doxorubicin 50 mg vial',
                'Epirubicin 50 mg vial',
                'Etoposide 20 mg/mL, 5 mL amp/vial',
                'Fentanyl Citrate 50 mcg/mL, 2 mL amp',
                'Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)',
                'Fluorouracil 50 mg/mL, 10 mL vial',
                'Gemcitabine 1 g vial',
                'Gemcitabine 200 mg vial',
                'Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)',
                'Haloperidol 5 mg/mL, 1 mL amp',
                'Hydroxyurea 500 mg capsule',
                'Hyoscine (as N-butyl bromide) 20 mg/mL, 1 mL amp',
                'Idarubicin 5 mg vial',
                'Ifosfamide 1 g vial',
                'Imatinib 400 mg tablet',
                'Imatinib Mesilate 100 mg tablet',
                'Irinotecan 40 mg/2 mL vial concentrate vial',
                'Letrozole 2.5 mg Tablet',
                'Leuprolene Acetate 3.75 mg vial (PFS)',
                'Mercaptopurine 50 mg tablet',
                'Mesna 100 mg/mL, 4 mL Amp',
                'Methotrexate 2.5 mg tablet',
                'Methotrexate 25 mg/mL, 2 mL vial',
                'Metoclopramide 5 mg/mL, 2 mL Ampule',
                'Morphine (as Sulfate) 10 mg tablet',
                'Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule',
                'Morphine (as Sulfate) 30 mg tablet',
                'Omeprazole 40 mg powder vial + 10 mL solvent Ampule',
                'Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule',
                'Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule',
                'Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial',
                'Paclitaxel 6 mg/mL, 16.7 mL Vial',
                'Paclitaxel 6 mg/mL, 25 mL Vial',
                'Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial',
                'Rituximab 10 mg/mL, 10 mL Vial',
                'Rituximab 10 mg/mL, 50 mL Vial',
                'Tamoxifen 20 mg tablet',
                'Trastuzumab 150 mg Lyophilized Powder',
                'Trastuzumab 600 mg/5 mL (120mg/mL) 5mL Vial',
                'Vinblastine Sulfate 1 mg/mL, 10 mL Vial',
                'Vincristine (as Sulfate) 1 mg/mL Vial',
                'Vincristine (as sulfate) 1 mg/mL, 2 mL Vial',
                'Others'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
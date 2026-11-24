# HBCR Development Milestones

**System:** Hospital-Based Cancer Registry (HBCR), Laravel 12 + MySQL
**Initial development:** 15 Sep – 24 Nov 2025
**Maintenance update:** Nov 2026
**Milestone plan started:** 24 Nov 2026
**Status key:** ✅ done · 🟡 in progress · ⬜ not started

Each task has a **Finished on** date. When you complete a task, change its status to ✅ and write the date (e.g. `03 Dec 2026`). Leave `—` while it is still open.

---

## Phase 1: Initial development (15 Sep – 24 Nov 2025) ✅

The original build of HBCR, the Hospital-Based Cancer Registry. It digitizes the official HBCR / CBCR paper forms (Forms 1–4), stores each cancer patient's record from first consult through follow-up, surveillance and palliative care, and produces the registry reports. Dates come from the git history: the day the feature first appeared (**Started**) and the day it was completed in 2025 (**Finished on**).

### Summary

| # | Feature | Status | Started | Finished on |
|---|---|---|---|---|
| 1.1 | Login and account access | ✅ | 15 Sep 2025 | 24 Nov 2025 |
| 1.2 | Admin layout and navigation | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.3 | Admin dashboard | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.4 | Patient records list | ✅ | 19 Sep 2025 | 25 Sep 2025 |
| 1.5 | User management | ✅ | 22 Sep 2025 | 25 Sep 2025 |
| 1.6 | Hospital number check and patient lookup | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.7 | Form 1, Part 1: Demographic profile | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.8 | Form 1, Part 2: Risk factors and medical history | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.9 | Form 1, Part 3: Cancer diagnosis and staging | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.10 | Form 1, Part 4: First course of treatment | ✅ | 15 Sep 2025 | 06 Nov 2025 |
| 1.11 | Form 1 printable version | ✅ | 16 Sep 2025 | 13 Oct 2025 |
| 1.12 | Form 2: Patient follow-up (6 pages) | ✅ | 25 Sep 2025 | 06 Nov 2025 |
| 1.13 | Form 3: Patient surveillance (4 pages) | ✅ | 29 Sep 2025 | 07 Oct 2025 |
| 1.14 | Form 4: Supportive-palliative care (6 pages) | ✅ | 29 Sep 2025 | 06 Nov 2025 |
| 1.15 | Printable versions of Forms 2–4 | ✅ | 01 Oct 2025 | 28 Oct 2025 |
| 1.16 | Patient forms view (all forms per patient) | ✅ | 25 Sep 2025 | 06 Nov 2025 |
| 1.17 | Registry reports RF-0A … RF-3A | 🟡 | 15 Oct 2025 | 28 Oct 2025 |
| 1.18 | Support messages | ✅ | 06 Nov 2025 | 06 Nov 2025 |
| 1.19 | Activity logs (audit trail) | ✅ | 06 Nov 2025 | 06 Nov 2025 |

### Feature details

#### 1.1 Login and account access ✅
*15 Sep 2025 → 24 Nov 2025*
- HBCR-branded login page with email and password, plus "remember me".
- Two roles: **admin** (full access, user management) and **user** (encoder).
- Logins and logouts are recorded in the activity log.
- The login page was redesigned in the last weeks before completion (Nov 2025).

#### 1.2 Admin layout and navigation ✅
*15 Sep 2025 → 06 Nov 2025*
- Shared admin layout with sidebar navigation: Dashboard, Record Management, Reports, Users, Activity Logs and Support.
- Admin-only menu items are hidden from encoders and protected on the server.
- Success and error messages shown at the top of each page.

#### 1.3 Admin dashboard ✅
*15 Sep 2025 → 06 Nov 2025*
- Summary cards: total patient records, total sub-users, today's activities, total activities.
- Pending support messages counter ("All Clear" when none).
- Starting point for adding a new record.

#### 1.4 Patient records list ✅
*19 Sep 2025 → 25 Sep 2025*
- Table of all registered patients: hospital number, name, email and phone number.
- Actions per patient to view their forms, print and continue follow-ups.

#### 1.5 User management ✅
*22 Sep 2025 → 25 Sep 2025*
- Admins add users (name, email, password, role).
- Update user information and delete users from a modal dialog.

#### 1.6 Hospital number check and patient lookup ✅
*15 Sep 2025 → 06 Nov 2025*
- First step of a new record: enter the patient's hospital number. It is zero-padded to 10 digits.
- Blocks duplicates: a patient already in the registry cannot be added again.
- Looks the number up in the hospital's patient database (SQL Server). If found, the demographic profile is pre-filled from it.

#### 1.7 Form 1, Part 1: Demographic profile ✅
*15 Sep 2025 → 06 Nov 2025*
- Patient name (first, middle, last, suffix, maiden name), sex at birth, date of birth, civil status, nationality.
- Health facility ID number, PhilHealth Identification Number (PIN), date of first encounter.
- Permanent and current address by Province → City/Municipality → Barangay → Sitio.
- Education, occupation and years in occupation, mobile number and email.
- Nearest relative / legal guardian: contact number, email and address.

#### 1.8 Form 1, Part 2: Risk factors and medical history ✅
*15 Sep 2025 → 06 Nov 2025*
- Lifestyle: tobacco use (current, previous, non-smoker), second-hand smoke, harmful alcohol use, physical activity level, diet (vegetables, fat-meat, sugar, sodium).
- Exposures: occupational and outdoor air pollution.
- Family history of cancer up to 3rd-degree relatives, with cancer sites.
- Medical history: previous cancer diagnosis (sites, active/remission) and other significant conditions.
- Sexual history (items 37–40): orientation, partners, age at first intercourse, contraceptive use.
- Screening and vaccination history (items 41–42).

#### 1.9 Form 1, Part 3: Cancer diagnosis and staging ✅
*15 Sep 2025 → 06 Nov 2025*
- Primary cancer site(s), with support for more than one active primary site.
- ICD-10 code, histologic diagnosis and laterality.
- TNM staging (T, N, M), group clinical stage, other staging systems, current status of the cancer.

#### 1.10 Form 1, Part 4: First course of treatment ✅
*15 Sep 2025 → 06 Nov 2025*
- Date of diagnosis and multidisciplinary cancer team (disciplines involved).
- Surgery, radiotherapy and theranostics, each with type, goal and sequence.
- Anti-cancer drugs: purpose, drug types, regimen, line of therapy, intended cycles, time of administration.
- Other cancer-directed therapies.

#### 1.11 Form 1 printable version ✅
*16 Sep 2025 → 13 Oct 2025*
- Reproduces the official "Hospital-Based Cancer Registry (HBCR)" Form 1, filled in from the saved record, ready to print or save as PDF.

#### 1.12 Form 2: Patient follow-up ✅
*25 Sep 2025 → 06 Nov 2025*
1. **Follow-up details:** follow-up date, patient name, cancer site, ICD-10, histology, laterality, staging, remarks.
2. **Patient ECOG status:** ECOG grade and other functional assessment, surgery done (RVS code, date), ongoing anti-cancer drug therapy (drug types, regimen, chemo cycle number, goal).
3. **Radiotherapy and theranostics:** type, body site, planned/received dose (cGy), fractions, dates, goal.
4. **Other cancer-directed therapies:** pre-/post-operative scenario and patient treatment status.
5. **Change in treatment plan:** what changed and why, new radiotherapy / drug plan, next chemotherapy cycle date, supportive-palliative care only.
6. **Cancer diagnosis outcome:** outcome and date, cause of death, financial support availed (including CSPMAP medicines).

#### 1.13 Form 3: Patient surveillance ✅
*29 Sep 2025 → 07 Oct 2025*
1. **Surveillance details:** date, patient and diagnosis summary.
2. **Cancer diagnosis outcome:** outcome and date. If the patient died, the immediate, antecedent and underlying causes of death and other significant conditions.
3. **Cancer treatment history:** surgery (RVS code, goal, adverse events), anti-cancer drugs (types, regimen, response, adverse events), radiotherapy (type, sequence such as concurrent chemoRT or sequential, goal), theranostics, other therapies.
4. **Financial support mechanisms** availed.

#### 1.14 Form 4: Supportive-palliative care ✅
*29 Sep 2025 → 06 Nov 2025*
1. **Palliative form:** patient and diagnosis summary, type of care (palliative with curative intent, with active oncologic management, supportive, hospice, end-of-life, survivorship) and setting (home, hospital, community-based).
2. **ESAS-r:** Edmonton Symptom Assessment System (revised) symptom scores and GCS score.
3. **Pain assessment:** presence of pain, pain diagnosis, provocation, quality, region, severity, timing, associated symptoms, acceptable pain score, pain management and medication dates, pediatric pain scale.
4. **Palliative care interventions:** where care is given and whether quality of life improved.
5. **Cancer diagnosis outcome.**
6. **Financial support mechanisms**, including CSPMAP medicines.

#### 1.15 Printable versions of Forms 2–4 ✅
*01 Oct 2025 → 28 Oct 2025*
- Each follow-up, surveillance and palliative entry prints on the official paper-form layout, with checkboxes ticked from the saved answers.

#### 1.16 Patient forms view ✅
*25 Sep 2025 → 06 Nov 2025*
- One page per patient listing Form 1 to Form 4 with their status, plus links to view, print or continue each form.

#### 1.17 Registry reports RF-0A … RF-3A 🟡
*15 Oct 2025 → 28 Oct 2025*
- Choose a report, enter "Prepared by" and "Noted by", and pick a year and month range.
- 12 report layouts:
  - **RF-1A:** new cases by primary site, sex and clinical stage
  - **RF-1B:** sociodemographic characteristics
  - **RF-1C:** medical history
  - **RF-1D:** risk factor profile by sex
  - **RF-1E:** screening and vaccination history
  - **RF-1F:** status at first encounter
  - **RF-2A:** first course of treatment
  - **RF-2B:** cancer diagnosis outcome
  - **RF-2C:** patient treatment status
  - **RF-3A:** supportive-palliative care consults
  - **RF-0A:** financial support mechanisms
  - **RF-0B:** CSPMAP medicines availed
- PDF generation with spatie/laravel-pdf.
- Still partial: not every report reads live data yet. This is finished in Milestone 3.

#### 1.18 Support messages ✅
*06 Nov 2025 → 06 Nov 2025*
- Users send a message (subject and message) to the admin and see their own messages and replies.
- Admins see all messages with status (pending, read, resolved), reply to them, and delete them.

#### 1.19 Activity logs ✅
*06 Nov 2025 → 06 Nov 2025*
- Records who did what and when: logins, logouts, creates, updates and deletes, with IP address and browser.
- Statistics: total, today's activities, logins today, counts by activity type.
- Filter by user, action and date range, search, view details, export, and delete logs older than N days.

---

## Phase 2: Maintenance and updates

### Small updates (Dec 2025 – Jan 2026)

| # | Update | Status | Finished on |
|---|---|---|---|
| U1 | Redesigned the demographic profile page | ✅ | 17 Dec 2025 |
| U2 | Small change to the cancer diagnosis page | ✅ | 05 Jan 2026 |
| U3 | Changed the layout of the Form 1 printable version | ✅ | 07 Jan 2026 |
| U4 | Page navigation styling, and activity logs show 10 per page | ✅ | 14 Jan 2026 |

### November 2026 maintenance update

| # | Update | Status | Finished on |
|---|---|---|---|
| U5 | My Profile page and change password | ✅ | 06 Nov 2026 |
| U6 | Edit and delete saved Form 1 steps and Form 2–4 entries (shared follow-up wizard) | ✅ | 06 Nov 2026 |
| U7 | Fixed saved follow-up form data (data-fix migration) and refreshed the UI styling | ✅ | 06 Nov 2026 |
| U8 | Option lists matched to the official print forms (`config/cbcr_options.php`) | ✅ | 06 Nov 2026 |
| U9 | Email address made optional in the demographic profile | ✅ | 06 Nov 2026 |
| U10 | Automated feature tests for the forms (40 tests) | ✅ | 06 Nov 2026 |
| U11 | Added missing columns to the Form 2 tables | ✅ | 10 Nov 2026 |
| U12 | Mobile and relative phone numbers made optional | ✅ | 10 Nov 2026 |
| U13 | Fixed therapy date processing on the Form 2 print | ✅ | 20 Nov 2026 |
| U14 | Fixed drug regimen and chemo cycle display for patient statuses | ✅ | 20 Nov 2026 |
| U15 | Development milestone plan (this document) | ✅ | 24 Nov 2026 |

Still open from the current system: **Forgot password** is only a page with no reset flow (M4). **Docs, CI and deployment** are not started (M6).

---

## Milestone 1: Stabilize and clean up the foundation
**Target:** Week 1–2 (24 Nov – 5 Dec 2026) · 🟡 almost done

Goal: make the codebase safe to build on before adding features.

| # | Task | Status | Finished on |
|---|---|---|---|
| 1.1 | Remove `F1.zip` from the repository and add `*.zip` to `.gitignore` | ✅ | 24 Nov 2026 |
| 1.2 | Rename middleware so the names say what they do: `IsNotAuth` → `RequireLogin`, `IsAuthenticated` → `RedirectIfLoggedIn` | ✅ | 24 Nov 2026 |
| 1.3 | Only accept known report codes in `generate_report` (`AdminController::REPORT_CODES`) | ✅ | 24 Nov 2026 |
| 1.4 | Fix route typos (`demographic`, `radiotherapy`, `other-therapy`, `store-financial-support`, `cancer-diagnose-outcome`). Old page URLs redirect | ✅ | 24 Nov 2026 |
| 1.5 | Audit every POST/PUT/DELETE endpoint for validation (all already validate; unused `DemographicsRequest` removed) | ✅ | 24 Nov 2026 |
| 1.6 | Log support messages (send / respond / delete) and activity-log cleanups | ✅ | 24 Nov 2026 |
| 1.7 | Feature tests for the above (`tests/Feature/FoundationTest.php`, 53 tests passing) | ✅ | 24 Nov 2026 |
| 1.8 | Apply Laravel Pint code style to the whole codebase | ✅ | 24 Nov 2026 |
| 1.9 | Purge `F1.zip` from git history (owner only, needs force-push, see note) | ⬜ | — |

**Exit check:** `php artisan test` passes, the repo clone is under 20 MB, and every POST route has validation.

> **History purge note:** `F1.zip` is gone from the current files but still lives in old commits, so clones stay about 90 MB. To shrink the repo, the owner runs `git filter-repo --path F1.zip --invert-paths` on a fresh mirror clone, force-pushes, and everyone re-clones.

---

## Milestone 2: Data integrity and the patient record model
**Target:** Week 3–4 (8 – 19 Dec 2026) · ⬜

Goal: every case is unique, complete and linked correctly across Forms 1–4.

| # | Task | Status | Finished on |
|---|---|---|---|
| 2.1 | Unique hospital number per facility (DB index) and duplicate-patient check (name + birthdate + sex) | ⬜ | — |
| 2.2 | Foreign keys and indexes on the link columns (`code`, `hospitalID`) in the form tables | ⬜ | — |
| 2.3 | Date-of-diagnosis and incidence-date fields as the basis for reporting (reports now filter on `created_at`) | ⬜ | — |
| 2.4 | Record status: Draft → Complete → Validated (registrar review step) | ⬜ | — |
| 2.5 | Data-quality checks: required fields per site, impossible dates, age/sex vs. site conflicts | ⬜ | — |
| 2.6 | Soft deletes for patient records, so admin deletes can be recovered | ⬜ | — |
| 2.7 | Patient timeline view showing Form 1 + all follow-ups (Forms 2/3/4) in order | ⬜ | — |

**Exit check:** you cannot save the same patient twice, and the "data quality" screen lists every incomplete or invalid record.

---

## Milestone 3: Reports and analytics
**Target:** Week 5–7 (4 – 22 Jan 2027) · ⬜

Goal: every official report (RF-0A … RF-3A) is generated from live data and exported.

| # | Task | Status | Finished on |
|---|---|---|---|
| 3.1 | Move all 12 `reports.rf-*` pages from static views to `ReportController` methods with real data | ⬜ | — |
| 3.2 | Fix the date filter for ranges that cross a year (e.g. Nov 2026 → Feb 2027) | ⬜ | — |
| 3.3 | Group cancer sites by a normalized site code (ICD-O-3 topography) | ⬜ | — |
| 3.4 | PDF export (spatie/laravel-pdf) and Excel/CSV export for each report | ⬜ | — |
| 3.5 | Dashboard: cases by site, stage, sex/age group, monthly trend, follow-up compliance | ⬜ | — |
| 3.6 | One feature test per report checking totals against seeded data | ⬜ | — |

**Exit check:** an admin picks any report and date range, and the numbers match a hand count of the seeded test data.

---

## Milestone 4: Security, accounts and compliance
**Target:** Week 8–9 (25 Jan – 5 Feb 2027) · ⬜

Goal: the system is safe to hold real patient data (Data Privacy Act / sensitive personal information).

| # | Task | Status | Finished on |
|---|---|---|---|
| 4.1 | Working forgot-password / reset-password flow with mail | ⬜ | — |
| 4.2 | Password policy, login throttling, account lockout, forced password change on first login | ⬜ | — |
| 4.3 | Finer roles: Admin, Registrar/Encoder, Validator, Viewer, with permissions per action | ⬜ | — |
| 4.4 | Session timeout, HTTPS-only cookies, CSRF checks on all forms | ⬜ | — |
| 4.5 | Encrypt or restrict sensitive patient fields (names, contact numbers, address) | ⬜ | — |
| 4.6 | Log every view and export of patient data, not just edits | ⬜ | — |
| 4.7 | Activity-log retention policy and scheduled cleanup | ⬜ | — |

**Exit check:** security review checklist passes, and each role can only reach its own pages (with tests per role).

---

## Milestone 5: Usability and data-entry speed
**Target:** Week 10–11 (8 – 19 Feb 2027) · ⬜

Goal: encoders can enter a full case quickly and without errors.

| # | Task | Status | Finished on |
|---|---|---|---|
| 5.1 | Autosave drafts in the multi-step wizards | ⬜ | — |
| 5.2 | Search and filters on Records (hospital no., name, site, date range, status) with pagination | ⬜ | — |
| 5.3 | Inline validation messages and a review page before final submit | ⬜ | — |
| 5.4 | Follow-up reminders: patients due for Form 2/3/4 follow-up | ⬜ | — |
| 5.5 | Mobile/tablet layout check for the forms | ⬜ | — |
| 5.6 | Remove leftover files (`forms/demo-backup.blade.php`, unused template images) | ⬜ | — |

**Exit check:** user-acceptance test with 2–3 actual encoders. A full Form 1 takes under 10 minutes with no data loss.

---

## Milestone 6: Testing, documentation and deployment (go-live)
**Target:** Week 12–14 (22 Feb – 12 Mar 2027) · ⬜

Goal: production release.

| # | Task | Status | Finished on |
|---|---|---|---|
| 6.1 | CI with GitHub Actions: install, `pint --test`, `php artisan test` on every PR | ⬜ | — |
| 6.2 | Test coverage for all controllers (admin, reports, support, activity logs, auth) | ⬜ | — |
| 6.3 | Rewrite `README.md`: what HBCR is, setup, `.env` keys, seeding an admin, running tests | ⬜ | — |
| 6.4 | User manual for encoders and admins (each form, each report) | ⬜ | — |
| 6.5 | Production setup: server, MySQL, queue worker, scheduler, HTTPS, mail, PDF rendering | ⬜ | — |
| 6.6 | Automated daily database backups and a tested restore | ⬜ | — |
| 6.7 | Staging, UAT sign-off, production go-live | ⬜ | — |
| 6.8 | Release `v1.0.0` tag and changelog | ⬜ | — |

**Exit check:** v1.0.0 runs in production, backup restore has been tested, and users are trained.

---

## Milestone 7 (post-launch): Integration and growth
**Target:** after go-live, Q2 2027 · ⬜

| # | Task | Status | Finished on |
|---|---|---|---|
| 7.1 | Export for the national/population-based cancer registry (CanReg5 or DOH format) | ⬜ | — |
| 7.2 | Multi-facility support (facility ID on every record, data scoped per facility) | ⬜ | — |
| 7.3 | Survival analysis report (1-, 3-, 5-year) | ⬜ | — |
| 7.4 | REST API for authorized integrations (e.g. EMR lookup by hospital number) | ⬜ | — |
| 7.5 | Performance tuning for large datasets | ⬜ | — |

---

## Progress summary

| Milestone | Target | Status | Finished on |
|---|---|---|---|
| Phase 1: Initial development | 15 Sep – 24 Nov 2025 | ✅ | 24 Nov 2025 |
| Phase 2: Maintenance and updates | Dec 2025 – Nov 2026 | ✅ | 24 Nov 2026 |
| M1 Stabilize foundation | 24 Nov – 5 Dec 2026 | 🟡 8 of 9 tasks | — |
| M2 Data integrity | 8 – 19 Dec 2026 | ⬜ | — |
| M3 Reports | 4 – 22 Jan 2027 | ⬜ | — |
| M4 Security | 25 Jan – 5 Feb 2027 | ⬜ | — |
| M5 Usability | 8 – 19 Feb 2027 | ⬜ | — |
| M6 Test, docs, go-live | 22 Feb – 12 Mar 2027 | ⬜ | — |
| M7 Post-launch | Q2 2027 | ⬜ | — |

```
Sep 15 2025 ─┬─ Phase 1: initial development
Nov 24 2025 ─┤   ✅ finished
Dec 2025 ────┼─ Phase 2: small updates (Dec 2025 – Jan 2026)
Nov 2026 ────┼─ Phase 2: November 2026 maintenance update ✅
Nov 24 2026 ─┤
             ├─ M1 Stabilize ............ 2 wks  (Nov 24 – Dec 5)
Dec 08 ──────┼─ M2 Data integrity ....... 2 wks
             │   (holiday break)
Jan 04 2027 ─┼─ M3 Reports .............. 3 wks
Jan 25 ──────┼─ M4 Security ............. 2 wks
Feb 08 ──────┼─ M5 Usability ............ 2 wks
Feb 22 ──────┼─ M6 Test/Docs/Deploy ..... 3 wks
Mar 12 ──────┴─ 🚀 v1.0.0 go-live → M7 post-launch
```

## How to update this file

1. When you finish a task, change ⬜ to ✅ and replace `—` with the date.
2. When every task in a milestone is ✅ and its exit check passes, fill in that milestone's **Finished on** in the progress summary.
3. If a milestone runs late, keep the original target and note the new date next to it, so the record stays honest.

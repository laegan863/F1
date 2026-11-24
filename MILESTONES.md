# HBCR Development Milestones

**System:** Hospital-Based Cancer Registry (HBCR), Laravel 12 + MySQL
**Plan start:** 24 Nov 2026
**Status key:** ✅ done · 🟡 in progress · ⬜ not started

The plan starts from where the code is today: about 100 commits, Forms 1–4 working, a basic admin panel, and 40 feature tests. Each milestone ends with a check you can actually test. The week counts are estimates for one developer, so shift them to fit your team.

---

## Where the system is today (baseline)

| Area | State | Evidence in repo |
|---|---|---|
| Login, roles (admin/user), profile, password change | ✅ | `AuthController`, `ProfileController`, `IsAdmin` middleware |
| Form 1: Add Record wizard (Demographic → Risk Factors → Cancer Diagnosis → Treatment) with step edit | ✅ | `MainController`, `forms/*.blade.php`, `RecordWizardTest` |
| Form 2: Follow-up (patient/ECOG status, radiotherapy, other therapies, change of plan, outcome) | ✅ | `Form2Controller`, `forms/form2/*` |
| Form 3: Patient Surveillance (outcome, treatment history, financial support) | ✅ | `Form3Controller`, `forms/form3/*` |
| Form 4: Palliative (ESAS-r, pain assessment, interventions, outcome, financial support) | ✅ | `Form4Controller`, `forms/form4/*` |
| Printable versions that match the official paper forms | ✅ | `PrintConditionsTest`, `config/cbcr_options.php` |
| Admin: dashboard, records, users, activity logs, support messages | ✅ | `AdminController`, `ActivityLogController`, `SupportMessageController` |
| Report templates RF-0A … RF-3A | 🟡 | 12 views exist, but most are static `Route::view` pages and `ReportController` only covers part of them |
| Forgot password | 🟡 | The page exists, but no reset flow is wired up |
| Automated tests | 🟡 | 40 Pest tests covering the forms; none for reports, admin or security |
| Docs, CI, deployment | ⬜ | README is still the Laravel default; no CI; `F1.zip` (90 MB) was committed in the repo (removed in M1, still in history) |

---

## Milestone 1: Stabilize and clean up the foundation
**Target:** Week 1–2 (24 Nov – 5 Dec 2026) · 🟡

Goal: make the codebase safe to build on before adding features.

- [x] Remove `F1.zip` from the repository and add `*.zip` to `.gitignore`
- [ ] Purge `F1.zip` from git history (needs a force-push, so the repo owner does it, see note below)
- [x] Rename the middleware so the names say what they do: `IsNotAuth` → `RequireLogin`, `IsAuthenticated` → `RedirectIfLoggedIn`
- [x] Whitelist the report codes in `AdminController::generate_report` (`AdminController::REPORT_CODES`). Unknown codes now get a validation error
- [x] Fix route typos: `submit-demographic-profile`, `store-radiotherapy`, `store-other-therapy`, `store-financial-support` (was a dotted URL), and `form2/` + `form3/cancer-diagnose-outcome` (old `outome` URLs redirect with 301)
- [x] Audit every POST/PUT/DELETE endpoint for validation. All input-taking endpoints already validate inline with `$request->validate()`. The unused, empty `DemographicsRequest` stub was removed
- [x] Close the audit-trail gaps: support messages (send / respond / delete) and activity-log cleanup are now logged
- [x] Feature tests for all of the above (`tests/Feature/FoundationTest.php`)
- [ ] Run `pint` once over the whole codebase to set the code style (separate commit, so the style diff doesn't hide real changes)

**Exit check:** `php artisan test` passes, the repo clone is under 20 MB, and every POST route has validation.

> **History purge note:** removing `F1.zip` from the current tree keeps it out of new work, but it still lives in old commits, so clones stay about 90 MB. To shrink the repo, the owner runs `git filter-repo --path F1.zip --invert-paths` on a fresh mirror clone, force-pushes, and everyone re-clones.

---

## Milestone 2: Data integrity and the patient record model
**Target:** Week 3–4 (8 – 19 Dec 2026) · ⬜

Goal: every case is unique, complete and linked correctly across Forms 1–4.

- [ ] Enforce a unique hospital number per facility, with a DB index and a duplicate-patient check (name + birthdate + sex)
- [ ] Add foreign keys and indexes on the link columns (`code`, `hospitalID`) in the 20+ form tables
- [ ] Add date-of-diagnosis and incidence-date fields as the basis for reporting (reports currently filter on `created_at`)
- [ ] Add record status: Draft → Complete → Validated (registrar review step)
- [ ] Add data-quality checks: required fields per cancer site, impossible dates (death before diagnosis, treatment before diagnosis), and age/sex vs. site conflicts (e.g. male + cervix)
- [ ] Switch to soft deletes for patient records so admin deletes can be recovered
- [ ] Add a patient timeline view showing Form 1 + all follow-ups (Forms 2/3/4) in order

**Exit check:** you cannot save the same patient twice, and the "data quality" screen lists every incomplete or invalid record.

---

## Milestone 3: Reports and analytics
**Target:** Week 5–7 (4 – 22 Jan 2027) · ⬜

Goal: every official report (RF-0A … RF-3A) is generated from live data and exported.

- [ ] Move all 12 `reports.rf-*` routes from static `Route::view` to `ReportController` methods that query real data
- [ ] Fix the date filter: the current YEAR/MONTH `whereBetween` breaks on ranges that cross a year (e.g. Nov 2026 → Feb 2027). Use a real date range
- [ ] Group cancer sites with a normalized site code (ICD-O-3 topography) instead of string-stripping the JSON `cancer_sites` column
- [ ] Add PDF export (spatie/laravel-pdf is already installed) and Excel/CSV export for each report
- [ ] Dashboard: cases by site, by stage, by sex/age group, monthly trend, follow-up compliance
- [ ] Add tests: one feature test per report that checks the totals against seeded data

**Exit check:** an admin picks any report and date range, and the numbers match a hand count of the seeded test data.

---

## Milestone 4: Security, accounts and compliance
**Target:** Week 8–9 (25 Jan – 5 Feb 2027) · ⬜

Goal: the system is safe to hold real patient data (Data Privacy Act / sensitive personal information).

- [ ] Build a working forgot-password / reset-password flow with mail
- [ ] Add a password policy, login throttling, account lockout and forced password change on first login
- [ ] Add finer roles: Admin, Registrar/Encoder, Validator, Viewer (read-only/reports), with policies per action
- [ ] Session timeout, HTTPS-only cookies, and CSRF checks on all forms
- [ ] Encrypt sensitive columns (names, contact numbers, address) or at least restrict who can see them
- [ ] Log every view and export of patient data, not just edits
- [ ] Activity-log retention policy and scheduled cleanup (`activity-logs/cleanup` exists, so schedule it)

**Exit check:** security review checklist passes, and each role can only reach its own pages (with tests per role).

---

## Milestone 5: Usability and data-entry speed
**Target:** Week 10–11 (8 – 19 Feb 2027) · ⬜

Goal: encoders can enter a full case quickly and without errors.

- [ ] Autosave drafts in the multi-step wizards, so leaving mid-form does not lose data
- [ ] Search and filters on Records (hospital no., name, site, date range, status) with pagination
- [ ] Inline validation messages and a summary/review page before final submit
- [ ] Follow-up reminders: list of patients due for Form 2/3/4 follow-up
- [ ] Mobile/tablet layout check for the forms
- [ ] Clean up leftover files (`forms/demo-backup.blade.php`, unused template images in `public/assets/img`)

**Exit check:** user-acceptance test with 2–3 actual encoders. A full Form 1 takes under 10 minutes with no data loss.

---

## Milestone 6: Testing, documentation and deployment (go-live)
**Target:** Week 12–14 (22 Feb – 12 Mar 2027) · ⬜

Goal: production release.

- [ ] CI with GitHub Actions: `composer install`, `pint --test`, `php artisan test` on every PR
- [ ] Bring test coverage to all controllers (admin, reports, support, activity logs, auth)
- [ ] Rewrite `README.md`: what HBCR is, local setup, `.env` keys, seeding an admin, running tests
- [ ] User manual for encoders and admins, covering each form and each report
- [ ] Production setup: server, MySQL, queue worker, scheduler, HTTPS, mail, PDF rendering (Chromium for spatie/pdf)
- [ ] Automated daily database backups, plus a documented restore drill
- [ ] Staging environment, then UAT sign-off, then production go-live
- [ ] Release `v1.0.0` tag and changelog

**Exit check:** v1.0.0 runs in production, backup restore has been tested, and users are trained.

---

## Milestone 7 (post-launch): Integration and growth
**Target:** after go-live, Q2 2027 · ⬜

- [ ] Export in the format required by the national/population-based cancer registry (CanReg5 or DOH format)
- [ ] Multi-facility support (facility ID on every record, data scoped per facility)
- [ ] Survival analysis report (1-, 3-, 5-year) using follow-up vital status
- [ ] REST API for authorized integrations (e.g. hospital EMR lookup by hospital number)
- [ ] Performance tuning for large datasets (indexes, caching dashboard queries, queued report generation)

---

## Timeline at a glance

```
Nov 24 ─┬─ M1 Stabilize ............ 2 wks
Dec 08 ─┼─ M2 Data integrity ....... 2 wks
        │   (holiday break)
Jan 04 ─┼─ M3 Reports .............. 3 wks
Jan 25 ─┼─ M4 Security ............. 2 wks
Feb 08 ─┼─ M5 Usability ............ 2 wks
Feb 22 ─┼─ M6 Test/Docs/Deploy ..... 3 wks
Mar 12 ─┴─ 🚀 v1.0.0 go-live → M7 post-launch
```

## How to track progress

- Create one GitHub Milestone per section above (M1 … M7) and turn each checkbox into an issue.
- Tick boxes in this file as issues close, and update the status icon in each heading.
- Review at the end of every milestone: did the exit check pass? If not, carry the remaining items forward before starting the next one.

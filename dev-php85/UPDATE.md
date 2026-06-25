# PHP 8.5.7 Upgrade — `ctw/ctw-skeleton`

- **Branch:** `php85` (cut from `master`)
- **Runtime:** PHP 8.3.31 → **8.5.7**
- **Date:** 2026-06-25

This is a **TODO list** of the changes required for this package to run cleanly
under PHP 8.5.7. Nothing here has been fixed yet — the fixes happen in a second
step.

> This package is the **empty scaffolding template** new `ctw/*` libraries are
> generated from. `src/` and `test/` contain only `.gitkeep` placeholders — there
> is no application code to break under PHP 8.5.

Detection commands used:

```bash
composer update -W
php vendor/bin/phpunit --no-coverage --display-deprecations --display-warnings --display-notices --display-errors
composer rector      # rector --dry-run
composer phpstan
```

---

## 1. `composer update -W`

✅ **Succeeded.** No dependency was blocked by an incompatible PHP 8.5 platform
requirement (this package has no runtime deps beyond `php`; only the shared dev
tooling moved — `ctw/ctw-qa`, `phpunit`, `phpstan`, `rector`,
`symplify/easy-coding-standard`). `composer.lock` is git-ignored.

---

## 2. PHP 8.5 runtime issues (must fix)

- **None.** There is no first-party code; the suite executes no tests.

---

## 3. QA tooling issues

- [ ] **PHPStan reports `No files found to analyse`** (exit code 1) because the
  configured paths (`bin`, `src`, `test`) contain only `.gitkeep` files. This is
  **pre-existing and not a PHP 8.5 regression** — it is simply the empty
  skeleton state. No action strictly required for the upgrade; if a green
  `composer qa` is wanted on the bare template, either add a placeholder class or
  relax the PHPStan path set. Track at low priority.

---

## 4. Notes (non-blocking)

- `phpunit` reports "No tests executed!" — expected for a template with no
  tests. Not a PHP 8.5 issue.

---

## 5. Verification snapshot (current state on `php85`)

| Check | Result |
| --- | --- |
| `composer update -W` | ✅ clean |
| PHPUnit (`--no-coverage`) | no tests (empty template) |
| Rector (dry-run) | ✅ no changes proposed |
| PHPStan | ⚠️ "No files found to analyse" (empty skeleton, pre-existing — §3) |

**Nothing to fix for PHP 8.5.** Keep this template in sync with whatever
conventions the other packages adopt during the upgrade (e.g. explicit nullable
parameter types) so freshly generated packages start out PHP 8.5-clean.

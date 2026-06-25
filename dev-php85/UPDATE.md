# PHP 8.5.7 Migration — `ctw/ctw-skeleton`

- **Branch:** `php85` (cut from `master`)
- **Runtime:** PHP 8.3.31 → **8.5.7**
- **PHPUnit:** 12 → **13.2.1**
- **Status:** ✅ done

> This is the empty scaffolding template. `src/` and `test/` contain only
> `.gitkeep`, so there is no application code to break under PHP 8.5.

## Audit checklist

- [x] **(none)** — no source files; no runtime deprecations, warnings, or notices
  to address.
  - **Fix:** not applicable — only the dependency / CI metadata is updated (see
    below).

## composer.json & CI

- [x] **`require.php`** — `^8.3` → **`^8.5`**.
- [x] **`phpunit/phpunit`** — `^12.0` → **`^13.0`** (installs 13.2.1).
- [x] **`ctw/ctw-qa`** — pinned to **`dev-php85`** (inherits the shared PHPStan
  `reportUnmatchedIgnoredErrors: false` fix).
- [x] **`.github/workflows/tests.yml`** — CI matrix pinned to PHP **`8.5`** only.

## Final audit (PHP 8.5.7)

- [x] **`php -v`** — PHP **8.5.7** (cli).
- [x] **`composer update -W`** — clean; no dependency blocked by the PHP 8.5
  platform requirement.
- [x] **PHPUnit** — no tests (empty template); PHPUnit 13.2.1 reports
  `No tests executed!`, which is expected.
- [x] **PHPStan** — `No files found to analyse` (expected for the empty
  template).

```bash
php -v                                  # PHP 8.5.7
composer update -W                      # clean
php vendor/bin/phpunit --no-coverage    # No tests executed! (empty template)
composer phpstan                        # No files found to analyse (expected)
```

# php-project

Lightweight PHP assemble project created during HTML refactoring.

Structure:
- `public/` : web root
  - `assets/css/style.css` : main stylesheet
  - `assets/js/` : JavaScript helpers (placeholders)
- `components/` : PHP fragment components (header, footer, sections)
- `config.php` : small helper for asset paths

Run locally:

```bash
cd php-project/public
php -S localhost:8000
```

Workflow:
- Add `components/section-###.php` for each chunk and include from `public/index.php`.
- Move large or repeated styles into `assets/css/style.css`.
- Add JS for sliders / interactivity under `public/assets/js` and reference from `components/footer.php`.

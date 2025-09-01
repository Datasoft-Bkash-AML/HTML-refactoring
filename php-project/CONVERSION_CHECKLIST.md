# Conversion Checklist

Last updated: 2025-09-01

Purpose: track conversion progress for `tmp_chunks/chunk-*.html` into `php-project/components/*` and record analysis, chosen component name, and next steps.

Legend
- **Done**: chunk converted and included in `public/index.php` (or equivalent). File path given.
- **Converted (needs review)**: converted but may require JS/CSS wiring or cleanup.
- **Inspected**: chunk read and analyzed, not yet converted.
- **Pending**: not yet inspected or converted.

-- Conversion summary (known chunks) --

- `chunk-1.html` — Status: Inspected / Not converted
  - Analysis: This chunk contains the site wrapper start: `<div id="page" class="rey-siteWrapper">` and the global overlay element `<div class="rey-overlay rey-overlay--site">`. It appears to be the opening wrapper used across the whole layout (global DOM root and overlay used by header/footer scripts). There is no closing wrapper here (closing tag appears later in the original full page).
  - Converted to: `php-project/components/site-wrapper.php` (consolidated wrapper component).
  - Notes: The opening wrapper is in `components/site-wrapper.php` and the closing tags are handled in `components/footer.php` so the DOM stays balanced.

- `chunk-2.html` — Status: Done (converted)
  - Converted to: `php-project/components/header.php` (replaced simplified header with full header chunk markup).
  - Notes: Contains megamenu, mobile nav, logo, search/account/cart icons. Requires JS wiring for mobile menu, offcanvas, search panel, quickview/wishlist behaviors. External asset URLs retained.

- `chunk-16.html` — Status: Done (converted)
  - Converted to: `php-project/components/section-features.php`
  - Notes: Icons/feature strip converted with scoped CSS added to `public/assets/css/style.css`.

- `chunk-17.html` — Status: Inspected
  - Analysis: New Arrivals product carousel. Uses Splide wrapper markup and WooCommerce loop structure. Contains many product cards and lazy image placeholders.
  - Recommended component name: `components/carousel-new-arrivals.php`.
  - Next steps: add Splide (official assets) and initialize carousel; consider how to handle product data (static vs dynamic). Currently a Splide placeholder was added to `public/assets` and `main.js` contains a Splide init stub.

- `chunk-18.html` — Status: Inspected
  - Analysis: Category carousel (inspected earlier). Will need Splide and similar treatment.
  - Recommended component name: `components/category-carousel.php`.

- `chunk-19.html` — Status: Inspected
  - Analysis: Flash Deals carousel — contains Splide wrapper and product loop items similar to `chunk-17`.
  - Recommended component name: `components/carousel-flash-deals.php`.

- `chunk-12.html` — Status: Inspected
  - Analysis: Newsletter / Mailchimp signup block (inspected earlier in session).
  - Recommended component name: `components/newsletter-mailchimp.php`.

- `chunk-001.html` or `chunk-1` — Status: Converted
  - Converted to: `php-project/components/site-wrapper.php`


Other chunks: many `chunk-3..chunk-100.html` are currently uninspected in this checklist — mark as **Pending** until inspected.

Files created/updated during recent conversions
- `php-project/components/header.php` — replaced with full header from `tmp_chunks/chunk-2.html`.
- `php-project/components/section-features.php` — created from `chunk-16.html`.
- `php-project/components/footer.php` — updated to enqueue Splide and `main.js`.
- `php-project/public/assets/js/main.js` — updated with Splide init snippet.
- `php-project/public/assets/js/splide.min.js` — placeholder stub added.
- `php-project/public/assets/css/splide.min.css` — placeholder stub added.

Immediate actions recommended
1. `chunk-1` handled: consolidated into `components/site-wrapper.php` and closed in `components/footer.php`.
2. Replace Splide placeholders with official Splide assets (recommended) and update `main.js` initialization if you need specific options (slides per view, breakpoints, etc.).
3. Convert inspected carousels (`chunk-17`, `chunk-18`, `chunk-19`) into components and include them in `public/index.php` where appropriate.

If you want, I can continue automatically in the recommended order and:
- convert `chunk-17` into `components/carousel-new-arrivals.php` and wire up Splide with proper assets.

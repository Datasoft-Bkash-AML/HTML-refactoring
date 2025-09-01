# Conversion Tracker (1-100)

This file is a compact numeric tracker for `tmp_chunks/chunk-*.html` → `php-project/components/*` conversion status.

Legend: `Done`, `Converted (needs review)`, `Inspected`, `Pending`.

1: Done — `components/site-wrapper.php`
2: Done — `components/header.php`
3: Done — `components/section-hero-page.php`
8: Done — `components/cta-button.php`
9: Done — `components/promo-badge.php`
10: Done — `components/promo-badge.php`
11: Done — `components/newsletter-cta.php`
12: Inspected / Converted — `components/newsletter-mailchimp.php`
13: Done — `components/mailchimp-response.php`
14: Done — `components/product-label.php`
15: Done — `components/product-feature.php`
16: Done — `components/section-features.php`
17: Done — `components/carousel-new-arrivals.php` (cleaned component; review optional)
18: Done — `components/category-carousel.php` (cleaned component)
19: Done — `components/carousel-flash-deals.php` (cleaned component)
20: Done — `components/promo-split.php` (renamed to `components/promo-split.php`)
21: Done — `components/promotions-carousel.php`
22: Done — `components/promo-hero.php`
23: Done — `components/design-section.php`
24: Done — `components/column-background.php`
25: Done — `components/eyebrow-heading.php`
26: Done — `components/section-title-soundscape.php`
27: Done — `components/bg-column.php`
28: Done — `components/eyewear-made.php`
29: Done — `components/comfort-heading.php`
30: Done — `components/discover-cta.php`
31: Done — `components/journal-cta.php`
32: Done — `components/blog-grid.php`
33: Done — `components/logo-gallery.php`
34: Done — `components/footer.php`
35: Done — `components/account-panel.php`
36: Done — `components/account-tab-wishlist.php`
37: Done — `components/account-wishlist.php`
38: Done — `components/account-wishlist.php` (inner grid)
39: Done — `components/account-wishlist.php` (loader)
40: Done — `components/account-forms.php` (login form)
41: Done — `components/account-forms.php` (remember me / submit)
42: Done — `components/account-forms.php` (form notices)
43: Done — `components/account-forms.php` (links)
44: Done — `components/account-forms.php` (register form)
45: Done — `components/account-forms.php` (register helper text)
46: Done — `components/privacy-policy.php`
47: Done — `components/account-forms.php` (notice)
48: Done — `components/account-links.php`
49: Done — `components/account-forgot.php`
50: Done — `components/account-forgot.php` (reset form)
51: Done — `components/account-forgot.php` (notice)
52: Done — `components/account-links.php` (register/login)
53: Done — `components/cart-panel.php`
54: Done — `components/cart-panel.php` (content loader)
55: Done — `components/cart-panel.php` (product template placeholder)
56: Done — `components/cart-panel-tabs.php`
57: Done — `components/cart-panel-tabs.php` (recent tab)
58: Done — `components/cart-panel-tabs.php` (cart tab content)
59: Done — `components/cart-panel-tabs.php` (recent items wrapper)
60: Done — `components/cross-sells.php` (bubble)
61: Done — `components/cross-sells.php` (item template)
62: Done — `components/cross-sells.php` (item content template)
63: Done — `components/cross-sells.php` (continue shopping)
64: Done — `components/cross-sells.php` (carousel wrapper)
65: Done — `components/cart-recent.php` (item content template)
66: Done — `components/cart-recent.php` (recent items container)
67: Done — `components/cart-recent.php` (recent item content template)
68: Done — `components/demo-panel.php` (wrapper)
69: Done — `components/demo-panel.php` (panel buttons)
70: Done — `components/demo-panel.php` (panel handler)
71: Done — `components/demo-panel.php` (header/search)
72: Done — `components/demo-panel.php` (controls/close)
73: Done — `components/demo-panel.php` (content wrapper)
74: Done — `components/demo-panel.php` (pages tab)
75: Done — `components/demo-panel.php` (items template placeholder)
76: Done — `components/demo-panel-extras.php` (loader)
77: Done — `components/demo-panel-extras.php` (categories template)
78: Done — `components/quickview-panel.php` (wrapper)
79: Done — `components/quickview-panel.php` (loader)
80: Done — `components/quickview-panel.php` (variation description)
81: Done — `components/quickview-panel.php` (variation price)
82: Done — `components/quickview-panel.php` (variation availability)
83: Done — `components/wishlist.php` (wishlist notice)
84: Done — `components/wishlist.php` (wishlist list template)
85: Done — `components/wishlist.php` (item title/price placeholder)
86: Done — `components/wishlist.php` (item price placeholder)
87: Done — `components/wishlist.php` (add-to-cart placeholder)
88: Done — `components/wishlist.php` (placeholder item)
89: Done — `components/search-panel.php` (search form)
90: Done — `components/search-panel.php` (results container)
91: Done — `components/search-extras.php` (loader)
92: Done — `components/search-extras.php` (trending title)
93: Done — `components/search-extras.php` (wide overlay)
94: Done — `components/quickview-panel.php` (variation description)
95: Done — `components/quickview-panel.php` (variation price)
96: Done — `components/quickview-panel.php` (variation availability)
97: Done — `components/svg-holder.php` (SVG sprites)
98: Done — `components/search-items.php` (search items template)
99: Done — `components/search-items.php` (item content template)
100: Done — `components/search-items.php` (price placeholder)

---

Files added in this step:
- `components/account-tab-wishlist.php`
- `components/account-wishlist.php`
- `components/account-forms.php`
- `components/account-panel.php`
- `components/privacy-policy.php`
- `components/account-forgot.php`
- `components/account-links.php`
- `components/cart-panel.php`
- `components/cart-panel-tabs.php`
- `components/cross-sells.php`
 - `components/cross-sells.php`
 - `components/cart-recent.php`
 - `components/demo-panel.php`
 - `components/demo-panel-extras.php`
 - `components/quickview-panel.php`
 - `components/wishlist.php`
 - `components/search-panel.php`
 - `components/search-panel.php`
 - `components/search-extras.php`
 - `components/svg-holder.php`
 - `components/search-items.php`

Next recommendations:
- Replace `public/assets/js/splide.min.js` and `public/assets/css/splide.min.css` placeholders with official Splide assets and enable the initialization in `public/assets/js/main.js`.
- Decide whether to keep full static product slides in the components or to convert them into a PHP loop (dynamic) pulling from a data source.
- Review and wire interactive JS (mobile menu, offcanvas, quickview, wishlist) as needed.

To view locally (dev container):

php -S localhost:8000 -t php-project/public



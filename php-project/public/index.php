<?php
// Public entry: load config, then render components in logical groups.
// This keeps the file compact and makes it easier to manage component order.
require_once __DIR__ . '/../config.php';

// Core layout components (rendered in page order)
$layout = [
        'components/section-hero-page.php',
        'components/hero-slider.php',
        'components/feature-headings.php',
        'components/hero.php',
        'components/cta-button.php',
        'components/promo-badge.php',
        'components/newsletter-cta.php',
        'components/section-features.php',
        'components/carousel-new-arrivals.php',
        'components/section-title-soundscape.php',
        'components/bg-column.php',
        'components/eyewear-made.php',
        'components/comfort-heading.php',
        'components/discover-cta.php',
        'components/promo-split.php',
        'components/promotions-carousel.php',
        'components/promo-hero.php',
        'components/design-section.php',
        'components/column-background.php',
        'components/eyebrow-heading.php',
        'components/category-carousel.php',
        'components/carousel-flash-deals.php',
        'components/newsletter-mailchimp.php',
        'components/mailchimp-response.php',
        'components/product-label.php',
        'components/product-feature.php',
];

// Interactive / utility components that are included near the end of the document
// (off-screen panels, templates, JS-driven pieces)
$interactive = [
        'components/cart-panel.php',
        'components/cart-panel-tabs.php',
        'components/cart-recent.php',
        'components/cross-sells.php',
        'components/wishlist.php',
        'components/account-panel.php',
        'components/account-forms.php',
        'components/account-links.php',
        'components/account-wishlist.php',
        'components/demo-panel.php',
        'components/demo-panel-extras.php',
        'components/quickview-panel.php',
        'components/search-panel.php',
        'components/search-extras.php',
        'components/search-items.php',
        'components/svg-holder.php',
];

// Header and wrapper are required — fail fast if missing
require_once __DIR__ . '/../components/header.php';
require_once __DIR__ . '/../components/site-wrapper.php';

// Helper to include components safely (warn if missing)
$include_component = function (string $relativePath) {
        $path = __DIR__ . '/../' . $relativePath;
        if (file_exists($path)) {
                include $path;
        } else {
                trigger_error("Component not found: {$relativePath}", E_USER_WARNING);
        }
};

// Render layout components
foreach ($layout as $component) {
        $include_component($component);
}

// Render interactive components
foreach ($interactive as $component) {
        $include_component($component);
}

// Footer (required)
require_once __DIR__ . '/../components/footer.php';

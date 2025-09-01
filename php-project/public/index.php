<?php
// Minimal PHP entry that assembles components step-by-step
require_once __DIR__ . '/../config.php';
require __DIR__ . '/../components/header.php';
require __DIR__ . '/../components/site-wrapper.php';
?>

        <?php // site wrapper replaced `section-001.php` ?>
        <?php include __DIR__ . '/../components/section-hero-page.php'; ?>
        <?php include __DIR__ . '/../components/hero-slider.php'; ?>
        <?php include __DIR__ . '/../components/feature-headings.php'; ?>
        <?php include __DIR__ . '/../components/hero.php'; ?>
        <?php include __DIR__ . '/../components/cta-button.php'; ?>
        <?php include __DIR__ . '/../components/promo-badge.php'; ?>
        <?php include __DIR__ . '/../components/newsletter-cta.php'; ?>
        <?php include __DIR__ . '/../components/section-features.php'; ?>
        <?php include __DIR__ . '/../components/carousel-new-arrivals.php'; ?>
        <?php include __DIR__ . '/../components/section-title-soundscape.php'; ?>
        <?php include __DIR__ . '/../components/bg-column.php'; ?>
        <?php include __DIR__ . '/../components/eyewear-made.php'; ?>
        <?php include __DIR__ . '/../components/comfort-heading.php'; ?>
        <?php include __DIR__ . '/../components/discover-cta.php'; ?>
        <?php include __DIR__ . '/../components/promo-split.php'; ?>
        <?php include __DIR__ . '/../components/promotions-carousel.php'; ?>
        <?php include __DIR__ . '/../components/promo-hero.php'; ?>
        <?php include __DIR__ . '/../components/design-section.php'; ?>
        <?php include __DIR__ . '/../components/column-background.php'; ?>
        <?php include __DIR__ . '/../components/eyebrow-heading.php'; ?>
        <?php include __DIR__ . '/../components/category-carousel.php'; ?>
        <?php include __DIR__ . '/../components/carousel-flash-deals.php'; ?>
        <?php include __DIR__ . '/../components/newsletter-mailchimp.php'; ?>
        <?php include __DIR__ . '/../components/mailchimp-response.php'; ?>
        <?php include __DIR__ . '/../components/product-label.php'; ?>
        <?php include __DIR__ . '/../components/product-feature.php'; ?>

?>
        <!-- Interactive / utility components (off-screen panels, templates, JS-driven pieces)
             These are intentionally included near the end of the page and are usually hidden
             until JS toggles them (quickview, cart, demo panel, search, wishlist, svg sprites). -->
        <?php include __DIR__ . '/../components/cart-panel.php'; ?>
        <?php include __DIR__ . '/../components/cart-panel-tabs.php'; ?>
        <?php include __DIR__ . '/../components/cart-recent.php'; ?>
        <?php include __DIR__ . '/../components/cross-sells.php'; ?>
        <?php include __DIR__ . '/../components/wishlist.php'; ?>

        <?php include __DIR__ . '/../components/account-panel.php'; ?>
        <?php include __DIR__ . '/../components/account-forms.php'; ?>
        <?php include __DIR__ . '/../components/account-links.php'; ?>
        <?php include __DIR__ . '/../components/account-wishlist.php'; ?>

        <?php include __DIR__ . '/../components/demo-panel.php'; ?>
        <?php include __DIR__ . '/../components/demo-panel-extras.php'; ?>

        <?php include __DIR__ . '/../components/quickview-panel.php'; ?>

        <?php include __DIR__ . '/../components/search-panel.php'; ?>
        <?php include __DIR__ . '/../components/search-extras.php'; ?>
        <?php include __DIR__ . '/../components/search-items.php'; ?>

        <?php include __DIR__ . '/../components/svg-holder.php'; ?>

        <?php
        require __DIR__ . '/../components/footer.php';

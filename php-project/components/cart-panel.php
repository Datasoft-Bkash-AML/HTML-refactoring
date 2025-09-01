<?php
// chunk-53..55: mini cart side panel with bestsellers and product template
?>
<div class="rey-cartPanel-wrapper rey-sidePanel js-rey-cartPanel woocommerce" data-lazy-hidden role="region" aria-label="Cart panel">
    <div class="rey-cartExtraProducts" id="rey-cart-extra-products" data-status="open">
        <button class="__toggle" aria-expanded="true" aria-controls="rey-cart-extra-inner">
            <svg aria-hidden="true" role="img" class="rey-icon rey-icon-chevron" viewBox="0 0 40 64"><polygon fill="currentColor" points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon></svg>
        </button>
        <div class="__inner" id="rey-cart-extra-inner">
            <div class="__title">Bestsellers:</div>
            <div class="__content">
                <div class="rey-lineLoader" aria-hidden="true"></div>
            </div>
            <div class="__the-content" aria-live="polite">
                <!-- JS template expects data.items to render product cards -->
                <!-- Example template preserved from original chunk -->
                <?php /* Template placeholder: rendered by JS during runtime */ ?>
            </div>
        </div>
    </div>
</div>

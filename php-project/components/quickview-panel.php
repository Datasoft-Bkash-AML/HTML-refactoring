<?php
// chunk-78..82: quickview panel wrapper and variation placeholders
?>
<div class="rey-quickviewPanel woocommerce" id="js-rey-quickviewPanel" data-lazy-hidden role="dialog" aria-modal="true" aria-label="Quick view" hidden>
    <div class="rey-quickview-container" data-openstyle="slide">
        <div class="rey-lineLoader" aria-hidden="true"></div>
        <div class="rey-quickview-content">
            <div class="woocommerce-variation-description" aria-live="polite">{{{ data.variation.variation_description }}}</div>
            <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
            <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
        </div>
    </div>
</div>

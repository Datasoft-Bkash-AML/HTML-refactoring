<?php
// chunk-56..59: cart panel tabs and tab contents
?>
<div class="rey-cartPanel --btns-inline" role="region" aria-label="Cart panel">
    <div class="rey-cartPanel-header">
        <div class="__tabs">
            <div class="__tab --active" data-item="cart" role="tab" aria-selected="true" tabindex="0">
                <div class="rey-cartPanel-title">SHOPPING BAG <span class="__cart-count">0</span></div>
            </div>
            <div class="__tab" data-item="recent" role="tab" aria-selected="false" tabindex="-1">
                <div class="rey-cartPanel-title">RECENTLY VIEWED <span class="__recent-count __nb">0</span></div>
            </div>
        </div>
    </div>

    <div class="__tab-content --active" data-item="cart">
        <div class="widget woocommerce widget_shopping_cart">
            <div class="widget_shopping_cart_content" role="status" aria-live="polite"></div>
        </div>
    </div>

    <div class="__tab-content rey-cartRecent-itemsWrapper --loading" data-item="recent">
        <div class="rey-lineLoader" aria-hidden="true"></div>
    </div>
</div>

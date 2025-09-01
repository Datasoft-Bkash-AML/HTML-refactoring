<?php
// Component: New Arrivals carousel (cleaned, derived from chunk-17)
// Small PHP loop renders sample products for review. Replace with dynamic data as needed.
require_once __DIR__ . '/../config.php';
?>
<section class="component component--carousel-new-arrivals">
    <div class="container">
        <div class="row row--between row--vcenter">
            <div>
                <h3 class="component-title">New Arrivals</h3>
            </div>
            <div>
                <a class="button button--sm" href="#">View all</a>
            </div>
        </div>

        <?php
        // sample product dataset (replace with dynamic source later)
        $products = [
            [ 'id' => 101, 'title' => 'Minimal Leather Wallet', 'price' => '$39', 'img' => asset_path('images/sample-1.svg') ],
            [ 'id' => 102, 'title' => 'Canvas Tote Bag', 'price' => '$49', 'img' => asset_path('images/sample-2.svg') ],
            [ 'id' => 103, 'title' => 'Classic Sunglasses', 'price' => '$79', 'img' => asset_path('images/sample-3.svg') ],
            [ 'id' => 104, 'title' => 'Everyday Sneakers', 'price' => '$129', 'img' => asset_path('images/sample-4.svg') ],
            [ 'id' => 105, 'title' => 'Wool Scarf', 'price' => '$29', 'img' => asset_path('images/sample-5.svg') ],
        ];
        ?>

        <div class="splide" role="region" aria-roledescription="carousel" aria-label="New Arrivals carousel" data-splide-options='{"type":"slide","perPage":4,"perMove":1,"gap":"16px","rewind":false,"pagination":false,"arrows":true,"breakpoints":{"1024":{"perPage":3},"768":{"perPage":2},"480":{"perPage":1}}}'>
            <div class="splide__track" role="listbox">
                <ul class="splide__list" role="list">
                    <?php foreach($products as $p): ?>
                    <li class="splide__slide product">
                        <div class="product-card">
                            <div class="product-thumb"><img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>"></div>
                            <div class="product-meta">
                                <h4 class="product-title"><?php echo htmlspecialchars($p['title']); ?></h4>
                                <div class="product-price"><?php echo $p['price']; ?></div>
                                <a class="btn" href="#" role="button" aria-label="View <?php echo htmlspecialchars($p['title']); ?>">View</a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
// Component: New Arrivals carousel (from tmp_chunks/chunk-17.html)
?>
<section class="component component--carousel-new-arrivals">
    <!-- Converted from chunk-17.html: Splide product carousel markup preserved -->
    <?php // raw HTML from chunk-17 starts ?>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-e3d0b37 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e3d0b37" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e79b74" data-id="6e79b74" data-element_type="column">
            <div class="elementor-column-wrap--6e79b74 elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7d534be elementor-widget elementor-widget-heading" data-id="7d534be" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h3 class="elementor-heading-title elementor-size-default">New Arrivals</h3>                </div>
                </div>
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-125c600" data-id="125c600" data-element_type="column">
            <div class="elementor-column-wrap--125c600 elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-41f2945 elementor-button-dashed --large elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="41f2945" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                        <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">View all</span>
                    </span>
                    </a>
                </div>
                                </div>
                </div>
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5593340" data-id="5593340" data-element_type="column">
            <div class="elementor-column-wrap--5593340 elementor-widget-wrap elementor-element-populated">
                        <div class="pg-skin-proto elementor-element elementor-element-3c5a705 --carousel-navPos-outside elementor-widget elementor-widget-reycore-product-grid" data-id="3c5a705" data-element_type="widget" data-widget_type="reycore-product-grid.carousel">
                <div class="elementor-widget-container">
                    

        <div class="woocommerce rey-element reyEl-productGrid reyEl-productGrid--has-thumbs reyEl-productGrid--skin-carousel " data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_show_tablet&quot;:3,&quot;slides_to_show_mobile&quot;:2,&quot;slides_to_move&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:null,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:true,&quot;infinite_tablet&quot;:false,&quot;infinite_mobile&quot;:false,&quot;speed&quot;:500,&quot;direction&quot;:&quot;ltr&quot;,&quot;carousel_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;60&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;delayInit&quot;:&quot;&quot;,&quot;customArrows&quot;:&quot;.__arrows-3c5a705&quot;,&quot;free_drag&quot;:[],&quot;side_offset&quot;:&quot;&quot;}" data-qt="recent">

        <div class="splide reyEl-productGrid-splide carousel-6238a381cedc0" data-skin="proto"><div class="splide__track"><ul class="products --prevent-thumbnail-sliders --prevent-scattered --prevent-masonry splide__list rey-wcGap-default rey-wcGrid-default --skin-proto" data-slider-carousel-id="carousel-6238a381cedc0" data-discount-mobile-top="yes" data-params="[]" >
        <!-- product slides preserved as static HTML for now -->
        </ul></div><div class="reyEl-productGrid-carouselNav __arrows-3c5a705 --dnone-md --dnone-sm"><div class="rey-arrowSvg rey-arrowSvg--left " data-dir="<"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 12"><path d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path></svg></div><div class="rey-arrowSvg rey-arrowSvg--right " data-dir=">"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 12"><path d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path></svg></div></div></div></div>                </div>
                </div>
                    </div>
        </div>
                    </div>
        </section>
    <?php // raw HTML from chunk-17 ends ?>
</section>

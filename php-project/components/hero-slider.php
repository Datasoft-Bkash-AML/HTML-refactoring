<?php
// Component: Hero slider (from tmp_chunks/chunk-4 and chunk-5)
require_once __DIR__ . '/../config.php';

?>

<!-- Restored original widget wrapper (from archived chunk-004) to preserve selectors/data-attrs -->
<div class="elementor-element elementor-element-aec60b3 u-ov-hidden elementor-widget elementor-widget-reycore-basic-slider" data-id="aec60b3" data-element_type="widget" data-widget_type="reycore-basic-slider.default">
    <div class="elementor-widget-container">

        <div data-slider-carousel-id="slider-623d84be78fe3" data-carousel-settings="{&quot;direction&quot;:&quot;ltr&quot;,&quot;infinite&quot;:true,&quot;autoplay&quot;:true,&quot;interval&quot;:10000,&quot;pause_on_hover&quot;:true,&quot;transition&quot;:&quot;slide&quot;,&quot;speed&quot;:500,&quot;uniqueID&quot;:&quot;slider-623d84be78fe3&quot;,&quot;targetSync&quot;:&quot;\"\"&quot;,&quot;customArrows&quot;:false,&quot;pagination&quot;:true}" data-c-anim="top" class="splide rey-bSlider --source-custom slider-623d84be78fe3 rey-sliderComp-nav --pause-hover splide--slide">

            <div class="splide__track">
                <div class="splide__list __slides">
                    <?php
                    // Include slide partials (partials now output <a class="splide__slide"> elements to match source)
                    include __DIR__ . '/hero-slide-innovative.php';
                    include __DIR__ . '/hero-slide-outstanding.php';
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

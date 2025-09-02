<?php
// Component: Hero slider (from tmp_chunks/chunk-4 and chunk-5)
require_once __DIR__ . '/../config.php';

?>

<!-- Restored original widget wrapper (from archived chunk-004) to preserve selectors/data-attrs -->
<div class="elementor-element elementor-element-aec60b3 u-ov-hidden elementor-widget elementor-widget-reycore-basic-slider" data-id="aec60b3" data-element_type="widget" data-widget_type="reycore-basic-slider.default">
    <div class="elementor-widget-container">

        <?php
        // Slider settings as an array so we can encode safely for HTML attributes
        $carousel_cfg = [
            'direction' => 'ltr',
            'infinite' => true,
            'autoplay' => true,
            'interval' => 10000,
            'pause_on_hover' => true,
            'transition' => 'slide',
            'speed' => 500,
            'uniqueID' => 'slider-623d84be78fe3',
            'targetSync' => '',
            'customArrows' => false,
            'pagination' => true,
        ];
        ?>
        <div data-slider-carousel-id="slider-623d84be78fe3" data-carousel-settings='<?php echo htmlspecialchars(json_encode($carousel_cfg), ENT_QUOTES, "UTF-8"); ?>' data-c-anim="top" class="splide rey-bSlider --source-custom slider-623d84be78fe3 rey-sliderComp-nav --pause-hover splide--slide">

            <div class="splide__track">
                <div class="splide__list __slides">
                    <?php
                    // Render slides from a PHP-driven array to keep counts deterministic and allow easy editing.
                    $slides = [
                        [
                            'partial' => 'hero-slide-innovative.php',
                            'data' => [
                                'title' => 'Innovative, wireless home speaker',
                                'cta' => 'Discover',
                                'image' => 'https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg',
                                'url' => '#',
                            ],
                        ],
                        [
                            'partial' => 'hero-slide-outstanding.php',
                            'data' => [
                                'title' => "Outstanding <br>performance",
                                'cta' => 'EXPLORE',
                                'image' => 'https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-57-1024x836.jpg',
                                'url' => '#',
                            ],
                        ],
                    ];

                    foreach ($slides as $s) {
                        // expose $slide for the partial which expects it
                        $slide = $s['data'];
                        include __DIR__ . '/' . $s['partial'];
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

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
            // Added to match canonical chunk-17 (8 slides)
            [ 'id' => 106, 'title' => 'Minimal Wristwatch', 'price' => '$199', 'img' => asset_path('images/sample-6.svg') ],
            [ 'id' => 107, 'title' => 'Portable Bluetooth Speaker', 'price' => '$89', 'img' => asset_path('images/sample-7.svg') ],
            [ 'id' => 108, 'title' => 'Compact Tripod', 'price' => '$24', 'img' => asset_path('images/sample-8.svg') ],
        ];
        ?>

        <?php
        $splide_opts = [
            'type' => 'slide',
            'perPage' => 4,
            'perMove' => 1,
            'gap' => '16px',
            'rewind' => false,
            'pagination' => false,
            'arrows' => true,
            'breakpoints' => [
                1024 => ['perPage' => 3],
                768  => ['perPage' => 2],
                480  => ['perPage' => 1],
            ],
        ];
        ?>

        <div class="splide" role="region" aria-roledescription="carousel" aria-label="New Arrivals carousel" data-splide-options='<?php echo htmlspecialchars(json_encode($splide_opts), ENT_QUOTES, "UTF-8"); ?>'>
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

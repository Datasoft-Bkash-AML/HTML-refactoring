<?php
// Component: Flash Deals carousel (cleaned from tmp_chunks/chunk-19.html)
// Renders a small sample list of flash-deal products using Splide.

if (! function_exists('asset_path')) {
    function asset_path($p) {
        return '/assets/' . ltrim($p, '/');
    }
}

$products = [
    [
        'title' => 'Canvas Weekender Bag',
        'price' => '$49',
        'price_old' => '$79',
    'image' => asset_path('images/sample-1.svg'),
        'badge' => '-38%'
    ],
    [
        'title' => 'Sport Sneakers',
        'price' => '$59',
        'price_old' => '$99',
    'image' => asset_path('images/sample-2.svg'),
        'badge' => '-40%'
    ],
    [
        'title' => 'Classic Leather Belt',
        'price' => '$19',
        'price_old' => '$29',
    'image' => asset_path('images/sample-3.svg'),
        'badge' => '-33%'
    ],
    [
        'title' => 'Wireless Earbuds',
        'price' => '$39',
        'price_old' => '$69',
    'image' => asset_path('images/sample-4.svg'),
        'badge' => '-43%'
    ],
    [
        'title' => 'Travel Mug',
        'price' => '$12',
        'price_old' => '$18',
    'image' => asset_path('images/sample-5.svg'),
        'badge' => '-33%'
    ],
];

?>

<section class="component component--carousel-flash-deals container">
    <div class="row">
        <div class="col col-8">
            <h3>Flash Deals</h3>
        </div>
        <div class="col col-4 text-right">
            <a class="btn btn-sm" href="#">View all</a>
        </div>
    </div>

    <div class="splide" data-splide-options='{"type":"slide","perPage":4,"gap":"16px","pagination":false,"arrows":true,"breakpoints":{"1024":{"perPage":3},"768":{"perPage":2},"480":{"perPage":1}}}'>
        <div class="splide__track">
            <ul class="splide__list">
                    <?php foreach($products as $p): ?>
                        <li class="splide__slide" role="option" aria-label="<?php echo htmlspecialchars($p['title']); ?>">
                            <article class="product--flash">
                                <div class="product-image" style="background-image:url('<?php echo htmlspecialchars($p['image'], ENT_QUOTES); ?>'); height:160px; background-size:cover; background-position:center;"></div>
                                <div class="product-body">
                                    <h4 class="product-title"><?php echo htmlspecialchars($p['title']); ?></h4>
                                    <div class="product-prices"><strong><?php echo htmlspecialchars($p['price']); ?></strong> <del><?php echo htmlspecialchars($p['price_old']); ?></del></div>
                                    <div class="product-badge"><?php echo htmlspecialchars($p['badge']); ?></div>
                                    <a class="btn" href="#" role="button" aria-label="Open deal for <?php echo htmlspecialchars($p['title']); ?>">Grab deal</a>
                                </div>
                            </article>
                        </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</section>

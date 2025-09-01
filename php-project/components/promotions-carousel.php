<?php
// Promotions product carousel (cleaned sample)
$products = [
  ['title' => 'Powerful multiroom speaker','price'=>'$199','image'=>'sample-1.svg'],
  ['title' => 'Mirrorless camera lens','price'=>'$349','image'=>'sample-2.svg'],
  ['title' => 'Tiny action camera','price'=>'$129','image'=>'sample-3.svg'],
  ['title' => 'Advanced Health Smartwatch','price'=>'$249','image'=>'sample-4.svg'],
  ['title' => 'Wireless Earbuds Pro','price'=>'$159','image'=>'sample-5.svg'],
];
?>
<section class="promo-carousel" aria-labelledby="promotions-heading" role="region">
  <header class="section-header">
    <h3 id="promotions-heading">Promotions</h3>
    <a class="btn btn--ghost" href="#" role="link" aria-label="View all promotions">View all</a>
  </header>

  <div class="splide" role="region" aria-roledescription="carousel" aria-label="Promotions carousel" data-splide-options='{"perPage":4,"gap":"1rem","breakpoints":{"1024":{"perPage":3},"640":{"perPage":1}}}'>
    <div class="splide__track" role="listbox">
      <ul class="splide__list" role="list">
        <?php foreach($products as $p): ?>
          <li class="splide__slide product-card" role="option" aria-label="<?php echo htmlspecialchars($p['title']); ?>">
            <img src="<?php echo asset_path('images/'.basename($p['image'])); ?>" alt="<?php echo htmlspecialchars($p['title']); ?>">
            <h4><?php echo htmlspecialchars($p['title']); ?></h4>
            <div class="price"><?php echo $p['price']; ?></div>
            <a class="btn" href="#" role="button" aria-label="Quick view <?php echo htmlspecialchars($p['title']); ?>">Quick view</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php
// Converted from tmp_chunks/chunk-33.html
require_once __DIR__ . '/../config.php';

$logos = [
  asset_path('images/sample-1.svg'),
  asset_path('images/sample-2.svg'),
  asset_path('images/sample-3.svg'),
  asset_path('images/sample-4.svg'),
  asset_path('images/sample-5.svg'),
];
?>
<section class="component component--logo-gallery">
  <div class="container">
    <div id="gallery-1" class="gallery gallery-columns-5">
      <?php foreach($logos as $l): ?>
        <figure class="gallery-item">
          <div class="gallery-icon landscape">
            <img src="<?php echo $l; ?>" alt="Partner logo">
          </div>
        </figure>
      <?php endforeach; ?>
    </div>
    <div class="gallery-cta">
      <a class="button button--sm" href="#">Discover all</a>
    </div>
  </div>
</section>

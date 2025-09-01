<?php
// Converted from tmp_chunks/chunk-32.html
require_once __DIR__ . '/../config.php';

// Sample posts array for local preview. Replace with dynamic posts later.
$posts = [
  ['title'=>'The Vivo X Fold has a fingerprint reader on both screens','href'=>'#','img'=>asset_path('images/sample-21.svg'),'category'=>'Sound Stories'],
  ['title'=>'Samsung Galaxy Watch 5: what we want to see','href'=>'#','img'=>asset_path('images/sample-22.svg'),'category'=>'Sound Stories'],
  ['title'=>'The best smartglasses and AR specs 2022','href'=>'#','img'=>asset_path('images/sample-21.svg'),'category'=>'Sound Stories'],
];
?>
<section class="component component--blog-grid">
  <div class="container">
    <div class="row">
      <?php foreach($posts as $p): ?>
      <article class="post-card">
        <a class="post-thumb" href="<?php echo $p['href']; ?>">
          <img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>">
        </a>
        <div class="post-body">
          <h3 class="post-title"><a href="<?php echo $p['href']; ?>"><?php echo htmlspecialchars($p['title']); ?></a></h3>
          <div class="post-meta"><span class="post-category"><?php echo htmlspecialchars($p['category']); ?></span></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

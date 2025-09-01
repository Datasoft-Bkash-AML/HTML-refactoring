<?php
// Component: Hero slider (from tmp_chunks/chunk-4 and chunk-5)
require_once __DIR__ . '/../config.php';

$slides = [
    [
        'title' => 'Innovative, wireless home speaker',
        'cta' => 'Discover',
        'image' => 'https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg'
    ],
    [
        'title' => "Outstanding <br>performance",
        'cta' => 'EXPLORE',
        'image' => 'https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-57-1024x836.jpg'
    ]
];
?>

<div class="hero-slider splide" role="region" aria-roledescription="carousel" aria-label="Hero image carousel" data-splide-options='{"type":"loop","autoplay":true,"interval":8000,"pagination":true,"arrows":true}'>
    <div class="splide__track" role="listbox">
        <ul class="splide__list" role="list">
            <?php foreach ($slides as $s): ?>
                <li class="splide__slide" role="option" aria-label="<?php echo strip_tags($s['title']); ?>">
                    <a href="#" class="slide-link" role="link" aria-label="<?php echo strip_tags($s['title']); ?> — <?php echo htmlspecialchars($s['cta']); ?>">
                        <img src="<?php echo $s['image']; ?>" alt="<?php echo strip_tags($s['title']); ?>" style="width:100%;height:auto;display:block;" />
                        <div class="__caption">
                            <h2 class="__title"><?php echo $s['title']; ?></h2>
                            <button class="__button btn btn-dash-line" aria-label="<?php echo htmlspecialchars($s['cta']); ?>"><?php echo $s['cta']; ?></button>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

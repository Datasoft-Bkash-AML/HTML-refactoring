<?php
// Hero slide partial (innovative)
// Usage: set $slide = ['title'=>'...','cta'=>'...','image'=>'...'] before including this file to override defaults.

$defaults = [
    'title' => 'Innovative, wireless home speaker',
    'cta' => 'Discover',
    'image' => 'https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg',
    'url' => '#',
];

$slide = isset($slide) && is_array($slide) ? array_merge($defaults, $slide) : $defaults;

// Escaping helpers
$esc_attr = function ($s) { return htmlspecialchars(strip_tags((string)$s), ENT_QUOTES, 'UTF-8'); };
$esc_html = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); };
?>
<a class="splide__slide __slide hero-slide hero-slide--innovative" href="<?php echo $esc_attr($slide['url']); ?>" role="link" aria-label="<?php echo $esc_attr($slide['title'] . ' — ' . $slide['cta']); ?>">
    <img fetchpriority="high" decoding="async" width="1024" height="836" src="<?php echo $esc_attr($slide['image']); ?>" alt="<?php echo $esc_attr($slide['title']); ?>" class="__media" />
    <div class="__caption">
        <h2 class="__captionEl __title"><?php echo $slide['title']; ?></h2>
        <div class="__captionEl __button btn btn-dash-line"><?php echo $esc_html($slide['cta']); ?></div>
    </div>
</a>

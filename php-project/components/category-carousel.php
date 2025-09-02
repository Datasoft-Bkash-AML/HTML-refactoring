<?php
// Component: Category carousel (cleaned, derived from chunk-18)
require_once __DIR__ . '/../config.php';
?>
<section class="component component--category-carousel">
    <div class="container">
        <div class="row row--between row--vcenter">
            <h3 class="component-title">Shop by Category</h3>
            <a class="button button--sm" href="#">View all categories</a>
        </div>

        <?php
        $categories = [
            ['slug'=>'bags','title'=>'Bags','img'=>asset_path('images/sample-1.svg')],
            ['slug'=>'accessories','title'=>'Accessories','img'=>asset_path('images/sample-2.svg')],
            ['slug'=>'sunglasses','title'=>'Sunglasses','img'=>asset_path('images/sample-3.svg')],
            ['slug'=>'shoes','title'=>'Shoes','img'=>asset_path('images/sample-4.svg')],
            ['slug'=>'scarves','title'=>'Scarves','img'=>asset_path('images/sample-5.svg')],
        ];
        ?>

    <?php $splide_opts = ['type'=>'slide','perPage'=>4,'perMove'=>1,'gap'=>'20px','pagination'=>false,'arrows'=>true,'breakpoints'=>[1024=>['perPage'=>3],768=>['perPage'=>2],480=>['perPage'=>1]]]; ?>
    <div class="splide" role="region" aria-roledescription="carousel" aria-label="Category carousel" data-splide-options='<?php echo htmlspecialchars(json_encode($splide_opts), ENT_QUOTES, "UTF-8"); ?>'>
            <div class="splide__track" role="listbox">
                <ul class="splide__list" role="list">
                    <?php foreach($categories as $c): ?>
                        <li class="splide__slide category" role="option" aria-label="<?php echo htmlspecialchars($c['title']); ?>">
                            <a href="/category/<?php echo $c['slug']; ?>" role="link" aria-label="Open category <?php echo htmlspecialchars($c['title']); ?>">
                                <div class="category-thumb"><img src="<?php echo $c['img']; ?>" alt="<?php echo htmlspecialchars($c['title']); ?>"></div>
                                <div class="category-title"><?php echo htmlspecialchars($c['title']); ?></div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

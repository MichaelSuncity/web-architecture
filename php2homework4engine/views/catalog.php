<div id = "main">
    <div class="post_title"><h2>Каталог товаров</h2></div>
        <div class="gallery">
        <?php foreach ($catalog as $key => $item):?>
            <div class="product">
                <a rel="gallery" class = "photo" href="/?c=product&a=card&id=<?=$item['id']?>"><img src="/img/gallery_img/small/<?=$item['id']?>.jpg" /></a><br>
                <span>Название: <?=$item['name']?></span><br>
                <span>Цена: <?=$item['price']?> $</span>
            </div>
        <?php endforeach; ?>
       </div>
</div>
<div class="container">
    <h2 style="text-align: center">Результаты поиска по запросу "<?=$search?>"</h2>
    <div class="row justify-content-center">

        <? if (!$goods) { ?>
            <h4>Ничего не найдено :(</h4>
        <? } else {
        foreach ($goods as $good) { ?>
            <div class="col-4">
                <div class="product">
                    <div class="product-img">
                        <img src="/img/<?=$good['img']?>" alt="<?=$good['name']?>">
                    </div>
                    <div class="product-name"><?=$good['name']?></div>
                    <div class="product-descr">Состав: <?=$good['composition']?></div>
                    <div class="product-price"><?=$good['price']?></div>
                    <div class="product-buttons">
                        <button type="button" class="product-button__add btn btn-success">Заказать</button>
                        <button type="button" class="product-button__more btn btn-primary">Подробнее</button>
                    </div>
                </div>
            </div>
        <? }} ?>

    </div>
</div>
<? $this->title = $good['name']; ?>

<div class="row justify-content-md-center">

    <div class="col-md-8 col-12 justify-self-center">
        <h2><div class="product-title"><?=$good['name']?></div></h2>
        <div class="product">
            <div class="product-img">
                <img src="/img/<?=$good['img']?>" alt="<?=$good['name']?>">
            </div>
            <div class="product-name"><?=$good['name']?></div>
            <div class="product-descr">Состав: <?=$good['composition']?></div>
            <div class="product-descr">Описание: <?=$good['descr']?></div>
            <div class="product-price">Цена: <?=$good['price']?> рублей</div>
            <div class="product-buttons">
                <a href="<?=$_SERVER['HTTP_REFERER']?>" type="button" class="product-button__back btn btn-primary">Назад</a>
                <a href="" data-name="<?=$good['link_name']?>" type="button" class="product-button__add btn btn-success">Заказать</a>
            </div>
        </div>
    </div>
</div>

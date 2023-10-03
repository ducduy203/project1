<?php include_once "../resources/views/Front-end/partials/header.php" ?>
<section class="banner set-bg" data-setbg="assets/img/banner/banner1.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text" >
                            <h1>Quần áo</h1>
                            <a href="./shop?id=1">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <h1>Giày dép</h1>
                            <a href="./shop?id=4">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <h1>Mũ</h1>
                            <a href="./shop?id=5">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <h1>Phụ kiện</h1>
                            <a href="./shop?id=6">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="assets/img/product-6.jpg">
                    <div class="categories__text">
                        <h4>Quần áo</h4>
                        <a href="./shop?id=1">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="assets/img/category-giay.jpg">
                            <div class="categories__text">
                                <h4>GIÀY DÉP</h4>
                                <a href="./shop?id=2">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="assets/img/category-mu.jpg">
                            <div class="categories__text">
                                <h4>MŨ</h4>
                                <a href="./shop?id=5">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="assets/img/category-dongho2.jpg">
                            <div class="categories__text">
                                <h4>PHỤ KIỆN</h4>
                                <a href="./shop?id=6">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản phẩm mới</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php foreach ($productsNew as $product): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="assets/img/<?= $product->image ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="./product-details?id=<?= $product->id ?>"><?= $product->product_name ?></a></h6>
                        <div class="product__price">
                            <?=  number_format($product->sale , 0, '', ',') ?>
                            <span><?=number_format( $product->price, 0, '', ',')?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản phẩm nổi bật</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php foreach ($productsTrend as $product): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/<?= $product->image ?>">
                            <ul class="product__hover">
                                <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="./product-details?id=<?= $product->id ?>"><?= $product->product_name ?></a></h6>
                            <div class="product__price">
                                <?=  number_format($product->sale , 0, '', ',') ?>
                                <span><?=number_format( $product->price, 0, '', ',')?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            <div class="col-lg-12 text-center">
                <div class="pagination__option">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once "../resources/views/Front-end/partials/footer.php" ?>
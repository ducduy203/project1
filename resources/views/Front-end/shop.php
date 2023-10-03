<?php include_once "../resources/views/Front-end/partials/header.php" ?>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul>
                                                <?php foreach ($categories as $category): ?>
                                                <li>
                                                    <a href="./shop?id=<?= $category->id ?>">
                                                        <?= $category->name ?>
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <?php if(empty($productShop)): ?>
                        <h4 style="text-align:center">Không tồn tại sản phẩm</h4>
                    <?php endif; ?>
                    <div class="row">
                    <?php foreach ($productShop as $product): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="assets/img/<?= $product->image ?>">
                                    <ul class="product__hover">
                                        <li><a href="assets/img/<?= $product->image ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="./product-details?id=<?= $product->id ?>"><?= $product->product_name ?></a></h6>
                                    <div class="product__price">
                                        <?=  number_format($product->sale , 0, '', ',') ?>
                                        <span><?=number_format( $product->price, 0, '', ',') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="col-lg-12 text-center" style="<?= empty($productShop) ? 'display:none' : '' ?>">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once "../resources/views/Front-end/partials/footer.php" ?>
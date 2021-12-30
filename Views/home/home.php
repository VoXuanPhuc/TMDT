<link rel="stylesheet" href="public/assets/css/skins/skin-demo-4.css">
<link rel="stylesheet" href="public/assets/css/demos/demo-4.css">
<main class="main">
    <?php require_once("slider.php"); ?>
    <div class="container">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                <?php

                foreach ($data_categories as $item) { ?>
                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="type-product-<?= $item['MaDM'] ?>" class="cat-block">
                            <figure>
                                <span>
                                    <img src="public/assets/images/demos/demo-4/cats/<?= $item['HinhAnh']?>" alt="Category image">
                                </span>
                            </figure>

                            <h3 class="cat-block-title"><?= $item['TenDM'] ?></h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                <?php
                } ?>
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->
    <div class="mb-5"></div><!-- End .mb-5 -->

    <!-- Recommendation For You -->
    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Recommendation For You</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="recommendation" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">
                <?php foreach ($data_recommendationforyou as $item) : ?>
                    <div class="col-5 col-md-3 col-lg-2">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Recommendation</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$ <?= number_format($item['DonGia']) ?></span>
                                    <!-- <span class="old-price">Was $<?= random_int(300, 400) ?></span> -->
                                </div><!-- End .product-price -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                <?php endforeach; ?>
            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->
    <!-- END Recommendation For You -->

    <div class="bg-light pt-5 pb-6">
        <div class="container trending-products">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Trending Products</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">Top Rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-xl-5col d-none d-xl-block">
                    <div class="banner">
                        <a href="#">
                            <img src="public/assets/images/demos/demo-4/banners/banner-4.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-xl-5col -->

                <div class="col-xl-4-5col">
                    <div class="tab-content tab-content-carousel just-action-icons-sm">
                        <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                <?php foreach ($top_rated as $item) : ?>
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-top">Top</span>
                                            <a href="<?= $item['MaSP'] ?>.html">
                                                <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $<?= number_format($item['DonGia']) ?>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                <?php endforeach; ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                <?php if ($best_selling != NULL) {
                                    foreach ($best_selling as $item) : ?>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Best</span>
                                                <a href="<?= $item['MaSP'] ?>.html">
                                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $<?= number_format($item['DonGia']) ?>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    <?php endforeach;
                                } else { ?>
                                    <h6>There are currently no bestsellers in store.
                                        Please buy multiple orders will have</h6>
                                <?php } ?>

                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                <?php foreach ($on_sale as $item) : ?>
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-top">Sale</span>
                                            <a href="<?= $item['MaSP'] ?>.html">
                                                <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $<?= number_format($item['DonGia']) ?>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                <?php endforeach; ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-xl-4-5col -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light pt-5 pb-6 -->
    <div class="mb-4"></div><!-- End .mb-4 -->
    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">New Arrivals</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-acc-link" data-toggle="tab" href="#new-acc-tab" role="tab" aria-controls="new-acc-tab" aria-selected="false">Accessories</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_limit as $items) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $items['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($items['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                            <div class="product-body">
                                <h3 class="product-title"></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_tvs as $item) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">TV & Home Theater</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($item['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel" aria-labelledby="new-computers-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_cumputers as $item) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">TV & Home Theater</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($item['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel" aria-labelledby="new-phones-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_phones as $item) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">TV & Home Theater</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($item['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel" aria-labelledby="new-watches-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_smartwatches as $item) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">TV & Home Theater</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($item['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_accessories as $item) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $item['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="Views/quickView.php?id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">TV & Home Theater</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($item['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->
    <div class="mb-4"></div><!-- End .mb-5 -->
    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                            <p>Orders $50 or more</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                            <p>Within 30 days</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>when you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->
</main><!-- End .main -->

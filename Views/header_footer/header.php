<header class="header header-intro-clearance header-4">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Eur</a></li>
                                            <li><a href="#">Usd</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">English</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>
                            <li>
                                <a href="accordions">Accordions</a>
                            </li>
                            <li><a href="comingsoon">Coming Soon</a></li>

                            <li>
                                <div class="header-dropdown">
                                    <a href="#">Contact</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="about">About</a></li>
                                            <li><a href="contact">Contact</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>
                            <li>
                                <?php if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) { ?>
                                    <a href="personal"><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a>
                            <li><a href="./?act=taikhoan&xuli=dangxuat">Sign Out</a></li>

                        <?php } elseif (isset($_SESSION['isLogin'])) { ?>
                            <a href="personal"><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a>
                        <?php } else { ?>
                            <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                        <?php   } ?>
                    </li>
                </ul>
                </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->

        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="." class="logo">
                    <img src="public/assets/images/meta.png" alt="Molla Logo" width="125" height="30">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="./?act=shop" method="post">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="keyword" id="q" placeholder="Search product ..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <?php  ?>
                <?php if (((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true)) || ((isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true))) { ?>
                    <div class="dropdown compare-dropdown">
                        <a href="Admin" class="dropdown-toggle">
                            <div class="icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <p>MANAGEMENT PAGE</p>
                        </a>
                    </div><!-- End .compare-dropdown -->
                <?php } else { ?>
                    <div class="dropdown compare-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                            <i class="icon-user"></i>
                            <?php if (isset($_SESSION['isLogin'])) { ?>
                                <p><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></p>
                            <?php } else { ?>
                                <p>Login</p>
                            <?php } ?>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="compare-products">
                                <li class="compare-product">

                                    <?php if (isset($_SESSION['isLogin'])) {
                                    } else { ?>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="login">Login</a></h4>
                                    <?php } ?>
                                </li>
                                <li class="compare-product">
                                    <a href="./personal" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="personal">My account</a></h4>
                                </li>
                            </ul>

                            <div class="compare-actions">
                                <a href="./?act=taikhoan&xuli=dangxuat" class="btn btn-outline-primary-2"><span>Logout</span><i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .compare-dropdown -->
                    <div class="dropdown cart-dropdown">
                        <?php
                        $soluong = 0;
                        $thanhtien = 0;
                        if (isset($_SESSION['products'])) {
                            foreach ($_SESSION['products'] as $value) {
                                $soluong += 1;
                                $thanhtien += $value['ThanhTien'];
                            }
                        }
                        ?>
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <div class="icon">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"><?= $soluong ?></span>
                            </div>
                            <p>Cart</p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-cart-products">
                                <?php if (isset($_SESSION['products'])) {
                                    foreach ($_SESSION['products'] as $value) { ?>
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="<?= $value['MaSP'] ?>.html"><?= $value['TenSP'] ?></a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty"><?= $value['SoLuong'] ?></span>
                                                    x $<?= number_format($value['ThanhTien']) ?>
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="public/assets/images/products/<?= $value['HinhAnh1'] ?>" alt="product">
                                                </a>
                                            </figure>
                                            <a href="./?act=cart&xuli=deleteAll&id=<?= $value['MaSP'] ?>" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                <?php }
                                } ?>
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$ <?= number_format($thanhtien) ?></span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart" class="btn btn-primary">View Cart</a>
                                <a href="checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                <?php } ?>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container" class="active">
                            <a href="store">Store</a>
                        </li>
                        <li class="megamenu-container" class="active">
                            <a href="categoris-SmartPhones">Smart Phones</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-Laptop">Laptop</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-Tablet">Tablet</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-SmartWathes">Smart Wathes</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-DigitalCameras">Digital Cameras</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-Televisions"> Televisions</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="categoris-Audio">Audio</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-center -->

            <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <a href="video">
                    <p>Watch<span class="highlight">&nbsp; Video</span></p>
                </a>
                <a href="cart">
                    <p><span class="highlight">&nbsp; Cart</span></p>
                </a>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
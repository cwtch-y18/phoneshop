
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head runat="server">
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Home | Cyber</title>
    <!-- Reset CSS -->
    <link rel="stylesheet" href="/css/reset.css" />
    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/home-page.css" />
    <!-- Responsive -->
    <link
        rel="stylesheet"
        href="/css/ResponsiveHomePage.css" />
</head>
<body>
    <div id="toast"></div>
    <input type="hidden" id="statusServer" runat="server" />
    <div class="hello-guest" id="helloGuest" runat="server"></div>
    <!-- Header PC-->
    <header class="header">
        <div class="container">
            <div class="header-body">
                <div class="logo">
                    <a href="/admin/login">
                        <img src="img/img/logo.svg  " alt="" />
                    </a>
                </div>
                <form
                    id="formSearch"
                    action="products-page.aspx"
                    method="get"
                    class="form-search">
                    <img
                        src="/icon/search.svg"
                        alt="Search"
                        class="form-search__icon" />
                    <input
                        type="text"
                        name="search"
                        id=""
                        class="form-search__input"
                        placeholder="Search" />
                </form>
                <nav class="navbar" id="pcNav">
                    <ul class="navbar__list">
                        <li>
                            <a
                                href="./index.aspx"
                                class="navbar__item navbar__item-action">Home</a>
                        </li>
                        <li>
                            <a
                                href="./product-manager.aspx"
                                class="navbar__item">About</a>
                        </li>
                        <li>
                            <a href="#!" class="navbar__item">Contact Us</a>
                        </li>
                        <li>
                            <a
                                href="#!"
                                class="navbar__item"
                                id="logout"
                                runat="server">Blog</a>
                        </li>
                        <!-- Show on mobile tablet -->
                        <li class="show-on-mobile-tablet">
                            <a
                                href="#!"
                                class="navbar__item separate"
                                id="A1"
                                runat="server">
                                <label>Favorite products</label>
                                <!-- <img
                                            src="/icon/tym.svg"
                                            alt="Tym"
                                        /> -->
                            </a>
                        </li>
                        <li class="show-on-mobile-tablet">
                            <a
                                href="./shopping-cart.aspx"
                                class="navbar__item separate"
                                id="A2"
                                runat="server">
                                <label>Shopping cart</label>
                                <!-- <img
                                            src="/icon/cart-item.svg"
                                            alt="Cart item"
                                        /> -->
                            </a>
                        </li>
                        <li class="show-on-mobile-tablet">
                            <a
                                href="./login.aspx"
                                class="navbar__item separate"
                                id="A3"
                                runat="server">
                                <label>Login</label>
                                <!-- <img
                                            src="/icon/user.svg"
                                            alt="User"
                                        /> -->
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header-action">
                    <a href="#!" class="header-action__link">
                        <img src="/icon/tym.svg" alt="Tym" />
                    </a>
                    <a
                        href="./shopping-cart.aspx"
                        class="header-action__link">
                        <img
                            src="/icon/cart-item.svg"
                            alt="Cart item" />
                        <span class="counter-product" runat="server" id="counterProduct">NaN</span>
                    </a>
                    <a href="/admin/login" class="header-action__link">
                        <img src="/icon/user.svg" alt="User" />
                    </a>
                </div>

                <!-- Toggle menu on mobile -->
                <div
                    class="toggle-menu show-on-mobile-tablet"
                    id="toggleMenu">
                    <img src="/icon/menu-mobile.svg" alt="" />
                </div>
            </div>
        </div>
    </header>
    <!-- Header Mobile -->
    <header class="mobile-header">
        <!-- Overlay -->
        <div class="menu-overlay" id="menuOverlay"></div>
        <div class="menu-drawer" id="menuDrawer">
            <a href="">
                <img src="img/img/logo.svg" alt="Cyber" />
            </a>

            <!-- Form search -->

            <form
                id="mobileFormSearch"
                action="products-page.aspx"
                method="get"
                class="form-search">
            </form>

            <!-- Navigation -->
            <nav id="mobileNav"></nav>
        </div>
    </header>
    <main>
        <!-- Introduce - Giới thiệu -->
        <!-- First -->
        <section class="introduce-first">
            <div class="container">
                <div class="introduce-first__body">
                    <div class="introduce-first__content">
                        <p class="introduce-first__label">
                            Pro.Beyond.
                        </p>
                        <h1 class="introduce-first__title" id="productNameIntroduct" runat="server">IPhone 14 <strong>Pro</strong>
                        </h1>
                        <p class="introduce-first__desc">
                            Created to change everything for the better.
                                    For everyone
                        </p>
                        <a
                            href="/product-detail.aspx"
                            class="introduce-first__btn btn-bg-transparent" id="linkToDetailProductIntroduct" runat="server">Shop Now
                        </a>
                    </div>
                    <img
                        src="img/img/iphone14pro.png"
                        alt="Iphone 14 Pro"
                        class="introduce-first__img" />
                </div>
            </div>
        </section>
        <!-- Category - Danh mục-->
        <section class="category">
            <div class="container">
                <div class="category__row">
                    <h2 class="category__title">Browse By Category</h2>
                    <div class="category-control">
                        <img
                            src="/icon/arrow-left.svg"
                            alt="Arrow left"
                            class="category-control__icon"
                            id="category-control__icon-left" />
                        <img
                            src="/icon/arrow-right.svg"
                            alt="Arrow right"
                            class="category-control__icon"
                            id="category-control__icon-right" />
                    </div>
                </div>
                <div class="category-list">
                    <div class="category-item">
                        <img
                            src="/icon/phones.svg"
                            alt="Phones"
                            class="category-item__icon" />
                        <p class="category-item__label">Phones</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/smart-watches.svg"
                            alt="Smart Watches"
                            class="category-item__icon" />
                        <p class="category-item__label">
                            Smart Watches
                        </p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/cameras.svg"
                            alt="Cameras"
                            class="category-item__icon" />
                        <p class="category-item__label">Cameras</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/headphones.svg"
                            alt="Headphones"
                            class="category-item__icon" />
                        <p class="category-item__label">Headphones</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/computers.svg"
                            alt="Computers"
                            class="category-item__icon" />
                        <p class="category-item__label">Computers</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/gaming.svg"
                            alt="Gaming"
                            class="category-item__icon" />
                        <p class="category-item__label">Gaming</p>
                    </div>
                    <!--  -->
                    <div class="category-item">
                        <img
                            src="/icon/phones.svg"
                            alt="Phones"
                            class="category-item__icon" />
                        <p class="category-item__label">Phones</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/smart-watches.svg"
                            alt="Smart Watches"
                            class="category-item__icon" />
                        <p class="category-item__label">
                            Smart Watches
                        </p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/cameras.svg"
                            alt="Cameras"
                            class="category-item__icon" />
                        <p class="category-item__label">Cameras</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/headphones.svg"
                            alt="Headphones"
                            class="category-item__icon" />
                        <p class="category-item__label">Headphones</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/computers.svg"
                            alt="Computers"
                            class="category-item__icon" />
                        <p class="category-item__label">Computers</p>
                    </div>
                    <div class="category-item">
                        <img
                            src="/icon/gaming.svg"
                            alt="Gaming"
                            class="category-item__icon" />
                        <p class="category-item__label">Gaming</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product - Sản phẩm -->
        <section class="product">
            <div class="container">
                <div class="product-top">
                    <p
                        class="product-top__label product-top__label-action">
                        New Arrival
                    </p>
                    <p class="product-top__label">Bestseller</p>
                    <p class="product-top__label">Featured Products</p>
                </div>
                <div class="product-list" id="productList" runat="server">
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/discount-01.png"
                            alt="Apple iPhone 14 Pro Max 128GB Deep Purple "
                            class="product-item__img" />
                        <p class="product-item__label">
                            Apple iPhone 14 Pro Max 128GB Deep Purple
                        </p>
                        <p class="product-item__price">$900</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-02.png"
                            alt="Blackmagic Pocket Cinema Camera 6k"
                            class="product-item__img" />
                        <p class="product-item__label">
                            Blackmagic Pocket Cinema Camera 6k
                        </p>
                        <p class="product-item__price">$2535</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-03.png"
                            alt="Apple Watch Series 9 GPS 41mm Starlight Aluminium "
                            class="product-item__img" />
                        <p class="product-item__label">
                            Apple Watch Series 9 GPS 41mm Starlight
                                    Aluminium
                        </p>
                        <p class="product-item__price">$399</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-04.png"
                            alt="AirPods Max Silver
                            Starlight Aluminium"
                            class="product-item__img" />
                        <p class="product-item__label">
                            AirPods Max Silver Starlight Aluminium
                        </p>
                        <p class="product-item__price">$549</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-05.png"
                            alt="Samsung Galaxy Watch6 Classic 47mm Black"
                            class="product-item__img" />
                        <p class="product-item__label">
                            Samsung Galaxy Watch6 Classic 47mm Black
                        </p>
                        <p class="product-item__price">$369</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-06.png"
                            alt="Galaxy Z Fold5 Unlocked | 256GB | Phantom Black"
                            class="product-item__img" />
                        <p class="product-item__label">
                            Galaxy Z Fold5 Unlocked | 256GB | Phantom
                                    Black
                        </p>
                        <p class="product-item__price">$1799</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-07.png"
                            alt="Galaxy Buds FE
                            Graphite"
                            class="product-item__img" />
                        <p class="product-item__label">
                            Galaxy Buds FE Graphite
                        </p>
                        <p class="product-item__price">$99.99</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now</a>
                    </div>
                    <div class="product-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="product-item__icon-tym tym-product" />
                        <img
                            src="img/img/product-08.png"
                            alt='Apple
                            iPad 9 10.2\" 64GB Wi-Fi Silver (MK2L3) 2021"
                            class="product-item__img' />
                        <p class="product-item__label">
                            Apple iPad 9 10.2" 64GB Wi-Fi Silver (MK2L3)
                                    2021
                        </p>
                        <p class="product-item__price">$398</p>
                        <a
                            href="#!"
                            class="product-item__btn btn-bg-black">Buy Now
                        </a>
                    </div>

                    <!--  -->
                </div>
            </div>
        </section>
        <!-- Featured - Nổi bật-->
        <section class="featured">
            <div class="featured-list">
                <div class="featured-item active">
                    <img
                        src="img/img/featured-01.png"
                        alt=""
                        class="featured-item__img" />
                    <div class="featured-item__body">
                        <h2 class="featured-item__title">Popular Products
                        </h2>
                        <p class="featured-item__desc">
                            iPad combines a magnificent 10.2-inch Retina
                                    display, incredible performance,
                                    multitasking and ease of use.
                        </p>
                        <a
                            href="#!"
                            class="featured-item__btn btn-bg-transparent">Shop Now</a>
                    </div>
                </div>
                <div class="featured-item">
                    <img
                        src="img/img/featured-02.png"
                        alt=""
                        class="featured-item__img" />
                    <div class="featured-item__body">
                        <h2 class="featured-item__title">Ipad Pro</h2>
                        <p class="featured-item__desc">
                            iPad combines a magnificent 10.2-inch Retina
                                    display, incredible performance,
                                    multitasking and ease of use.
                        </p>
                        <a
                            href="#!"
                            class="featured-item__btn btn-bg-transparent">Shop Now</a>
                    </div>
                </div>
                <div class="featured-item">
                    <img
                        src="img/img/featured-03.png"
                        alt=""
                        class="featured-item__img" />
                    <div class="featured-item__body">
                        <h2 class="featured-item__title">Samsung Galaxy
                        </h2>
                        <p class="featured-item__desc">
                            iPad combines a magnificent 10.2-inch Retina
                                    display, incredible performance,
                                    multitasking and ease of use.
                        </p>
                        <a
                            href="#!"
                            class="featured-item__btn btn-bg-transparent">Shop Now</a>
                    </div>
                </div>
                <div class="featured-item">
                    <img
                        src="img/img/featured-04.png"
                        alt=""
                        class="featured-item__img" />
                    <div class="featured-item__body">
                        <h2 class="featured-item__title">Macbook Pro
                        </h2>
                        <p class="featured-item__desc">
                            iPad combines a magnificent 10.2-inch Retina
                                    display, incredible performance,
                                    multitasking and ease of use.
                        </p>
                        <a
                            href="#!"
                            class="featured-item__btn btn-bg-transparent">Shop Now</a>
                    </div>
                </div>
                <div class="featured-dots show-on-mobile">
                    <span class="featured-dot active"></span>
                    <span class="featured-dot"></span>
                    <span class="featured-dot"></span>
                    <span class="featured-dot"></span>
                </div>
            </div>
        </section>
        <!-- Discount - Giảm giá -->
        <section class="discount">
            <div class="container">
                <p class="discount__title">Discounts up to -50%</p>
                <div class="discount-list" id="discountList" runat="server">
                    <div class="discount-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="discount-item__icon-tym tym-product" />
                        <img
                            src="img/img/discount-01.png"
                            alt="Apple iPhone 14 Pro Max 128GB Deep Purple "
                            class="discount-item__img" />
                        <p class="discount-item__label">
                            Apple iPhone 14 Pro 512GB Gold (MQ233)
                        </p>
                        <p class="discount-item__price">$1437</p>
                        <a
                            href="#!"
                            class="discount-item__btn btn-bg-black">Buy Now
                        </a>
                    </div>
                    <div class="discount-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="discount-item__icon-tym tym-product" />
                        <img
                            src="img/img/discount-02.png"
                            alt="Blackmagic Pocket Cinema Camera 6k"
                            class="discount-item__img" />
                        <p class="discount-item__label">
                            AirPods Max Silver Starlight Aluminium
                        </p>
                        <p class="discount-item__price">$549</p>
                        <a
                            href="#!"
                            class="discount-item__btn btn-bg-black">Buy Now
                        </a>
                    </div>
                    <div class="discount-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="discount-item__icon-tym tym-product" />
                        <img
                            src="img/img/discount-03.png"
                            alt="Apple Watch Series 9 GPS 41mm Starlight Aluminium "
                            class="discount-item__img" />
                        <p class="discount-item__label">
                            Apple Watch Series 9 GPS 41mm Starlight
                                    Aluminium
                        </p>
                        <p class="discount-item__price">$399</p>
                        <a
                            href="#!"
                            class="discount-item__btn btn-bg-black">Buy Now
                        </a>
                    </div>
                    <div class="discount-item">
                        <img
                            src="/icon/tym-product.svg"
                            alt=""
                            class="discount-item__icon-tym tym-product" />
                        <img
                            src="img/img/discount-04.png"
                            alt="AirPods Max Silver
                            Starlight Aluminium"
                            class="discount-item__img" />
                        <p class="discount-item__label">
                            Apple iPhone 14 Pro 1TB Gold (MQ2V3)
                        </p>
                        <p class="discount-item__price">$1499</p>
                        <a
                            href="#!"
                            class="discount-item__btn btn-bg-black">Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner -->
        <section class="banner">
            <img
                src="img/img/banner.png"
                alt="Banner"
                class="banner__img" />
            <div class="banner__content">
                <h2 class="banner__title">Big Summer <strong>Sale</strong>
                </h2>
                <p class="banner__desc">
                    Commodo fames vitae vitae leo mauris in. Eu
                            consequat.
                </p>
                <a href="#!" class="banner__btn btn-bg-transparent">Shop Now</a>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__column">
                    <a href="./index.aspx">
                        <img
                            src="img/img/logo-footer.svg"
                            alt=""
                            class="footer__logo" />
                    </a>
                    <p class="footer__desc">
                        We are a residential interior design firm
                                located in Portland. Our boutique-studio offers
                                more than
                    </p>
                </div>
                <div class="footer__column">
                    <h3 class="footer__title">Services</h3>
                    <ul class="footer__list">
                        <li>
                            <a href="#!" class="footer__link">Bonus program</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Gift cards</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Credit and payment</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Service contracts</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Non-cash account</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Payment</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <h3 class="footer__title">Assistance to the buyer
                    </h3>
                    <ul class="footer__list">
                        <li>
                            <a href="#!" class="footer__link">Find an order</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Terms of delivery</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Exchange and return of goods</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Guarantee</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Frequently asked questions</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Terms of use of the site</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-social">
                <a href="#!">
                    <img
                        src="/icon/twitter.svg"
                        alt="Twitter"
                        class="footer-social__img" />
                </a>
                <a href="#!">
                    <img
                        src="/icon/facebook.svg"
                        alt="Facebook"
                        class="footer-social__img" />
                </a>
                <a href="#!">
                    <img
                        src="/icon/tiktok.svg"
                        alt="Tiktok"
                        class="footer-social__img" />
                </a>
                <a href="#!">
                    <img
                        src="/icon/instagram.svg"
                        alt="Instagram"
                        class="footer-social__img" />
                </a>
            </div>
        </div>
    </footer>
    <script src="/js/home-page.js"></script>
</body>
</html>
</html>

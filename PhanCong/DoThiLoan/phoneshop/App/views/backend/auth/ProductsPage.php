<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Products | Cyber</title>
    <!-- Reset CSS -->
    <link rel="stylesheet" href="/css/reset.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="/css/ProductsPage.css" />
    <!-- Responsive -->
    <link
        rel="stylesheet"
        href="/css/responsive-products-page.css" />
</head>
<body>
    <div id="toast"></div>
    <input type="hidden" id="statusServer"  />
    <div class="hello-guest" id="helloGuest" ></div>
    <!-- Header PC-->
    <header class="header">
        <div class="container">
            <div class="header-body">
                <div class="logo">
                    <a href="./index.aspx">
                        <img src="/img/logo.svg" alt="" />
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
                            <a href="./index.aspx" class="navbar__item">Home</a>
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
                                >Blog</a>
                        </li>
                        <!-- Show on mobile tablet -->
                        <li class="show-on-mobile-tablet">
                            <a
                                href="#!"
                                class="navbar__item separate"
                                id="A1"
                                >
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
                                >
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
                                >
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
                        <span
                            class="counter-product"
                            
                            id="counterProduct">NaN</span>
                    </a>
                    <a href="./login.aspx" class="header-action__link">
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
                <img src="/img/logo.svg" alt="Cyber" />
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
    <%--Main--%>
    <main>
        <!-- Filter Mobile -->
        <section class="filter-mobile show-on-mobile-tablet" id="filterMobile">
            <div class="container">
                <div class="close-filter" id="closeFilter">
                    <img
                        src="/icon/icon-products-page/arrow-control-left.svg"
                        alt=""
                        class="close-filter__icon" />
                    <p class="close-filter__title">Filters</p>
                </div>
                <div class="" id="filterMobileBody">
                    <%--<div class="filter-item">
                        <div class="filler-item__top">
                            <p class="filter-item__title">Brand</p>
                            <img
                                src="/icon/icon-products-page/arrow-top.svg"
                                alt=""
                                class="filter-item__img"
                                id="" />
                        </div>
                        <form id="formBrandMobile" action="" method="get">
                            <div class="filter-search__form">
                                <img
                                    src="/icon/search.svg"
                                    alt=""
                                    class="filter-search__icon" />
                                <input
                                    type="text"
                                    name="brand"
                                    id="branchSearchMobile"
                                    placeholder="Search"
                                    class="filter-search__input" />
                            </div>
                            <div class="checkbox-group">
                                <div class="checkbox-row">
                                    <input
                                        id="AppleMobile"
                                        name="brand"
                                        value="Apple"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="AppleMobile"
                                        class="checkbox__label">
                                        Apple</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="SamsungMobile"
                                        name="brand"
                                        value="Samsung"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="SamsungMobile"
                                        class="checkbox__label">
                                        Samsung</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="XiaomiMobile"
                                        name="brand"
                                        value="Xiaomi"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="XiaomiMobile"
                                        class="checkbox__label">
                                        Xiaomi</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="PocoMobile"
                                        name="brand"
                                        value="Poco"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="PocoMobile"
                                        class="checkbox__label">
                                        Poco</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="OPPOMobile"
                                        name="brand"
                                        value="OPPO"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="OPPOMobile"
                                        class="checkbox__label">
                                        OPPO</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="HonorMobile"
                                        name="brand"
                                        value="Honor"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="HonorMobile"
                                        class="checkbox__label">
                                        Honor</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="MotorolaMobile"
                                        name="brand"
                                        value="Motorola"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="MotorolaMobile"
                                        class="checkbox__label">
                                        Motorola</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="NokiaMobile"
                                        name="brand"
                                        value="Nokia"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="NokiaMobile"
                                        class="checkbox__label">
                                        Nokia</label>
                                </div>
                                <div class="checkbox-row">
                                    <input
                                        id="ReadmiMobile"
                                        name="brand"
                                        value="Realme"
                                        type="checkbox"
                                        class="checkbox__input"
                                        hidden />
                                    <label
                                        for="RealmeMobile"
                                        class="checkbox__label">
                                        Realme</label>
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="apply-for-mobile__btn btn-bg-black">
                                Apply</button>
                        </form>
                    </div>--%>
                </div>
            </div>
        </section>
        <section class="main-top">
            <div class="container">
                <div class="main-top__body">
                    <a href="./index.aspx" class="main-top__link">Home</a>
                    <img
                        src="/icon/icon-products-page/arrow-right.svg"
                        alt="Arrow right"
                        class="main-top__img" />
                    <a
                        href="./products-page.aspx"
                        class="main-top__link main-top__link-action">Smartphones</a>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div class="main__body">
                    <!-- Filter Tablet PC-->
                    <section class="filter" id="filter">
                        <div class="filter-item">
                            <div class="filler-item__top">
                                <p class="filter-item__title">Brand</p>
                                <img
                                    src="/icon/icon-products-page/arrow-top.svg"
                                    alt=""
                                    class="filter-item__img"
                                    id="" />
                            </div>
                            <form id="formBrand" action="" method="get">
                                <div class="filter-search__form">
                                    <img
                                        src="/icon/search.svg"
                                        alt=""
                                        class="filter-search__icon" />
                                    <input
                                        type="text"
                                        name="brand"
                                        id="branchSearch"
                                        placeholder="Search"
                                        class="filter-search__input" />
                                </div>
                                <div class="checkbox-group">
                                    <div class="checkbox-row">
                                        <input
                                            id="Apple"
                                            name="brand"
                                            value="Apple"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Apple"
                                            class="checkbox__label">
                                            Apple</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Samsung"
                                            name="brand"
                                            value="Samsung"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Samsung"
                                            class="checkbox__label">
                                            Samsung</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Xiaomi"
                                            name="brand"
                                            value="Xiaomi"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Xiaomi"
                                            class="checkbox__label">
                                            Xiaomi</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Poco"
                                            name="brand"
                                            value="Poco"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Poco"
                                            class="checkbox__label">
                                            Poco</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="OPPO"
                                            name="brand"
                                            value="OPPO"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="OPPO"
                                            class="checkbox__label">
                                            OPPO</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Honor"
                                            name="brand"
                                            value="Honor"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Honor"
                                            class="checkbox__label">
                                            Honor</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Motorola"
                                            name="brand"
                                            value="Motorola"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Motorola"
                                            class="checkbox__label">
                                            Motorola</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Nokia"
                                            name="brand"
                                            value="Nokia"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Nokia"
                                            class="checkbox__label">
                                            Nokia</label>
                                    </div>
                                    <div class="checkbox-row">
                                        <input
                                            id="Realme"
                                            name="brand"
                                            value="Realme"
                                            type="checkbox"
                                            class="checkbox__input"
                                            hidden
                                             />
                                        <label
                                            for="Realme"
                                            class="checkbox__label">
                                            Realme</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>

                    <!-- Products -->
                    <section class="products">
                        <div class="products-selected">
                            <!-- Toggle filter on mobile -->
                            <div
                                class="toggle-filter show-on-mobile-tablet"
                                id="toggleFilter">
                                <p class="toggle-filter__title">
                                    Filters
                                </p>
                                <img
                                    src="/icon/icon-products-page/toggle-filter.svg"
                                    alt=""
                                    class="toggle-filter__img" />
                            </div>
                            <div class="selected-info">
                                <span class="selected-info__title">Selected Products:
                                </span>
                                <span
                                    class="selected-info__number"
                                    id="selectedProduct"
                                    >0
                                </span>
                            </div>
                            <!-- <select
                                        name="rating"
                                        id="rating"
                                        class="selected-choose"
                                    >
                                        <option
                                            value="By rating"
                                            class="selected-choose__option"
                                        >
                                            By rating
                                        </option>
                                    </select> -->
                        </div>
                        <p
                            class="msgNoProduct"
                            id="msgNoProduct"
                            >
                        </p>
                        <div
                            class="product-list"
                            id="productList"
                            >
                            <div class="product-item">
                                <img
                                    src="/icon/tym-product.svg"
                                    alt=""
                                    class="product-item__icon-tym tym-product" />
                                <img
                                    src="/img/img-products-page/product-01.png"
                                    alt="Apple iPhone 14 Pro 512GB Gold (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 512GB Gold
                                            (MQ233)
                                </p>
                                <p class="product-item__price">$1437</p>
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
                                    src="/img/img-products-page/product-02.png"
                                    alt="Apple iPhone 11 128GB White (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 11 128GB White (MQ233)
                                </p>
                                <p class="product-item__price">$510</p>
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
                                    src="/img/img-products-page/product-03.png"
                                    alt="Apple iPhone 11 128GB White
                                        (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 11 128GB White (MQ233)
                                </p>
                                <p class="product-item__price">$550</p>
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
                                    src="/img/img-products-page/product-04.png"
                                    alt="Apple iPhone 14 Pro 1TB Gold (MQ2V3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 1TB Gold (MQ2V3)
                                </p>
                                <p class="product-item__price">$1499</p>
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
                                    src="/img/img-products-page/product-05.png"
                                    alt="Apple iPhone 14 Pro 1TB Gold (MQ2V3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 1TB Gold (MQ2V3)
                                </p>
                                <p class="product-item__price">$1399</p>
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
                                    src="/img/img-products-page/product-06.png"
                                    alt="Apple iPhone 14 Pro 128GB Deep Purple (MQ0G3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 128GB Deep
                                            Purple (MQ0G3)
                                </p>
                                <p class="product-item__price">$1600</p>
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
                                    src="/img/img-products-page/product-07.png"
                                    alt="Apple iPhone 13 mini 128GB Pink (MLK23)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 13 mini 128GB Pink
                                            (MLK23)
                                </p>
                                <p class="product-item__price">$850</p>
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
                                    src="/img/img-products-page/product-08.png"
                                    alt="Apple iPhone 14 Pro 256GB Space Black (MQ0T3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 256GB Space
                                            Black (MQ0T3)
                                </p>
                                <p class="product-item__price">$1399</p>
                                <a
                                    href="#!"
                                    class="product-item__btn btn-bg-black">Buy Now
                                </a>
                            </div>
                            <div class="product-item">
                                <img
                                    src="/icon/tym-product.svg"
                                    alt=""
                                    class="product-item__icon-tym tym-product" />
                                <img
                                    src="/img/img-products-page/product-04.png"
                                    alt="Apple iPhone 14 Pro 256GB Silver (MQ103)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 256GB Silver
                                            (MQ103)
                                </p>
                                <p class="product-item__price">$1399</p>
                                <a
                                    href="#!"
                                    class="product-item__btn btn-bg-black">Buy Now
                                </a>
                            </div>
                            <!--  -->
                            <div class="product-item">
                                <img
                                    src="/icon/tym-product.svg"
                                    alt=""
                                    class="product-item__icon-tym tym-product" />
                                <img
                                    src="/img/img-products-page/product-07.png"
                                    alt="Apple iPhone 13 mini 128GB Pink (MLK23)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 13 mini 128GB Pink
                                            (MLK23)
                                </p>
                                <p class="product-item__price">$850</p>
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
                                    src="/img/img-products-page/product-08.png"
                                    alt="Apple iPhone 14 Pro 256GB Space Black (MQ0T3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 256GB Space
                                            Black (MQ0T3)
                                </p>
                                <p class="product-item__price">$1399</p>
                                <a
                                    href="#!"
                                    class="product-item__btn btn-bg-black">Buy Now
                                </a>
                            </div>
                            <div class="product-item">
                                <img
                                    src="/icon/tym-product.svg"
                                    alt=""
                                    class="product-item__icon-tym tym-product" />
                                <img
                                    src="/img/img-products-page/product-04.png"
                                    alt="Apple iPhone 14 Pro 256GB Silver (MQ103)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 256GB Silver
                                            (MQ103)
                                </p>
                                <p class="product-item__price">$1399</p>
                                <a
                                    href="#!"
                                    class="product-item__btn btn-bg-black">Buy Now
                                </a>
                            </div>
                            <div class="product-item">
                                <img
                                    src="/icon/tym-product.svg"
                                    alt=""
                                    class="product-item__icon-tym tym-product" />
                                <img
                                    src="/img/img-products-page/product-01.png"
                                    alt="Apple iPhone 14 Pro 512GB Gold (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 512GB Gold
                                            (MQ233)
                                </p>
                                <p class="product-item__price">$1437</p>
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
                                    src="/img/img-products-page/product-02.png"
                                    alt="Apple iPhone 11 128GB White (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 11 128GB White (MQ233)
                                </p>
                                <p class="product-item__price">$510</p>
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
                                    src="/img/img-products-page/product-03.png"
                                    alt="Apple iPhone 11 128GB White
                                        (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 11 128GB White (MQ233)
                                </p>
                                <p class="product-item__price">$550</p>
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
                                    src="/img/img-products-page/product-03.png"
                                    alt="Apple iPhone 11 128GB White
                                        (MQ233)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 11 128GB White (MQ233)
                                </p>
                                <p class="product-item__price">$550</p>
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
                                    src="/img/img-products-page/product-04.png"
                                    alt="Apple iPhone 14 Pro 1TB Gold (MQ2V3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 1TB Gold (MQ2V3)
                                </p>
                                <p class="product-item__price">$1499</p>
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
                                    src="/img/img-products-page/product-05.png"
                                    alt="Apple iPhone 14 Pro 1TB Gold (MQ2V3)"
                                    class="product-item__img" />
                                <p class="product-item__label">
                                    Apple iPhone 14 Pro 1TB Gold (MQ2V3)
                                </p>
                                <p class="product-item__price">$1399</p>
                                <a
                                    href="#!"
                                    class="product-item__btn btn-bg-black">Buy Now</a>
                            </div>
                            <!-- -->
                        </div>
                        <!-- Control -->
                        <div class="main-control">
                            <img
                                src="/icon/icon-products-page/arrow-control-left.svg"
                                alt=""
                                class="main-control__prev" />
                            <div class="main-control__number">
                                <!-- <span
                                        class="main-control__number-item main-control__number-action"
                                        >1</span
                                    >
                                    <span class="main-control__number-item">2</span>
                                    <span class="main-control__number-item">3</span>
                                    <img
                                        src="/icon/icon-products-page/dot-control.svg"
                                        alt=""
                                        class="main-control__img-dot"
                                    />
                                    <span class="main-control__number-item">12</span> -->
                            </div>
                            <img
                                src="/icon/icon-products-page/arrow-control-right.svg"
                                alt=""
                                class="main-control__next" />
                        </div>
                    </section>
                </div>
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
                            src="/img/logo-footer.svg"
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
    <script src="./js/ProductPage.js"></script>

    
</body>
</html>
</html>

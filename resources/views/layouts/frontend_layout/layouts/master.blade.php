<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bigshop | Responsive E-commerce Template</title>

    <!-- Favicon  -->
    

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.min.css') }}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Header Area -->
    <header class="header_area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <div class="welcome-note">
                            <span class="popover--text" data-toggle="popover"
                                data-content="Welcome to Bigshop ecommerce template."><i
                                    class="icofont-info-square"></i></span>
                            <span class="text">Welcome to Bigshop ecommerce template.</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="language-currency-dropdown d-flex align-items-center justify-content-end">
                            <!-- Language Dropdown -->
                            <div class="language-dropdown">
                                <div class="dropdown">
                                    <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        English
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="#">Bangla</a>
                                        <a class="dropdown-item" href="#">Arabic</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Currency Dropdown -->
                            <div class="currency-dropdown">
                                <div class="dropdown">
                                    <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        $ USD
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="#">৳ BDT</a>
                                        <a class="dropdown-item" href="#">€ Euro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu -->
        <div class="bigshop-main-menu">
            <div class="container">
                <div class="classy-nav-container breakpoint-off">
                    <nav class="classy-navbar" id="bigshopNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt="logo"></a>

                        <!-- Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index-1.html">Home - 1</a></li>
                                            <li><a href="index-2.html">Home - 2</a></li>
                                            <li><a href="index-3.html">Home - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Shop Grid</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-right-sidebar.html">Shop Grid Right
                                                            Sidebar</a></li>
                                                    <li><a href="shop-grid-top-sidebar.html">Shop Grid Top Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-no-sidebar.html">Shop Grid No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop List</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                            Sidebar</a></li>
                                                    <li><a href="shop-list-top-sidebar.html">Shop List Top Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-no-sidebar.html">Shop List No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-details.html">Single Product</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="#">Checkout</a>
                                                <ul class="dropdown">
                                                    <li><a href="checkout-1.html">Login</a></li>
                                                    <li><a href="checkout-2.html">Billing</a></li>
                                                    <li><a href="checkout-3.html">Shipping Method</a></li>
                                                    <li><a href="checkout-4.html">Payment Method</a></li>
                                                    <li><a href="checkout-5.html">Review</a></li>
                                                    <li><a href="checkout-complate.html">Complate</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Account Page</a>
                                                <ul class="dropdown">
                                                    <li><a href="my-account.html">- Dashboard</a></li>
                                                    <li><a href="order-list.html">- Orders</a></li>
                                                    <li><a href="downloads.html">- Downloads</a></li>
                                                    <li><a href="addresses.html">- Addresses</a></li>
                                                    <li><a href="account-details.html">- Account Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="about-us.html">- About Us</a></li>
                                                <li><a href="faq.html">- FAQ</a></li>
                                                <li><a href="contact.html">- Contact</a></li>
                                                <li><a href="login.html">- Login &amp; Register</a></li>
                                                <li><a href="404.html">- 404</a></li>
                                                <li><a href="500.html">- 500</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="my-account.html">- Dashboard</a></li>
                                                <li><a href="order-list.html">- Orders</a></li>
                                                <li><a href="downloads.html">- Downloads</a></li>
                                                <li><a href="addresses.html">- Addresses</a></li>
                                                <li><a href="account-details.html">- Account Details</a></li>
                                                <li><a href="coming-soon.html">- Coming Soon</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-2">
                                                <div class="megamenu-slides owl-carousel">
                                                    
                                                    <!-- <a href="shop-list-left-sidebar.html">
                                                        <img src="{{ asset('frontend/img/bg-img/mega-slide-1.jpg') }}" alt="">
                                                    </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-with-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-with-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-with-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elements</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="accordian.html">- Accordions</a></li>
                                                <li><a href="alerts.html">- Alerts</a></li>
                                                <li><a href="badges.html">- Badges</a></li>
                                                <li><a href="blockquotes.html">- Blockquotes</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="breadcrumb.html">- Breadcrumbs</a></li>
                                                <li><a href="buttons.html">- Buttons</a></li>
                                                <li><a href="forms.html">- Forms</a></li>
                                                <li><a href="gallery.html">- Gallery</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="heading.html">- Headings</a></li>
                                                <li><a href="icon-fontawesome.html">- Icon FontAwesome</a></li>
                                                <li><a href="icon-icofont.html">- Icon Ico Font</a></li>
                                                <li><a href="labels.html">- Labels</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="modals.html">- Modals</a></li>
                                                <li><a href="pagination.html">- Pagination</a></li>
                                                <li><a href="progress-bars.html">- Progress Bars</a></li>
                                                <li><a href="tables.html">- Tables</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Hero Meta -->
                        <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                            <!-- Search -->
                            <div class="search-area">
                                <div class="search-btn"><i class="icofont-search"></i></div>
                                <!-- Form -->
                                <div class="search-form">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <input type="submit" class="d-none" value="Send">
                                </div>
                            </div>

                            <!-- Wishlist -->
                            <div class="wishlist-area">
                                <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Cart -->
                            <div class="cart-area">
                                <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span>
                                </div>

                                <!-- Cart Dropdown Content -->
                                <div class="cart-dropdown-content">
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="{{ asset('frontend/img/product-img/top-1.png') }}" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">Kid's Fashion</a>
                                                    <p>1 x - <span class="price">$32.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="{{ asset('frontend/img/product-img/best-4.png') }}" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">Headphone</a>
                                                    <p>2x - <span class="price">$49.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                    </ul>
                                    <div class="cart-pricing my-4">
                                        <ul>
                                            <li>
                                                <span>Sub Total:</span>
                                                <span>$822.96</span>
                                            </li>
                                            <li>
                                                <span>Shipping:</span>
                                                <span>$30.00</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$856.63</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-box">
                                        <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Account -->
                            <div class="account-area">
                                <div class="user-thumbnail">
                                    <img src="{{ asset('frontend/img/bg-img/user.jpg') }}" alt="">
                                </div>
                                <ul class="user-meta-dropdown">
                                    <li class="user-title"><span>Hello,</span> Lim Sarah</li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-list.html">Orders List</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login.html"><i class="icofont-logout"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Slides Area -->
    <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url({{ asset('frontend/img/bg-img/8.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-7 col-md-8">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInUp" data-delay="0">Special Offer</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">40% Off Today</h2>
                                <h4 data-animation="fadeInUp" data-delay="600ms">Only $78</h4>
                                <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="1s">Buy
                                    Now</a>
                            </div>
                        </div>
                        <div class="col-5 col-md-4">
                            <div class="welcome_slide_image">
                                <img src="{{ asset('frontend/img/bg-img/slide-1.png') }}" alt="" data-animation="bounceInUp" data-delay="500ms">
                                <div class="discount_badge" data-animation="bounceInDown" data-delay="1.2s">
                                    <span>30%<br>OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url(img/bg-img/7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-8">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInUp" data-delay="0">Sustainable Clock</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Smart Watch</h2>
                                <h4 data-animation="fadeInUp" data-delay="600ms">Only $31 <span
                                        class="regular-price">$43</span></h4>
                                <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="600ms">Check
                                    Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url(img/bg-img/6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="welcome_slide_text">
                                <p class="text-white" data-animation="fadeInUp" data-delay="0">100% Cotton</p>
                                <h2 class="text-white" data-animation="fadeInUp" data-delay="300ms">Hot Shoes</h2>
                                <h4 class="text-white" data-animation="fadeInUp" data-delay="600ms">Now $19</h4>
                                <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="900ms">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Slides Area -->

    <!-- Top Catagory Area -->
    <div class="top_catagory_area mt-50 clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50">
                        <a href="#">
                            <img src="{{ asset('frontend/img/bg-img/c1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50">
                        <a href="#">
                            <img src="{{ asset('frontend/img/bg-img/c2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50">
                        <a href="#">
                            <img src="{{ asset('frontend/img/bg-img/c3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Catagory Area -->

    <!-- Quick View Modal Area -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img class="first_img" src="{{ asset('frontend/img/product-img/new-1-back.png') }}" alt="">
                                        <img class="hover_img" src="{{ asset('frontend/img/product-img/new-1.png') }}" alt="">
                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>
                                        <div class="top_seller_product_rating mb-15">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita
                                            quibusdam aspernatur, sapiente consectetur accusantium perspiciatis
                                            praesentium eligendi, in fugiat?</p>
                                        <a href="#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                                name="quantity" value="1">
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to
                                            cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </form>
                                    <!-- Share -->
                                    <div class="share_wf mt-30">
                                        <p>Share with friends</p>
                                        <div class="_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Area -->

    <!-- New Arrivals Area -->
    <section class="new_arrivals_area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading new_arrivals">
                        <h5>New Arrivals</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="new_arrivals_slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-1-back.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-1.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">Top</p>
                                <a href="#">Boutique Silk Dress</a>
                                <h6 class="product-price">$48.99</h6>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-6.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-6-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">Lim</p>
                                <a href="#">Gracia Plaid Dress</a>
                                <h6 class="product-price">$17.63</h6>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-2.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-2-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">Sarah</p>
                                <a href="#">Flower Textured Dress</a>
                                <h6 class="product-price">$24 <span>$49</span></h6>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-4.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-4-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">Lim</p>
                                <a href="#">Gracia Plaid Dress</a>
                                <h6 class="product-price">$78.24</h6>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-5.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-5-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">Lim</p>
                                <a href="#">Gracia Plaid Dress</a>
                                <h6 class="product-price">$34 <span>$48</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrivals Area -->

    <!-- Featured Products Area -->
    <section class="featured_product_area">
        <div class="container">
            <div class="row">
                <!-- Featured Offer Area -->
                <div class="col-12 col-lg-6">
                    <div class="featured_offer_area d-flex align-items-center"
                        style="background-image: url(img/bg-img/fea_offer.jpg);">
                        <div class="featured_offer_text">
                            <p>Summer 2018</p>
                            <h2>30% OFF</h2>
                            <h4>All kid’s items</h4>
                            <a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Product Area -->
                <div class="col-12 col-lg-6">
                    <div class="section_heading featured">
                        <h5>Featured Products</h5>
                    </div>

                    <!-- Featured Product Slides -->
                    <div class="featured_product_slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-2.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-2-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>Sale</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <a href="#">Flower Textured Dress</a>
                                <h6 class="product-price">$17 <span>$26</span></h6>
                                <div class="product_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-4.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-4-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>Sale</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <a href="#">Box Shape Dress</a>
                                <h6 class="product-price">$21.25</h6>
                                <div class="product_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('frontend/img/product-img/new-7.png') }}" alt="">
                                <img class="hover_img" src="{{ asset('frontend/img/product-img/new-7-back.png') }}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>Sale</span>
                                </div>

                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                </div>

                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <a href="#">Black Dress</a>
                                <h6 class="product-price">$41 <span>$44</span></h6>
                                <div class="product_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Area -->

    <!-- Best Rated/Onsale/Top Sale Product Area -->
    <section class="best_rated_onsale_top_sellares section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs_area">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="product-tab">
                            <li class="nav-item">
                                <a href="#top-sellers" class="nav-link" data-toggle="tab" role="tab">Top Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a href="#best-rated" class="nav-link" data-toggle="tab" role="tab">Best Rated</a>
                            </li>
                            <li class="nav-item">
                                <a href="#on-sale" class="nav-link active" data-toggle="tab" role="tab">On Sale</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="top-sellers">
                                <div class="top_sellers_area">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/top-1.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>KID’s Fashion</h5>
                                                    <h6>$49.39 <span>$55.31</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="{{ asset('frontend/img/product-img/top-2.png') }}" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Beach Cap</h5>
                                                    <h6>$20 <span>$25</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="{{ asset('frontend/img/product-img/top-3.png') }}" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Gold Neckless</h5>
                                                    <h6>$69 <span>$71</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/top-4.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Diamond Neckless</h5>
                                                    <h6>$300 <span>$310</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/top-5.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Sport Shoes</h5>
                                                    <h6>$30 <span>$34</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/top-6.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Pin Up Bikini</h5>
                                                    <h6>$27 <span>$29</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="best-rated">
                                <div class="best_rated_area">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-1.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Sports Bra</h5>
                                                    <h6>$60 <span>$63</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-2.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Trendy Glasses</h5>
                                                    <h6>$30 <span>$32</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-3.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Women Watch</h5>
                                                    <h6>$79 <span>$85</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-4.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Headphone</h5>
                                                    <h6>$18 <span>$21</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-5.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Plus Bra</h5>
                                                    <h6>$51 <span>$58</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/best-6.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Laptop</h5>
                                                    <h6>$130 <span>$160</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade show active" id="on-sale">
                                <div class="on_sale_area">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-1.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Speaker</h5>
                                                    <h6>$60 <span>$70</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-2.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Fancy Lamp</h5>
                                                    <h6>$34 <span>$40</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-3.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Sport Bra</h5>
                                                    <h6>$63 <span>$70</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-4.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>S'well Water</h5>
                                                    <h6>$12 <span>$13</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-5.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>Slipper</h5>
                                                    <h6>$24 <span>$36</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="img/product-img/onsale-6.png" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>T-shirt</h5>
                                                    <h6>$96 <span>$120</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Rated/Onsale/Top Sale Product Area -->

    <!-- Offer Area -->
    <section class="offer_area">
        <div class="container">
            <div class="row">
                <!-- Beach Offer -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="beach_offer_area mb-4 mb-md-0">
                        <img src="img/product-img/beach.png" alt="beach-offer">
                        <div class="beach_offer_info">
                            <p>Upto 70% OFF</p>
                            <h3>Beach Item</h3>
                            <a href="#" class="btn btn-primary btn-sm mt-15">SHOP NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Apparels Offer -->
                    <div class="apparels_offer_area">
                        <img src="img/product-img/apparels.jpg" alt="Beach-Offer">
                        <div class="apparels_offer_info d-flex align-items-center">
                            <div class="apparels-offer-content">
                                <h4>Apparel &amp; <br><span>Garments</span></h4>
                                <a href="#" class="btn">Buy Now <i class="icofont-rounded-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Deals of the Week -->
                    <div class="weekly_deals_area mt-30">
                        <img src="img/product-img/weekly-offer.jpg" alt="weekly-deals">
                        <div class="weekly_deals_info">
                            <h4>Deals of the Week</h4>
                            <div class="deals_timer">
                                <ul data-countdown="2021/02/14 14:21:38">
                                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    <li><span class="days">00</span>days</li>
                                    <li><span class="hours">00</span>hours</li>
                                    <li class="d-block blank-timer"></li>
                                    <li><span class="minutes">00</span>min</li>
                                    <li><span class="seconds">00</span>sec</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <!-- Elect Offer -->
                            <div class="elect_offer_area mt-30 mt-lg-0">
                                <img src="img/product-img/elect.jpg" alt="Elect-Offer">
                                <div class="elect_offer_info d-flex align-items-center">
                                    <div class="elect-offer-content">
                                        <h4>Electronics</h4>
                                        <a href="#" class="btn">Buy Now <i class="icofont-rounded-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <!-- Backpack Offer -->
                            <div class="backpack_offer_area mt-30">
                                <img src="img/product-img/backpack.jpg" alt="Backpack-Offer">
                                <div class="backpack_offer_info">
                                    <h4>Backpacks</h4>
                                    <a href="#" class="btn">Buy Now <i class="icofont-rounded-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Area End -->

    <!-- Popular Brands Area -->
    <section class="popular_brands_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular_section_heading mb-50">
                        <h5>Popular Brands</h5>
                    </div>
                </div>
                <div class="col-12">
                    <div class="popular_brands_slide owl-carousel">
                        <div class="single_brands">
                            <img src="img/partner-img/1.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/2.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/3.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/4.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/5.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Brands Area -->

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-ship"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-box"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-money"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-live-support"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Featured Area -->

    <!-- Footer Area -->
    <footer class="footer_area section_padding_100_0">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Contact Us</h6>
                        </div>
                        <ul class="footer_content">
                            <li><span>Address:</span> Lords, London, UK - 1259</li>
                            <li><span>Phone:</span> 002 63695 24624</li>
                            <li><span>FAX:</span> 002 78965 369552</li>
                            <li><span>Email:</span> support@example.com</li>
                        </ul>
                        <div class="footer_social_area mt-15">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Information</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Coupon</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Delivary Info</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Account</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Support</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-md-7 col-lg-8 col-xl-3">
                    <div class="single_footer_area mb-50">
                        <div class="footer_heading mb-4">
                            <h6>Join our mailing list</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="form-control mail"
                                    placeholder="Your E-mail Addrees">
                                <button type="submit" class="submit"><i class="icofont-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Download our Mobile Apps</h6>
                        </div>
                        <div class="apps_download">
                            <a href="#"><img src="img/core-img/play-store.png" alt="Play Store"></a>
                            <a href="#"><img src="img/core-img/app-store.png" alt="Apple Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite_text">
                            <p>Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#">Designing
                                    World</a></p>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="col-12 col-md-6">
                        <div class="payment_method">
                            <img src="img/payment-method/paypal.png" alt="">
                            <img src="img/payment-method/maestro.png" alt="">
                            <img src="img/payment-method/western-union.png" alt="">
                            <img src="img/payment-method/discover.png" alt="">
                            <img src="img/payment-method/american-express.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/classy-nav.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/active.js') }}"></script>

</body>

</html>
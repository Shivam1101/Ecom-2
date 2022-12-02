<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop4u</title>
    <meta name="description" content="Lorem ipsum">
    <meta name="keywords" content="lorem,ipsunm,qwert">
    <meta name="author" content="Groots">
    <meta name="copyright" content="Groots">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/header-menu.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Ui Icons CSS -->
    <link rel='stylesheet' href='assets/ui-icons/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='assets/ui-icons/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='assets/ui-icons/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='assets/ui-icons/uicons-brands/css/uicons-brands.css'>

    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body>

<?php include 'templates/header.php'; ?>
                <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                 <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                              <div class="swiper product-thumbnail-slider p-2 rounded " style="background: #e7ecf2 ;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                            <div class="swiper-button-next bg-white shadow"></div>
                                            <div class="swiper-button-prev bg-white shadow"></div>
                                        </div>
                                        <!-- end swiper thumbnail slide -->
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                  
                                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                    <script type="text/javascript">
                                    var productNavSlider = new Swiper(".product-nav-slider", { loop: !1, spaceBetween: 5, slidesPerView: 4, freeMode: !0, watchSlidesProgress: !0 }),
                                        productThumbnailSlider = new Swiper(".product-thumbnail-slider", { loop: !1, spaceBetween: 24, navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }, thumbs: { swiper: productNavSlider } });
                                    </script>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30 pt-4">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h1 class="product-heading mt-3">Fresh Brown Coconut</h1>
                                    <ul class="product-attribute">
                                        <li class="border-right pr-2">SKU: 8612681</li>
                                        <li class="pl-2">
                                            <div class="ratings">
                                                <i class="fi fi-sr-star rating-color"></i>
                                                <i class="fi fi-sr-star rating-color"></i>
                                                <i class="fi fi-sr-star rating-color"></i>
                                                <i class="fi fi-sr-star"></i>
                                                <i class="fi fi-sr-star"></i>
                                                1 REVIEW
                                            </div>
                                        </li>
                                    </ul>
                                 <div class="product-details-wrapper">
                                        <h6 class="stock-status">INSTOCK</h6>
                                        <div class="price text-left">
                                            <span class="regular-price"><del>₹ 400</del></span>
                                            <span class="sale-price">₹800</span>
                                        </div>
                                        <p class="product-info"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat dignissimos amet iure! Assumenda incidunt voluptates velit modi aliquid, quasi rem placeat dolore!</p>
                                        
                                        <div class="cart-wrap pt-3">
                                            <div class="input-step ">
                                                <button type="button" class="minus "><i class="fi fi-rr-minus-small"></i></button>
                                                <input type="number" class="product-quantity" value="2" min="0" max="100">
                                                <button type="button" class="plus "><i class="fi fi-rr-plus-small"></i></button>
                                            </div>
                                            <div class="cart mt-4 ml-0">
                                                <button type="button" class="btn add-to-cart-btn ml-0">Add to cart</button>
                                            </div>
                                            <div class="compare-wishlist-wrapper d-flex mt-4">
                                                <a href="#!" class="green-btn-effect compare"><i class="fi fi-rr-shuffle"></i></a>
                                                <a href="#!" class="red-btn-effect wishlist"><i class="fi fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Global Header Call -->
    <!-- <div data-include="templates/header.html"></div> -->
    <section id="swiper" class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/banner1.webp" alt="home-page-banner" class="img-fluid shadow-sm">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/banner2.webp" alt="home-page-banner" class="img-fluid shadow-sm">
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                        spaceBetween: 30,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                    </script>
                </div>
                <!-- </div> -->
            </div>
    </section>
    <section id="offers" class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="assets/images/offer-image1.webp" alt="offer-image2" class="img-fluid shadow-sm">
                    <!--  <div class="offer-box-wrapper">
                        <h4 class="mb-70">Lorem ipsum dolor, sit amet consectetur.</h4>
                        <a href="#!" class="button" class="">More</a>
                    </div> -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!-- <div class="offer-box-wrapper">
                        <h4 class="mb-70">Lorem ipsum dolor, sit amet consectetur.</h4>
                        <a href="#!" class="button" class="">More</a>
                    </div> -->
                    <img src="assets/images/offer-image2.webp" alt="offer-image2" class="img-fluid shadow-sm">
                </div>
            </div>
        </div>
    </section>
 
    <!-- Shop Page -->
    <section id="best-sellers" class="pb-5 shop-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 middle">
                    <h2 class="">BEST SELLERS</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <button type="button" class="btn float-right view-more-btn">View all</button>
                </div>
            </div>
            <div class="row mt-4 product-wrapper-row">
                <div class="col-lg-12 col-md-12 col-sm-12 main-product-col-wrapper">
                    <!-- Swiper -->
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/products/img-8.png" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper2", {
                        slidesPerView: 1,
                        grabCursor: true,

                        spaceBetween: 10,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        breakpoints: {
                            "@0.00": {
                                slidesPerView: 1,
                                spaceBetween: 10,
                            },
                            "@0.75": {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                            "@1.00": {
                                slidesPerView: 3,
                                spaceBetween: 40,
                            },
                            "@1.50": {
                                slidesPerView: 5,
                                spaceBetween: 0,
                            },
                        },
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section id="mid-section-offers" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="assets/images/mid-offer.webp" alt="mid-offer" class="img-fluid rounded  shadow-sm" width="1060">
                </div>
            </div>
        </div>
    </section>
    <section id="best-sellers" class="pb-5 shop-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 middle">
                    <h2 class="">FEATURED PRODUCTS</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <button type="button" class="btn float-right view-more-btn">View all</button>
                </div>
            </div>
            <div class="row mt-4 product-wrapper-row">
                <div class="col-lg-12 col-md-12 col-sm-12 main-product-col-wrapper">
                    <!-- Swiper -->
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product-wrapper">
                                    <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                                    <h6 class="stock-status">INSTOCK</h6>
                                    <h5 class="product-title">Fresh Brown Coconut</h5>
                                    <div class="price text-left">
                                        <span class="regular-price"><del>₹ 400</del></span>
                                        <span class="sale-price">₹800</span>
                                    </div>
                                    <div class="ratings">
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star rating-color"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                                    </div>
                                    <div class="cart">
                                        <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper2", {
                        slidesPerView: 1,
                        grabCursor: true,

                        spaceBetween: 10,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView:3,
          spaceBetween: 0,
        },
        1200: {
          slidesPerView: 5,
          spaceBetween:0,
        },
      }
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section id="mid-section-offers" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--   <img src="assets/images/mid-offer.webp" alt="mid-offer" class="img-fluid rounded  shadow-sm" width="1060"> -->
                </div>
            </div>
        </div>
    </section>
    <section id="categories" class="pb-5">
        <div class="container">
            <div class="row category-row">
                <div class="col-lg-2 text-center border-right category-box col-sm-12 d-flex justify-content-center">
                    <div class="category-box-wrapper">
                        <div class="category-img">
                            <img src="assets/images/beverage.jpg" alt="beverage" width="90">
                        </div>
                        <div class="category-detail">
                            <h6 class="category-name">Beverages</h6>
                            <span class="product-count-category">11 Items</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-12 border-top-only-md border-top-only-sm">
                    <div class="row">
                        <div class="col-lg-3 category-box border-right col-sm-3 col-6">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box border-right col-sm-3 col-6 ">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box border-right col-sm-3 col-6 border-top-only-sm">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box col-sm-3 col-6 border-top-only-sm">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box border-right border-top col-sm-3 col-6">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box border-right border-top col-sm-3 col-6">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box border-right border-top col-sm-3 col-6">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 category-box  border-top col-sm-3 col-6">
                            <div class="category-box-wrapper">
                                <div class="category-img">
                                    <img src="assets/images/category.jpg" alt="beverage" width="90">
                                </div>
                                <div class="category-detail">
                                    <h6 class="category-name">Biscuits & Snacks</h6>
                                    <span class="product-count-category">11 Items</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="new-products" class="pb-5 shop-section flat-products">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 middle">
                    <h2 class="">NEW PRODUCTS</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <button type="button" class="btn float-right view-more-btn">View all</button>
                </div>
            </div>
            <div class="main-row-wrapper">
                <div class="row text-center row-1">
                    <div class="col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/products/img-8.png" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-sm-4 border-top hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row text-center ">
                    <div class="col col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col col-6 col-lg-2 col-sm-4 border-top border-right hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                    <div class="col col-6 col-lg-2 col-sm-4 border-top hover-up">
                        <div class="single-product-wrapper ">
                            <img src="assets/images/product/product-image-56-600x540.jpg" alt="coconut" class="img-fluid">
                            <h6 class="stock-status">INSTOCK</h6>
                            <h5 class="product-title">Fresh Brown Coconut</h5>
                            <div class="price text-left">
                                <span class="regular-price"><del>₹ 400</del></span>
                                <span class="sale-price">₹800</span>
                            </div>
                            <div class="ratings pt-2">
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star rating-color"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <div class="product-fade-block">
                                <div class="cart text-center">
                                    <button type="button" class="btn add-to-cart-btn">Add to cart</button>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-toggle="modal" data-target="#quickViewModal"><i class="fi fi-sr-expand-arrows"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#!" tabindex="0"><i class="fi fi-rr-shuffle"></i></a>
                            </div>
                            <div class="product-content-fade border-info" style="margin-bottom: -70px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Global Footer Call -->
    <?php include 'templates/footer.php'; ?>
   
</body>
<script>
document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

</html>
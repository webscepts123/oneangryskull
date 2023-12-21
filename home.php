<?php
/**
 * Template Name: Home Page
 * Description: A Page Template with a darker design.
 */

get_header();
?>

<section class="header-content">

<div class="clearifx">

<video autoplay loop muted plays-inline id="back-video" width="100%">
       <source src=<?php echo get_theme_file_uri( 'assets/images/OneAngrySkull.mp4' );  ?>>
      
    </video>


</div>

</section>



  <!-- ========================  Blog Block ======================== -->

  <section class="blog blog-block blog-intro">

<div class="container">

    <!-- === blog header === -->

    <header class="hidden">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title">Check out our featured news</h2>
                <div class="text">
                    <p>Keeping things minimal</p>
                </div>
            </div>
        </div>
    </header>

    <div class="row row-clean">

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="products-grid.html">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/2.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                        
                        <div class="description">
                        <div class="date">2023 Collection</div>
                        <div class="title">
                            <h2 class="h3">MEN</h2>
                        </div>
                            <p>
                                Top picks four your desire
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="products-grid.html">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/1.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">New arrivals</div>
                        <div class="title">
                            <h2 class="h3">WOMAN</h2>
                        </div>
                            <p>
                                Explore popular devices
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="products-grid.html">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/3.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">Up to 50% off</div>
                        <div class="title">
                            <h2 class="h3">ACCESORIES</h2>
                        </div>
                            <p>
                                Available for quick shipping
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="products-grid.html">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/4.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">Save big on</div>
                        <div class="title">
                            <h2 class="h3">SPORTWEAR</h2>
                        </div>
                            <p>
                                Fun to explore
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

    </div> <!--/row-->

    <!-- === button more === -->

    <div class="wrapper-more">
        <a href="ideas.html" class="btn btn-lg">View All Collection</a>
    </div>

</div> <!--/container-->
</section>

<!-- ========================  Block banner category ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Categories</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-md-6">
        <article>
            <div>
                <div class="image">

                    <!--Desktop image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-1.png' );  ?> alt="" class="hidden-xs" />

                    <!--Mobile image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-1.png' );  ?> alt="" class="visible-xs" />

                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Men's Items</h2>
                    </div>
                    <div class="description">
                        <ul>
                            <li>
                                <a href="">T Shirts</a>
                            </li>
                            <li>
                                <a href="">Jeans </a>
                            </li>
                            <li>
                                <a href="">Shorts</a>
                            </li>
                            <li>
                                <a href="">Sweater </a>
                            </li>
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-md-6">
        <article>
            <div>
                <div class="image">

                    <!--Desktop image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-2.png' );  ?> alt="" class="hidden-xs" />

                    <!--Mobile image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-2.png' );  ?> alt="" class="visible-xs" />

                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Women's Items</h2>
                    </div>
                    <div class="description">
                        <ul class="col">
                            <li>
                                <a href="#">Tops</a>
                            </li>
                            <li>
                                <a href="#">Skirts</a>
                            </li>
                            <li>
                                <a href="#">Jeans</a>
                            </li>
                            <li>
                                <a href="#">Blouses</a>
                            </li>
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

</div> <!--/row-->
</section>

<!-- ========================  Icons slider ======================== -->

<section class="owl-icons-wrapper">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Product categories</h2></div>
</header>

<div class="clearfix">

    <div class="owl-icons owl-icons-rounded owl-icons-frontpage">

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-1.png' );  ?> alt="Alternate Text" />
                <figcaption>Cotton T-Shirt</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-2.png' );  ?> alt="Alternate Text" />
                <figcaption>Fitted Hoodie</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-3.png' );  ?> alt="Alternate Text" />
                <figcaption>Wine Tumbler </figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-4.png' );  ?> alt="Alternate Text" />
                <figcaption>ZipUp Windbreaker</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-5.png' );  ?> alt="Alternate Text" />
                <figcaption>Foam Trucker Hat</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-6.png' );  ?> alt="Alternate Text" />
                <figcaption>Cotton Tote Bag</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-7.png' );  ?> alt="Alternate Text" />
                <figcaption>Embroidered Backpack</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-8.png' );  ?> alt="Alternate Text" />
                <figcaption>Black Glossy Mug</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-9.png' );  ?> alt="Alternate Text" />
                <figcaption>Duffle Bag</figcaption>
            </figure>
        </a>




    </div> <!--/owl-icons-->
</div> <!--/container-->
</section>

<!-- ========================  Best seller ======================== -->

<section class="products">

<!-- === header title === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Best seller Items</h2>
            <div class="text">
                <p>Check out our latest collections</p>
            </div>
        </div>
    </div>
</header>

<div class="row row-clean">

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-7.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5" >
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Embroidered Backpack</a>
                    </h2>
                    <sub>$ 159,-</sub>
                    <sup>$ 139,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <span class="label label-danger">-50%</span>
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-8.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Black Glossy Mug</a>
                    </h2>
                    <sub>$ 1999,-</sub>
                    <sup>$ 1499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-9.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Duffle Bag</a>
                    </h2>
                    <sub>$ 1999,-</sub>
                    <sup>$ 1499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <span class="label label-info">-20%</span>
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-10.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Cotton T-Shirt</a>
                    </h2>
                    <sub>$ 1999,-</sub>
                    <sup>$ 1499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-11.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Backpack</a>
                    </h2>
                    <sub>$ 1999,-</sub>
                    <sup>$ 1499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/product-12.png' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="http://localhost/WP/tw-p1/index.php/products/">Trucker Hat</a>
                    </h2>
                    <sub>$ 1999,-</sub>
                    <sup>$ 1499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

</div> <!--/row-->
<!-- === button more === -->

<div class="wrapper-more">
    <a href="products-grid.html" class="btn btn-lg">View all</a>
</div>

<!-- ========================  Product info popup - quick view ======================== -->

<div class="popup-main mfp-hide" id="productid1">

    <!-- === product popup === -->

    <div class="product">

        <!-- === popup-title === -->

        <div class="popup-title">
            <div class="h1 title">
                Headphones Wireless
                <small>product category</small>
            </div>
        </div>

        <!-- === product gallery === -->

        <div class="owl-product-gallery">
            <img src=<?php echo get_theme_file_uri( 'assets/images/product-10.png' );  ?> alt="" width="640" />
            <img src=<?php echo get_theme_file_uri( 'assets/images/product-10a.png' );  ?> alt="" width="640" />
        </div>

        <!-- === product-popup-info === -->

        <div class="popup-content">
            <div class="product-info-wrapper">
                <div class="row">

                    <!-- === left-column === -->

                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Maifacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>

                    <!-- === right-column === -->

                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div> <!--/row-->
            </div> <!--/product-info-wrapper-->
        </div> <!--/popup-content-->
        <!-- === product-popup-footer === -->

        <div class="popup-table">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                    <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div> <!--/product-->
</div> <!--popup-main--> <!--/container-->

</section>

<!-- ========================  Block banner fashion ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Fashion</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-sm-4">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/n_m1.webp' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Men's</h2>
                    </div>
                    <div class="description">
                        <ul>
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-sm-4">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/n_w1.webp' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Woman's</h2>
                    </div>
                    <div class="description">
                        <ul class="col">
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-sm-4">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/n_a1.webp' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Accesories</h2>
                    </div>
                    <div class="description">
                        <ul class="col">
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                           <!-- <li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

</div> <!--/row-->
</section>

<!-- ========================  Products widget ======================== -->

<section class="products">

<!-- === header title === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Clothing & Accesories</h2>
            <div class="text">
                <p>Check out our latest collections</p>
            </div>
        </div>
    </div>
</header>

<div class="row row-clean">

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-1.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Unisex Tank Top</a>
                    </h2>
                    <sub>$ 199,-</sub>
                    <sup>$ 99,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-2.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Lightweight T-Shirt</a>
                    </h2>
                    <sub>$ 159,-</sub>
                    <sup>$ 129,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <span class="label label-warning">New</span>
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-3.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Premium T-Shirt</a>
                    </h2>
                    <sup>$ 29,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite added">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-4.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Windbreaker</a>
                    </h2>
                    <sup>$ 299,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <span class="label label-info">-50%</span>
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-5.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Cotton T-Shirt</a>
                    </h2>
                    <sub>$ 49,-</sub>
                    <sup>$ 19,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>

    <!-- === product-item === -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <article>
            <div class="info">
                <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="image">
                    <a href="#productid1" class="mfp-open">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/cloth-6.jpg' );  ?> alt="" width="360" />
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h5">
                        <a href="product.html">Windbreaker</a>
                    </h2>
                    <sup>$ 499,-</sup>
                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                </div>
            </div>
        </article>
    </div>
</div>

<!-- === button more === -->

<div class="wrapper-more">
    <a href="products-grid.html" class="btn btn-lg">View store</a>
</div>
</section>

<!-- ========================  Block banner shop  ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Banner</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-lg-6">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/cat-1.jpg' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Luxary SportsWare</h2>
                    </div>
                    <div class="description">
                        <ul>
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-lg-6">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/cat-2.jpg' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Luxary Accessories</h2>
                    </div>
                    <div class="description">
                        <ul class="col">
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>


</div> <!--/row-->
</section>


<!-- ========================  Stretcher widget ======================== -->

<section class="stretcher-wrapper">

<!-- === stretcher header === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h1 class="h2 title">Latest Designs</h1>
            <div class="text">
                <p>Give the gift of polished punctuality</p>
            </div>
        </div>
    </div>
</header>

<!-- === stretcher === -->

<ul class="stretcher">

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/shop-6.jpg');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro" ></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Cotton Tote Bag</h4>
            <figcaption>Collection of prestigious, high precision timepieces</figcaption>
        </figure>
        <!--anchor-->
        <a href="#">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/shop-7.jpg');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Unisex Lightweight Zip Up Windbreaker</h4>
            <figcaption>Choose among a wonderful variety of refined and feminine timepieces</figcaption>
        </figure>
        <!--anchor-->
        <a href="#">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/shop-8.jpg');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Wine Tumble</h4>
            <figcaption>Discover your favourite model by combining materials</figcaption>
        </figure>
        <!--anchor-->
        <a href="#">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/shop-9.jpg');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Men's Premium Cotton T-Shirt</h4>
            <figcaption>Men's Premium Cotton T-Shirt collection of luxurious pieces</figcaption>
        </figure>
        <!--anchor-->
        <a href="#">Anchor link</a>
    </li>

    <!-- === stretcher item more=== -->

    <li class="stretcher-item more">
        <div class="more-icon">
            <span data-title-show="Show more" data-title-hide="+"></span>
        </div>
        <a href="#"></a>
    </li>

</ul>
</section>

<!-- ========================  Cards ======================== -->
<section id="page-interiors" class="cards">
<div class="wrapper-more">
                <a href="products-grid.html" class="btn btn-lg">View more</a>
            </div>
        </section>
<!-- ========================  Blog ======================== -->

<section class="blog blog-widget blog-animation">

<!-- === blog header === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h1 class="h2 title">Blog</h1>
            <div class="text">
                <p>Latest news from the blog</p>
            </div>
        </div>
    </div>
</header>

<div class="container">

    <div class="row">

        <!-- === blog item === -->

        <div class="col-sm-3">
            <article>
                <a href="article.html">
                    <div class="image" style="background-image:url(<?php echo get_theme_file_uri( 'assets/images/blog-1.jpg' );  ?>)">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/blog-1.jpg' );  ?> alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <div class="date">
                                <span>MAR</span>
                                <strong>08</strong>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="h5">Turn off the lights before bed with one word</h2>
                        </div>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-sm-3">
            <article>
                <a href="article.html">
                    <div class="image" style="background-image:url(<?php echo get_theme_file_uri( 'assets/images/blog-2.jpg' );  ?>)">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/blog-2.jpg' );  ?> alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <div class="date">
                                <span>MAR</span>
                                <strong>03</strong>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="h5">Lock the front door when you head to work</h2>
                        </div>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-sm-3">
            <article>
                <a href="article.html">
                    <div class="image" style="background-image:url(<?php echo get_theme_file_uri( 'assets/images/blog-3.jpg' );  ?>)">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/blog-3.jpg' );  ?> alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <div class="date">
                                <span>MAR</span>
                                <strong>01</strong>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="h5">Get a notification when your kids walk in the door</h2>
                        </div>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-sm-3">
            <article>
                <a href="article.html">
                    <div class="image" style="background-image:url(<?php echo get_theme_file_uri( 'assets/images/blog-4.jpg' );  ?>)">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/blog-4.jpg' );  ?> alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <div class="date">
                                <span>MAR</span>
                                <strong>01</strong>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="h5">Wake up to a warm cup of coffee</h2>
                        </div>
                    </div>
                </a>
            </article>
        </div>

    </div> <!--/row-->
</div>
<!-- === button more === -->

<div class="wrapper-more">
    <a href="blog-grid.html" class="btn btn-lg">View all posts</a>
</div> <!--/container-->
</section>


<!-- ========================  Banner ======================== -->

<section class="banner">

<!-- === header === -->

<h2 class="hidden">Banner</h2>

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Our story</h2>
            <p>
                We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout Italy to find exceptional
                artisans and bring their unique handcrafted objects to connoisseurs everywhere.
            </p>
            <p>
                <a href="<?php bloginfo('url'); ?>/index.php/about-us/" class="btn btn-clean">Read full story</a>
            </p>
        </div>
    </div>
</div>
</section>

<!-- ========================  Instagram ======================== -->
  <!-- ========================  Instagram ======================== -->

  <section class="instagram">

<!-- === instagram header === -->

<header>
    <h2 class="h3 title">
        Follow us<br>
        <br>
        <i class="fa-brands fa-instagram fa-2xl" style="color: #6f7071;"></i><br><br>
        Instagram
    </h2>
    <div class="text">
        <p>@oneangryskull</p>
    </div>
</header>

<!-- === instagram gallery === -->

<div class="gallery clearfix">
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/square-2.jpg' );  ?> alt="Alternate Text" />
    </a>
</div> <!--/gallery-->

</section>



<?php get_footer(); ?>
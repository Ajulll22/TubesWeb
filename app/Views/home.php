<!DOCTYPE html>
<html lang="en">
<head>
<title>Kimi Themes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/kimi.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl_carousel/owl.theme.default.css">

    <!--tipue search-->
    <link rel="stylesheet" href="assets/css/tipuesearch/tipuesearch.css">

    <link rel="stylesheet" href="assets/css/prism/prism.css">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid hidden-xs">
        <div class="row">
                <p class="text-center logo-container"><a href="Dashboard"><img src="assets/images/logo/logo.png" width="45"></a></p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="navbar-header pull-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-short"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar icon-medium"></span>
            </button>
        </div>
        <div class="visible-xs logo-center">
            <p class="text-center logo-container visible-xs"><a href="index.html"><img src="assets/images/logo.png" width="90"></a></p>
        </div>
        <div class="visible-xs pull-right">
            <button class="pull-left search-button-mobile" id="buttonOpenSearchbarMobile"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="clearfix"></div>

        <div class="fly-searchbar" style="display: none;">
            <div class="top-nav-searchbar searchbar-mobile">
                <div class="input-group">
                    <form action="search.html">
                        <input class="form-control" type="text" name="q" id="tipue_search_input" placeholder="Search for" autofocus="autofocus">
                    </form>
                    <button class="pull-right" id="buttonCloseSearchbarMobile"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="Dashboard">Dashboard</a></li>
                <li><a href="Home">Shop</a></li>
                <li><a href="About">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Profil">Edit Profil</a></li>
                        <li><a href="Login">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart (2)</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="cart-flyout">
                                <h4 class="text-oswald">Recently Added Product(s)</h4>
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 less-padding">
                                        <img src="assets/images/brownies.jpg" width="100%">
                                    </div>
                                    <div class="col-sm-8 col-xs-9">
                                        <span class="text-gray-1">Brownies Chocolate</span>
                                        <p class="text-gray-2">1 x 50.000</p>
                                    </div>
                                    <!--<div class="col-sm-2">-->
                                    <!--<button><i class="fa fa-times-circle" aria-hidden="true"></i></button>-->
                                    <!--</div>-->
                                </div>

                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 less-padding">
                                        <img src="assets/images/lapisSurabaya.jpg" width="100%">
                                    </div>
                                    <div class="col-sm-8 col-xs-9">
                                        <span class="text-gray-1">Lapis Surabaya</span>
                                        <p class="text-gray-2">1 x 175.000</p>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 less-padding"><h4><small>Total</small><br><span>IDR 225.000</span></h4></div>
                                    <div class="col-sm-6 col-xs-6 less-padding">
                                <a href="Cart" class="button-green-top-nav btn pull-right btn-block text-oswald text-uppercase">View Cart</a>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="kimi-container">

<div class="container-fluid less-padding">
    <h2 class="default-userProductList-InfoBar-title text-center"><i aria-hidden="true"></i> Category</h2>
    <div class="small-slider owl-carousel owl-theme">
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">5 Products</span>
            <p>Fashion</p>
            <img src="assets/foto/fashion.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">15 Products</span>
            <p>Food</p>
            <img src="assets/images/tag_doughnut.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">52 Products</span>
            <p>Music</p>
            <img src="assets/foto/music.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">100 Products</span>
            <p>Otomotif</p>
            <img src="assets/foto/otomotif.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Gadget</p>
            <img src="assets/foto/gadget.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Makeup</p>
            <img src="assets/foto/makeup.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Kitchen</p>
            <img src="assets/foto/kitchen.jpg" width="267px" height="200px">
        </a>
        <a href="products.html" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">5 Products</span>
            <p>Decoration</p>
            <img src="assets/foto/decoration.jpg" width="267px" height="200px">
        </a>

    </div>
</div>

<div class="clearfix maya-tiny-padding"></div>
<div class="container">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <h2 class="default-userProductList-InfoBar-title text-center"><i class="fa fa-heart-o" aria-hidden="true"></i> This Week Favoourites</h2>
            <!--<div class="col-sm-6 col-md-4" data-behavior="sample_code">-->
                <!--<a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">-->
                    <!--<img src="https://res.cloudinary.com/kimithemes/image/upload/c_thumb,h_480,w_480/v1506329237/seafood_rd0j5y.jpg" alt="Seafood">-->
                <!--</a>-->
                <!--<div class="caption box">-->
                    <!--<h3>Seafood</h3>-->
                    <!--<div class="row">-->
                        <!--<div class="col-sm-8 col-xs-6">-->
                            <!--<p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>-->
                            <!--<span class="min-order">10 pcs min order</span>-->
                        <!--</div>-->

                        <!--<div class="col-sm-4 col-xs-6">-->
                            <!--<button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->

            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/risotto_square.jpg" alt="risotto lemon">
                </a>
                <div class="caption box">
                    <h3>Lemon Risotto</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="col-sm-6 col-md-4" data-behavior="sample_code">-->
                <!--<a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">-->
                    <!--<img src="https://res.cloudinary.com/kimithemes/image/upload/c_thumb,h_480,w_480/v1506329233/seafood_2_vcuolq.jpg" alt="Seafood">-->
                <!--</a>-->
                <!--<div class="caption box">-->
                    <!--<h3>Seafood</h3>-->
                    <!--<div class="row">-->
                        <!--<div class="col-sm-8 col-xs-6">-->
                            <!--<p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>-->
                            <!--<span class="min-order">5 pcs min order</span>-->
                        <!--</div>-->

                        <!--<div class="col-sm-4 col-xs-6">-->
                            <!--<button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->

            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/oats.jpg" alt="Oats Cake">
                </a>
                <div class="caption box">
                    <h3>Oats Cake</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 4.500 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/mango.jpg" alt="Mango Cake">
                </a>
                <div class="caption box">
                    <h3>Mango Cake</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 23.000 / pcs</p>
                            <span class="min-order">5 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/cake_square.jpg" alt="Cake">
                </a>
                <div class="caption box">
                    <h3>Cake</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 23.000 / pcs</p>
                            <span class="min-order">5 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/seafood_square.jpg" alt="cake">
                </a>
                <div class="caption box">
                    <h3>Party Cake</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="assets/images/moesli.jpg" alt="Moesli">
                </a>
                <div class="caption box">
                    <h3>Moesli</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="product-detail-tag-container col-md-12 text-center">
            <button class="btn outline-white-button text-center">Load More</button>
        </div>
    </div>




<!--include footer-->
<div class="include-footer"></div>


<script src="assets/js/jquery.min.js"></script>

<!-- owl carousel -->
<script src="assets/js/owl_carousel/owl.carousel.js"></script>

<!--boostrap js-->
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>

<!--tipuesearch-->
<script src="assets/js/tipusearch/tipuesearch_content.js"></script>
<script src="assets/js/tipusearch/tipuesearch_set.js"></script>
<script src="assets/js/tipusearch/tipuesearch.js"></script>

<script src="assets/js/prism/prism.js"></script>

<!--kimi basic js-->
<script src="assets/js/kimi.js"></script>



</body>
</html>

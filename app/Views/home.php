<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/kimi.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl_carousel/owl.theme.default.css">

    <!--tipue search-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/tipuesearch/tipuesearch.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/prism/prism.css">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid hidden-xs">
        <div class="row">
                <p class="text-center logo-container"><a href="<?php echo base_url() ?>/Dashboard"><img src="<?php echo base_url() ?>/assets/images/logo/logo.png" width="45"></a></p>
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
            <p class="text-center logo-container visible-xs"><a href="<?php echo base_url() ?>/Dashboard"><img src="<?php echo base_url() ?>/assets/images/logo.png" width="90"></a></p>
        </div>
        <div class="visible-xs pull-right">
            <button class="pull-left search-button-mobile" id="buttonOpenSearchbarMobile"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="clearfix"></div>




        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>/Dashboard">Dashboard</a></li>
                <li class="active"><a href="<?php echo base_url() ?>/Home">Shop</a></li>
                <li><a href="<?php echo base_url() ?>/Pesanan">Pesanan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['user_email']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>/Login/logout">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart (<?php echo count($total); ?>)</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="cart-flyout">
                                <h4 class="text-oswald">Recently Added Product(s)</h4>

                                <?php foreach($items as $key => $item) { ?>
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 less-padding">
                                        <img src="<?php echo base_url('upload/product/'.$item['photo']); ?>" width="50px">
                                    </div>
                                    <div class="col-sm-8 col-xs-9">
                                        <span class="text-gray-1"><?php echo $item['name']; ?></span>
                                        <p class="text-gray-2"><?php echo $item['quantity']; ?> x <?php echo $item['price']; ?></p>
                                    </div>

                                </div>
                                <?php } ?>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 less-padding"><h4><small>Total</small><br><span>Rp. <?php echo number_format($jumlah, 0, 0, '.'); ?></span></h4></div>
                                    <div class="col-sm-6 col-xs-6 less-padding">
                                <a href="<?php echo base_url() ?>/Cart" class="button-green-top-nav btn pull-right btn-block text-oswald text-uppercase">View Cart</a>
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
        <a href="<?php echo base_url() ?>/Home/Fashion" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">5 Products</span>
            <p>Fashion</p>
            <img src="<?php echo base_url() ?>/assets/foto/fashion.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Food" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">15 Products</span>
            <p>Food</p>
            <img src="<?php echo base_url() ?>/assets/images/tag_doughnut.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Music" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">52 Products</span>
            <p>Music</p>
            <img src="<?php echo base_url() ?>/assets/foto/music.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Otomotif" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">100 Products</span>
            <p>Otomotif</p>
            <img src="<?php echo base_url() ?>/assets/foto/otomotif.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Gadget" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Gadget</p>
            <img src="<?php echo base_url() ?>/assets/foto/gadget.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Makeup" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Makeup</p>
            <img src="<?php echo base_url() ?>/assets/foto/makeup.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Kitchen" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">10 Products</span>
            <p>Kitchen</p>
            <img src="<?php echo base_url() ?>/assets/foto/kitchen.jpg" width="267px" height="200px">
        </a>
        <a href="<?php echo base_url() ?>/Home/Decoration" class="item">
            <div class="scrim"></div>
            <span class="small-text-overlay">5 Products</span>
            <p>Decoration</p>
            <img src="<?php echo base_url() ?>/assets/foto/decoration.jpg" width="267px" height="200px">
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
            <?php foreach($product as $row):?>
            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="<?php echo base_url('Home/Detail/'.$row->product_id); ?>" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="<?php echo base_url('upload/product/'.$row->product_img) ?>" width="267px" height="200px">
                </a>
                <div class="caption box">
                    <h3><?php echo $row->product_name; ?></h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp.<?php echo $row->product_price; ?></p>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='<?php echo base_url('cart/beli/'.$row->product_id); ?>'" class="btn default-userProductList-CardList-button pull-right" role="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

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



        </div>
    </div>

    <div class="row">
        <div class="product-detail-tag-container col-md-12 text-center">
            <button class="btn outline-white-button text-center">Load More</button>
        </div>
    </div>




<!--include footer-->
<div class="include-footer"></div>


<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>

<!-- owl carousel -->
<script src="<?php echo base_url() ?>/assets/js/owl_carousel/owl.carousel.js"></script>

<!--boostrap js-->
<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

<!--tipuesearch-->
<script src="<?php echo base_url() ?>/assets/js/tipusearch/tipuesearch_content.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tipusearch/tipuesearch_set.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tipusearch/tipuesearch.js"></script>

<script src="<?php echo base_url() ?>/assets/js/prism/prism.js"></script>

<!--kimi basic js-->
<script src="<?php echo base_url() ?>/assets/js/kimi.js"></script>



</body>
</html>

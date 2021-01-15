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




<div class="container">

    <div class="kimi-container">


<div class="container" style="background: white; padding-bottom: 50px;">
    <div class="col-md-6">
        <!--carousel-->
        <div id="main_area">
            <!-- Slider -->
            <div class="row" style="margin-top: 25px;">

                <div class="col-sm-9 less-padding">
                    <div class="col-xs-12 less-padding" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="<?php echo base_url('upload/product/'.$product['product_img']) ?>">
                                        </div>

                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->


            </div>

        </div>
        <!--carousel ends-->
    </div>

    <div class="col-md-6" style="position: relative;">
        <h1><?php echo $product['product_name']; ?></h1>

        <div class="row">
            <div class="col-md-10">
            </div>
        </div>


        <p class="product-description"><?php echo $product['product_description']; ?></p>



        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6">
                <h3>Rp. <?php echo $product['product_price']; ?></h3>
            </div>
        </div>

        <div class="product-detail-action-button-container">
            <button onclick="location.href='<?php echo base_url('cart/beli/'.$product['product_id']); ?>'" class="btn button-add-to-bag" style="margin-right: 10px;">Add to Cart</button>
            <button class="btn btn-default button-black button-learn-more" id="deleteBookmarkButton" style="display: none;">Delete Favourite</button>
        </div>


    </div>
</div>



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

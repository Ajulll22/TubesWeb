<head>
<title>Checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/kimi.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl_carousel/owl.theme.default.css">


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





<div class="container">

    <div class="kimi-container">
        <!--breadcrumb start-->
        <ol class="breadcrumb hidden-xs">
            <li><a href="index.html">Home</a></li>
            <li>Cart</li>
            <li>Customer Information</li>
            <li>Shipping Mehtod</li>
            <li>Payment Method</li>
        </ol>


        <div class="row">
                <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                    <h3 class="section-title">Shopping Cart</h3>
                    <div class="row">
                        <div class="col-md-2 col-xs-6 less-padding-right">
                            <img src="assets/images/brownies.jpg" width="100%">
                        </div>
                        <div class="col-md-5 col-xs-12">
                            <span>Brownies Chocolate</span><br/>
                            <p class="text-gray-3 text-thin">Sucicakes</p>
                            <p class="section-title">IDR 50.000</p>
                            <button class="btn btn-default outline-default-button outline-small-default-button">Remove</button>
                        </div>

                        <div class="col-md-3 col-xs-7">
                            <p>Quantity</p>
                            <form class="form-inline">
                                <div class="form-group pull-left"><button class="btn btn-default">-</button></div>
                                <div class="form-group pull-left">
                                    <input type="number" class="form-control number-input" id="" placeholder="1" style="width: 60px;">
                                </div>
                                <div class="form-group"><button class="btn btn-default">+</button></div>
                            </form>
                        </div>
                        <div class="col-md-2 col-xs-5">
                            <p class="text-right">Subtotal</p>
                            <p class="text-right section-title">IDR 50.000</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 col-xs-6 less-padding-right">
                            <img src="assets/images/lapisSurabaya.jpg" width="100%">
                        </div>
                        <div class="col-md-5 col-xs-12">
                            <span>Lapis Surabaya</span><br/>
                            <p class="text-gray-3 text-thin">Sucicakes</p>
                            <p class="section-title">IDR 175.000</p>
                            <button class="btn btn-default outline-default-button outline-small-default-button">Remove</button>
                        </div>

                        <div class="col-md-3 col-xs-7">
                            <p>Quantity</p>
                            <form class="form-inline">
                                <div class="form-group pull-left"><button class="btn btn-default">-</button></div>
                                <div class="form-group pull-left">
                                    <input type="number" class="form-control number-input" id="" placeholder="1" style="width: 50px">
                                </div>
                                <div class="form-group"><button class="btn btn-default">+</button></div>
                            </form>
                        </div>
                        <div class="col-md-2 col-xs-5">
                            <p class="text-right">Subtotal</p>
                            <p class="text-right section-title">IDR 50.000</p>
                        </div>
                    </div>


                </div>

                <a href="Checkout" class="btn btn-default pull-right button-black">Continue to checkout</a>
                <div class="clearfix maya-small-padding"></div>
            </div>
    </div>

</div><!-- /.container -->

<!--include footer-->
<div class="include-footer"></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets
/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="./js/bootstrap.min.js"></script>

<!--kimi basic js-->
<script src="js/kimi.js"></script>

</body>
</html>

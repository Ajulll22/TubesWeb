<!DOCTYPE html>
<html lang="en">
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


        <div class="box-bg-gray visible-xs less-padding-left">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

            <a style="margin-right: 15px;" class="text-black" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Show Order Summary <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <strong class="pull-right">IDR 225.000</strong>

            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
                <div class="row">
                    <div class="box-bg-gray">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/images/brownies.jpg" width="100%">
                            </div>
                            <div class="col-xs-5">
                                <span>Brownies Chocolate</span><br/>
                                <small>Sucicakes</small>
                            </div>
                            <div class="col-xs-4">
                                <p class="text-right">IDR 50.000</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/images/lapisSurabaya.jpg" width="100%">
                            </div>
                            <div class="col-xs-5">
                                <span>Lapis Surabaya</span><br/>
                                <small>Sucicakes</small>
                            </div>
                            <div class="col-xs-4">
                                <p class="text-right">IDR 175.000</p>
                            </div>
                        </div>

                        <hr>

                        <form class="form-inline">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Discount Code">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-default button-black-medium">Apply</button>
                            </div>
                        </form>
                        <hr/>

                        <div class="row">
                            <div class="col-xs-6">Subtotal</div>
                            <div class="col-xs-6"><p class="text-right"><strong>IDR 225.000</strong></p></div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">Shipping + Trx Fee</div>
                            <div class="col-xs-6"><p class="text-right"><strong> IDR 25.000 </strong></p></div>
                        </div>

                        <hr/>

                        <div class="pull-left">Total</div>
                        <div class="pull-right"><strong>IDR 250.000</strong></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>


        <div class="row">
            <div class="col-md-8">

                <div class="">
                    <div class="box-bg-white">
                        <h3 class="section-title">Alamat Pengiriman</h3>
                        <div class="row">
                            <div class="col-sm-10">
                                <p class="text-gray-4">Jalan Madrasah 2 no 30 D RT 08 / RW 02 Kelurahan Sukabumi Utara Kecamatan Kebon Jeruk Jakarta 11540</p>
                            </div>

                            <div class="col-sm-2">
                                <a href="checkout1.html" class="btn btn-default button-black-medium">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="box-bg-white">
                        <h3 class="section-title">Metode Pengiriman</h3>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                <strong>Shipping with Porter.id (Estimasi Kedatangan 1 jam) Rp 25.000</strong>
                                <p>Porter.id menghitung biaya berdasarkan jarak. Estimasi jarak pengiriman adalah 5 km maka biaya pengiriman adalah Rp 25.000. Pesanan akan mendapat perlindungan khusus.</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                <strong>Shipping with Grab Parcell (Estimasi Kedatangan 5-6 jam) Rp 25.000</strong>
                                <p>Grab Parcell menghitung biaya per pengiriman. Produk akan disimpan terlebih dulu. Waktu kedatangan produk bisa sore - malam hari.</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
                                <strong>Shipping with Go-Jek (Estimasi Kedatangan 1 jam) Rp 25.000</strong>
                                <p>Go-jek menghitung biaya berdasarkan jarak. Pesanan akan sampai lebih cepat. Perlindungan pesanan standard Go-jek</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option2">
                                <strong>Shipping with E2B (Estimasi Kedatangan 1 jam) Rp 25.000</strong>
                                <p>E2B menghitung biaya berdasarkan pesanan dengan tarif flat untuk Jabodetabek. Pesanan akan mendapat perlindungan khusus.</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                        <h3 class="section-title">Metode Pembayaran</h3>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="optionsRadios1" value="option1" checked>
                                <strong><img src="assets/images/logo/bca.png"></img>  BCA</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="optionsRadios2" value="option2">
                                <strong><img src="assets/images/logo/bri.png"></img>  BRI</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
                                <strong><img src="assets/images/logo/bni.png"></img>  BNI</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option2">
                                <strong><img src="assets/images/logo/mandiri.png"></img>  Mandiri</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                    </div>
                </div>

                <a href="Cart" class="text-gray-1"><i class="fa fa-angle-left" aria-hidden="true"></i>Cart</a>
                <a href="Thanks" class="btn btn-default pull-right button-black hidden-xs">Complete Order</a>
                <a href="checkout3.html" class="btn btn-default pull-right button-black visible-xs">Payment Method <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <div class="clearfix maya-small-padding"></div>

            </div>

            <div class="col-md-4">
                <div class="box-bg-white hidden-xs">
                    <div class="row">
                        <div class="col-md-2 col-xs-6 less-padding-right">
                            <img src="assets/images/brownies.jpg" width="100%">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <span>Brownie Chocolate</span><br/>
                            <span class="text-gray-2 text-thin">Sucicakes</span>
                        </div>
                        <div class="col-md-4 col-xs-5">
                            <p class="text-right">IDR 50.000</p>
                        </div>
                        <div class="clearfix maya-small-padding"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-xs-6 less-padding-right">
                            <img src="assets/images/lapisSurabaya.jpg" width="100%">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <span>Brownie Chocolate</span><br/>
                            <span class="text-gray-2 text-thin">Sucicakes</span>
                        </div>
                        <div class="col-md-4 col-xs-5">
                            <p class="text-right">IDR 50.000</p>
                        </div>
                        <div class="clearfix maya-small-padding"></div>
                    </div>

                    <hr>

                    <form class="form-inline">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8"><input type="text" class="form-control" id="" placeholder="Discount Code"></div>
                                <div class="col-sm-4"><button type="submit" class="btn btn-default button-black-medium btn-block">Apply</button></div>
                            </div>
                        </div>

                    </form>
                    <hr/>

                    <div class="row">
                        <div class="col-sm-8">Subtotal</div>
                        <div class="col-sm-4 text-right">IDR 207.000</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 less">Shipping + Transaction Fee</div>
                        <div class="col-sm-4 text-right">-</div>
                    </div>


                    <hr/>
                    <div class="row">
                        <div class="col-sm-4 less">Total</div>
                        <div class="col-sm-8 text-right"><h3 class="less-margin"><small>IDR</small> 232.000</h3></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<!--include footer-->
<div class="include-footer"></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>

<!--kimi basic js-->
<script src="/assetsjs/kimi.js"></script>

</body>
</html>

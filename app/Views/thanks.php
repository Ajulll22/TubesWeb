

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Thank you</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/kimi.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <![endif]-->
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


        <div class="box-bg-gray visible-xs less-padding-left">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

            <a style="margin-right: 15px;" class="text-black" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Show Order Summary <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <strong class="pull-right">IDR 250.000</strong>

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

                <div class="row">
                    <div class="box-bg-white col-md-12 col-xs-12">
                        <h3 class="section-title">Thank you</h3>
                        <p class="">Your order has been received. Here is the detail of your order</p>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-6">
                                <p><strong>Nama Pemesan:</strong><br> <span class="text-gray-1">Philip Herlambang</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Email:</strong><br> <span class="text-gray-1">philip.herlambang@gmail.com</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Order Number:</strong><br> <span class="text-gray-1">BK125</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Hari / Tanggal:</strong><br> <span class="text-gray-1">Kamis 10 Agustus 2017</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Hari Tanggal Pesanan:</strong><br> <span class="text-gray-1">Jumat 11 Agustus 2017</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Jam Kedatangan Pesanan:</strong><br> <span class="text-gray-1">12:30 dengan Porter.id</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <p><strong>Alamat Pengiriman</strong><br> <span class="text-gray-1">Jl Madrasah 2 no 30 D RT 08 / RW 02 Kelurahan Sukabumi Utara Kecamatan Kebon Jeruk Jakarta Barat 11540</span></p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="box-bg-white col-md-12 col-xs-12">
                        <h3 class="section-title">Order Details</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>1 x Brownies Chocolate</p>
                            </div>

                            <div class="col-sm-6">
                                <p>IDR 50.000</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p>1 x Lapis Surabaya</p>
                            </div>

                            <div class="col-sm-6">
                                <p>IDR 175.000</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Sub Total</strong>
                            </div>

                            <div class="col-sm-6">
                                <strong>IDR 225.000</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p>Shipping Cost and Transaction Fee</p>
                            </div>

                            <div class="col-sm-6">
                                <p>IDR 25.000</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Grand Total</strong>
                            </div>

                            <div class="col-sm-6">
                                <strong>IDR 250.000</strong>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-6">
                                <strong>Info Pembayaran</strong>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>No Rek.</strong>
                            </div>

                            <div class="col-sm-6">
                                <p>8180223450</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nama Rekening</strong>
                            </div>

                            <div class="col-sm-6">
                                <p>PT.BetaPay</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="Dashboard" class="btn btn-default pull-right button-black">Back to Homepage</a>
                <div class="clearfix maya-small-padding"></div>

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
<script src="assets/js/kimi.js"></script>

</body>
</html>

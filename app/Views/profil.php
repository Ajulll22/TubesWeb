

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout 1</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/kimi.css" rel="stylesheet">
    <link href="assets/font-awesome.min.css" rel="stylesheet">

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

        <div class="clearfix"></div>

        <div class="row">
                <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                    <h3 class="section-title">Customer Information <span class="text-right hidden-xs"><small>Already have an account? <a href="login.html" class="text-secondary">Login</a> </small></span></h3>

                    <div class="row">
                        <div class="col-md-9">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Subscribe to our newsletter
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>



                    <h3 class="section-title">Alamat Pengiriman</h3>

                    <div class="row">
                        <div class="col-md-9">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Nama Perusahaan (optional)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Address Line 1">
                                </div>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Address Line 1">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Address Line 1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 col-xs-6">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Kota Administrasi <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Jakarta Barat</a></li>
                                                <li><a href="#">Jakarta Selatan</a></li>
                                                <li><a href="#">Jakarta Timur</a></li>
                                                <li><a href="#">Jakarta Pusat</a></li>
                                                <li><a href="#">Jakarta Utara</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Bekasi</a></li>
                                                <li><a href="#">Depok</a></li>
                                                <li><a href="#">Tangerang</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-xs-6">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Kode Pos <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">11540</a></li>
                                                <li><a href="#">11530</a></li>
                                                <li><a href="#">11520</a></li>
                                                <li><a href="#">11510</a></li>
                                                <li><a href="#">11550</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix" style="margin-bottom: 15px;"></div>

                                <div class="form-group">
                                    <input type="tel" class="form-control" id="" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Tambahan Keterangan">
                                </div>

                



                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Save this information for next time
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="checkout2.html" class="btn btn-default pull-left button-black hidden-xs">Save</a>
                <div class="clearfix maya-small-padding"></div>

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

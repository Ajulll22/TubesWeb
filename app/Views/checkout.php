<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/kimi.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl_carousel/owl.theme.default.css">

    <!--tipue search-->
    <link rel="stylesheet" href="/assets/css/tipuesearch/tipuesearch.css">

    <link rel="stylesheet" href="/assets/css/prism/prism.css">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid hidden-xs">
        <div class="row">
                <p class="text-center logo-container"><a href="/Dashboard"><img src="/assets/images/logo/logo.png" width="45"></a></p>
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
            <p class="text-center logo-container visible-xs"><a href="/index.html"><img src="/assets/images/logo.png" width="90"></a></p>
        </div>
        <div class="visible-xs pull-right">
            <button class="pull-left search-button-mobile" id="buttonOpenSearchbarMobile"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="clearfix"></div>




        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/Dashboard">Dashboard</a></li>
                <li class="active"><a href="/Home">Shop</a></li>
                <li><a href="/Pesanan">Pesanan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['user_email']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Login/logout">Log Out</a></li>
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
                                <a href="/Cart" class="button-green-top-nav btn pull-right btn-block text-oswald text-uppercase">View Cart</a>
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


                        <hr>

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
                    <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                    <h3 class="section-title">Alamat Pengiriman</h3>

                    <form action="<?php echo base_url('Checkout/store'); ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="order_nama" value="<?php echo $user['user_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="order_email" readonly value="<?php echo $user['user_email']; ?>">
                                </div>


                                <div class="row">
                                    <div class="col-md-5 col-xs-6">
                                        <div class="form-group">
                                        <label for="kota">Pilih Kota </label>
                                        <select class="form-control" name="kota">
                                                <option value="Bandar Lampung">Bandar Lampung</option>
                                                <option value="Metro">Metro</option>
                                                <option value="Tanggamus">Tanggamus</option>
                                                <option value="Kota Bumi">Kota Bumi</option>
                                            </select>
                                        </div>
                                    </div>

        
                                </div>


                                <div class="row">
                                    <div class="col-md-5 col-xs-6">
                                        <div class="form-group">
                                        <label for="kecamatan">Pilih Kecamatan </label>
                                        <select class="form-control" name="kecamatan">
                                                <option value="Tanjung Senang">Tanjung Senang</option>
                                                <option value="Kedaton">Kedaton</option>
                                                <option value="Rajabasa">Rajabasa</option>
                                                <option value="Kemiling">Kemiling</option>
                                            </select>
                                        </div>
                                    </div>

        
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                </div>



                                <div class="clearfix" style="margin-bottom: 15px;"></div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="telpon" placeholder="Nomor Telpon">
                                </div>

                                <div class="form-group">
                                <label for="barang">Barang Yang Dipilih </label>
                                    <input type="text" class="form-control" name="barang" readonly value="<?php foreach($items as $key => $item) { echo $item['name']; ?> , <?php } ?>">
                                </div>





                            
                    </div>
                </div>


                <div class="">
                    <div class="box-bg-white">
                        <h3 class="section-title">Metode Pengiriman</h3>
                        <div class="radio">
                            <label>
                                <input type="radio" name="shipping" id="shipping"  value="Porter.id" checked>
                                <strong>Shipping with Porter.id (Estimasi Kedatangan 1 jam) Rp 25.000</strong>
                                <p>Porter.id menghitung biaya berdasarkan jarak. Estimasi jarak pengiriman adalah 5 km maka biaya pengiriman adalah Rp 25.000. Pesanan akan mendapat perlindungan khusus.</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="shipping" id="shipping" value="Grab Parcell">
                                <strong>Shipping with Grab Parcell (Estimasi Kedatangan 5-6 jam) Rp 25.000</strong>
                                <p>Grab Parcell menghitung biaya per pengiriman. Produk akan disimpan terlebih dulu. Waktu kedatangan produk bisa sore - malam hari.</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="shipping" id="shipping" value="Go-jek">
                                <strong>Shipping with Go-Jek (Estimasi Kedatangan 1 jam) Rp 25.000</strong>
                                <p>Go-jek menghitung biaya berdasarkan jarak. Pesanan akan sampai lebih cepat. Perlindungan pesanan standard Go-jek</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="shipping" id="shipping" value="E2B">
                                <strong>Shipping with E2B (Rp 25.000)</strong>
                                <p>E2B menghitung biaya berdasarkan pesanan dengan tarif flat untuk daerah Lampung. Pesanan akan mendapat perlindungan khusus.</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                        <h3 class="section-title">Metode Pembayaran</h3>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment" value="BCA" checked>
                                <strong><img src="assets/images/logo/bca.png"></img>  BCA</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment" value="BRI">
                                <strong><img src="assets/images/logo/bri.png"></img>  BRI</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment" value="BNI">
                                <strong><img src="assets/images/logo/bni.png"></img>  BNI</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment"  value="Mandiri">
                                <strong><img src="assets/images/logo/mandiri.png"></img>  Mandiri</strong>
                                <p>Menerima transfer dari semua bank</p>
                            </label>
                        </div>
                    </div>
                </div>

                <a href="Cart" class="text-gray-1"><i class="fa fa-angle-left" aria-hidden="true"></i>Cart</a>
                <button type="submit" class="btn btn-default pull-right button-black hidden-xs">Complete Order</button>
                <div class="clearfix maya-small-padding"></div>
            </form>

            </div>

            <div class="col-md-4 ">
                <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">

                <?php foreach($items as $key => $item) { ?>
                    <div class="row">
                        <div class="col-md-3 col-xs-6 less-padding-right">
                        <img src="<?php echo base_url('upload/product/'.$item['photo']); ?>" width="70px">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <span><?php echo $item['name']; ?></span><br/>
                            <span class="text-gray-2 text-thin"><?php echo $item['quantity']; ?> x </span>
                        </div>
                        <div class="col-md-2 col-xs-5">
                            <p class="text-right"><?php echo $item['price']; ?></p>
                        </div>
                        <div class="clearfix maya-small-padding"></div>
                    </div>
                    <?php } ?>


                    <hr>


                    <hr/>

                    <div class="row">
                        <div class="col-sm-8">Subtotal</div>
                        <div class="col-sm-4 text-right">Rp. <?php echo number_format($jumlah, 0, 0, '.'); ?></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 less">Shipping + Transaction Fee</div>
                        <div class="col-sm-4 text-right">-</div>
                    </div>


                    <hr/>
                    <div class="row">
                        <div class="col-sm-4 less">Total</div>
                        <div class="col-sm-8 text-right"><h3 class="less-margin"><small> Rp. </small><?php echo number_format($jumlah+25000, 0, 0, '.'); ?></h3></div>
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
<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
<script src="assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>

<!--kimi basic js-->
<script src="/assetsjs/kimi.js"></script>

</body>
</html>

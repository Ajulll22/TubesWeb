<!DOCTYPE html>
<html lang="en">
<head>
<title>Bayar</title>

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



        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="box-bg-white col-md-12 col-xs-12">
                        <h3 class="section-title">Thank you</h3>
                        <?php foreach($order as $row):?>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-6">
                                <p><strong>Nama Pemesan:</strong><br> <span class="text-gray-1"><?php echo $row->order_name; ?></span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Email:</strong><br> <span class="text-gray-1"><?php echo $row->order_email; ?></span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Order Number:</strong><br> <span class="text-gray-1"><?php echo $row->order_id; ?></span></p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <p><strong>Alamat Pengiriman</strong><br> <span class="text-gray-1"><?php echo $row->alamat; ?> , <?php echo $row->kecamatan; ?> , <?php echo $row->kota; ?></span></p>
                            </div>
                        </div>


                    </div>
                </div>



        
                <div class="row">
                    <div class="box-bg-white col-md-12 col-xs-12">
                        <h3 class="section-title">Order Details</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Sub Total</strong>
                            </div>

                            <div class="col-sm-6">
                                <strong>Rp. <?php echo ($row->total)-25000; ?></strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p>Shipping Cost and Transaction Fee</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Rp. 25.000</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Grand Total</strong>
                            </div>

                            <div class="col-sm-6">
                                <strong>Rp. <?php echo $row->total; ?></strong>
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


                <a href="<?php echo base_url() ?>/Pesanan" class="btn btn-default pull-right button-black">Sudah Bayar</a>
                <div class="clearfix maya-small-padding"></div>

            </div>
                <?php endforeach;?>

            
        </div>
    </div>


</div><!-- /.container -->

<!--include footer-->
<div class="include-footer"></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

<!--kimi basic js-->
<script src="<?php echo base_url() ?>/assetsjs/kimi.js"></script>

</body>







    </div><!-- /.container -->

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

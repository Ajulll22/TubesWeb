<!DOCTYPE html>
<html lang="en">
<head>
<title>Pesanan</title>

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
                <li><a href="/Home">Shop</a></li>
                <li class="active"><a href="/Pesanan">Pesanan</a></li>
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
</nav>






<div class="container">

    <div class="kimi-container">
        <!--breadcrumb start-->
        <ol class="breadcrumb hidden-xs">
            <li><a href="/index.html">Home</a></li>
            <li>Cart</li>
            <li>Customer Information</li>
            <li>Shipping Mehtod</li>
            <li>Payment Method</li>
        </ol>


        <div class="row">
                <div class="box-bg-white col-md-12 col-xs-12 form-medium-padding">
                <?php echo form_open('cart/update'); ?>
                    <h3 class="section-title">Daftar Pesanan</h3>
                    
                    <?php foreach($order as $row):?>

                    <div class="row" >
                    <div class="col-md-5 col-xs-12">
                                <p><strong>Nama Pemesan:</strong><br> <span class="text-gray-1"><?php echo $row->order_name; ?></span></p>
                            </div>

                            <div class="col-md-3 col-xs-7">
                                <p><strong>Email:</strong><br> <span class="text-gray-1"><?php echo $row->order_email; ?></span></p>
                            </div>

                            <?php 
                            if( ($row->status) == 'dikirim' ) { ?>
                            <div class="col-md-2 col-xs-5 pull-right">
                                <a href="<?php echo base_url('Pesanan/status/'.$row->order_id); ?>" class="btn btn-default outline-default-button outline-small-default-button" ><i class="fa fa-edit"></i>SAMPAI</a>
                            </div>
                            <?php } ?>

                            <?php 
                            if( ($row->status) == 'belum dibayar' ) { ?>
                            <div class="col-md-2 col-xs-5 pull-right">
                                <a href="<?php echo base_url('Pesanan/bayar/'.$row->order_id); ?>" class="btn btn-default outline-default-button outline-small-default-button" ><i class="fa fa-edit"></i>BAYAR</a>
                            </div>
                            <?php } ?>




    
                        </div>

                        <div class="row">
                        <div class="col-md-5 col-xs-12">
                                <p><strong>Order Number:</strong><br> <span class="text-gray-1"><?php echo $row->order_id; ?></span></p>
                            </div>

                            <div class="col-md-3 col-xs-7">
                                <p><strong>Status:</strong><br> <span class="text-gray-1"><?php echo $row->status; ?></span></p>
                            </div>

                            <?php 
                            if( ($row->status) != 'dikirim' ) { ?>
                            <div class="col-md-2 col-xs-5 pull-right">
                                <a href="<?php echo base_url('Pesanan/delete/'.$row->order_id); ?>" class="btn btn-default outline-default-button outline-small-default-button" onclick="return confirm('Apakah Anda yakin ingin menghapus product ini dari keranjang belanja?')"><i class="fa fa-trash"></i>REMOVE</a>
                            </div>
                            <?php } ?>

                        </div>

                        <hr>
                        <?php endforeach;?>


                </div>

                <div class="clearfix maya-small-padding"></div>
            </div>
    </div>

</div><!-- /.container -->

<!--include footer-->
<div class="include-footer"></div>


<script src="/assets/js/jquery.min.js"></script>

<!-- owl carousel -->
<script src="/assets/js/owl_carousel/owl.carousel.js"></script>

<!--boostrap js-->
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/assets/js/bootstrap.min.js"></script>

<!--tipuesearch-->
<script src="/assets/js/tipusearch/tipuesearch_content.js"></script>
<script src="/assets/js/tipusearch/tipuesearch_set.js"></script>
<script src="/assets/js/tipusearch/tipuesearch.js"></script>

<script src="/assets/js/prism/prism.js"></script>

<!--kimi basic js-->
<script src="/assets/js/kimi.js"></script>



</body>
</html>

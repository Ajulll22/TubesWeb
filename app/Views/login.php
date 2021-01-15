<header>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.v4.css">
<title>Login</title>
</header>
<body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">
            <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
            <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
              <form action="/login/auth" method="post">
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" id="InputForPassword">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Save My Login Info</label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" >Login</button>
                  
                </div>
                <div>
                <h5 class="text-center">OR</h5>
                </div>
                <a href="<?php echo base_url() ?>/Register" class="text-center">Register A New Account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
    <script src="<?php echo base_url() ?>assets/js/popper.js"></script> 
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</body>
<header>
<link rel="stylesheet" href="assets/css/bootstrap.min.v4.css">
<title>Register</title>
</header>
<body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">
            <span class="font-weight-bold text-primary">Register</span></h5></div>
            <div class="card-body">
            <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
              <form action="/register/save" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="InputForName" placeholder="Name" value="<?= set_value('name') ?>">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" id="InputForEmail" placeholder="Email" value="<?= set_value('email') ?>">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="confpassword" class="form-control" id="InputForConfPassword" placeholder="Re-Type Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">I Agree To The Term</label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <div>
                <h5 class="text-center">OR</h5>
                </div>
                <a href="Login" class="text-center">Already Have Account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
  </body>
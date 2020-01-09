<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="name" class="form-control" placeholder="full name" name="name" value="<?= set_value('name'); ?>" autocomplete="off"> <label for="name">Full name</label>
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" class="form-control" placeholder="Email address" name="email" value="<?= set_value('email'); ?>" autocomplete="off"> <label for="email">Email address</label>
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password1" class="form-control" placeholder="Password" name="password1">
              <label for="password1">Password</label>
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password2" class="form-control" placeholder="Repeat Password" name="password2">
              <label for="password2">Repeat Password</label>
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Register Account</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Login Page</a>
          <a class="d-block small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
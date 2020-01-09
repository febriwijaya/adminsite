<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Change Your Password ?</div>

      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <h5 class="text-center"><?= $this->session->userdata('reset_email'); ?></h5>
        <form action="<?= base_url('auth/changepassword'); ?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter new password..">

              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password..">

              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Change Password</button>
        </form>

      </div>
    </div>
  </div>
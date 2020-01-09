<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login</div>

      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('auth'); ?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" class="form-control" placeholder="Email address" autofocus="autofocus" name="email" value="<?= set_value('email'); ?>" autocomplete="off">
              <label for="email">Email address</label>
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" placeholder="Password" name="password">
              <label for="password">Password</label>
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            </formacti>
            <div class="text-center">
              <a class="d-block small mt-3" href="<?= base_url('auth/registration'); ?>">Register an Account</a>
              <a class="d-block small" href="<?= base_url('auth/forgotPassword'); ?>">Forgot Password?</a>
            </div>
          </div>
      </div>
    </div>
<?php $this->load->view('backEnd/_partials/head.php'); ?>

<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h2>Login</h2>

        <h5>( Login yourself to get access )</h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> Enter Details To Login </strong>
          </div>
          <div class="panel-body">
            <p><?php echo lang('login_subheading'); ?></p>

            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open("auth/login"); ?>

            <p>
              <?php echo lang('login_identity_label', 'identity'); ?>
              <?php echo form_input($identity); ?>
            </p>

            <p>
              <?php echo lang('login_password_label', 'password'); ?>
              <?php echo form_input($password); ?>
            </p>

            <div class="form-group">
              <label class="checkbox-inline">

                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>Remember me
              </label>
              <span class="pull-right">
                <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
              </span>
            </div>

            <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

            <?php echo form_close(); ?>

          </div>

        </div>
      </div>


    </div>
  </div>

  <?php $this->load->view('backEnd/_partials/scripts.php'); ?>

</body>

</html>
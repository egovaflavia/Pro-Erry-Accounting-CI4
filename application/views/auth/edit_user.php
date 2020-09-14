<?php $this->load->view('backEnd/_partials/head.php'); ?>

<body>
      <div id="wrapper">
            <?php $this->load->view('backEnd/_partials/top-bar.php'); ?>
            <?php $this->load->view('backEnd/_partials/side-bar.php'); ?>
            <div id="page-wrapper">
                  <div id="page-inner">
                        <div class="row">
                              <div class="col-md-12">
                                    <h2><?= $title ?></h2>
                                    <h5><?= $sub ?></h5>
                              </div>
                        </div>
                        <hr />
                        <div class="row">
                              <div class="col-md-6">
                                    <?php echo lang('edit_user_subheading'); ?></p>

                                    <div id="infoMessage"><?php echo $message; ?></div>

                                    <?php echo form_open(uri_string()); ?>

                                    <div class="form-group">
                                          <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
                                          <?php echo form_input($first_name); ?>
                                    </div>


                                    <div class="form-group">
                                          <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                                          <?php echo form_input($last_name); ?>
                                    </div>

                                    <div class="form-group">
                                          <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                                          <?php echo form_input($company); ?>
                                    </div>

                                    <div class="form-group">
                                          <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                                          <?php echo form_input($phone); ?>
                                    </div>

                                    <div class="form-group">
                                          <?php echo lang('edit_user_password_label', 'password'); ?> <br />
                                          <?php echo form_input($password); ?>
                                    </div>

                                    <div class="form-group">
                                          <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?><br />
                                          <?php echo form_input($password_confirm); ?>
                                    </div>

                                    <!-- <?php if ($this->ion_auth->is_admin()) : ?>

                                          <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                                          <?php foreach ($groups as $group) : ?>
                                                <label class="checkbox" style="margin-left: 30px;">
                                                      <?php
                                                      $gID = $group['id'];
                                                      $checked = null;
                                                      $item = null;
                                                      foreach ($currentGroups as $grp) {
                                                            if ($gID == $grp->id) {
                                                                  $checked = ' checked="checked"';
                                                                  break;
                                                            }
                                                      }
                                                      ?>
                                                      <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                                      <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                                </label>
                                          <?php endforeach ?>

                                    <?php endif ?> -->

                                    <?php echo form_hidden('id', $user->id); ?>
                                    <?php echo form_hidden($csrf); ?>
                                    <?php echo form_submit('submit', lang('edit_user_submit_btn')); ?></p>

                                    <?php echo form_close(); ?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <?php $this->load->view('backEnd/_partials/scripts.php'); ?>

</body>

</html>
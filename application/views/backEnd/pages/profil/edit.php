<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('success'); ?>
            <?= form_open_multipart('profil/update') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company's Name</label>
                        <input type="text" name="name" value="<?= $profils->profil_name ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" value="<?= $profils->profil_phone ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>WhatsApp</label>
                        <input type="number" name="wa" value="<?= $profils->profil_phone ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Link Instagram</label>
                        <input type="text" name="ig" value="<?= $profils->profil_ig ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Link Twitter</label>
                        <input type="text" name="tw" value="<?= $profils->profil_tw ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Link Facebook</label>
                        <input type="text" name="fb" value="<?= $profils->profil_fb ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Link Lingked</label>
                        <input type="text" name="lk" value="<?= $profils->profil_lk ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $profils->profil_email ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?= $profils->profil_address ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>About</label>
                        <textarea name="about" rows="3"><?= $profils->profil_about ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Service</label>
                        <textarea name="service" rows="3"><?= $profils->profil_service ?></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('partner') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('partner/update') ?>
            <div class="row">
                <div class="col-md-12">
                    <label>Logo Partner</label>
                    <input type="hidden" name="id" value="<?= $partners->partner_id ?>">
                    <img class="img-responsive" src="<?= base_url('uploads/partner/' . $partners->partner_image) ?>" alt="No Image">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Logo Partner</label>
                        <input name="foto" type="file" />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
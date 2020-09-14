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
            <?= form_open_multipart('partner') ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Banner Headline</label>
                        <input name="foto_satu" type="file" required>
                    </div>
                    <div class="form-group">
                        <label>Banner Subheadline</label>
                        <input name="foto_dua" type="file" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close() ?>

        </div>
    </div>
</div>
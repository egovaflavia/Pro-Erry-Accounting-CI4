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
                        <label>Logo Partner</label>
                        <input name="foto" type="file" required />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close() ?>

        </div>
    </div>
</div>
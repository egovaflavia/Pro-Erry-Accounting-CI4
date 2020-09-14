<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('event') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('event/update') ?>
            <div class="row">
                <div class="col-md-12">
                    <label>Event Banner</label>
                    <input type="hidden" name="id" value="<?= $events->event_id ?>">
                    <img class="img-responsive" src="<?= base_url('uploads/event/' . $events->event_image) ?>" alt="No Image">
                </div>
                <div class="col-md-6">
                    <br>
                    <br>
                    <div class="form-group">
                        <label>Event Banner</label> <small class="text-danger"><i>Pilih file jika ingin mengubah</i></small>
                        <input name="foto" type="file" required />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
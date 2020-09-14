<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Data
        </div>
        <div class="panel-body">
            <a href="<?= site_url('banner') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('banner/update') ?>
            <div class="row">
                <div class="col-md-6">
                    <label>Headline</label>
                    <input type="hidden" name="id" value="<?= $banners->banner_id ?>">
                    <img class="img-responsive" src="<?= base_url('uploads/banner/' . $banners->banner_one) ?>" alt="No Image">
                </div>
                <div class="col-md-6">
                    <label>Subheadline</label>
                    <img class="img-responsive" src="<?= base_url('uploads/banner/' . $banners->banner_two) ?>" alt="No Image">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Banner Headline</label>
                        <input name="foto_one" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Banner Subheadline</label>
                        <input name="foto_two" type="file" />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
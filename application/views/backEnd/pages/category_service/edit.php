<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Slide Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('category-service') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('category-service/update') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category Service Name</label>
                        <input name="id" type="hidden" value="<?= $categorys->category_service_id ?>" />
                        <input name="name" type="text" value="<?= $categorys->category_service_name ?>" class="form-control" required />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
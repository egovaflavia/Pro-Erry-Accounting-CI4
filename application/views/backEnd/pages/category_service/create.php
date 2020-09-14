<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('category-service') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('category-service/create') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close() ?>

        </div>
    </div>
</div>
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('category-training') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('category-training/update') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input value="<?= $categorys->category_id ?>" type="hidden" name="id">
                        <input value="<?= $categorys->category_name ?>" type="text" name="name" required class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
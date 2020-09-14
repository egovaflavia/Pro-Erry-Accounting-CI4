<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Slide Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('service') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('service/update') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Service Category Name</label>
                        <input type="hidden" name="id" value="<?= $services->service_id ?>">
                        <select id="category" name="category" class="form-control">
                            <?php foreach ($categorys as $row) : ?>
                                <option value="<?= $row->category_service_id ?>"><?= $row->category_service_name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <script>
                            $("#category").val('<?= $services->category_service_id; ?>');
                        </script>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Information</label>
                        <textarea name="desc" rows="3"><?= $services->service_desc; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
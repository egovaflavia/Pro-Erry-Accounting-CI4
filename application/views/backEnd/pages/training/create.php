<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('training') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('training/create') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Categories</label>
                        <select required name="category" id="category" class="form-control">
                            <?php foreach ($categorys as $row) : ?>
                                <option value="<?= $row->category_id ?>"><?= $row->category_name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Training & Certification Name</label>
                        <input required type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Training Duration</label>
                        <input required type="number" name="duration" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Training Price</label>
                        <input required type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="foto" type="file" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Training Exam Information</label>
                        <textarea required name="info" placeholder="Please Enter Keyword" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Training Description</label>
                        <textarea required name="desc" placeholder="Please Enter Keyword" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Training Outline</label>
                        <textarea required name="outline" placeholder="Please Enter Keyword" class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
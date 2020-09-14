<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Slide Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('slide') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('slide/update') ?>
            <div class="row">
                <div class="col-md-12">
                    <label>Foto</label>
                    <input type="hidden" name="id" value="<?= $slides->slide_id ?>">
                    <img class="img-responsive" src="<?= base_url('uploads/slide/' . $slides->slide_img) ?>" alt="No Image">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?= $slides->slide_title ?>" name="title" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Caption</label>
                        <textarea name="cap" placeholder="Please Enter Keyword" class="form-control" rows="3"><?= $slides->slide_cap ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>File input</label>
                        <input name="foto" type="file" />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
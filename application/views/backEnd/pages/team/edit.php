<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('team') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <br>
            <br>
            <?= form_open_multipart('team/update') ?>
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="<?= base_url('uploads/team/' . $teams->team_image) ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <div class="form-group">
                        <label>Name</label>
                        <input value="<?= $teams->team_id ?>" type="hidden" name="id">
                        <input value="<?= $teams->team_name ?>" type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input value="<?= $teams->team_position ?>" type="text" name="position" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input name="foto" type="file" />
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
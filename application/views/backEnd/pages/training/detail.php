<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('training') ?>" class="btn btn-primary"><span class="fa fa-fast-backward"></span> Back</a>
            <a href="<?= site_url('training/create') ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add</a>
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="">
                        <h5><strong>Category</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->category_name ?>
                        </div>
                    </div>
                    <div class="">
                        <h5><strong>Training & Certification Name</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_name ?>
                        </div>
                    </div>
                    <div class="">
                        <h5><strong>Duration</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_duration ?>
                        </div>
                    </div>
                    <div class="">
                        <h5><strong>Price</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_price ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5><strong>Gambar</strong></h5>
                    <img style="width: 100%;margin: 0 auto;" class="img-responsive" src="<?= base_url('uploads/training/' . $trainings->training_image) ?>" alt="No image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h5><strong>Training Exam Info</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_exam_info ?>
                        </div>
                    </div>
                    <div class="">
                        <h5><strong>Training Description</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_desc ?>
                        </div>
                    </div>
                    <div class="">
                        <h5><strong>Training Outline</strong></h5>
                        <div style="margin-top: 0px;">
                            <?= $trainings->training_outline ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Advanced Tables -->
</div>
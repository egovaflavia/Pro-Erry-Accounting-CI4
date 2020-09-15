<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Training & Certification</p>
                    <h2 class="section-title"><?= $detail_training->training_name ?></h2>
                </div>
            </div>
        </div>
        <h1><?= $detail_training->training_name ?></h1>
        <div class="row">
            <?php if ($detail_training != null) : ?>
                <div class="col-md-4">
                    <img class=" img-responsive" src="<?= base_url('uploads/training/' . $detail_training->training_image) ?>" alt="">
                    <br>
                    <p>
                        Duration : <br> <?= $detail_training->training_duration ?>
                    </p>
                    <p>
                        Category : <br> <?= $detail_training->category_name ?>
                    </p>
                    <p>
                        Price : <br> <?= $detail_training->training_duration ?>
                    </p>
                    <p>
                        Exam Information : <br> <?= $detail_training->training_exam_info ?>
                    </p>
                </div>
                <div class="col-md-8">
                    <h4>Description :</h4>
                    <?= $detail_training->training_desc ?>
                    <h4>Outline :</h4>
                    <?= $detail_training->training_outline ?>
                </div>
            <?php else : ?>
                <p>
                    Sorry, No Data
                </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <?php endif ?>
        </div>
    </div>
</section>
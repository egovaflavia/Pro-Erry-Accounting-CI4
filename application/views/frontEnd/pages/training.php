<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Training & Certification</p>
                    <h2 class="section-title">Our Teams</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if ($training != null) : ?>
                <?php foreach ($training as $row) : ?>
                    <div class="col-sm-4">
                        <div class="team-box">
                            <img class="img-responsive img-full" src="<?= base_url('uploads/training/' . $row->training_image) ?>" alt="team">
                            <div class="team-detail">
                                <ul>
                                    <li>
                                        <h3><?= $row->training_name ?></h3>
                                    </li>
                                    <li>
                                        <h4>Price : <?= $row->training_price ?> | Duration : <?= $row->training_duration ?></h4>
                                        <a href="<?= base_url('detail-training/' . $row->training_id) ?>">Click Here</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
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
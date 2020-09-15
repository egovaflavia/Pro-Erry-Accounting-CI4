<section class="clients">
    <div class="container">
        <div class="row">
            <?php if ($detail_service != null) : ?>
                <div class="col-md-12">
                    <?php foreach ($detail_service as $row) : ?>
                        <div class="title-box">
                            <h2 class="section-title"><?= $row->category_service_name ?></h2>
                        </div>
                        <?= $row->service_desc ?>
                    <?php endforeach ?>
                </div>
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
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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
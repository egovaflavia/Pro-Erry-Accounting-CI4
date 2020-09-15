<!-- Practice areas -->
<section id="practice" class="practice">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Events</p>
                    <h2 class="section-title">Our Events</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if ($events != null) : ?>
                <?php foreach ($events as $row) : ?>
                    <div class="col-sm-12 col-md-12">
                        <div class="practice-box">
                            <img class="img-responsive img-full" src="<?= base_url('uploads/event/' . $row->event_image) ?>">
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
<br>
<br>
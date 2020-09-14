<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php foreach ($slides as $no => $row) : ?>
            <div class="item <?= ($no == 0) ? 'active' : '' ?>">
                <img style="width: 100%;" class="third-slide" src="<?= base_url('uploads/slide/' . $row->slide_img) ?>" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?= $row->slide_title ?></h1>
                        <p><?= $row->slide_cap ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img style="width: 280px;height: 70px; margin-top: 5px;margin-bottom: 5px;margin-left: 5px; " src="<?= base_url('assets/assetFront/') ?>logo.jpg" alt="logo">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a></li>
                <!-- <li><a href="#choose">Training & Certification</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Training & Certification <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($category_training as $row) : ?>
                            <li><a href="<?= site_url('home/training/' . $row->category_id) ?>"><?= $row->category_name ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Service <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($category_service as $row) : ?>
                            <li><a href="<?= base_url('detail-service/' . $row->category_service_id) ?>"><?= $row->category_service_name ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li><a href="<?= site_url('detail-event') ?>">Event</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('home/profil') ?>">Profil</a></li>
                        <li><a href="<?= base_url('home') ?>#team">Our Teams</a></li>
                    </ul>
                </li>

                <!-- <li><a href="#clients">Clients</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contact</a></li> -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
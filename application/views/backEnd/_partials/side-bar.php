<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="<?= base_url() ?>assets/assetBack/img/find_user.png" class="user-image img-responsive" />
            </li>
            <li>
                <a class="<?= ($menu == 'home') ? 'active-menu' : '' ?>" href="<?= site_url('admin') ?>"><i class="fa fa-home fa-2x"></i> Home</a>
            </li>
            <li>
                <a class="<?= ($menu == 'slide') ? 'active-menu' : '' ?>" href="<?= site_url('slide') ?>"><i class="fa fa-sliders fa-2x"></i> Slide</a>
            </li>
            <li>
                <a class="<?= ($menu == 'category-training') ? 'active-menu' : '' ?>" href="<?= site_url('category-training') ?>"><i class="fa fa-align-justify fa-2x"></i> Training Categories</a>
            </li>
            <li>
                <a class="<?= ($menu == 'training') ? 'active-menu' : '' ?>" href="<?= site_url('training') ?>"><i class="fa fa-laptop fa-2x"></i> Training</a>
            </li>
            <li>
                <a class="<?= ($menu == 'category-service') ? 'active-menu' : '' ?>" href="<?= site_url('category-service') ?>"><i class="fa fa-align-justify fa-2x"></i> Service Categories</a>
            </li>
            <li>
                <a class="<?= ($menu == 'service') ? 'active-menu' : '' ?>" href="<?= site_url('service') ?>"><i class="fa fa-gears fa-2x"></i> Service</a>
            </li>
            <li>
                <a class="<?= ($menu == 'partner') ? 'active-menu' : '' ?>" href="<?= site_url('partner') ?>"><i class="fa fa-briefcase fa-2x"></i> Partner</a>
            </li>
            <li>
                <a class="<?= ($menu == 'banner') ? 'active-menu' : '' ?>" href="<?= site_url('banner') ?>"><i class="fa fa-photo fa-2x"></i> Banner</a>
            </li>
            <li>
                <a class="<?= ($menu == 'profil') ? 'active-menu' : '' ?>" href="<?= site_url('profil') ?>"><i class="fa   fa-building fa-2x"></i> Profil</a>
            </li>
            <li>
                <a class="<?= ($menu == 'team') ? 'active-menu' : '' ?>" href="<?= site_url('team') ?>"><i class="fa   fa-group fa-2x"></i> Team</a>
            </li>
            <li>
                <a class="<?= ($menu == 'event') ? 'active-menu' : '' ?>" href="<?= site_url('event') ?>"><i class="fa   fa-sitemap fa-2x"></i> Event</a>
            </li>
            <li>
                <a class="<?= ($menu == 'account') ? 'active-menu' : '' ?>" href="<?= site_url('auth') ?>"><i class="fa   fa-user fa-2x"></i> Account</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fa fa-sitemap fa-2x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="blank.html"><i class="fa fa-square-o fa-2x"></i> Blank Page</a>
            </li> -->
        </ul>

    </div>

</nav>
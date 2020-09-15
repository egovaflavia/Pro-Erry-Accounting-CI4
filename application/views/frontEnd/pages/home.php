<!-- Carousel -->
<?php $this->load->view('frontEnd/_partials/carousel.php'); ?>

<!-- Why choose us -->
<section id="choose" class="choose overlay-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">We are known by</p>
                    <h2 class="section-title">Why choose us</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="choose-box">
                    <span class="choose-icon ion-social-angular-outline"></span>
                    <h3 class="choose-title">Training & Certification</h3>
                    <p class="choose-detail">
                        With the incredible pace of change in the world of IT, it is imperative that IT organizations institute “continuous learning” for all IT staff. This allows IT professionals to constantly update their skills to meet the changing needs of the organization, from on-the-job troubleshooting to the most pressing IT security concerns.

                        Our IT training helps you solve real-world practical computing issues and practice for certification exams. Dive into troubleshooting Windows, Linux, and Mac OS X; set up networks, servers, and client services; manage big data; and keep your organization's network secure; and all about IT Management like Project Management, ITIL, CISA, etc.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="choose-box">
                    <span class="choose-icon ion-compose"></span>
                    <h3 class="choose-title">Consulting & Solutions</h3>
                    <p class="choose-detail">
                        Our IT consulting Services helps you determine what is best for your home and business. We will talk to you about what technology is needed without buying the unnecessary devices so you can save money. All the services that we provide are here for you so you have don't have to worry about the malfunctions a system can have and have no downtime.

                        We allow you as a business owner or home owner to have the most out of your computers and computer networks. With Interlink Technologies, the possibilities could be endless. Take a look in detail with what we consult to you.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="choose-box">
                    <span class="choose-icon ion-android-bulb"></span>
                    <h3 class="choose-title">Web & Apps Development</h3>
                    <p class="choose-detail">
                        Our dedicated web app developers have successfully completed several projects for a variety of industries and business domains, including e-government, e-Commerce, e-Learning, Analytics, Finance, Entertainment and more.

                        Through the years, we have perfected our delivery processes and workflows to cope with constantly changing requirements and tight deadlines that are the hallmark of complex web development projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="cta">
    <div class="container">
        <div class="cta-bg">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <p>
                        <?= $profils->profil_about ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h1>
                        Get your<br>
                        <small>Call Us</small>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="cta-btn">
                        <a href="tel:<?= $profils->profil_phone ?>"><span class="ion-android-call"></span>
                            <?= $profils->profil_phone ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice areas -->
<section id="practice" class="practice">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Check out our</p>
                    <h2 class="section-title">Headline</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="practice-box">
                    <img class="img-responsive img-full" src="<?= base_url('uploads/banner/' . $banners->banner_one) ?>">
                    <div class="">
                        <div class="c-table">
                            <div class="ct-cell">
                                <span class="paractice-icon ion-heart-broken"></span>
                                <h3 class="practice-title">Medical malpractice</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="practice-box">
                    <img class="img-responsive img-full" src="<?= base_url('uploads/banner/' . $banners->banner_two) ?>">
                    <div class="">
                        <div class="c-table">
                            <div class="ct-cell">
                                <span class="paractice-icon ion-heart-broken"></span>
                                <h3 class="practice-title">Medical malpractice</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation -->
<section id="consultation" class="consultation">
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
            <?php foreach ($events as $row) : ?>
                <div class="col-sm-12 col-md-12">
                    <div class="practice-box">
                        <img class="img-responsive img-full" src="<?= base_url('uploads/event/' . $row->event_image) ?>">
                        <div class="">
                            <div class="c-table">
                                <div class="ct-cell">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- <div class="row">
            <form id="consultation-form" class="consultation-form">
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option data-tokens="family">Family Law</option>
                            <option data-tokens="business">Business Law</option>
                            <option data-tokens="civil litigation">Civil Litigation</option>
                            <option data-tokens="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" placeholder="Case Description..." id="case-des" name="case-des"></textarea>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <button id="cnfsubmit" type="submit" class="btn btn-default btn-block btn-cn">Get
                        Consultation</button>
                </div>
            </form>
        </div> -->
    </div>
</section>

<!-- Team -->
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">You may want to know</p>
                    <h2 class="section-title">Our Teams</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($teams as $row) : ?>
                <div class="col-sm-4">
                    <div class="team-box">
                        <img class="img-responsive img-full" src="<?= base_url('uploads/team/' . $row->team_image) ?>" alt="team">
                        <div class="team-detail">
                            <ul>
                                <li>
                                    <h3><?= $row->team_name ?></h3>
                                </li>
                                <li>
                                    <h4><?= $row->team_position ?></h4>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Clients -->
<section id="clients" class="clients">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Some of our</p>
                    <h2 class="section-title">Partnership</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($partners as $no => $row) :  ?>
                <div class="<?= ($no == 0) ? 'col-sm-offset-1' : '' ?> col-sm-2">
                    <div class="client-box">
                        <a href="#">
                            <img class="img-responsive img-full" src="<?= base_url('uploads/partner/' . $row->partner_image) ?>" alt="com">
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">You may want to</p>
                    <h2 class="section-title">Online Class</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="team-box">
                <a href="<?= base_url('learn/') ?>"><img style="height: 247px;" class="img-responsive img-full" src="<?= base_url('assets/assetFront/1.png') ?>" alt="team"></a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-box">
                <a href="<?= base_url('learn/') ?>"><img style="height: 247px;" class="img-responsive img-full" src="<?= base_url('assets/assetFront/2.png') ?>" alt="team"></a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-box">
                <a href="<?= base_url('learn/') ?>"><img style="height: 247px;" class="img-responsive img-full" src="<?= base_url('assets/assetFront/3.jpg') ?>" alt="team"></a>
            </div>
        </div>
    </div>
</section>
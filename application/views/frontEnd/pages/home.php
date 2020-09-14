<!-- Carousel -->
<?php $this->load->view('frontEnd/_partials/carousel.php'); ?>

<!-- Fun Facts -->
<section id="fun" class="fun">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">We are known by</p>
                    <h2 class="section-title">Who we are</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="fun-box">
                    <p class="fun-number">2000+</p>
                    <p class="fun-title">Cases were faught</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="fun-box">
                    <p class="fun-number">96.5%</p>
                    <p class="fun-title">Cases have been won</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="fun-box">
                    <p class="fun-number">$25k</p>
                    <p class="fun-title">Money Recovered</p>
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
                        Lorem Ipsum dolor sit amet, consectetur adipisicing elit. Alias provident libero tenetur
                        asperiores perspiciatis eum, obcaecati ex animi, neque, autem possimus dolor veniam
                        recusandae ipsum aspernatur perferendis aliquid culpa earum. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Excepturi dolor aperiam, suscipit architecto.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h1>
                        Get your free<br>
                        <small>Consultation today</small>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="cta-btn">
                        <a href="tel:(888)-123-456-7890"><span class="ion-android-call"></span>
                            (888)-123-456-7890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <h3 class="choose-title">Best Attorneys</h3>
                    <p class="choose-detail">
                        Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat
                        eget sollicauchnex
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="choose-box">
                    <span class="choose-icon ion-compose"></span>
                    <h3 class="choose-title">Highly Qualified</h3>
                    <p class="choose-detail">
                        Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat
                        eget sollicauchnex
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="choose-box">
                    <span class="choose-icon ion-android-bulb"></span>
                    <h3 class="choose-title">Completely trustable</h3>
                    <p class="choose-detail">
                        Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat
                        eget sollicauchnex
                    </p>
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
                    <h2 class="section-title">Practice Areas</h2>
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
                    <p class="section-subtitle">Fill out the form below to recieve a free and confidential intial
                        consultation.</p>
                    <h2 class="section-title">REQUEST A FREE CONSULTATION</h2>
                </div>
            </div>
        </div>

        <div class="row">
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
                        <!-- <input type="text" class="form-control" id="case-des" placeholder="Case Description..."> -->
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <button id="cnfsubmit" type="submit" class="btn btn-default btn-block btn-cn">Get
                        Consultation</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Slider 1 -->
<section id="slider-1" class="slider-1 overlay-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <img class="img-responsive img-full mb0" src="<?= base_url('assets/assetFront/') ?>images/familly.png" alt="familly">
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <div id="slider_1" class="owl-carousel">
                    <div class="item">
                        <div class="slider-1-item-box">
                            <span class="slider-icon ion-ios-people"></span>
                            <h2>We won over 200 family cases</h2>
                            <p>
                                A lawyer is a person who practices law, as a barrister, judge, attorney, counsel or
                                solicitor. Working as a lawyer involves the practical application of abstract legal
                                theories and knowledge to solve specific individualized problems.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-1-item-box">
                            <span class="slider-icon ion-heart-broken"></span>
                            <h2>Medical malpractice </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-1-item-box">
                            <span class="slider-icon ion-ios-home"></span>
                            <h2>Consult before buying a land</h2>
                            <p>
                                A lawyer is a person who practices law, as a barrister, judge, text ever since the
                                1500s, when an unknown printer took a galley of essentially unchanged.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!-- Testimonial -->
<section id="testimonial" class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11 col-sm-offset-1">
                <div id="test-slider" class="owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="img-responsive img-full" src="<?= base_url('assets/assetFront/') ?>images/testimonial-1.jpg" alt="testimonial">
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat
                                    a, Aenean imperdiet. Etiam ultricies nisi vel tellus. PhaseIlus viverra nulla ut
                                    metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel
                                    augue. Phasellus viverra nulls ut metus varius laoreet.
                                </p>
                                <span>K. Survy | CEO, Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="img-responsive img-full" src="<?= base_url('assets/assetFront/') ?>images/testimonial-2.jpg" alt="testimonial">
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of essentially unchanged. It was popularised in
                                    the 1960s with the Letraset sheets containing Lorem Ipsum passages.
                                </p>
                                <span>K. Survy | CEO, Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="img-responsive img-full" src="<?= base_url('assets/assetFront/') ?>images/testimonial-3.jpg" alt="testimonial">
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    This is Texas Lawyers, an awesome template for Lawyers. It provides everything
                                    and more for a lower. Search no more, Download this now.This is Texas Lawyers,
                                    an awesome template for Lawyers. It provides everything and more for a lower.
                                    Search no more,printer took a galley of essentially unchanged. It was
                                    popularised in the 1960s with the Letraset sheets containing Lorem Ipsum.
                                </p>
                                <span>K. Survy | CEO, Google</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="faq overlay-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">You may want to know</p>
                    <h2 class="section-title">frequently asked questions</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    My wife is not allowing me to see my children,what can I do?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What paperwork do I need to complete to file for divorce?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How to make a General Diary and How much monEy is spent?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Why, how, where do we need to keep corporate records?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h2 class="section-title">Contact us</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img src="<?= base_url('assets/assetFront/') ?>images/logo.png" alt="logo" class="contact-logo">
                <p>
                    This is Texas Lawyers, an awesome template for Lawyers. It provides everything and more for a
                    lower. Search no more, Download this now.This is Texas Lawyers, an awesome template for Lawyers.
                </p>
                <ul>
                    <li><span class="ion-location"></span>322, Adress, Lorem Ipsum Avenue, London, Earth</li>
                    <li><span class="ion-android-call"></span>(888) 123-456-7890</li>
                    <li><span class="ion-paper-airplane"></span>thisisfakeemail@noreply.com</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <form id="contactForm" action="php/contact_form.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ion-person"></i>
                        </span>
                        <input class="form-control" type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ion-email"></i>
                        </span>
                        <input class="form-control" name="email" type="email" placeholder="Email address" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon custom-addon">
                            <i class="ion-chatbubbles"></i>
                        </span>
                        <textarea class="form-control" rows="8" placeholder="Write Message" name="message"></textarea>
                    </div>
                    <button id="cfsubmit" type="submit" class="btn btn-default btn-block">Send your Message <span class="ion-paper-airplane"></span></button>
                </form>

                <div id="contactFormResponse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe -->
<div id="subscribe" class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Subscribe to our weekly newsletter</h2>
                <p>*Dont worry, we dont spam</p>
            </div>
            <div class="col-sm-6">
                <form class="subscribe-form" id="subscription-form">
                    <div class="form-group">
                        <label class="sr-only" for="subscriber-email">Email address</label>
                        <div class="form-group has-feedback">
                            <div class="input-group">
                                <span class="input-group-addon ion-email"></span>
                                <input type="email" id="subscriber-email" class="form-control" placeholder="email" required>
                            </div>
                            <span class="ion-android-checkmark-circle form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <!--/input-grpup-->

                    <button type="submit" id="subscribe-button" type="submit" class="btn btn-default hide"><i class="ion-heart"></i> Get it</button>
                </form>

                <!-- SUCCESS OR ERROR MESSAGES -->
                <div id="subscription-response"></div>
            </div>
        </div>
    </div>
</div>
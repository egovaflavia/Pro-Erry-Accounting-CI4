<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <p class="section-subtitle">Profils</p>
                    <h2 class="section-title">Our Profils</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if ($profils != null) : ?>
                <h2><?= $profils->profil_name ?></h2>
                <h4>About</h4>
                <p>
                    <?= $profils->profil_about ?>
                </p>
                <h4>Service</h4>
                <p>
                    <?= $profils->profil_service ?>
                </p>
                <a href="https://facebook.com/<?= $profils->profil_fb ?>" class="ion-social-facebook" style="font-size: 40px;text-decoration: none;"></a>
                <a href="tel:<?= $profils->profil_phone ?>" class="ion-android-call" style="font-size: 40px;text-decoration: none;"></a>
                <a href="https://instagram.com/<?= $profils->profil_ig ?>" class="ion-social-instagram" style="font-size: 40px;text-decoration: none;"></a>
                <a href="https://wa.me/<?= $profils->profil_wa ?>" class="ion-social-whatsapp" style="font-size: 40px;text-decoration: none;"></a>
                <a href="https://twitter.com/<?= $profils->profil_tw ?>" class="ion-social-twitter" style="font-size: 40px;text-decoration: none;"></a>
                <a href="https://linkedin.com/<?= $profils->profil_lk ?>" class="ion-social-linkedin-outline" style="font-size: 40px;text-decoration: none;"></a>
                <a href="mailto:<?= $profils->profil_email ?>" class="ion-email" style="font-size: 40px;text-decoration: none;"></a>
                <p><?= $profils->profil_address ?></p>
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
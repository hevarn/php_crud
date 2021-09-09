<?php
if (isset($_COOKIE['accaccept_cookie'])) {
    $showcookie = false;
} else {
    $showcookie = true;
}

?>
<section class="general-section">
    <!-- OVERLAY
=============================== -->
    <!-- <div class="overlay first">
    <div class="container-loading-img">
        <span class="loader-59">
    </div>
</div> -->
    <!-- MAIN 
=============================== -->
    <?php if ($showcookie) : ?>
        <div id="container-cookie-banner">
            <div class="cookie-window">
                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'cookie.png' ?> " />
                <h3>Bienvenue dans votre cave à vin </h3>
                <p> ce site utilise des cookies personnalisations ainsi que des cookies de session pour fonctionner corréctement rien de bien méchant </p>
                <p> il est possblie de consulter la loie concernant les cookies via le site <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees"></a></p>
                <p> vous pouvez personnaliser votre avec un nom</p>
                <form class="form-log" action="/projetZero/cookie" method="GET">
                    <input type="text" name="visitorname" placeholder="Entrée un nom" />
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <main class="l-main">
        <section class="home page-1">
            <div class="home-container bd-grid">
                <div class="home-img">
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'ombre_bouteille.png' ?>" alt="img-background-home" data-speed="-6" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'bouteille.png' ?>" alt="img-background-home" data-speed="-1" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'corte.png' ?>" alt="img-background-home" data-speed="2" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'chianti.png' ?>" alt="img-background-home" data-speed="1" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'logo.png' ?>" alt="img-background-home" data-speed="3" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'etiquette.png' ?>" alt="img-background-home" data-speed="0.5" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'tampon.png' ?>" alt="img-background-home" data-speed="2" />
                    <img class="move" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_homepage' . DIRECTORY_SEPARATOR . 'italia.png' ?>" alt="img-background-home" data-speed="1" />
                </div>
                <div class="home-data">
                    <h2 class="home-title-up">Welcome</h2>
                    <h3 class="home-title-mid">to</h3>
                    <h1 class="home-title">My Cave</h1>
                    <p class="home-paragraphe">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br />
                        Reprehenderit possimus at temporibus officia culpa.
                    </p>
                    <a href="/projetZero/posts" class="home-button goCave">Enter</a>
                </div>
            </div>
        </section>
    </main>
</section>
<!-- SECTION
=============================== -->
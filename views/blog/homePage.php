<?php
if (isset($_COOKIE['accaccept_cookie'])) {
    $showcookie = false;
} else {
    $showcookie = true;
}
// dd((string)$response->getBody());
?>
<section class="general-section">
    <?php if ($showcookie) : ?>
        <div id="container-cookie-banner">
            <div class="cookie-window">
                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'cookie.png' ?> " />
                <h3>Bienvenue dans votre cave à vin </h3>
                <p> ce site utilise des cookies personnalisations ainsi que des cookies de session pour fonctionner correctement rien de bien méchant </p>
                <p> il est possible de consulter la loi concernant les cookies via le site <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees"></a></p>
                <p> vous pouvez personnaliser votre avec un nom</p>
                <form class="form-log display" action="/projetZero/cookie" method="GET">
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
                    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === 2):?>
                        <img src="<?= $_SESSION['picture']?>"/>
                        <h2 class="home-title-up"><?=$_SESSION['email']?></h2>
                    <?php else : ?>
                        <h2 class="home-title-up">WELCOLME</h2>
                    <?php endif; ?>
                    <h3 class="home-title-mid">welcome</h3>
                    <h1 class="home-title">My Cave</h1>
                    <div class="user">
                    </div>
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
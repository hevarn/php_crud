<!--MAIN
    ==========================-->
<main class="main-formLogin">
    <h1 class="title-container-indexArticle">
        connexion
    </h1>
    <!-- OVERLAY
          =============================== -->
    <!-- <div class="overlay second-th">
        <div class="container-loading-img">
            <span class="loader-59">
        </div>
    </div> -->
    <?php if (isset($_SESSION['errors'])) : ?>
        <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
            <div class="general-error">
                <?php foreach ($errorsArray as $errors) : ?>
                    <div class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php unset($_SESSION['errors']); ?>
    <div class="container-loginForm">
        <div class="container">
            <div class="accordion v1">
                <div class="a-container">
                    <p class="a-btn">SE CONNECTER<span></span></p>
                    <div class="a-panel">
                        <form class="form-log" action="/projetZero/admin/valid" method="POST">
                            <input type="text" name="username" placeholder="Username" />
                            <input type="password" name="password" placeholder="mot de passe " />
                            <button type="submit" id="login-button1">Login</button>
                        </form>
                    </div>
                </div>
                <div class="a-container">
                    <p class="a-btn">CRÉE UN COMPTE <span></span></p>
                    <div class="a-panel">
                        <form class="form-log" action="/projetZero/admin/connect/create" method="POST">
                            <input type="text" name="username" placeholder="Name" />
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="mot de passe " />
                            <input type="password" name="confirmPassword" placeholder="confirmez votre mot de passe" />
                            <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&response_type=code&redirect_uri=<?= urlencode(URI)?>&client_id=<?= CLIENT_ID?>">connection avec google</a>
                            <button type="submit" id="login-button">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
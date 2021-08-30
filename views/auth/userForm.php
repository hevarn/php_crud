<?php if (isset($_SESSION['errors'])) : ?>
    <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
        <?php foreach ($errorsArray as $error) : ?>
            <div class="error">
                <?php foreach ($error as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php session_destroy(); ?>
<!--MAIN
    ==========================-->
<main class="main-formLogin">
    <h1 class="title-container-indexArticle">
        connexion
    </h1>
    <!-- OVERLAY
          =============================== -->
    <div class="overlay second-th">
        <div class="container-loading-img">
            <span class="loader-59">
        </div>
    </div>
    <div class="container-loginForm">
        <div class="container">
            <div class="accordion v1">
                <div class="a-container">
                    <p class="a-btn">CE CONNECTER<span></span></p>
                    <div class="a-panel">
                        <form class="form-log" action="/projetZero/admin/valid" method="POST">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit" id="login-button">Login</button>
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
                            <button type="submit" id="login-button">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="form">
            <div class="container-login">
                <input type="text" placeholder="USERNAME" />
            </div>
            <div class="container-signup">
                <input type="text" placeholder="PASSWORD" />
            </div>
            <div class="login">
                <span>log in</span>
            </div>
        </div>
    </div> -->

</main>
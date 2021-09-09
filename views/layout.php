<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- META
   =============================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projetZero</title>
    <!-- FONT 
    =============================== -->
    <!-- BOOTSTRAP 
    =============================== -->
    <!-- BOXICON 
    =============================== -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS
    =============================== -->

    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>" />
    
</head>

<body>
    <!-- HEADER-
    =============================== -->
    <header class="l-header">
        <!-- NAVBAR
      =============================== -->
        <nav class="nav bd-grid">
            <div class="container-logo">
                <a href="#" class="nav-logo"><img class="logo" src="https://image.flaticon.com/icons/png/512/4213/4213866.png" alt="" /></a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>
            <div class="nav-menu" id="nav-menu">
                <div class="nav-close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item center nav-link">
                        <a  class="link_burger_nav"href="/projetZero/">HOME</a>
                        <div class="d1"></div>
                        <div class="d2"></div>
                        <div class="d3"></div>
                        <div class="d4"></div>
                    </li>
                    <li class="nav-item center nav-link">
                        <a  class="link_burger_nav"href="/projetZero/posts" class="goCave">CAVE</a>
                        <div class="d1"></div>
                        <div class="d2"></div>
                        <div class="d3"></div>
                        <div class="d4"></div>
                    </li>
                    <li class="nav-item center nav-link">
                        <a  class="link_burger_nav"href="/projetZero/admin/connect">LOGIN</a>
                        <div class="d1"></div>
                        <div class="d2"></div>
                        <div class="d3"></div>
                        <div class="d4"></div>
                    </li>
                    <li class="nav-item center nav-link">
                        <a  class="link_burger_nav"href="">MY CAVE+</a> 
                        <div class="d1"></div>
                        <div class="d2"></div>
                        <div class="d3"></div>
                        <div class="d4"></div>
                    </li>
                    <?php if (isset($_SESSION['auth'])) : ?>
                        <li class="nav-item center nav-link" id="logout-custom">
                            <a class="link_burger_nav log-out"href="/projetZero/admin/logout">LOG-OUT</a>
                            <div class="d1"></div>
                            <div class="d2"></div>
                            <div class="d3"></div>
                            <div class="d4"></div>
                        </li>
                        <li class="nav-item center nav-link">
                            <a class="link_burger_nav"href="/projetZero/admin/panel">ADMIN</a>
                            <div class="d1"></div>
                            <div class="d2"></div>
                            <div class="d3"></div>
                            <div class="d4"></div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container_custom">
        <?= $content ?>
    </div>
    <!-- FOOTER
    =============================== -->
    <footer></footer>
    </section>
    <!-- SCRIPT QUERY
    =============================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- SCRIPT BOOTSTRAP
    =============================== -->
    <!-- SCRIPT GREENSOCK
    =============================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>

    <!-- SCRIPT JS
    =============================== -->
    <?php if (isset($_GET['/projetZero/posts'])) : ?>
        <?= var_dump('proput'); ?>
    <?php else : ?>
        <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'main.js' ?>"></script>
    <?php endif; ?>
</body>

</html>
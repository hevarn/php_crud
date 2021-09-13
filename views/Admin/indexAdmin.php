<?php
$success = "bienvenue dans l'espace administrateur,";
if (!isset($_COOKIE['panel_info'])) {
    if (isset($_GET['success'])) {
        setcookie('panel_info', 'admin', time() + 60 * 60 * 24, null, null, null, true);
        vprintf("<div id='flash' onclick='deleteFlash()'>
                            <img src='../../projetZero/public/img/coucouIcon.png'/>
                            <h1>%s</h1>
                            <p>ici vous-pourez :</p>
                            <p>modifier vos bouteilles,</p>
                            <p>crée de nouvelles bouteilles,</p>
                            <p>et les supprime.</p>
                            <h6> Pour effacer cette fenêtre cliqué dessus.</h6>
                            
                        </div>
                         ", [$success]);
    }
}
?>

<!-- CARD USER
=============================== -->
<div class="container-general">
    <div class="container-card-admin">
        <div id="container">
            <div class="card-admin">
                <div class="front">
                    <div class="image_overlay"></div>
                    <div id="details-card">
                        <p>details</p>
                    </div>
                    <div class="text-container">
                        <p class="title">bonjour</p>
                        <p class="p"><?= ($_COOKIE['accaccept_cookie'])?'VISITOR':'VISITOR'?></p>
                    </div>
                </div>
                <div class="back">
                    <div class="input-container">
                        <div class="form">
                            <form class="register-form">
                                <input class="a" type="text" placeholder="name" />
                                <input class="b" type="password" placeholder="password" />
                                <input class="c" type="text" placeholder="email address" />
                                <button class="d">create</button>
                            </form>
                        </div>
                        <div id="flip-back">
                            <div id="cy"></div>
                            <div id="cx"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CARD FOREACH 
     =====================================-->
    <div class="container-card-info">
        <a href="/projetZero/admin/panel/create" class="btn-create" id="btn-create-custom">Céer une bouteille</a>
        <?php foreach ($params['reqs'] as $req) : ?>
            <?php foreach ($req->ToRecoverTheBottleImage() as $image) : ?>
                <div class="card-info-admin">
                    <img class="imag-card-wine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $image->name ?>">
                    <div class="card custom-card-adminIndex" id="card-info">
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/2633/2633881.png" /><?= $req->id ?></div>
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/1425/1425519.png" /><?= $req->name ?></div>
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/3652/3652191.png" /><?= $req->year ?></div>
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/1514/1514922.png" /><?= $req->grapes ?></div>
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/825/825205.png" /><?= $req->region ?></div>
                        <div class="row"><img src="https://image.flaticon.com/icons/png/512/2928/2928883.png" /><?= $req->country ?></div>
                        <div class="container-back-info-indexAdmin">
                            <form class="from" action="/projetZero/admin/panel/delete/<?= $req->id ?>" method="POST" class="d-inline">
                                <button type="submit" class="btn-cancel"> effacer</button>
                                <a href="/projetZero/admin/panel/modify/<?= $req->id ?>" class="btn-modify"> modifier</a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
<section class="card-container-indexArticle page-2" id="cave">
    <h1 class="title-container-indexArticle">
        la cave
    </h1>
    <!-- OVERLAY
          =============================== -->
    <div class="overlay second-th">
        <div class="container-loading-img">
            <span class="loader-59">
        </div>
    </div>

    <!--CARDS
            ============================= -->
    <?php $count = 0; ?>
    <?php foreach ($params['reqs'] as $req) : ?>
        <?php if (++$count % 2) : ?>
            <div class="container-card">
                <div class="juste-for-border">
                    <div class="card">
                        <?php foreach ($req->ToRecoverTheBottleImage() as $image) : ?>
                            <img class="imag-card-wine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $image->name ?>">
                        <?php endforeach; ?>
                        <div class="body-card">
                            <h1> <?= $req->name ?> </h1>
                            <p> <?= $req->year ?></p>
                            <p> <?= $req->grapes ?></p>
                        </div>

                    </div>
                    <div class="container-links">
                        <?php foreach ($req->ToRecoverTheBottleTags() as $tag) : ?>
                            <div class="container-btn-cardWine" id="colorWine">
                                <a href="/projetZero/tags/<?= $tag->id ?>">Voir tout les <?= $tag->name ?></a>
                            </div>
                        <?php endforeach; ?>
                        <div class="container-btn-cardWine">
                            <a id="link-show-bottle"href="/projetZero/posts/<?= $req->id ?>" class="button">Voir la bouteille <?= $req->name ?></a>
                        </div>
                        <img src="<?= SCRIPTS . "img" . DIRECTORY_SEPARATOR . 'right-drawn-arrow-reverse.png' ?>" />
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="container-card">
                <div class="juste-for-border">
                    <div class="container-links">
                        <?php foreach ($req->ToRecoverTheBottleTags() as $tag) : ?>
                            <div class="container-btn-cardWine" id="colorWine">
                                <a href="/projetZero/tags/<?= $tag->id ?>">Voir tout les <?= $tag->name ?></a>
                            </div>
                        <?php endforeach; ?>
                        <div class="container-btn-cardWine">
                            <a id="link-show-bottle" href="/projetZero/posts/<?= $req->id ?>" class="button">Voir la bouteille <?= $req->name ?></a>
                        </div>
                        <img src="<?= SCRIPTS . "img" . DIRECTORY_SEPARATOR . 'right-drawn-arrow.png' ?>" />
                    </div>
                    <div class="card">
                        <?php foreach ($req->ToRecoverTheBottleImage() as $image) : ?>
                            <img class="imag-card-wine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $image->name ?>">
                        <?php endforeach; ?>
                        <div class="body-card">
                            <h1> <?= $req->name ?> </h1>
                            <p> <?= $req->year ?></p>
                            <p> <?= $req->grapes ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</section>
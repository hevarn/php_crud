<section class="card-container-indexArticle page-2" id="cave">
    <!-- OVERLAY
          =============================== -->
    <div class="overlay second-th">
        <div class="container-loading-img">
            <span class="loader-59">
        </div>
    </div>

    <!--CARDS
            ============================= -->

    <?php foreach ($params['reqs'] as $req) : ?>
        <div class="card">
            <img class="imag-card-wine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $req->picture ?>">
            <?php foreach ($req->ToRecoverTheBottleTags() as $tag) : ?>
                <div class="container-btn-cardWine" id="colorWine">
                    <a href="/projetZero/tags/<?= $tag->id ?>"><?= $tag->name ?></a>
                </div>
            <?php endforeach; ?>
            <div class="body-card">
                <h1> <?= $req->name ?> </h1>
                <p> <?= $req->year ?></p>
                <p> <?= $req->grapes ?></p>
            </div>
            <div class="container-btn-cardWine">
                <a href="/projetZero/posts/<?= $req->id ?>" class="button">Voir la bouteille <?= $req->name ?></a>
            </div>
        </div>
    <?php endforeach; ?>
</section>
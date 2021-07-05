<div class="containerBackground">
    <?php $i = 1; ?>
    <?php foreach ($params['reqs'] as $req) : ?>
        <?php $slide = $i === 1 ?  "slider__slide--active" : "" ?>
        <div class="slider__slide <?= $slide ?>" data-slide=<?= $i++ ?>>
            <div class="slider__wrap">
                <div class="slider__back"></div>
            </div>
            <div class="slider__inner">
                <div class="slider__content">
                    <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $req->picture ?> ">
                    <?php foreach ($req->ToRecoverTheBottleTags() as $tag) : ?>
                        <span class="badge badge-info"><a href="/projetZero/tags/<?= $tag->id ?>"><?= $tag->name ?></a></span>
                    <?php endforeach; ?>
                    <div class="direction_row">
                        <div class="container_insideCard">
                            <h1> <?= $req->name ?> </h1>
                            <p> <?= $req->year ?></p>
                            <p> <?= $req->grapes ?></p>
                        </div>
                        <div class="liens">
                            <a class="lien go-to-next">next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php endforeach; ?>
</div>
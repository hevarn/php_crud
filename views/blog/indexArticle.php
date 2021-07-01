<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php foreach ($params['reqs'] as $req) : ?>
                <div class="col ">
                    <div class="container margin">
                        <div class="card mt-4" style="width: 18rem;">
                            <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $req->picture ?> " height="370px" class="card-img-top" alt="logo HTML CSS">
                            <div class="card-body">
                                <h5> <?= $req->name ?> </h5>
                                <p> <?= $req->year ?></p>
                                <p> <?= $req->grapes ?></p>
                                <div>
                                <?php foreach($req->ToRecoverTheBottleTags() as $tag) : ?>
                                    <span class="badge badge-info"><a href="/projetZero/tags/<?= $tag->id ?>" ><?= $tag->name?></a></span>
                                <?php endforeach; ?>
                                </div>
                                <a href="/projetZero/posts/<?= $req->id ?>" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
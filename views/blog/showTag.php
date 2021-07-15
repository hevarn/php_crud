<div class="container-cardWine-showTag">
  <?php foreach ($params['tag']->ToRecoverTheBottlesFromTheTags() as $findTag) : ?>
    <div class="card-cardWine-showTag">
        <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $findTag->picture ?> " height="370px" class="card-img-top" alt="logo HTML CSS">
        <a href="/projetZero/posts/<?= $findTag->id ?>" class="btn btn-primary">Go <?= $findTag->name ?></a>
    </div>
  <?php endforeach; ?>
</div>
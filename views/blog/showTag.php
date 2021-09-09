
<div class="container-cardWine-showTag">
  <?php foreach ($params['tag']->ToRecoverTheBottlesFromTheTags() as $findTag) : ?>

    <div class="card-cardWine-showTag">
      <?php foreach ($findTag->ToRecoverTheBottleImage() as $image): ?>
        <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $image->name ?> " height="370px" class="card-img-top" alt="logo HTML CSS">
      <?php endforeach; ?>
        <a href="/projetZero/posts/<?= $findTag->id ?>" class="btn btn-primary"><?= $findTag->name ?></a>
    </div>
  <?php endforeach; ?>
</div>


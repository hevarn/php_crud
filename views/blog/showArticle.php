<div class="card" style="width: 18rem;">
  <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $params['req']->picture ?> " class="card-img-top" alt="<?= $params['req']->picture ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $params['req']->name ?></h5>
    <p class="card-text"><?= $params['req']->year ?></p>
    <p class="card-text"><?= $params['req']->grapes ?></p>
    <p class="card-text"><?= $params['req']->country ?></p>
    <p class="card-text"><?= $params['req']->region ?></p>
    <p class="card-text"><?= $params['req']->description ?></p>
    <?php foreach ($params['req']->ToRecoverTheBottleTags() as $tag) : ?>
      <span class="badge badge-info"><a href="/projetZero/tags/<?= $tag->id ?>" ><?= $tag->name?></a></span>
    <?php endforeach; ?>

    <a href="/projetZero/posts" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
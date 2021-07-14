<div class="container-cardWine-focus">
  <div class="card" id="card-custom">
    <img id="img-cardWine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $params['req']->picture ?> " class="card-img-top" alt="<?= $params['req']->picture ?>">
  
    <div class="body-card" id="body-card-custom">
      <h5 class="card-title"><?= $params['req']->name ?></h5>
      <p class="card-text"><?= $params['req']->year ?></p>
      <p class="card-text"><?= $params['req']->grapes ?></p>
      <p class="card-text"><?= $params['req']->country ?></p>
      <p class="card-text"><?= $params['req']->region ?></p>
      <p class="card-text"><?= $params['req']->description ?></p>
    </div>
    <div class="container-links">
      <?php foreach ($params['req']->ToRecoverTheBottleTags() as $tag) : ?>
        <div class="container-btn-cardWine">
          <a href="/projetZero/tags/<?= $tag->id ?>"><?= $tag->name ?></a>
        </div>
      <?php endforeach; ?>
      <div class="container-btn-cardWine">
        <a href="/projetZero/posts">retour à la cave</a>
      </div>
    </div>
  </div>
</div>
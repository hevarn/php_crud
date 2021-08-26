<div class="container-cardWine-focus">
  <!-- OVERLAY
          =============================== -->
  <div class="overlay third">
    <div class="container-loading-img">
      <span class="loader-59">
    </div>
  </div>
  <div class="card-cardWine-focus">
    <div class="img-description">
      <?php foreach ($params['req']->ToRecoverTheBottleImage() as $image) : ?>
        <img class="img-cardWine" id="img-cardWine" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $image->name ?> " class="card-img-top" alt="<?= $image->name ?>">
      <?php endforeach; ?>
      <div class="body-card" id="body-card-custom">
        <h5 class="card-title"><img src="https://image.flaticon.com/icons/png/512/1425/1425519.png" /><?= $params['req']->name ?></h5>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/3652/3652191.png" /><?= $params['req']->year ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/1514/1514922.png" /><?= $params['req']->grapes ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/2928/2928883.png" /><?= $params['req']->country ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/825/825205.png" /><?= $params['req']->region ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/167/167755.png" /><?= $params['req']->description ?></p>
      </div>
    </div>
    <div class="info-bottle">
      <div>
        <img src="https://images.unsplash.com/photo-1537640538966-79f369143f8f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1953&q=80"/>
        <a href="/projetZero/posts">voir le cépage</a>
      </div>
      <div>
        <img class="carte" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'carte-france.png' ?>" />
      </div>
    </div>
    <div class="container-links-showcard">
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
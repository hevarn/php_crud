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
      <div id="body-card-custom">
        <h5 class="card-title"><img src="https://image.flaticon.com/icons/png/512/1425/1425519.png" /><?= $params['req']->name ?></h5>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/3652/3652191.png" /><?= $params['req']->year ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/1514/1514922.png" /><?= $params['req']->grapes ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/2928/2928883.png" /><?= $params['req']->country ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/825/825205.png" /><?= $params['req']->region ?></p>
        <p class="card-text"><img src="https://image.flaticon.com/icons/png/512/167/167755.png" /><?= $params['req']->description ?></p>
      </div>
    </div>
    <div class="info-bottle">
      <div id="homme-picture">
        <img id="picture-man" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'homme.png' ?>" />
      </div>
      <div id="text">
        <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'carte-france.png' ?>" />
        <h2>l’histoire du vin</h2>
        <p>C’est à partir du 17e siècle que l’activité vinicole s’oriente vers la recherche de vins de plus grande qualité. Cette qualité supérieure se traduit par un choix précis des terroirs, une réduction des rendements, une amélioration de la vinification ainsi que la possibilité de faire vieillir les vins longuement.
          Au 19ème le phylloxéra, un puceron, introduit accidentellement dans le sud de la France, aura détruit une grande partie du vignoble français. Pour combattre ce fléau, la solution a été de greffer les vignes sur des racines de vignes américaines résistantes.Cette destruction massive a entraîné une pénurie des vins, ce qui entraînera des abus ainsi que les premières réglementations dont la création du Service de la Répression des Fraudes en 1905 et plus tard la notion d’appellations d’origine et enfin, en 1935, celle d’appellations d’origine contrôlées.
          Le 20ème siècle est marqué par l’avènement de la Science du Vin, l’oenologie. Cette étude de la connaissance du vin touche aussi bien la culture de la vigne que son élevage, la dégustation, l’analyse sensorielle, la sommellerie…
        </p>
        <div>
        </div>
        <div class="container-links-showcard">
          <?php foreach ($params['req']->ToRecoverTheBottleTags() as $tag) : ?>
            <div class="container-btn-cardWine ">
              <a class="showcard " href="/projetZero/tags/<?= $tag->id ?>"><?= $tag->name ?></a>
            </div>
          <?php endforeach; ?>
          <div class="container-btn-cardWine ">
            <a class="showcard " href="/projetZero/posts">retour à la cave</a>
          </div>
        </div>
      </div>
    </div>
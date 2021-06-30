<h1><?= $params['tag']->name ?></h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
      <?php foreach($params['tag']->ToRecoverTheBottlesFromTheTags() as $findTag) :?>
        <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . $findTag->picture ?> " height="370px" class="card-img-top" alt="logo HTML CSS">
    <a href="/projetZero/posts/<?= $findTag->id?>" class="btn btn-primary">Go <?= $findTag->name ?></a>
    <?php endforeach; ?>
  </div>
</div>
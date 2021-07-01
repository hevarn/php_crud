<div class="container">
    <h1 class="title_up"><?= isset($params['req'])? "modifier": "Bienvenue pour" ?></h1>
    <h2 class="title_mid"><?= $params['req']->name ?? 'Créer une nouvelle boutielle' ?></h2>
    <form action="<?= isset($params['req']) ? "/projetZero/admin/panel/modify/{$params['req']->id}" : "/projetZero/admin/panel/valid"?>" method="POST">
        <section id="contact">
            <div class="content">
                <div id="form">
                    <form action="" id="contactForm" method="post">
                        <label class="font_span name">Name</label>
                        <input type="text" name="name" class="name" placeholder="<?= $params['req']->name ?? '' ?>" tabindex=1 />
                        <label class="font_span">year</label>
                        <input type="text" name="year" placeholder="<?= $params['req']->year ?? '' ?>" tabindex=1 />
                        <label class="font_span">grapes</label>
                        <input type="text" name="grapes" placeholder="<?= $params['req']->grapes ?? '' ?>" tabindex=1 />
                        <label class="font_span">country</label>
                        <input type="text" name="country" placeholder="<?= $params['req']->country ?? '' ?>" tabindex=1 />
                        <label class="font_span">region</label>
                        <input type="text" name="region" placeholder="<?= $params['req']->region ?? '' ?>" tabindex=1 />
                        <label class="font_span">description</label>
                        <textarea class="message" name="description" placeholder="<?= $params['req']->description ?? '' ?>" tabindex=6></textarea>
                        <label class="font_span">picture</label>
                        <input type="file" name="picture" placeholder="<?= $params['req']->picture ?? '' ?>" tabindex=1 />
                        <label class="font_span">tag </label>
                        <select class="form-select form-select-sm tags " aria-label=".form-select-sm example" name="tags[]">
                            <?php foreach ($params['tags'] as $tag) : ?>
                                <option class="option" value="<?= $tag->id ?>"><?= $tag->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn btn-primary btn_custom" tabindex=5><?= isset($params['req'])? "Enregistrer les modificaton": "Créer la bouteille" ?></button>
                        <a href="/projetZero/admin/panel"class="btn btn-primary">retour</a>
                    </form>
                </div>
        </section>
    </form>
</div>
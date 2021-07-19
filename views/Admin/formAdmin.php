<div class="container-form-admin">
    <div class="container-form-admin-title">
        <h1 class="home-title-up" id="title-up"><?= isset($params['req']) ? "modifier" : "Bienvenue pour" ?></h1>
        <div class="title-admin-bottle-id">
            <h2 class="home-title" id="title-down"><?= $params['req']->name ?? 'Créer une nouvelle boutielle' ?></h2>
        </div>
    </div>
    <form action="<?= isset($params['req']) ? "/projetZero/admin/panel/modify/{$params['req']->id}" : "/projetZero/admin/panel/valid" ?>" method="POST">
        <section id="contact">
            <div class="content">
                <div id="form">
                    <form class="admin-from-bottle" action="" id="contactForm" method="post">
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
                        <textarea class="message" name="description" placeholder="<?= $params['req']->description ?? '' ?>" tabindex=10></textarea>
                        <label class="font_span">picture</label>
                        <input type="file" id="picture" name="picture" placeholder="<?= $params['req']->picture ?? '' ?>" tabindex=1 />
                        <label class="font_span">tag </label>
                        <select class="form-select" name="tags[]">
                            <?php foreach ($params['tags'] as $tag) : ?>
                                <option class="option" value="<?= $tag->id ?>"><?= $tag->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn" tabindex=5><?= isset($params['req']) ? "Enregistrer les modificaton" : "Créer la bouteille" ?></button>
                        <a href="/projetZero/admin/panel" class="btn">retour</a>
                    </form>
                </div>
        </section>
    </form>
</div>
<div class="container-fluid">
    <div class="container container-custom">
        <div class="burger" id="header-toggle">
            <span></span>
        </div>
        <div class="l-navbar" id="nav-bar">
            <nav class="navindex">
                <div>
                    <div class="nav_list">
                        <a href="/projetZero/" class="nav_link">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">HOME</span> </a>
                        <a href="/projetZero/user" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">CONNECT</span> </a>
                        <a href="/projetZero/posts" class="nav_link">
                            <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">ARTICLE</span> </a>
                        <!-- <a href="#" class="nav_link">
                            <i class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">Bookmark</span> </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">Files</span> </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Stats</span> </a> -->
                    </div>
                </div>
                <a href="#" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
    </div>
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
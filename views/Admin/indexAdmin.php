<svg id="icons" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon-arrow" viewBox="0 0 476.213 476.213">
        <polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607 
	238.107,476.213 368.713,345.606 " />
    </symbol>
</svg>


<div class="slider-content">
    <div class="header-wrapper">
        <div class="header">
            <div class="shop-wrapper"></div>
        </div>
    </div>
    <div class="nav-wrapper">
        <div class="nav-arrows">
            <div class="nav-up">
                <svg id="arrow-up">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </div>
            <div class="nav-line"></div>
            <div class="nav-down">
                <svg id="arrow-down">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </div>
        </div>
    </div>

    <div class="slider-wrapper">
        <div class="slider-container">
            <div class="slide active" data-order="1">
                <div class="slide-content txt">
                    <div class="txt-wrapper">
                        <span class="copy">Intro about me</span>
                        <h2><span>Hello!</span> I’m Mr.Bara</h2>
                        <span class="subtitle">Fashion designer</span>
                        <p class="excerpt">I combine the best of our skills and ideas to present you products really worth your attention that will change the way you think about design, structure, color and website itself. </p>
                    </div>
                </div>
                <div class="slide-content img">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slider1.jpg" alt="" />
                </div>
            </div>
            <div class="slide " data-order="2">
                <div class="slide-content img">
                    <div class="admin_title_custom">
                        <div class="up">
                            <h2 class="admin_title_up">pour</h2>
                        </div>
                        <div class="down">
                            <div class="side_left">
                                <h2 class="admin_title_mid">tout</h2>
                            </div>
                            <div class="side_right">
                                <h2 class="admin_title_down admin_title_histoire ">configurer</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-content txt custom">
                    <div class="txt-wrapper">
                        <ul class="ul-custom">
                            <li>
                                <div class="post-wrapper">
                                    <div class="post-title"><a href="">admin panel</a></div>
                                    <div class="post-info admin_table">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>name</th>
                                                    <th>year</th>
                                                    <th>grapes</th>
                                                    <th>region</th>
                                                    <th>country</th>
                                                    <th>picture</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($params['reqs'] as $req) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $req->id ?></th>
                                                        <td><?= $req->name ?></td>
                                                        <td><?= $req->year ?></td>
                                                        <td><?= $req->grapes ?></td>
                                                        <td><?= $req->region ?></td>
                                                        <td><?= $req->country ?></td>

                                                        <td><?= $req->picture ?></td>
                                                        <td>
                                                            <form action="/projetZero/admin/panel/delete/<?= $req->id ?>" method="POST" class="d-inline">
                                                                <button type="submit" class="btn btn-danger admin_btn"> effacer</button>
                                                            </form>
                                                            <a href="/projetZero/admin/panel/modify/<?= $req->id ?>" class="btn btn-warning admin_btn"> modifier</a>
                                                            <a href="/projetZero/admin/panel/create" class="btn btn-success">Céer une bouteille</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slide " data-order="3">
                <div class="slide-content txt">
                    <div class="txt-wrapper">
                        <span class="copy">Keep in touch</span>
                        <h3>Melbourne, <span>Australia</span></h3>
                        <p class="excerpt">269 King Str, 05th Floor, Utral House Building. Melbourne. VIC 3000. Australia</p>
                        <p><strong>Email:</strong> <a href="mailto:mariosm18@gmail.com">mariosm18@gmail.com</a></p>
                        <p>Call directly: <span class="phone">+99 (0) 344 956 4050</span></p>
                    </div>
                </div>
                <div class="slide-content img">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide5.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
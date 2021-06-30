<svg id="icons" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon-arrow" viewBox="0 0 476.213 476.213">
        <polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607 
	238.107,476.213 368.713,345.606 " />
    </symbol>
</svg>


<div class="slider-content">

    <div class="header-wrapper">
        <div class="header">
            <div class="menu-wrapper">
                <div class="menu-hamburger"></div>
                <div class="menu-txt">Menu</div>
            </div>
            <div class="logo-wrapper">
                <div class="logo"><span>Mr.</span> Bara</div>
            </div>
            <div class="shop-wrapper"></div>
        </div>
    </div>

    <div class="number-wrapper">
        <div class="number-count">
            <div class="number">01</div>
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
            <div class="slide" data-order="2">
                <div class="slide-content txt">
                    <div class="txt-wrapper">
                        <span class="copy">Show with me</span>
                        <h2><span>Love Simple</span> Fashion</h2>
                        <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <button>Shop now</button>
                    </div>
                </div>
                <div class="slide-content img">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide2.jpg" alt="" />
                </div>
            </div>
            <div class="slide " data-order="3">
                <div class="slide-content txt">
                    <div class="txt-wrapper">
                        <span class="copy">Fashion around me</span>
                        <ul class="ul-custom">
                            <li>
                                <div class="date-wrapper">
                                    <div class="date">25</div>
                                    <div class="month">April</div>
                                </div>
                                <div class="post-wrapper">
                                    <div class="post-title"><a href="">Top colour pantone for fashion 2016</a></div>
                                    <div class="post-info">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>name</th>
                                                    <th>year</th>
                                                    <th>grapes</th>
                                                    <th>region</th>
                                                    <th>country</th>
                                                    <th>description</th>
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
                                                        <td><?= $req->description ?></td>
                                                        <td><?= $req->picture ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-danger"> effacer</a>
                                                            <a href="#" class="btn btn-warning"> modifier</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date-wrapper">
                                    <div class="date">18</div>
                                    <div class="month">April</div>
                                </div>
                                <div class="post-wrapper">
                                    <div class="post-title"><a href="">Inspiration for fashion for Logan's designer</a></div>
                                    <div class="post-info">
                                        <ul>
                                            <li>Admin /</li>
                                            <li>Inspirations /</li>
                                            <li>08 comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date-wrapper">
                                    <div class="date">06</div>
                                    <div class="month">April</div>
                                </div>
                                <div class="post-wrapper">
                                    <div class="post-title"><a href="">Hipster -Fashion trand this summer</a></div>
                                    <div class="post-info">
                                        <ul>
                                            <li>Admin /</li>
                                            <li>Discovery /</li>
                                            <li>22 comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <span class="view-all">View all articles</span>

                    </div>
                </div>
            </div>
            <div class="slide " data-order="4">
                <div class="slide-content txt">
                    <div class="txt-wrapper">
                        <span class="copy">What clients say</span>
                        <h2><span>Mr.Bara</span> Best Choice </h2>
                        <p class="excerpt">I combine the best of our skills and ideas to present you products really worth your attention that will change the way you think about design, structure, color and website itself. </p>
                    </div>
                </div>
                <div class="slide-content img">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide4.jpg" alt="" />
                </div>
            </div>
            <div class="slide " data-order="5">
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
    <div class="footer">
        <div class="social-wrapper">
            <ul>
                <li><a href="">Codepen</a></li>
                <li><a href="">Dribbble</a></li>
                <li><a href="">Behance</a></li>
            </ul>
        </div>
        <div class="language-wrapper">
            <ul>
                <li><a href="">EN</a></li>
                <li><a href="">ES</a></li>
            </ul>
        </div>
    </div>
</div>
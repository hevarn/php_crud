<section class="userprofile">
    <div class="container-userinfo-panel">
        <div class="userinfo-panel__content">
            <div class="menu">
                <div class="menu-user-lateral">
                    <div class="profile-head">
                        <div class="profile-head__id">
                            <img class="user-profile-picture" src="<?= SCRIPTS.'img'. DIRECTORY_SEPARATOR.'img_user_profile'.DIRECTORY_SEPARATOR.$params['users']->user_picture?>" alt="">
                            <div>
                                <div class="profile-head__name"><?= $params['users']->username; ?></div>
                                <div class="profile-head__mail"><?= $params['users']->email; ?></div>
                            </div>
                        </div>
                        <div class="profile-head__options">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="menu-main">
                        <div class="menu-item">
                            <a class="menu-item-logo" href="#poste">
                                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'new-post.png' ?>" />
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-item-logo" href="#photo">
                                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'image.png' ?>" />
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-item-logo" href="#blog">
                                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'blog.png' ?>" />
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-item-logo" href="/projetZero/admin/logout">
                                <img src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'logout.png' ?>" />
                            </a>
                        </div>
                    </div>

                </div>
                <div class="new">
                    <button class="new__button new-mail__toggle"><i> nouvelle bouteille</i></button>
                    <div class="new-mail">
                        <div class="new-mail__top">
                            <div class="new-mail__title">
                                <span>Write a new mail from</span>
                                <div class="select">
                                    <select class="select__item" name="" id="">
                                        <option value=""><?= $params['users']->username?></option>
                                        <option value=""><?= $params['users']->email?></option>
                                    </select>
                                    <i class="select__arrow fas fa-sort-down"></i>
                                </div>
                            </div>
                            <img class="new-mail__close new-mail__toggle " src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'close.png' ?>" />
                        </div>
                        <div class="new-mail-exp">
                            <div class="new-mail-exp__item">
                                <div class="new-mail-exp__label">To</div>
                                <input placeholder="Enter email" type="text" class="new-mail-exp__input">
                            </div>
                            <div class="new-mail-exp__item">
                                <div class="new-mail-exp__label">Object</div>
                                <input placeholder="Enter mail object" type="text" class="new-mail-exp__input">
                            </div>
                        </div>
                        <div class="new-mail__content">
                            <textarea class="new-mail__message" placeholder="ecrire votre texte"></textarea>
                        </div>
                        <div class="new-mail-foot">
                            <div class="new-mail-foot__actions">
                                <button class="button button new-mail__toggle">Cancel</button>
                                <button class="button button-send">
                                    <i>SEND</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mails">
                <div class="preview-top">
                    <div id="blog"class="preview__title">vos commentaires</div>
                </div>
                <div class="message-list scrollable">
                    <div class="scrollable__target">
                        <div class="message">
                            <div class="message__actions">
                                <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                            </div>
                            <div class="message__content">
                                <div class="message__title">
                                    <div><?= $params['users']->username ?></div>
                                    <div class="date">Today, 15:14</div>
                                </div>
                                <div class="message__title">
                                    Please come back bro !
                                </div>
                                <div>
                                    « Please, I need you to make my music fantastic! »
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <div class="message__actions">
                                <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                            </div>
                            <div class="message__content">
                                <div class="message__title">
                                    <div><?= $params['users']->username ?></div>
                                    <div class="date">Yesterday, 23:12</div>
                                </div>
                                <div class="message__title">
                                    Genesis... again ?
                                </div>
                                <div>
                                    « Hi Peter, are you interested in coming back to genesis? »
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <div class="message__actions">
                                <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                            </div>
                            <div class="message__content">
                                <div class="message__title">
                                    <div><?= $params['users']->username ?></div>
                                    <div class="date">Yesterday, 20:45</div>
                                </div>
                                <div class="message__title">
                                    I lost my glasses...
                                </div>
                                <div>
                                    « Hi, I lost my glasses in your living room, could you bring them back to me? »
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="preview">
                    <div class="preview-top">
                        <div id="poste"class="preview__title">vos bouteilles poster</div>
                    </div>
                    <div class="scrollable">
                        <div class="preview-content scrollable__target">
                            <div class="preview-respond">
                                <div class="message__actions">
                                    <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                                </div>
                                <div class="content-preview-text">
                                    <div class="preview-respond__head">
                                        <div class="profile-head">
                                            <div class="profile-head__id">
                                                <img class="user-profile-picture" src="<?= SCRIPTS.'img'. DIRECTORY_SEPARATOR.'img_user_profile'.DIRECTORY_SEPARATOR.$params['users']->user_picture?>" alt="">
                                                <div>
                                                    <div class="profile-head__name"><?= $params['users']->username ?></div>
                                                </div>
                                            </div>
                                            <div class="date">Yesterday, 11:17</div>
                                        </div>
                                    </div>
                                    <div class="preview-respond__content">
                                        <p class="paragraph">I plugged in the computer, and I'm not sure I plugged
                                            in the internets properly. Do you think you could come and check me out? There
                                            are little beeps in the black box in the living room, maybe I broke the
                                            internet, I wouldn't want to do anything stupid!</p>
                                        <p class="paragraph">Grandma tells me I'm an idiot and if I can see my messages it's
                                            because it's okay, but you know, Grandma's not good with these things. And then
                                            I'm suspicious, maybe the aliens aren't watching my internets? They would be
                                            able to fit into the small box in the living room, Jack told me last week, when
                                            we were drinking wine on the terrace... Do you think that's true? </p>
                                        <p class="paragraph">Are you there?</p>
                                        <p class="paragraph">Jean-Claude?</p>
                                        <p class="paragraph">I call 911.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-respond">
                                <div class="message__actions">
                                    <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                                </div>
                                <div class="content-preview-text">
                                    <div class="preview-respond__head">
                                        <div class="profile-head">
                                            <div class="profile-head__id">
                                                <img class="user-profile-picture" src="<?= SCRIPTS.'img'. DIRECTORY_SEPARATOR.'img_user_profile'.DIRECTORY_SEPARATOR.$params['users']->user_picture?>" alt="">
                                                <div>
                                                    <div class="profile-head__name"><?= $params['users']->username ?></div>
                                                </div>
                                            </div>
                                            <div class="date">Yesterday, 11:27</div>
                                        </div>
                                    </div>
                                    <div class="preview-respond__content">
                                        <p class="paragraph">Grandpa! Don't call 911!</p>
                                        <p class="paragraph">Don't panic! they're e-mails, I only see them when they're
                                            sent, I don't see your messages live! I'm coming to help you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-respond">
                                <div class="message__actions">
                                    <img class="message__icon" src="<?= SCRIPTS . 'img' . DIRECTORY_SEPARATOR . 'img_user_profile' . DIRECTORY_SEPARATOR . 'trash.png' ?>" />
                                </div>
                                <div class="content-preview-text">
                                    <div class="preview-respond__head">
                                        <div class="profile-head">
                                            <div class="profile-head__id">
                                                <img class="user-profile-picture" src="<?= SCRIPTS.'img'. DIRECTORY_SEPARATOR.'img_user_profile'.DIRECTORY_SEPARATOR.$params['users']->user_picture?>" alt="">
                                                <div>
                                                    <div class="profile-head__name"><?= $params['users']->username ?></div>
                                                </div>
                                            </div>
                                            <div class="date">Yesterday, 12:01</div>
                                        </div>
                                    </div>
                                    <div class="preview-respond__content">
                                        <p class="paragraph">Oh, my God, I was scared!</p>
                                        <p class="paragraph">Don't panic! they're e-mails, I only see them when they're
                                            sent, I don't see your messages live! I'm coming to help you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="picture-galery">
                    <div class="preview-top">
                        <div id="photo"class="preview__title">votre galerie</div>
                    </div>
                    <div class="container-galery">
                        <div class="image-box">
                            <img class="horizontal" src="https://images.unsplash.com/photo-1593642634524-b40b5baae6bb?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2532&q=80" />
                        </div>
                        <div class="image-box">
                            <img class="vertical" src="https://images.unsplash.com/photo-1633975645590-42ae66f9e6c3?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                        </div>
                        <div class="image-box">
                            <img class=" big" src="https://images.unsplash.com/photo-1634114382698-00e5e4693b37?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                        </div>
                        <div class="image-box">
                            <img class="vertical" rc="https://images.unsplash.com/photo-1634121945084-d700e08b58e0?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
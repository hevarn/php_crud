<!--MAIN
    ==========================-->
    <main class="main-formLogin">
    <!-- OVERLAY
          =============================== -->
    <div class="overlay second-th">
        <div class="container-loading-img">
            <span class="loader-59">
        </div>
    </div>

    <div class="home-img-formLogin">
        <img class="move" src="assets/img-form-login/1.png" alt="img-background-home" data-speed="-5" />
        <img class="move" id="bottle" src="/projetZero/assets/img-form-login/2.png" alt="img-background-home" data-speed="7" />
        <img class="move" src="/projetZero/assets/img-form-login/3.png" alt="img-background-home" data-speed="10" />
        <img class="move" src="/projetZero/assets/img-form-login/4.png" alt="img-background-home" data-speed="-2" />
        <img class="move" src="/projetZero/assets/img-form-login/5.png" alt="img-background-home" data-speed="-6" />
        <img class="move" src="/projetZero/assets/img-form-login/6.png" alt="img-background-home" data-speed="3" />
    </div>
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
                <input type="text" class="input" placeholder="Name" />
                <input type="email" class="input" placeholder="Email" />
                <input type="password" class="input" placeholder="Password" />
            </div>
            <button class="submit-btn">Sign up</button>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                <form action="/projetZero/admin/valid" method="POST">
                    <div class="form-holder">
                        <input type="text" name="username" class="input" placeholder="pseudo" />
                        <input type="password" name="password" class="input" placeholder="Password" />
                    </div>
                    <button type="submit" class="submit-btn">Log in</button>
                </form>
            </div>
        </div>
    </div>
</main>
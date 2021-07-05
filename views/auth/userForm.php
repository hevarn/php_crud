<div class="container_custom">
   <div class="container_login">
      <section id="formHolder">
         <div class="row">
            <!-- Brand Box -->
            <div class="col-sm-6 brand">
               <div class="heading">
                  <div class="content_text_anim">
                     <img class="content__container__img" src="<?= SCRIPTS.'img'.DIRECTORY_SEPARATOR.'moi_emoji.png' ?>">
                     <div class="content__container">
                        <ul class="content__container__list">
                           <li class="content__container__list__item">HELLO !</li>
                           <li class="content__container__list__item">CIAO!</li>
                           <li class="content__container__list__item">SALUT !</li>
                           <li class="content__container__list__item">CHÀO !</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Form Box -->
            <div class="col-sm-6 form">
               <!-- Login Form -->
               <div class="login form-peice switched">
                  <form class="login-form" action="/projetZero/admin/valid" method="POST">
                     <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" required>
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                     </div>

                     <div class="CTA">
                        <input type="submit" value="Login">
                        <a href="#" class="switch">I'm New</a>
                     </div>
                  </form>
               </div><!-- End Login Form -->


               <!-- Signup Form -->
               <div class="signup form-peice">
                  <form class="signup-form" action="/projetZero/User/valid" method="POST">

                     <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="username" id="name">
                        <span class="error"></span>
                     </div>

                     <div class="form-group">
                        <label for="email">Email Adderss</label>
                        <input type="email" name="emailAdress" id="email" class="email">
                        <span class="error"></span>
                     </div>

                     <div class="form-group">
                        <label for="phone">Phone Number - <small>Optional</small></label>
                        <input type="text" name="phone" id="phone">
                     </div>

                     <div class="form-group">
                        <label for="passwordFirst">Password</label>
                        <input type="password" name="password" id="passwordFirst" class="pass">
                        <span class="error"></span>
                     </div>

                     <div class="form-group">
                        <label for="passwordCon">Confirm Password</label>
                        <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                        <span class="error"></span>
                     </div>

                     <div class="CTA">
                        <input type="submit" value="Signup Now" id="submit">
                        <a href="#" class="switch">I have an account</a>
                     </div>
                  </form>
               </div><!-- End Signup Form -->
            </div>
         </div>
      </section>
   </div>
</div>
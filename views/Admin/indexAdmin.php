 <!-- OVERLAY
    =============================== -->
 <div class="overlay fourth">
     <div class="container-loading-img">
         <span class="loader-59">
     </div>
 </div>
 <!-- CARD USER
=============================== -->
 <div class="container-general">
     <div class="container-card-admin">
         <div id="container">
             <div class="card-admin">
                 <div class="front">
                     <div class="image_overlay"></div>
                     <div id="details-card">
                         <p>details</p>
                     </div>
                     <div class="text-container">
                         <p class="title">jean paule</p>
                         <p class="p">jaiPasleTemps</p>
                     </div>
                 </div>
                 <div class="back">
                     <div class="input-container">
                         <div class="form">
                             <form class="register-form">
                                 <input class="a" type="text" placeholder="name" />
                                 <input class="b" type="password" placeholder="password" />
                                 <input class="c" type="text" placeholder="email address" />
                                 <button class="d">create</button>
                             </form>
                         </div>
                         <div id="flip-back">
                             <div id="cy"></div>
                             <div id="cx"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- CARD FOREACH 
     =====================================-->
     <div class="container-card-info">
         <a href="/projetZero/admin/panel/create" class="btn-create" id="btn-create-custom">Céer une bouteille</a>
         <?php foreach ($params['reqs'] as $req) : ?>
             <div class="card-info-admin">
                 <div class="card" id="card-info">
                     <div class="row"><?= $req->id ?></div>
                     <div class="row"><?= $req->name ?></div>
                     <div class="row"><?= $req->year ?></div>
                     <div class="row"><?= $req->grapes ?></div>
                     <div class="row"><?= $req->region ?></div>
                     <div class="row"><?= $req->country ?></div>
                     <div class="row"><?= $req->picture ?></div>
                     <div id="details-row">
                         <p>details</p>
                     </div>
                 </div>
                 <div class="container-back-info-indexAdmin">
                     <form class="from" action="/projetZero/admin/panel/delete/<?= $req->id ?>" method="POST" class="d-inline">
                         <button type="submit" class="btn-cancel"> effacer</button>
                         <a href="/projetZero/admin/panel/modify/<?= $req->id ?>" class="btn-modify"> modifier</a>
                     </form>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
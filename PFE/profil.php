<?php
require("config/commande.php");
$prf=afficher();

?> 
<!doctype html>
<html lang="fran">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="styleformulaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<title>Profile</title>
    <link rel="stylesheet" href="p/css/all.min.css" />
    <link rel="stylesheet" href="p/css/framework.css" />
    <link rel="stylesheet" href="p/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  
 </head>
<body translate="no" >
    <br>
<div class="naVbar">
        <naV>
            <ul>
			  
              <li> 
                 <a href="accueil.php" >
		             <img src="home.png" width="42" height="42" class="rounded-circle" >
		         </a>
              </li>
              
              
           </ul>
        </naV>
    </div>
<body>
    <div class="formulaire">
        <div class="barre"></div><br>
        <form >
        <?php foreach($prf as $admin): ?>
            
            
          
       <div class="page d-flex ">
    
        
      <div class="content w-full">
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
            <img src="<?= $admin->image ?>"  width="150" height="150">
              <h3 class="m-0"><?= $admin->nom ?> <br> <?= $admin->prenom ?></h3>
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey fs-15 m-0 w-full"><b>Information General </b> </h4>
                <div class="fs-14">
                  <span class="c-grey">Nom</span>
                  <span><?= $admin->nom ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Prenom</span>
                  <span><?= $admin->prenom ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Sexe:</span>
                  <span><?= $admin->sexe ?></span>
                </div>
                
                
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0"> Information Personal</h4>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span><?= $admin->email ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Num telephone:</span>
                  <span><?= $admin->num ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Date de naissance</span>
                  <span><?= $admin->date ?></span>
                </div>
                <div class="fs-14">
                 
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Information Professionel</h4>
                <div class="fs-14">
                  <span class="c-grey">Departement</span>
                  <span>DSI</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Direction</span>
                  <span>ERP</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Years Of Experience:</span>
                  <span>15+</span>
                </div>
                <div class="fs-14">
                 
                </div>
              </div>
              <!-- End Information Row -->
              
            </div>
          </div>
          <?php endforeach; ?>


        



    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

            
        </form>
    </div>
 </body>
</html>





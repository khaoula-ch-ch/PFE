<?php
include "config/commande.php";
 session_start();
 if(!isset($_SESSION['azerty']))
{
    if(!empty($_SESSION['azerty']))
{
    header("Location: accueil.php/");
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gestion des courriers d'Algerie Telecom</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" id="hero">
   <main class="form-signin w-100 m-auto" id="p">
    <form method="post">
    <img class="mb-4" src="logo.png" alt="" width="200" height="100">
    <h1 class="h3 mb-3 fw-normal">Courrier</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name ="email" >
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <input class="w-100 btn btn-lg btn-dark" type="submit" name="envoyer"value="Sign in">
   </form>
   </main>
  </body>
</html>
<?php
 if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['password']) ){
        $email= htmlspecialchars( $_POST['email']); 
        $password=htmlspecialchars( $_POST['password']);
        $admin= getAdmins($email,$password);
         if($admin){
          $_SESSION['azerty'] =$admin;
          header("Location: accueil.php");



         }else{
           echo"email ou mot de passe incorrect";
         }
    }
 }
?>
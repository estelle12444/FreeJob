<?php
SESSION_start();
@$email=$_POST["email"];
@$mdp =md5($_POST["mdp"]);
@$valider=$_POST["valider"];
$erreur="";

if (isset($valider)){
    include ("database.php");
    $sel= $pdo-> prepare("select * from utilisateur where email=? and mdp=? limit 1");
    $sel->execute(array($email,$mdp));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
        " ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        header("location:profil.php");
     }
     else
        $erreur="Mauvais login ou mot de passe!";
  }
?>



<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>FreeJob</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html"><span>F</span>ree<span>J</span>ob</a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Contactez-nous au:</strong> +00 (225) 782 128 57</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Notre addresse mail:</strong> freejob@gmail.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Lun. - Sam. :</strong> 08.00 - 18.00</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <section class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li ><a href="index.html">Accueil</a></li>
        <li><a href="inscri.php">Inscription</a></li>
        <li class="active"><a href="connexion.php">connexion</a></li>
        <li><a class="drop" href="#">Nos services</a>
          <ul>
            <li><a href="emploi.html">Offres d'emploi</a></li>
            <li><a href="stages.html">Offres de stages</a></li>
            <li><a href="travail.html">travail à distance</a></li>
            <!--<li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>-->
          </ul>
        </li>
        
        <li><a href="propos.html">A propos</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Recherche&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 

  
<div >
  <div class="one_third">
      <h6 class="heading" style="text-align:center; float:center;position:relative; left:100%;">Connexion</h6>

      <div class="erreur"><?php echo $erreur ?></div>
      <br><br>
      <form  method="post" action="" style=" float:center;position:relative; left:100%;">
  <div class="form-row">
    
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Mot de passe</label>
      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="valider"> se connecter</button>
</form>
    </div>
</div>
</div>



    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
  
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Suivez-nous sur nos différents réseaux sociaux</h6>
     
      <ul class="faico clear">
        
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        
      </ul>
    </div>
   
    <div class="one_third">
      <h6 class="heading">Souscrivez à notre Newsletter</h6>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Nom">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">souscrire</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Tous droits réservé à<a href="#">FreeJob</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
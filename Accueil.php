<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hopital Werral ak Jamm</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span >Werral Ak Jamm </span> Votre Santé ,Notre priorité</div> 
        <ul class ="x">
            <a href="Accueil.html">Accueil </a>
            <a href="aide.html">Aide </a>
        </ul>
    </header>
<main class="row">
    <section class="gauche">
        <h2> connexion</h2>
        <form action="traitementlogin.php" method="post" >
            <p>Votre Id: <input type="number" name ="identité" ></p>
            <p>Code: <input type ="password" name="password" ></p>
            <p>Profession: 
              <select name="profil">
              <option> </option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>7</option>
              </select>
            </p>
          <p> <button routerLink="">Connecter</button></p>
        </form>
   
    </section>
<section class="def">
    <h2>Soigner c'est faire un don de soi</h2>
    <div >
        <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img  height='500' src="assets/Accueil.jpg" class="d-block w-100" alt="page d'Accueil">
              </div>
              <div class="carousel-item">
                <img height='500' src="assets/sal.jpg" class="d-block w-100" alt="salle d'attente">
              </div>
              <div class="carousel-item">
                <img  height='500'src= "assets/perso.jpg" class="d-block w-100" alt="personnels">
              </div>
              <div class="carousel-item">
                <img height='500' src="assets/infi.jpg" class="d-block w-100" alt="personnels">
              </div>
              <div class="carousel-item">
                <img height='500' src="assets/ob.jpg" class="d-block w-100" alt="Salle analyse">
              </div>
              <div class="carousel-item">
                <img height='500' src="assets/im.jpg" class="d-block w-100" alt="patients">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>
</main>
    <footer>
        <div class="bas">
            <div class="cps">
                <address >
                <br><br><span><a href="https://goo.gl/maps/sKQCmbb6wcRwkBKV6" target="_blank">Address<img class="imgx" height="20" src="assets/localisation.jpg" alt=""></a>vdn,Dakar-Sénégal</span><br><br>
                </address>
                <h5>En cas d'urgence appelez ce numero!!</h5>
                <img class="imgx" src= "assets/num.jpg" width="50"><br>
                
            </div>

            <div class="cps">
                <h4>Vous pouvez payer par :</h4>
              <a href="https://www.wave.com/fr/"  target="_blank"><img class="imgx" height="25" src="assets/wave.png" >wave</a>
              <br><a href="https://www.orangeetmoi.orange.sn/login"  target="_blank"><img class="imgx" height="25" src="assets/om.png">orangeMoyen</a>
              <br><a href="https://www.paypal.com/sn/signin"  target="_blank"><img class="imgx" height="25"  src="assets/visa.png" >Carte-Bancaire</a>
            </div>

            <div class="cps">
                  <h4>Suivez-nous sur : </h4>
                <a href="https://www.facebook.com/" target="_blank" class="fond" alt="Suivez-nous sur facebook" ><i class="fa-brands fa-facebook"></i>facebook</a>
                <br> <a href="https://instagram.com/" target="_blank" class="fond" alt="Suivez-nous sur instagram"><i class="fa-brands fa-instagram"></i> instagram</a>
                <br> <a href="https://twitter.com/" target="_blank" class="fond" alt="Suivez-nous sur twitter" ><i class="fa-brands fa-twitter"></i>twitter</a>
            </div>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/ffbfc5fdd6.js" crossorigin="anonymous"></script>
</html>

<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
        <ul class ="x">
            <a href="Accueil.php">Deconnecté</a>
            <a class="qui"  href="admin.php">Retour</a>
        </ul>
    </header>
    <form method="post" id="first" action= "traitajoudev.php">
        <fieldset form="first">
        <p><label for="date">Devoir Jour </label>:<input id="date" name ="datej" type="date"></p>
          <p><label for="id">id patient</label>:<input id="id" name="id" type = "number"></p>
            <p><label for="sal">Chambre</label>:<input id="sal" name ="salle" type="number" ></p>
            <p><label for="perso">ip personnel </label>:<input id="perso" name ="idperso" type="number"></p>
        </fieldset>
    </form>
</body>
</html>
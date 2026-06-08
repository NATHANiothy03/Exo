<?php
$produits1=[["Nom"=>"Stylo Bleu","Prix"=>"2000","Categorie"=>"Ecriture"],["Nom"=>"Stylo Rouge","Prix"=>"2000","Categorie"=>"Ecriture"],["Nom"=>"Crayon HB","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Feutre de couleur","Prix"=>"8000","Categorie"=>"Ecriture"],["Nom"=>"Correcteur","Prix"=>"4000","Categorie"=>"Ecriture"]];
$produits2=[["Nom"=>"Cahier 100 pages","Prix"=>"5000","Categorie"=>"Cahier et Papier"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"]];
$produits3=[["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"],["Nom"=>"Stylo","Prix"=>"1000","Categorie"=>"Ecriture"]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css">
</head>
<body class="bg-dark  text-light">
     <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <img src="ST.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Page_d'accueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Panier.php">Panier</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<h3 class="text-center bg-primary">Categorie Ecriture</h3>
<?php foreach($produits1 as $p1) { ?>
                
                <p>
                    <strong>
                        <?php echo ($p1["Nom"]);?>
                    </strong>
                </p>
                <p>
                    <strong>
                        <?php echo ($p1["Prix"]);?>
                    </strong>
                </p> 
<?php } ?>
<h3 class="text-center bg-primary">Categorie Cahier et Papier</h3>
<?php foreach($produits2 as $p2) { ?>
                
                <p>
                    <strong>
                        <?php echo ($p2["Nom"]);?>
                    </strong>
                </p>
                <p>
                    <strong>
                        <?php echo ($p2["Prix"]);?>
                    </strong>
                </p> 
<?php } ?>
<h3 class="text-center bg-primary">Categorie Accessoires Scolaires</h3>
<?php foreach($produits3 as $p3) { ?>
                
                <p>
                    <strong>
                        <?php echo ($p3["Nom"]);?>
                    </strong>
                </p>
                <p>
                    <strong>
                        <?php echo ($p3["Prix"]);?>
                    </strong>
                </p> 
<?php } ?>
</body>
</html>
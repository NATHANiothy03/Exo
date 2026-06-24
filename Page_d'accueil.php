<?php
$produits1=[["Nom"=>"Stylo Bleu","Prix"=>"2000","Categorie"=>"Ecriture","img"=>"SB.JPG"],["Nom"=>"Stylo Rouge","Prix"=>"2000","Categorie"=>"Ecriture","img"=>"SR.JPG"],["Nom"=>"Crayon HB","Prix"=>"1000","Categorie"=>"Ecriture","img"=>"CR.JPG"],["Nom"=>"Feutre de couleur","Prix"=>"8000","Categorie"=>"Ecriture","img"=>"FC.JPG"],["Nom"=>"Correcteur","Prix"=>"4000","Categorie"=>"Ecriture","img"=>"C.JPG"]];
$produits2=[["Nom"=>"Cahier 100 pages","Prix"=>"5000","Categorie"=>"Cahier et Papier","img"=>"100.JPG"],["Nom"=>"Cahier 200 Pages","Prix"=>"8000","Categorie"=>"Cahier et Papier","img"=>"200.JPG"],["Nom"=>"Bloc-Notes","Prix"=>"3500","Categorie"=>"Cahier et Papier","img"=>"BC.JPG"],["Nom"=>"Papier A4","Prix"=>"25000","Categorie"=>"Cahier et Papier","img"=>"A4.PNG"],["Nom"=>"Carnet de Notes","Prix"=>"6000","Categorie"=>"Cahier et Papier","img"=>"CN.JPG"]];
$produits3=[["Nom"=>"Regles 30cm","Prix"=>"2500","Categorie"=>"Accessoires","img"=>"R.JPG"],["Nom"=>"Equerre","Prix"=>"3000","Categorie"=>"Accessoires","img"=>"E.JPG"],["Nom"=>"Compas","Prix"=>"7000","Categorie"=>"Accessoires","img"=>"compas.JPG"],["Nom"=>"Trousse","Prix"=>"12000","Categorie"=>"Accessoires","img"=>"trousse.JPG"],["Nom"=>"Sac a dos","Prix"=>"45000","Categorie"=>"Accessoires","img"=>"SAC.JPG"]];

include "Panier.php";
$e1=new panier("Stylo Bleu",2000,1,"SB.JPG");
$e2=new panier("Stylo Rouge",2000,1,"SR.JPG");
$e3=new panier("Crayon HB",1000,1,"CR.JPG");
$e4=new panier("Feutre de couleur",8000,1,"FC.JPG");
$e5=new panier("Correcteur",4000,1,"C.JPG");
$tabe=[$e1,$e2,$e3,$e4,$e5];

$cp1=new panier("Cahier 100 pages",5000,1,"100.JPG");
$cp2=new panier("Cahier 200 pages",8000,1,"200.JPG");
$cp3=new panier("Bloc-Notes",3500,1,"BC.JPG");
$cp4=new panier("Papier A4",25000,1,"A4.PNG");
$cp5=new panier("Carnet de Notes",6000,1,"CN.JPG");
$tabcp=[$cp1,$cp2,$cp3,$cp4,$cp5];

$a1=new panier("Regles 30cm",2500,1,"R.JPG");
$a2=new panier("Equerre",3000,1,"E.JPG");
$a3=new panier("Compas",7000,1,"compas.JPG");
$a4=new panier("Trousse",12000,1,"trousse.JPG");
$a5=new panier("Sac a dos",45000,1,"SAC.JPG");
$taba=[$a1,$a2,$a3,$a4,$a5];

session_start();

 $total=0;
 if(isset($_POST["Fourniture"]) && !isset($_SESSION["Fourniture"]))
    {
    $_SESSION["Fourniture"]=[];
    }
 if(isset($_POST["Fourniture"]))
    {
    foreach($_SESSION["Fourniture"] as $f)
            {
                $total+=$f["PT"] ;   
            }
    }        
    if (isset($_POST['supp_session'])) {
    session_unset();
    session_destroy();
    header("Location: #Panier"); 
    exit;
}         

if(isset($_POST["Fourniture"])!=null)
    {
        $n=$_POST["nom"];
        $x=$_POST["prix"];    
        $p=(int)$_POST["Fourniture"];
         $total=0;
        if($p>0)
            {
                $_SESSION["Fourniture"][]=["nom"=>$n,
                                        "prix"=>$x,
                                        "quantite"=>$p,
                                        "PT"=>$x*$p,
                                      ];
            header("location:#Panier");
            exit();        
            }
    }  
if(isset($_GET["remove"])) 
    {
        $Fourniture=$_GET["remove"];
        unset($_SESSION["Fourniture"][$Fourniture]);
        $_SESSION["Fourniture"]= array_values($_SESSION["Fourniture"]);
        header("Location: Page_d'accueil.php#Panier");
    } 
if(isset($POST['supp_session'])) 
    {
        unset($_SESSION['panier']);
        header("Location: Page_d'accueil.php");
        exit();
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css">
     <link rel="stylesheet" href="NAT'S-custom.css">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-primary dropdown cf"   id="primary-nav" >
      <div class="container-fluid bg-dark text-light">
            <img src="ST.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav dropdown menu">
                  <li class="nav-item"><a class=" text-light"  href="#Accueil">Accueil</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Produits">Produits</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Panier">Panier</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Contact">Contact</a></li>
              </ul>
          </div>
      </div>
</nav>

<section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>School Things(ST)</h2>
                        <span>ST est une entreprise fournissant les fournitures scolaires. Elle a pour PDG "Mr NATHAN",age de 17ans, il a cree l'entreprise afin d'aider les ecoles publics afin qu ils puissent travailler avec les meilleurs ustensils d'etudes.</span>
                        <span>L'entrepise a ete fonde en 2013 , et a realisee un chiffre de 1.000.000$ en 2018. Ainsi le niveau d'etude a Madagascar pendants les 13 annees fut ameliore.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br>

 <section class="popular-places" id="Produits">
        <div class="container-fluid">
                    <div class="section-heading">
                        <span>Produits</span>
                        <h2>CATEGORIES</h2>
                    </div>  
                        <h2 class="text-center bg-dark text-light">Ecriture</h2>
                        <div class="terrain">  
                            <?php foreach($tabe as $e) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($e->img);?>" alt="">
                                    <p >NOM:
                                        <strong class="text-danger">
                                            <?php echo ($e->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix:
                                        <strong  class="text-danger">
                                            <?php echo ($e->Prix."Ar");?>
                                        </strong>
                                    </p>
                                      <form method="POST">
                        Quantite:<input type="number"  name="Fourniture">
                        <input type="hidden" name="nom" value="<?php echo $e->Nom?>">
                        <input type="hidden" name="prix" value="<?php echo $e->Prix?>">

                         <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div>
                            
                            <h2 class="text-center bg-dark text-light">Cahier et Papier</h2>
                            <div class="terrain">  
                            <?php foreach($tabcp as $cp) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($cp->img);?>" alt="">
                                    <p>NOM:
                                        <strong  class="text-danger">
                                            <?php echo ($cp->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix:
                                        <strong  class="text-danger">
                                            <?php echo ($cp->Prix."Ar");?>
                                        </strong>
                                    </p>
                                    <form method="POST">
                        Quantite:<input type="number"  name="Fourniture">
                        <input type="hidden" name="nom" value="<?php echo $cp->Nom?>">
                        <input type="hidden" name="prix" value="<?php echo $cp->Prix?>">

                         <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div>
                           
                            <h2 class="text-center bg-dark text-light">Cahier et Papier</h2>
                            <div class="terrain">  
                            <?php foreach($taba as $a) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($a->img);?>" alt="">
                                    <p>NOM:
                                        <strong  class="text-danger">
                                            <?php echo ($a->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix: 
                                        <strong  class="text-danger">
                                            <?php echo ($a->Prix."Ar");?>
                                        </strong>
                                    </p>
                                    <form method="POST">
                        Quantite:<input type="number"  name="Fourniture">
                        <input type="hidden" name="nom" value="<?php echo $a->Nom?>">
                        <input type="hidden" name="prix" value="<?php echo $a->Prix?>">

                         <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div> 
        </div>
    </section>
    <br>
</form>
</div>
<br>
<br>
<br>
    <section class="popular-places" id="Panier">
        <div class="container-fluid">
                    <div class="section-heading">
                        <span>Panier</span>
                        <h2>Recu du client</h2>
                    </div> 
        </div>
        <table class="table">
      <thead>
        <tr class="table-light">
          <th scope="col" class="text-success">Designation</th>
          <th scope="col" class="text-success">Quantite</th>
          <th scope="col" class="text-success">Prix Unitaire</th>
          <th scope="col" class="text-success">Prix Total</th>
          <th scope="col" class="text-success">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $total=0;
         foreach(($_SESSION["Fourniture"] ?? []) as $Fourniture=>$f) {  $total+=(float)$f["PT"] ;   ?>
            <tr>
            <th scope="row" class="table-light"><?php echo $f["nom"] ?></th>
            <td class="table-light"><?php echo $f["quantite"]?></td>
            <td class="table-light"><?php echo $f["prix"] ?></td>
            <td class="table-light"><?php echo $f["PT"] ?></td>
            <td class="table-light"><a href="?remove=<?php echo $Fourniture;?>"><button type="button" class="btn btn-outline-danger ">Supprimer</button></td>
            </tr>
        <?php }?>
             <tr>
            <th scope="row" class="table-light"></th>
            <td class="table-light"></td>
            <td class="table-light text-success"><strong>Net=</strong> </td>
            <td class="table-light"><?php echo $total?></td>
             <td class="table-light"></td>
            </tr>
       </tbody>
    </table>
        <div class="d-md-flex justify-content-md-end">
<button type="button" class="btn btn-outline-success" id="btnConfirmer" onclick=redirectionLogin()>Confirmer</button>

<script>
    const bouton = document.getElementById('btnConfirmer');
   bouton.addEventListener('click',()=>
    {
        let reponse = confirm("Voulez-vous vraiment confirmer cet achat ?");
        if(reponse == true)
        {
            window.location.href="login.php";
            formSupprimer.submit();
        }
        if(reponse == false)
        {
            alert("Achat annule.")
        }
    });
</script>
<form action="#Panier" method="POST">
    <button type="submit" name="supp_session" class=" btn-delete btn btn-outline-danger ">
        Supprimer 
    </button>
</div>
    </section>

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span>Video Presentation</span>
                <h2>ST</h2>
                <a href="y.Mp4" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </section>

    <section class="contact" id="Contact">
         <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                  <div class="section-heading">
                      <span>ST</span>
                      <h2>Contact Nous</h2>
                  </div>
                  <!-- Modal button -->
                 <a href="https://www.instagram.com/nats__use/?__pwa=1#" alt=""> <button id="modBtn" class="modal-btn">Talk to us</button></a>
                </div>
    </section>    
    <br>
    <br>
    <nav class="navbar navbar-expand-lg bg-body-primary dropdown cf"   id="primary-nav" >
      <div class="container-fluid bg-dark text-light">
            <img src="ST.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav dropdown menu">
                  <li class="nav-item">Antananarivo</li>
              </ul>
          </div>
      </div>
</nav>
      
</body>
</html>
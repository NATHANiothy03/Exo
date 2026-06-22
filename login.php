<?php
$pseudo=["Roddy","Nathan","Mitia"];
$mdp=["mdp123","mdp234","mdp345"];

if(!isset($_POST["nom"]) && !isset($_POST["mot"]))
   $reponse=""; {
        $reponse="Veuillez insert vos donnees";
    }
if(isset ($_POST["nom"]) && isset ($_POST["mot"]))
    {
        for($i=0;$i<3;$i++)
            {
                if($pseudo[$i]==$_POST["nom"])
                    {
                        $reponse="";
                        if($_POST["mot"]==$mdp[$i])
                            {
                                $reponse="Mot de passe correct!";
                                header("Location:Page_d'accueil.php");
                            }
                        else
                            {
                                $reponse="Mot de passe incorrecte!";
                            }
                            break;
                    }    
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <!-- As a heading -->
<div class="fixed-top">      
    <nav class="navbar navbar-expand-lg bg-body-primary dropdown cf"   id="primary-nav" >
      <div class="container-fluid bg-dark text-light">
            <img src="ST.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">School Things
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
          </div>
      </div>
</nav>
</div>  
<br>
<br>
<br>
<br>
    <form method="POST">
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-default">Pseudo</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="nom">
</div>

<br>

<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-default">Mdp</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="mot">
</div>
<br>
<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-success" onclick="alert('Achat reussi.Merci pour votre Confiance')" >Envoyer</button>
</div>        
    </form>
    <p class="text-danger"><?php echo $reponse ?></p>
</body>
</html>
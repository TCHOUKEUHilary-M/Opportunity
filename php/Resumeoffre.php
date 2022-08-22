<?php
session_start();
$db='mysql:dbname=eat_drink;host=localhost';
$user="root";
$pass="";

try {
    $dbco=new PDO($db,$user,$pass);
}catch( PDOException $e){
    echo $e -> getMessage();
    die(); 
}
if ($dbco->connect_error) {
  die("Connexion a échouée: " . $dbco->connect_error);
}
$sql="SELECT *FROM appel where id_user=1 ";
$result = $dbco->query($sql);

if ($result->num_rows > 0) {
  // Afficher les résultats de chaque ligne
  /*while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " - prénom: " . $row["prenom"]. "<br>";
  }
} else {
  echo "0 results";*/
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Offre</title>
    <link rel="stylesheet" href="../css/opportunity.css">
    <script src="../js/appel.js"></script>
</head>

<body>
    <header id="header">
        <div class="header1">
            <img class="ima"  src="../image/opportunity.jpg">
            <div class="slogan">
                <h1>OpportunityCareer</h1>
                <p>Find Your Own</p>
            </div>
        </div>
        <div class="navbar">
            <a href="../index.html">Accueil</a>
            <a href="../APPEL.HTML">Poster un Appel d'Offre</a>
            <a href="../service.html">Rechercher un Métier</a>
            <a href="../postulez.html">Postuler pour un Emploi</a>
            <a href="../Cv.HTML">Enregistrer son Cv</a>
            <a class="aide" href="../Aide.html">?</a>
        </div>
    </header>
    <section>
        <h1 class="h1">VOTRE OFFRE</h1>
        <div>
              <div id="info">
                <h3>Information sur l'employeur</h3>
                <ol id="infool">
                    <li><?php echo $result['Nom']; ?></li>
                    <li><?php echo $result['Numero']; ?></li>
                    <li><?php echo $result['Email']; ?></li>
                    <li><?php echo $result['Structure']; ?></li>
                </ol>
              </div>
            <div id="emploi">
                <h3>Information sur l'emploi</h3>
                <ol id="olemploi">
                    <li></li>
                </ol>
            </div>
        </div>
        <div>
            <div id="qual">
                <h3>Qualification</h3>
                <ol id="qual">
                    <li></li>
                </ol>
            </div>
        </div>
    </section>
    <footer>
        <div id="socialmedia">
            <p>Suivez-nous sur</p>
            <img src="../fontawesome/svgs/brands/facebook.svg">
            <img src="../fontawesome/svgs/brands/twitter-square.svg">
        </div>
        <img class="ima" style="width:10%;" src="../image/opportunity.jpg">
    </footer>
    <script src="../js/opportunity.js"></script>

</body>

</html>
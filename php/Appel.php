<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appel.php</title>
</head>
<body>
<?php
if( !isset($_POST['name']) ||  empty($_POST['name']))
{
echo('Il faut un nom pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['telephone']) || empty($_POST['telephone']))
{
echo('Il faut un numero de telephone valide pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['email']) ||  empty($_POST['email']))
{
echo('Il faut un email pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['secteur']) || empty($_POST['secteur']))
{
echo('Entrer votre Metier pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
$_SERVER="localhost";
$dbname="opportunityc";
$user="root";
$pass="";
$nom=trim($_POST['name']);
$tel=trim($_POST['telephone']);
$email=trim($_POST['email']);
$structure=trim($_POST['structure']);
$secteur=trim($_POST['secteur']);
$poste=trim($_POST['poste']);
$heure=trim($_POST['heure']);
$lieu=trim($_POST['lieu']);
$horraire=trim($_POST['horraire']);
$jour=trim($_POST['day']);
$age=trim($_POST['age']);
$niveau=trim($_POST['niveau']);
$qualite=trim($_POST['qualite']);
$aptitude=trim($_POST['apt']);
//$condition=trim($_POST['condition']);
/*
$nom=$_POST['nom'];
$tel= $_POST['tel'];
$email=$_POST['email'];
$nationality= $_POST['nationality'];
$prof=$_POST['prof'];
$competences= $_POST['competences'];
$experiences=$_POST['experiences'];
$experience= $_POST['experience'];
$lan=$_POST['lan'];
$dip= $_POST['dip'];
//$insert=$_POST['insert'];*/
try {
    $dbco=new PDO("mysql:host=$_SERVER;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sth=$dbco->prepare(" 
    INSERT INTO appel(Nom,Numero,Email,Structure,Secteur,Poste,Heure,Lieu,
    Horraire,Jour,Age,Niveau,Qualite,Aptitude)  
    VALUES(:nom,:numero,:email,:structure,:secteur,:poste,:heure,:lieu,:horraire,
    :jour,:age,:niveau,:qualite,:aptitude)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':numero',$tel);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':structure',$structure);
        $sth->bindParam(':secteur',$secteur);
        $sth->bindParam(':poste',$poste);
        $sth->bindParam(':heure',$heure);
        $sth->bindParam(':lieu',$lieu);
        $sth->bindParam(':horraire',$horraire);
        $sth->bindParam(':jour',$jour);
        $sth->bindParam(':age',$age);
        $sth->bindParam(':niveau',$niveau);
        $sth->bindParam(':qualite',$qualite);
        $sth->bindParam(':aptitude',$aptitude);
        //$sth->bindParam(':condition',$condition);
        $sth->execute();
    header("location:Resumeappel.html");
} 
catch (PDOException $e) {
    echo 'impossible de traiter les donnees. Erreur :'.$e ->getMessage();
}
    ?>
</body>
</html>
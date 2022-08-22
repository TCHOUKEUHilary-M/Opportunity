<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv.php</title>
</head>
<body>
<?php
if( !isset($_POST['nom']) ||  empty($_POST['nom']))
{
echo('Il faut un nom pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['tel']) || empty($_POST['tel']))
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
if( !isset($_POST['prof']) || empty($_POST['prof']))
{
echo('Entrer votre Metier pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
$nom=$_POST['nom'];
$tel= $_POST['tel'];
$email=$_POST['email'];
$nationality= $_POST['nationality'];
$prof=$_POST['prof'];
$competences= $_POST['competences'];
$experience=$_POST['experiences'];
$experiences= $_POST['experience'];
$lan=$_POST['lan'];
$dip= $_POST['dip'];
//$insert=$_POST['insert'];
    ?>
    <?php
$_SERVER="localhost";
$dbname="opportunityc";
$user="root";
$pass="";
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
//$insert=$_POST['insert'];
try {
    $dbco=new PDO("mysql:host=$_SERVER;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sth=$dbco->prepare("
        INSERT INTO CV(nom,tel,email,nationality,prof,competences,experiences,
        experience,lan,dip)
        VALUES(:nom,:tel,:email,:nationality,:prof,:competences,:experiences,
        :experience,:lan,:dip)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':tel',$tel);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':nationality',$nationality);
        $sth->bindParam(':prof',$prof);
        $sth->bindParam(':competences',$competences);
        $sth->bindParam(':experiences',$experiences);
        $sth->bindParam(':experience',$experience);
        $sth->bindParam(':lan',$lan);
        $sth->bindParam(':dip',$dip);
        //$sth->bindParam(':insert',$insert);
        $sth->execute();
    header("location:ResumeCv.html");
} 
catch (PDOException $e) {
    echo 'impossible de traiter les donnees. Erreur :'.$e ->getMessage();
}
    ?>
</body>
</html>
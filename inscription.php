<?php 




$pdo = new PDO('mysql:host=localhost;dbname=abonnes', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail'])&& isset($_POST['prenom'])&& isset($_POST['password'])){
    $nom = $_POST ['nom'];   
    $prenom = $_POST ['prenom'];
    $mail = $_POST ['mail'];
    $password = $_POST ['password'];
    echo "Vos données $nom - $prenom - $mail - $password ont bien été enregistrées !";
    $pdo -> query("INSERT INTO identification (nom, prenom, mail, password)
    VALUES('$nom','$prenom','$mail' ,'$password')"); 
}



?>   

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="styles.css">
   
</head>
<body>
    <form method="POST" action="index.php">
    <input type="texte" name="nom" class= 'nom'>
    <input type="texte" name="prenom">
    <input type="texte" name="mail">
    <input type="texte" name="password">
    <input type="submit" name="btn" class="btn">
    </form>
</body>
</html>
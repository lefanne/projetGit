<?php
$utilisateur = 1;
$pdo = new PDO('mysql:host=localhost;dbname=abonnes','root','',array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
if(isset($_POST["login"])){
    
    $id_identification = $utilisateur;
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    $result = $pdo -> query("SELECT id_identification FROM identification WHERE mail='$login' AND password='$pwd'");
    //verificationj de l'egalite entre "mail" saisie dans l'input et celui de la base AND le 'password' de l'input et celui de la base pour afficher 'bienvenue'
   
    echo 'Nombre de résultats : ' . $result -> rowCount() . '<br/><hr/>';
    $v = $result -> rowCount();
    $x= $result -> fetch();
    $id_identification =$x['id_identification'];
    if ($v == 1){
        header('location:article.php?id_identification='.$id_identification);
        exit;
    } 
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOUVELLE MODIF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
    <form method="POST" action="index.php">
        <input type="text" name="login" placeholder="entrez votre Email"><br><br>
        <input type="text" name="pwd" placeholder="Mot de passe">
        
        <input type="submit">
    </form>

</body>
</html>
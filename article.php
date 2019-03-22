<?php
//je me connecte à ma base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=abonnes','root','',array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

$id_identification = $_GET['id_identification'];

$result = $pdo -> query("SELECT nom, prenom FROM identification WHERE id_identification = '$id_identification'");
$tabResult = $result -> fetch();
$nom = $tabResult['nom'];
$prenom = $tabResult['prenom'];

if(isset($_POST["titre"])){
    $titre = $_POST["titre"];
    $art = $_POST["art"];
    $pdo -> query("INSERT INTO article (id_identification, titre, date_parution, art) VALUES ('$id_identification', '$titre', CURDATE(), '$art')");
    echo " Vos données $id_identification - $titre - $art ont bien été enregistrées!";
   
}  
   

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enregistrement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<h1>VOTRE ARTICLE</h1>
<h1><?php echo "bonjour $nom $prenom"; ?></h1>
    <form method="POST" action="article.php">
        <input type="text" name="titre" placeholder="titre"><br><br>
        <textarea name="art"></textarea><br><br>
        <select name="rubrique">
            <option selected disabled>categories</option>
            <option value="culture_pop">culture_pop</option>
            <option value="sport">sport</option>
            <option value="cuisine">cuisine</option>
            <option value="actualité">actualite</option>
            <option value="mode">mode</option>
            <option value="tunning">tunning</option>
        </select>

        <input type="submit" name="btn" placeholder="envoyer">
    </form>

</body>
</html>
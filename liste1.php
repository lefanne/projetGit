<?php
$pdo = new PDO('mysql:host=localhost;dbname=abonnes','root','',array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
$result = $pdo -> query("SELECT * FROM identification ");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
</head>
<body>
<?php

while ($utilisateurs = $result -> fetch(PDO::FETCH_ASSOC)){
  
     echo "<li>".$utilisateurs['id_identification']."/".$utilisateurs['nom']."/".$utilisateurs['prenom']."/".$utilisateurs['mail']."/".$utilisateurs['password']."</li>";
}
 
?>
</body>
</html>

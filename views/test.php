<?php 

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');}
    catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM perso');
while ($donnees = $reponse->fetch()){
    echo $donnees['id'];

    echo $donnees['nom'];
}
//echo $donnees['id'];


/*if (isset($_POST["emailfield"]))
{
    $mail=$_POST["emailfield"];
}
echo "La valeur du champ est ".$mail;
*/
?>
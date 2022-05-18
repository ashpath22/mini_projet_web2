


<?php
session_start();
require_once("functions.php");
$cnx=getConnexion();
$login=$_POST["email"];
$pass=$_POST["pass"];
$req=$cnx->prepare("select * from user where login=? ");
$req->bindParam(1,$login);
$req->execute();
$req->setFetchMode(PDO::FETCH_OBJ);
$exist=0;

while($d=$req->fetch()){
    if($pass==$d->password){
        $_SESSION["nom"]=$d->$nom;
        $_SESSION["id"]=$d->id;
        //$da=date("d-m-Y H:i:s");
        //$req2=$cnx->prepare("update user SET date_access = ? where id=?");
        $exist=1;
    }
}
if ($exist==0){
    $_SESSION["erreur"]="verifier Mr/Mlle votre email ou mot de passe!!";
    $_SESSION["type"]="warning";
    header("location:connexion.php");
}else{
    header("location:accueil.php");  
}

    



?>




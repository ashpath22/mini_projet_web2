<?php
include_once("functions.php");
$nom=$_POST["nom"];
$ens=$_POST["nom_enseignant"];
$etd=$_POST["nom_etudiant"];
addPfa($nom,$ens,$etd);

if(!empty($_FILES)){
    $file_name=$_FILES["fichier"]["name"];
    $file_type=$_FILES["fichier"]["type"];
    $file_extension=strchr($file_name,".");
    $file_tmp_name=$_FILES["fichier"]["tmp_name"];
    $file_dest='files/'.$file_name;

    $extension_autorisee=array('.pdf','.PDF');

    if(in_array($file_extension,$extension_autorisee)){
        if(move_uploaded_file($file_tmp_name,$file_dest)){
            $cnx=getConnexion();
            $req=$cnx->prepare("insert into file (nom, url) values(?,?)");
            $req->bindParam(1,$file_name);
            $req->bindParam(2,$file_dest);
            $req->execute();
            echo "fichier envoyer";
        }else{
            echo "erreur d'envoi";
        }
    }else{
        echo "seul les fichier pdf sont autorisee";
    }

 

}
header("location:accueil.php");




?>
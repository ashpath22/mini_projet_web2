<?php

function getConnexion(){
    return new PDO("mysql:host=localhost;dbname=pfa","root","");
}

function getAllpfa(){
    $tab=[];
    $cnx=getConnexion();
    $req=$cnx->query("select * from projet ");
    $req->setFetchMode(PDO::FETCH_OBJ);
    while($ligne=$req->fetch()){
        $tab[]=$ligne;
    }
    return $tab;
}

function addPfa($nom,$nom_ensignant,$nom_etudiant){
    $cnx=getConnexion();
    $req=$cnx->prepare("insert into projet values(null,?,?,?)");
    $req->bindParam(1,$nom);
    $req->bindParam(2,$nom_ensignant);
    $req->bindParam(3,$nom_etudiant);
    $req->execute();
}

function getAllPdf(){
    $tab=[];
    $cnx=getConnexion();
    $req=$cnx->query("select nom from file ");
    $req->setFetchMode(PDO::FETCH_OBJ);
    while($ligne=$req->fetch()){
        $tab[]=$ligne;
    }
    return $tab;

}


function deletePfa($id){
    $cnx=getConnexion();
    $req=$cnx->prepare("delete from projet where id=?");
    $req->bindParam(1,$id);
    $req->execute();
}

function lirePfa(){
    $cnx=getConnexion();

}









?>
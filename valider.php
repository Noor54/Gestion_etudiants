<?php
include "includes/connexion.php";
include "includes/sessionAdmin.php";
$user=$_POST['login'];
$pass=$_POST['password'];
$passcry=md5($pass);
$req=$connexion->prepare("SELECT * FROM users WHERE login='$user' AND password='$passcry'");
$req->execute();
if($res=$req->fetch()){
    session_start();
    $_SESSION['NIV']=$res['niveau'];// dans la session normalement ttes ces infos
    header("Location:AfficherEtudiant.php");
}
else{
header("Location:index.html");
}
?>
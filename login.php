<?php

session_start();
$_SESSION = [];

$db = mysqli_connect("localhost", "root", "", "db");

//Normalizacija parametara

$KorisnickoIme = mysqli_real_escape_string($db, trim($_POST['KorisnickoIme']));
$Lozinka = mysqli_real_escape_string($db, md5(trim($_POST['Lozinka'])));

//provera da li postoji nalog

$result = mysqli_query($db, "select * from Korisnik where KorisnickoIme='$KorisnickoIme' and Lozinka='$Lozinka'");

$Korisnik = mysqli_fetch_object($result);

if($Korisnik){
    $_SESSION['Korisnik'] = $Korisnik;
    die(header('Location: index.php'));
}else{
    die(header('Location: login.html?invalid=1'));
}

?>
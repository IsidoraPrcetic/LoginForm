<?php
$db = mysqli_connect("localhost","root","","db");

// Check connection

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//Normalizacija
$KorisnickoIme = mysqli_real_escape_string($db, trim($_POST['KorisnickoIme']));
$Lozinka = mysqli_real_escape_string($db, md5(trim($_POST['Lozinka'])));
$Email = mysqli_real_escape_string($db, trim($_POST['Email']));

$query = "INSERT INTO Korisnik (KorisnickoIme, Lozinka, Email) VALUES ('$KorisnickoIme','$Lozinka', '$Email')";

if($db->query($query)){
    die(header('Location: login.html?korisnik-uspeno-dodat=1'));
}else{
    die(header('Location: login.html?invalid=1'));
}

mysqli_close($db);

?>
<?php 
    
    session_start();

    if(!isset($_SESSION['Korisnik'])){
        die(header('Location: login.html'));
    }

?>


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     Dobrodosli <?php echo $_SESSION['Korisnik']->KorisnickoIme; ?>
     <hr />
     <a href="login.php">Logout</a>
 </body>
 </html>
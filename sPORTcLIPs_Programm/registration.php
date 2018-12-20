<!DOCTYPE html>
<html lang="en">

<head>
    <!-- FS19 5.2.19 - 6.7.19 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sPORTcLIPs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">login</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Registrierung<br><br></h1>
            <form name="formular" method="post" action="videoclips.php" >

                <label for="inputNutzername">Nutzername</label>
                <input type="text" class="form-control" name="inputNutzername" id="inputNutzername" placeholder="1038856">

                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="max.muster@stud.kftg.ch">

                <label for="inputPasswort">Passwort</label>
                <input type="password" class="form-control" name="inputPasswort" id="inputPasswort" placeholder="geheim">

                <label for="inputPasswortBestaetigung">Passwortbestätigung</label>
                <input type="password" class="form-control" name="inputPasswortBestaetigung" id="inputPasswortBestaetigung" placeholder="geheim">
             </form>

            <br>

            <button type="submit" class="btn btn-primary">registrieren</button>

        </div>
    </div>
</div>

<?php

    include 'config.php';

/*    $NutzerRegistration = $_POST['inputNutzername'.'inputEmail'.'inputPasswort'];

    $sqlstr = "INSERT INTO personen (NutNutzername, NutEmail, NutPasswort) VALUES ";
    $db->query($sqlstr . "$NutzerRegistration");

    echo $NutzerRegistration;
*/


//$Nutzername = $_POST['inputNutzername'];
//$Email = $_POST['inputEmail'];
//$Passwort = $_POST['inputPasswort'];
//$Passwort = $_POST['inputPasswortBestaetigung'];

// $res = $db->query(SELECT * from TNutzer);
?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

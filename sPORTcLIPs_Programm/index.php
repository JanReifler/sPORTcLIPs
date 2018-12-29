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


    <?php
    include 'config.php';
    if(isset($_POST['amFlorentinSinName'])) {
        $Nutzername = $_POST['inputExNutzername'];
        $Passwort = $_POST['inputExPasswort'];

        $amFlorentinSiniVariable = $db->query("select * from TNutzer where NutNummer = '$Nutzername' and NutPasswort = '$Passwort'");

        while ($dsatz = $amFlorentinSiniVariable->fetchArray(SQLITE3_ASSOC)) {
            header('Location: ./videoclips.php');
        }

        echo "Spasst";

    }

    ?>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="registration.php">registrieren</a>
        <!-- diese schwarze Zeile genügend gross machen! CSS Id nachschauen-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Login<br><br></h1>
            <form name="formular" method="post" action="index.php" >

                <label for="inputNutzername">Nutzername</label>
                <input type="text" class="form-control" name="inputExNutzername" id="inputExNutzername" placeholder="1038856" required>

                <label for="inputPasswort">Passwort</label>
                <input type="password" class="form-control" name="inputExPasswort" id="inputExPasswort" placeholder="geheim" required>

                <br>
                <button type="submit" class="btn btn-primary" name="amFlorentinSinName">einloggen</button>

            </form>



        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

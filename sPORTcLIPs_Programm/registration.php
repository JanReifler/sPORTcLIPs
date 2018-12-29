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
            <form name="formular" method="post" action="insertUser.php" >

                <label for="inputNutzername">Nutzername</label>
                <input type="text" class="form-control" name="inputNutzername" id="inputNutzername" placeholder="1038856" required>

                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="max.muster@stud.kftg.ch" required>

                <label for="inputPasswort">Passwort</label>
                <input type="password" class="form-control" name="inputPasswort" id="inputPasswort" placeholder="geheim" required>

                <label for="inputPasswortBestaetigung">Passwortbestätigung</label>
                <input type="password" class="form-control" name="inputPasswortBestaetigung" id="inputPasswortBestaetigung" placeholder="geheim" required>

                <br>
                <button type="submit" class="btn btn-primary" name="submitRegistrieren" >registrieren</button>

            </form>

</div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

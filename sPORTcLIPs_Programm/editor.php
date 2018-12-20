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
        <a class="navbar-brand" href="videoclips.php">sPORTcLIPs</a>
          <a class="navbar-brand" href="#">Videos bearbeiten</a>
          <a class="navbar-brand" href="index.php">logout</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Videoclips Bearbeitung</h1>
            <h4 class="mt-5">In diesem Bereich können Sie Videos hochladen und löschen.<br><br></h4>



                <style>
                    #peter{
                        color: darkgrey;
                    }
                </style>

            <?php


// alle Kommentare löschen mit ctrl + / auf NumPad
//            /*Neue Datensätze eintrage*/
//            if(isset($_POST['inputSchlagwort']) && isset($_POST['inputId'])){
//                $sqlstr = "INSERT INTO TVideos (VidId, VidSchlagwort) VALUES ";
//
//                $id = $_POST['inputId'];
//                $schlagwort = $_POST['inputSchlagwort'];
//
//                $db->query($sqlstr . "($id ,'$schlagwort')");
//
//
//            }
//
//            if(isset($_POST['inputGesehen'])){
//                $wegId = $_POST['inputGesehen'];
//                $db->exec("DELETE FROM TVideos WHERE VidId = $wegId");
//            }
//
//
//            $res = $db->query("SELECT * FROM TVideos");
//
//            $checker = false;
//
//            /* Abfrageergebnis ausgeben */
//            while ($dsatz = $res->fetchArray(SQLITE3_ASSOC)) {
//                global $checker;
//                echo $dsatz["VidId"]. ", "
//                    .$dsatz["VidSchlagwort"] . ", "
//                     ."<br><br>";
//
//            if(isset($dsatz["VidId"]) && isset($dsatz["VidSchlagwort"])) {
//                $checker = true;
//            }
//            }
//            if(!$checker){
//                echo "<h4 id=\"peter\">Sie haben noch keine Videos hochgeladen</h4>";
//            }
//
//
//            /* Verbindung zur Datenbankdatei wieder lösen */
//            $db->close();

//---------------------------------------------------------------------------------------------------------------------
            include 'config.php';

            $target_dir = "./uploads";
            //inputViedoclips bezieht sich auf die Id des Inputfeldes im HTML
            //name ist eine vordefinierte Variabel von PHP und nimmt den Namen des hochgeladenen Objekts
            $target_file = $target_dir . basename($_FILES["inputVideoclip"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image, aber ist unnötig
            /*if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["inputVideoclip"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }*/
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check if inputSchlagwort is set
            /*if (isset($_POST['inputSchlagwort'])) {
                echo "Bitte setzen Sie ein Schlagwort.";
                $uploadOk = 0;
            }*/
            // Check file size
            if ($_FILES["inputVideoclip"]["size"] > 4e8) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "mp4" && $imageFileType != "mov") {
                echo "Sorry, only mp4, & mov files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["inputVideoclip"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["inputVideoclip"]["name"]). " has been uploaded.";

                    $sqlstr = "INSERT INTO TVideos (VidId, VidSchlagwort, VidPfad) VALUES ";
                    $db->exec($sqlstr."(null, '".$_POST['inputSchlagwort']."', '".$target_file."');");
                    //$db->exec($sqlstr."(null, 'bla', 'uploads/haha.mp4')");

                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
//---------------------------------------------------------------------------------------------------------------------
            ?>
            <form name="formular" method="post" action="editor.php" >
                <br><h3>Videos löschen</h3><br>
                <label for="inputId">VideoId</label>
                <input type="text" class="form-control" name="inputGesehen" id="inputGesehen" aria-describedby="inputGesehen" placeholder="799372"><br>
                <button type="submit" class="btn btn-primary">OK</button>

            </form>

            <form method="post" action="editor.php">
                <div class="form-group">
                    <h2><br><br><br>Neuer Videoclip</h2>

                    <label for="Schlagwort">Schlagwort</label>
                    <input type="text" class="form-control" name="inputSchlagwort" id="inputSchlagwort" placeholder="Hochsprung" required>
                    <br>
                    <label for="Videoclips">Videoclip</label>
                    <input type="file" class="form-control" name="inputVideoclip" id="inputVideoclip" required>

                </div>
                <button type="submit" name="lol" class="btn btn-primary">Bestätigen</button>
            </form>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

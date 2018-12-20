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
        <a class="navbar-brand"  href="#">sPORTcLIPs</a>
          <a class="navbar-brand" href="editor.php">Videos bearbeiten</a>
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
          <h1 class="mt-5">Videoclips Fachschaft Sport<br><br></h1>
            <form name="formular" method="post" action="videoclips.php" >


                <style>
                    #peter{
                        color: darkgrey;
                    }
                </style>

            <?php

            include 'config.php';

            /*Neue Datensätze eintrage*/
            if(isset($_POST['inputSchlagwort']) && isset($_POST['inputId'])){
                $sqlstr = "INSERT INTO TVideos (VidId, VidSchlagwort) VALUES ";

                $id = $_POST['inputId'];
                $schlagwort = $_POST['inputSchlagwort'];

                $db->query($sqlstr . "($id ,'$schlagwort')");


            }

            if(isset($_POST['inputGesehen'])){
                $wegId = $_POST['inputGesehen'];
                $db->exec("DELETE FROM TVideos WHERE VidId = $wegId");
            }


            $res = $db->query("SELECT * FROM Tvideos");

            $checker = false;

            /* Abfrageergebnis ausgeben */
            while ($dsatz = $res->fetchArray(SQLITE3_ASSOC)) {
                global $checker;
                echo $dsatz["VidId"]. ", "
                    .$dsatz["VidSchlagwort"] . ", "
                     ."<br><br>";}

                        /* Verbindung zur Datenbankdatei wieder lösen */
            $db->close();

            ?>
            </form>

        </div>
      </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <form name="formular" method="post" >

                    <label for="inputSchlagwortsuche">Schlagwortsuche</label>
                    <input type="text" class="form-control" name="inputSchlagwortsuche" id="inputSchlagwortsuche" placeholder="Hochsprung">

                </form>

                <br>

                <button type="submit" class="btn btn-primary">suchen</button>

            </div>
        </div>
    </div>

    <br>
    <br>




    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

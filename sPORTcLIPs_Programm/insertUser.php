<?php
include 'config.php';

$Nutzername = $_POST['inputNutzername'];
$Email = $_POST['inputEmail'];
$Passwort = $_POST['inputPasswort'];
$PasswortBest = $_POST['inputPasswortBestaetigung'];
$unique = true;

//$db ist in config.php als ganze DB definiert
$res = $db->query("SELECT * from TNutzer");
while ($dsatz = $res->fetchArray(SQLITE3_ASSOC)) {
    if($dsatz["NutNummer"] === $Nutzername){
        $unique = false;
    }
}

if ($unique === true && $Passwort === $PasswortBest){
    $domain = strstr($Email, '@');
    $sqlstr = "INSERT INTO TNutzer (NutNummer, NutEmail, NutPasswort, NutUser) VALUES ";
    switch ($domain){
        case '@stud.kftg.ch':
            $db->query($sqlstr. "('$Nutzername', '$Email', '$Passwort', 'Schüler')");
            header('Location: http://localhost:63342/sPORTcLIPs_Programm/index.php');
            break;
        case '@kftg.ch':
            $db->query($sqlstr."('$Nutzername', '$Email', '$Passwort', 'Lehrer')");
            header('Location: http://localhost:63342/sPORTcLIPs_Programm/index.php');
            break;
        default: echo"ARSCHLOCH DU HESCH KEI KANTIMAIL IGEH!!!";
        break;
    }
}else{
    header('Location: http://localhost:63342/sPORTcLIPs_Programm/registration.php');
}

?>
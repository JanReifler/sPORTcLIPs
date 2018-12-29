<?php
//Pfad zu Datenbank
$dbdir = './db';

/* Datenbankdatei öffnen bzw. erzeugen */
$db = new SQLite3("$dbdir/sq3.db");


/* Tabelle erzeugen*/
$db->exec("CREATE TABLE if not exists TVideos (VidId INTEGER PRIMARY KEY, VidSchlagwort, VidPfad);");
//$db->exec("DROP TABLE TVideos");
//$db->exec("DELETE FROM TVideos");

// Idee von TNutzer je nach dem ob ein .stud oder kein .stud in der Emailadresse ist werden Lehrer oder Schülerrechte angewendet

//$db->exec("DROP TABLE TNutzer");
$db->exec("CREATE TABLE if not exists TNutzer (NutNummer PRIMARY KEY, NutEmail, NutPasswort, NutUser);");

//$db->exec("DELETE FROM TNutzer");


// Start the session
session_start();

?>
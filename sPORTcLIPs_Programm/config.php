<?php
//Pfad zu Datenbank
$dbdir = './db';

/* Datenbankdatei öffnen bzw. erzeugen */
$db = new SQLite3("$dbdir/sq3.db");


/* Tabelle erzeugen*/
$db->exec("CREATE TABLE if not exists TVideos (VidId INTEGER PRIMARY KEY , VidSchlagwort);");
//$db->exec("DROP TABLE TVideos");
//$db->exec("DELETE FROM TVideos");

?>
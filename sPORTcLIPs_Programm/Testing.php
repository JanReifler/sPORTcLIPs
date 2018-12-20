<?php

//dieses File testet die Verbindung zur Datenbank

  if (extension_loaded("sqlite3")) {
      echo "SQLite3-Bibliothek geladen";
  } else {
      echo "SQLite3-Bibliothek nicht geladen";
  }
?>
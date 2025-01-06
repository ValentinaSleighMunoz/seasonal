<?php
(@include_once("./config.php")) or die("Cannot find this file to include: config.php<BR>");

$db = new SQLite3($db_sqlite, SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE) or die("cannot open the database");

//For Date use TEXT as ISO8601 strings ("YYYY-MM-DD HH:MM:SS.SSS").
// Then use built-in functions to manipulate date and times
$query = "CREATE TABLE IF NOT EXISTS 'Produce' (
                'ProduceId' INTEGER PRIMARY KEY NOT NULL, 
                'Name' TEXT NOT NULL, 
                'PluralName' TEXT NOT NULL, 
                'Type' TEXT NOT NULL)";
$results = $db->query($query);

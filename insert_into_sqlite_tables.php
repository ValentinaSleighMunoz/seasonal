<?php
(@include_once("./config.php")) or die("Cannot find this file to include: config.php<BR>");

$db = new SQLite3($db_sqlite, SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE) or die("cannot open the database");

$query = "DELETE FROM 'Produce';";
$results = $db->query($query);

$query = "INSERT INTO 'Produce' ('Name', 'PluralName', 'Type')
            VALUES
                ('Apple', 'Apples', 'Fruit'),
                ('Apricot', 'Apricots', 'Fruit'),
                ('Artichoke', 'Artichokes', 'Vegetable');";
$results = $db->query($query);
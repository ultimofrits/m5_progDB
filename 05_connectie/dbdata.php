<?php
$envsettings = [ ];
if (file_exists(dirname(__FILE__).'/.env')) {
    $envsettings = parse_ini_file(dirname(__FILE__).'/.env');

}
$databaseServer=$envsettings["DB__HOST"];
$user=$envsettings["DB__USER"];
$pass=$envsettings["DB__PASSWORD"];
$schema=$envsettings["DB__SHEMA__NAME"];


?>
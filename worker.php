<?php

if ( !file_exists(__DIR__.'/.env.php') ) die('Error: Missing environment settings.');
include '.env.php';
include 'config.php';
include 'function.php';

if ( isset($_GET['run']) && $_GET['run'] == $_ENV['WORKER_KEY'] ) exit;

$mysqli = mysqli_connection($dbhost, $dbuser, $dbpass, $dbname);






$titles = [
    'The Flash',
    'Arrow',
    'Krypton', 
    'The Mandalorian', 
    'Young Sheldon', 
    'The Walking Dead', 
    'Vikings', 
    'Marco Polo', 
    'South Park', 
    'Better Call Saul', 
    'True Detective',
];
foreach ($titles as $title) {
    
    $series = getSeriesByTitle($title);
    var_export($series);
    echo '<hr>';

}




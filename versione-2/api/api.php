<?php

include __DIR__ . '/../../database.php';

$responseArray = [];

if (isset($_GET['genre']) && $_GET['genre'] != '') {
    foreach ($database as $album) {
        if ($album['genre'] == $_GET['genre']) {
            $responseArray[] = $album;
        }
    }
} else {
    $responseArray = $database;
}

header("Content-Type: application/json");

echo json_encode($responseArray);

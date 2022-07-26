<?php
include "../config.php";
$id = $_GET['id'];
$season = $_GET['season'];
$q = "DELETE FROM season WHERE serie_id = ? AND seasonNum = ?; DELETE FROM episode WHERE serie_id = ? AND seasonNum = ?";
$deleteSeason = $conn->prepare($q);
$deleteSeason->execute([$id, $season ,$id, $season]);
if ($deleteSeason) {
    echo 1;
}
else {
    echo 2;
}
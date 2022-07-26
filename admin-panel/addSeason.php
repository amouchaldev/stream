<?php
include "../config.php";
$serie_id = $_POST['serie_id'];
$seasonNum = $_POST['seasonNum'];
$rate = $_POST['rate'];
$prodYear = $_POST['prodYear'];
$trailler = $_POST['trailler'];
$poster = $_POST['poster'];
$epiNum = $_POST['epiNum'];
$quality = $_POST['quality'];
$sql = "INSERT INTO season(serie_id, seasonNum, rate, prodYear, trailler, poster, epiNum, quality) VALUES (?,?,?,?,?,?,?,?)";
$add = $conn->prepare($sql);
$add->execute([$serie_id, $seasonNum, $rate, $prodYear, $trailler, $poster, $epiNum, $quality]);
if ($add) {
    echo 1;
}
else {
    echo 0;
}
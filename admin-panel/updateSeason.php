<?php
include "../config.php";
$id = $_POST['id'];
$currentSeason = $_POST['currentSeason'];
$seasonNum = $_POST['seasonNum'];
$epiNum = $_POST['epiNum'];
$rate = $_POST['rate'];
$prodYear = $_POST['prodYear'];
$trailler = $_POST['trailler'];
$poster = $_POST['poster'];
$quality = $_POST['quality'];
$q = "UPDATE season SET seasonNum = ?, rate = ?, prodYear = ?, trailler = ?,  poster = ?, quality = ?, epiNum = ? WHERE serie_id = ? AND seasonNum = ?; UPDATE episode SET seasonNum = ? WHERE seasonNum = ? AND serie_id = ?";
$updateSason = $conn->prepare($q);
$updateSason->execute([$seasonNum, $rate, $prodYear, $trailler, $poster, $quality, $epiNum, $id, $currentSeason, $seasonNum, $currentSeason, $id]);
if ($updateSason) {
   echo 1; 
}
else {
    echo 0;
}

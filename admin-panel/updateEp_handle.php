<?php
include "../config.php";
$serie_id = $_POST['serie_id'];
// $season_id = $_POST['season_id'];
$seasonNum = $_POST['seasonNum'];
$currentEp = $_POST['currentEp'];
$epiNum = $_POST['epiNum'];
$streamServ = $_POST['streamServ'];
$downloadServ = $_POST['downloadServ'];

// download server here 
$sql = "UPDATE episode set epiNum = ?, streamServ = ?, downloadServ = ? WHERE serie_id = ? AND seasonNum = ? AND epiNum = ?";
$updateEp = $conn->prepare($sql);
$updateEp->execute([$epiNum, $streamServ, $downloadServ, $serie_id, $seasonNum, $currentEp]);
if ($updateEp) {
    echo "1";
}
else {
    echo "0";
}
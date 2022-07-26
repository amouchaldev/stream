<?php
include "../config.php";
$serie_id = $_POST['serie_id'];
$season_id = $_POST['season_id'];
$seasonNum = $_POST['seasonNum'];
$epiNum = $_POST['epiNum'];
$streamServ = $_POST['streamServ'];
$downloadServ = $_POST['downloadServ'];

// download server here 
$sql = "INSERT INTO episode (serie_id, season_id, seasonNum,epiNum, streamServ, downloadServ) VALUES (?,?,?,?,?,?)";
$addEp = $conn->prepare($sql);
$addEp->execute([$serie_id, $season_id, $seasonNum, $epiNum, $streamServ, $downloadServ]);
if ($addEp) {
    echo "1";
}
else {
    echo "0";
}
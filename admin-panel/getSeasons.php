<?php
include "../config.php";
$i = $_GET['i'];
$sql = "SELECT season_id, seasonNum FROM season WHERE serie_id = ?";
$info = $conn->prepare($sql);
$info->execute([$i]);
$result = $info->fetchAll();
if ($info) {
    echo json_encode($result);
}

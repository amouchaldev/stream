<?php
include "../config.php";
$i = $_GET['i'];
$sql = "SELECT * FROM serie WHERE serie_id > ?";
$allSerie = $conn->prepare($sql);
$allSerie->execute([$i]);
$result = $allSerie->fetchAll();
if ($allSerie) {
    echo json_encode($result);
}

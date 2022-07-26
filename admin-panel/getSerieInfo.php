<?php
include "../config.php";
$i = $_GET['i'];
$sql = "SELECT * FROM serie WHERE serie_id = ?";
$info = $conn->prepare($sql);
$info->execute([$i]);
$result = $info->fetch();
if ($info) {
    echo json_encode($result);
}

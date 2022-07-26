<?php
include "../config.php";
$id = $_GET['id'];
$q = "DELETE FROM episode WHERE serie_id = ?; DELETE FROM season WHERE serie_id = ?; DELETE FROM serie WHERE serie_id = ?";
$deleteSerie = $conn->prepare($q);
$deleteSerie->execute([$id, $id, $id]);
if ($deleteSerie) {
    echo 1;
}
else {
    echo 2;
}
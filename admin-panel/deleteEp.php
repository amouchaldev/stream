<?php
include "../config.php";
$i = $_GET['id'];
$s = $_GET['season'];
$ep = $_GET['ep'];
$sql = "DELETE FROM episode WHERE serie_id = ? AND seasonNum = ? AND epiNum = ?";
$del = $conn->prepare($sql);
$del->execute([$i, $s, $ep]);
if ($del) {
    echo 1;
}
else {
    echo 0;
}
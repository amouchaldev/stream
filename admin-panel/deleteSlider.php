<?php
include "../config.php";
$id = $_GET['id'];
$delete = $conn->prepare("DELETE FROM slider WHERE id = ?");
$delete->execute([$id]);
if ($delete) {
    echo 1;
}
else {
    echo 2;
}
<?php
include "../config.php";
$bigTitle = $_POST['bigTitle'];
$smallTitle = $_POST['smallTitle'];
$cover = $_POST['cover'];
$link = $_POST['link'];
// $AddedIn = strtotime($_POST['link']);
$AddedIn = date('Y-m-d h:i:s');
$sql = "INSERT INTO slider(bigTitle, smallTitle, cover, link, addedIn) VALUES (?,?,?,?,?)";
$add = $conn->prepare($sql);
$add->execute([$bigTitle, $smallTitle, $cover, $link, $AddedIn]);
if ($add) {
    echo 1;
}
else {
    echo 0;
}
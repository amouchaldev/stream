<?php
include "../config.php";
$id = $_POST['id'];
$bigTitle = $_POST['bigTitle'];
$smallTitle = $_POST['smallTitle'];
$cover = $_POST['cover'];
$link = $_POST['link'];
$update = $conn->prepare("UPDATE slider SET bigTitle = ?, smallTitle = ?, cover = ?, link = ? WHERE id = ?");
$update->execute([$bigTitle, $smallTitle, $cover, $link, $id]);
if ($update) {
    echo 1;
}
else {
    echo 0;
}

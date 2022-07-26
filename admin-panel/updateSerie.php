<?php
include "../config.php";
$id = $_POST['id'];
$serieName = $_POST['name'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$prodYear = $_POST['prodYear'];
$trailler = $_POST['trailler'];
$description = $_POST['description'];
$poster = $_POST['poster'];
$quality = $_POST['quality'];
$updateSerie = $conn->prepare("UPDATE serie SET name = ?, category = ?, rate = ?, prodYear = ?, trailler = ?, description = ?, poster = ?, quality = ? WHERE serie_id = ?");
$updateSerie->execute([$serieName, $category, $rate, $prodYear, $trailler, $description, $poster, $quality, $id]);
if ($updateSerie) {
    echo 1;
}
else {
    echo 0;
}

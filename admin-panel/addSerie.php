<?php
include "../config.php";
$serieName = $_POST['name'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$prodYear = $_POST['prodYear'];
$trailler = $_POST['trailler'];
$description = $_POST['description'];
$poster = $_POST['poster'];
$quality = $_POST['quality'];
$sql = "INSERT INTO serie(name, category, rate, prodYear, trailler, description, poster, quality) VALUES (?,?,?,?,?,?,?,?)";
$add = $conn->prepare($sql);
$add->execute([$serieName, $category, $rate, $prodYear, $trailler, $description, $poster, $quality]);
if ($add) {
    echo 1;
}
else {
    echo 0;
}
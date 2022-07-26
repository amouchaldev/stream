<?php
include "../config.php";
$movieName = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];
$trailler = $_POST['trailler'];
$rate = $_POST['rate'];
$prodYear = $_POST['prodYear'];
$poster = $_POST['poster'];
$quality = $_POST['quality'];
$streamServ = $_POST['streamServ'];          // streaming servers
$downloadServ = $_POST['downloadServ'];    // download links

$sql = "INSERT INTO movie (name, category, description, trailler, rate, prodYear, poster, quality, streamServ, DownloadServ) VALUES (?,?,?,?,?,?,?,?,?,?)";
$addMovie = $conn->prepare($sql);
$addMovie->execute([$movieName, $category, $description, $trailler, $rate, $prodYear, $poster, $quality, $streamServ, $downloadServ]);
if ($addMovie) {
    echo 1;
}
else {
    echo 0;
}

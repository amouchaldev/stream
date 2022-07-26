<?php
include "../config.php";
$id = $_POST['id'];
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

$sql = "UPDATE movie SET name = ?, category = ?, description = ?, trailler = ?, rate = ?, prodYear = ?, poster = ?, quality = ?, streamServ = ?, downloadServ = ? WHERE movie_id = ?";
$updateMovie = $conn->prepare($sql);
$updateMovie->execute([$movieName, $category, $description, $trailler, $rate, $prodYear, $poster, $quality, $streamServ, $downloadServ, $id]);
if ($updateMovie) {
    echo 1;
}
else {
    echo 0;
}

<?php
include "../config.php";
$id = $_GET['id'];
$q = "DELETE FROM movie WHERE movie_id = ?";
$deleteMovie = $conn->prepare($q);
$deleteMovie->execute([$id]);
if ($deleteMovie) {
    echo 1;
}
else {
    echo 2;
}
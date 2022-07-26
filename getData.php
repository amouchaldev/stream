<?php
include "config.php";

// SELECT LASTEST SERIES added
$serieSql =  "SELECT * FROM serie ORDER BY serie_id DESC LIMIT 20";
$getLastSerie = $conn->prepare($serieSql);
$getLastSerie->execute();

// SELET Latest Episodes Added
$epSql = "SELECT episode.serie_id, episode.seasonNum, episode.epiNum, season.poster, serie.name FROM episode INNER JOIN season ON episode.serie_id = season.serie_id AND episode.seasonNum = season.seasonNum INNER JOIN serie ON episode.serie_id = serie.serie_id LIMIT 20";
$lastEp = $conn->prepare($epSql);
$lastEp->execute();


// SELECT Latest movies added
$movieSql = "SELECT movie_id, name, quality, rate, poster FROM movie ORDER BY movie_id DESC LIMIT 20";
$lastMovie = $conn->prepare($movieSql);
$lastMovie->execute();
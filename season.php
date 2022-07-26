<?php include "config.php";
$name = $_GET['name']; // serie name
$season = $_GET['season']; // season number
$i = $_GET['i']; // serie id
// get serie info
$q1 =  "SELECT serie.name, serie.category, serie.description, season.poster, season.trailler, season.epiNum, UPPER(season.quality) AS quality, season.rate, YEAR(season.prodYear) AS prodYear, season.seasonNum FROM season INNER JOIN serie ON season.serie_id = serie.serie_id WHERE season.serie_id = ?";
$info = $conn->prepare($q1);
$info->execute([$i]);
$serieInfo = $info->fetch();
// get the episodes of the season above ($i);
$q = "SELECT serie.name, episode.serie_id, episode.seasonNum, episode.epiNum, season.poster FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id  INNER JOIN season ON season.seasonNum = episode.seasonNum AND season.serie_id = episode.serie_id WHERE episode.serie_id = ? AND season.seasonNum = ?";
$epSeason = $conn->prepare($q);
$epSeason->execute([$i, $season]);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <!-- swiper js CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- font awsome cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title><?php echo $serieInfo['name'] ?> season <?php echo $serieInfo['seasonNum'] ?></title>
    <style><?php include "css/main.css" ?><?php include "css/serie.css" ?></style>
</head>
<body>
    <!-- navbar -->
    <?php include "inc/navbar.php"; ?>
    <!-- season info -->
    <?php include "inc/seasonInfo.php"; ?>
    <!-- episodes of the season -->
    <div id="episode" class="container mt-4 d-flex flex-wrap justify-content-start allMS">
        <?php while ($ep = $epSeason->fetch()) { ?>
            <!-- start episode -->
            <a href="<?php echo 'episode.php?name=' . $ep['name'] . '&season=' . $ep['seasonNum'] . '&ep=' . $ep['epiNum'] . '&i=' . $ep['serie_id']; ?>">
                <div class="episode rounded me-1 mb-1">
                    <div class="bg-purple position-relative text-light w-100">
                        <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                        <img src="<?php echo $ep['poster']; ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                        <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%"><a href="#" class="text-decoration-none text-light">الحلقة <?php echo $ep['epiNum']; ?></a></h3>
                    </div>
                </div>
            </a>
            <!-- end episode -->
        <?php } ?>
    </div>
    <!-- footer -->
    <?php include "inc/footer.php" ?>
       <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
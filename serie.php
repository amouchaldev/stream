<?php include "config.php";
$i = $_GET['i']; // serie id
// get all episodes of the serie
$q2 = "SELECT serie.name, episode.serie_id, episode.seasonNum, episode.epiNum, season.poster FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id  INNER JOIN season ON season.seasonNum = episode.seasonNum AND season.serie_id = episode.serie_id WHERE episode.serie_id = ?";
$myEp = $conn->prepare($q2);
$myEp->execute([$i]);

// get season of the serie
$q3 = "SELECT DISTINCT(episode.seasonNum), serie.name, episode.serie_id, season.poster FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id  INNER JOIN season ON season.seasonNum = episode.seasonNum AND season.serie_id = episode.serie_id WHERE episode.serie_id = ?";
$mySeason = $conn->prepare($q3);
$mySeason->execute([$i]);


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
    <title></title>
    <style>
        <?php include "css/main.css" ?><?php include "css/serie.css" ?>
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "inc/navbar.php"; ?>
    <!-- serie info -->
    <?php include "inc/info.php"; ?>





    <!-- Container Of Season And Episodes -->
    <!-- episodes -->
    <section class="season-episode container mt-4">
        <ul class="d-flex justify-content-around list-unstyled text-center text-light py-3 bg-purple rounded">
            <li class="cursor-pointer" id="ep-btn">الحلقات</li>
            <li class="cursor-pointer" id="season-btn">المواسم</li>
        </ul>

        <div id="episode" class="d-flex flex-wrap justify-content-start d-block allMS">
            <?php while ($ep = $myEp->fetch()) { ?>
                <!-- start episode -->
                <a href="<?php echo 'episode.php?name=' . $ep['name'] . '&season=' . $ep['seasonNum'] . '&ep=' . $ep['epiNum'] . '&i=' . $ep['serie_id']; ?>">
                    <div class="episode rounded me-1 mb-1">
                        <div class="bg-purple position-relative text-light  w-100">
                            <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                            <img src="<?php echo $ep['poster']; ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                            <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%"><a href="#" class="text-decoration-none text-light">الحلقة <?php echo $ep['epiNum']; ?></a></h3>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

        <!-- season container -->
        <div id="season" class="d-flex flex-wrap justify-content-start d-none allMS">
            <?php while ($s = $mySeason->fetch()) { ?>
                <!-- start season -->
                <a href="<?php echo 'season.php?name=' . $s['name'] . '&season=' . $s['seasonNum'] . '&i=' . $s['serie_id']; ?>">
                    <div class="episode season rounded me-1 mb-1">
                        <div class="bg-purple position-relative text-light  w-100">
                            <!-- <span class="quality position-absolute badge bg-purple zindex-dropdown z-index-4">الحلقة 20</span> -->
                            <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                            <img src="<?php echo $s['poster'] ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                            <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%"><a href="#" class="text-decoration-none text-light">الموسم <?php echo $s['seasonNum'] ?></a></h3>
                        </div>
                    </div>
                </a> <!-- end season -->
            <?php } ?>
        </div>
    </section>

    <!-- footer -->
    <?php include "inc/footer.php" ?>


    <script>
        <?php include "js/main.js" ?>
    </script>
     <!-- bootstrap cdn -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
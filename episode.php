<?php include "config.php";
$name = $_GET['name']; // serie name
$season = $_GET['season']; // season number
$i = $_GET['i']; // serie id
$ep = $_GET['ep']; // episode number

// get serie info
$q1 =  "SELECT serie.name, serie.category, serie.description, season.poster, season.trailler, season.epiNum, UPPER(season.quality) AS quality, season.rate, YEAR(season.prodYear) AS prodYear, season.seasonNum FROM season INNER JOIN serie ON season.serie_id = serie.serie_id WHERE season.serie_id = ?";
$info = $conn->prepare($q1);
$info->execute([$i]);
$serieInfo = $info->fetch();



// get the episodes of the season above ($i);
$q = "SELECT serie.name, episode.serie_id, episode.seasonNum, episode.epiNum, episode.streamServ, episode.downloadServ,season.poster FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id  INNER JOIN season ON season.seasonNum = episode.seasonNum AND season.serie_id = episode.serie_id WHERE episode.serie_id = ? AND season.seasonNum = ?";
$epSeason = $conn->prepare($q);
$epSeason->execute([$i, $season]);
// $result = $epSeason->fetchAll();
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
    <title><?php echo $_GET['name'].' الحلقة ' .$_GET['ep'];?></title>
    <style>
        <?php include "css/main.css" ?>
    </style>
    <style>
        <?php include "css/serie.css" ?>
    </style>
    <style>
        <?php include "css/episode.css" ?>
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "inc/navbar.php"; ?>
    <!-- epi -->
    <section class="py-5 stream-zone">
        <div class="d-flex flex-column flex-md-row justify-content-evenly p-3" id="main-ep">
            <!-- 1 -->
            <div class="rounded bg-purple d-flex flex-column p-2 order-2 order-md-1 mt-5 mt-md-0">
                <ul class=" d-flex justify-content-center text-light list-unstyled mt-4 gap-3" id="wed">
                    <li class="cursor-pointer"><i class="fa-solid fa-play h6 border  rounded p-4" id="watch-btn"></i></li>
                    <li class="cursor-pointer"><i class="fa-solid fa-list h6 border  rounded p-4" id="ep-btn"></i></li>
                    <li class="cursor-pointer"><i class="fa-solid fa-cloud-arrow-down h6 border rounded p-4" id="download-btn"></i></li>
                </ul>
                <div id="wed-data" class="overflow-y-sroll">
                    <!-- watch -->
                    <ul class="px-3 list-unstyled d-block" id="watch-data">
                        <!-- select streaming servers from db -->
                        <?php 
                        $sql = "SELECT streamServ FROM episode WHERE serie_id = ? AND seasonNum = ? AND epiNum = ?";
                        $streamServ = $conn->prepare($sql);
                        $streamServ->execute([$i, $season, $ep]);
                        $streamServer = json_decode($streamServ->fetch()['streamServ'], true);
                        // echo var_dump(json_decode($streamServer['streamServ'], true));
                        ?>
                        <!-- streaming servers -->
                        <?php for($i= 0; $i < count($streamServer); $i++) { ?>
                        <li class="text-light py-2 d-flex justify-content-between cursor-pointer">
                            <small data-link='<?php echo $streamServer[$i]['link']?>'>
                            <?php echo $streamServer[$i]['name'];?>
                            </small>
                            <small><?php echo $streamServer[$i]["quality"];?></small>
                        </li>
                            <?php } ?>
                    </ul>
                    <!-- episode -->
                    <ul class="d-none list-unstyled text-center overflow-y-sroll" id="episode-data" style="height: 290px;">
                        <?php while ($row = $epSeason->fetch()) { ?>
                        <li class="my-3">
                            <small>
                                <a class="text-decoration-none text-light" href="<?php echo 'episode.php?name=' . $row['name'] . '&season=' . $row['seasonNum'] . '&ep=' . $row['epiNum'] . '&i=' . $row['serie_id']; ?>">الحلقة <?php echo $row['epiNum']?></a>
                            </small>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- download -->
                    <ul class="px-3 list-unstyled d-none" id="download-data">
                           <!-- select download servers from db -->
                           <?php 
                           $season = $_GET['season']; // season number
                           $i = $_GET['i']; // serie id
                           $ep = $_GET['ep']; // episode number
                        $downSQL = "SELECT downloadServ FROM episode WHERE serie_id = ? AND seasonNum = ? AND epiNum = ?";
                        $downServ = $conn->prepare($downSQL);
                        $downServ->execute([$i, $season, $ep]);
                        $downServer = json_decode($downServ->fetch()['downloadServ'], true);
                        ?>
                        <!-- streaming servers -->
                        <?php for($j= 0; $j < count($downServer); $j++) { ?>
                            <li class="text-light py-2 cursor-pointer">
                                <small>
                                    <a href="<?php echo $downServer[$j]["link"]?>" target="_blank" class="d-flex justify-content-between text-decoration-none text-light">
                                        <span><?php echo $downServer[$j]["name"]?></span><?php echo $downServer[$j]["quality"]?>
                                    </a>
                                </small>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- 2 -->
            <div class="bg-secondary tvv order-1 order-md-2" style="height: 440px;">
                <iframe src="<?php echo $streamServer[0]['link']?>" frameborder="0" class="w-100 h-100" id="myscreen"></iframe>
                <div class="d-flex justify-content-between">
                    <button class="btn bg-purple text-light d-none">الحلقة السابقة</button>
                    <button class="btn bg-purple text-light turn-off-light"><i class="fa-solid fa-lightbulb"></i></button>
                    <button class="btn bg-purple text-light d-none">الحلقة التالية</button>
                </div>
            </div>
        </div>
    </section>




    <!-- season info -->
 <?php include "inc/seasonInfo.php"; ?>
    <!-- footer -->
    <?php include "inc/footer.php" ?>
    <!-- episode js -->
    <script><?php include "js/episode.js";?></script>
 <!-- bootstrap cdn -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
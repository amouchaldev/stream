<?php 
include "config.php";
// get all movies from db
$q = "SELECT serie_id, name, rate, poster, UPPER(quality) quality FROM serie ORDER BY serie_id DESC";
$getAllSerie = $conn->prepare($q);
$getAllSerie->execute();
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


    <!-- all movies -->
    <div class="container allMS">
        <div id="episode" class="d-flex flex-wrap justify-content-start gap-1 mt-5">
            <!-- start movie -->
            <?php while ($serie = $getAllSerie->fetch()) { ?>
            <div class="episode rounded">
                <a href="<?php echo 'serie.php?name=' . $serie['name'] . '&i=' . $serie['serie_id']; ?>">
                    <div class="bg-purple position-relative text-light w-100">
                        <span class="rate position-absolute badge bg-warning z-index-4"><?php echo $serie['rate'];?></span>
                        <span class="quality position-absolute badge bg-purple zindex-dropdown z-index-4 text-uppercase"><?php echo $serie['quality'];?></span>
                        <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="overlay">
                        <img src="<?php echo $serie['poster'];?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="poster">
                        <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%">
                            <a class="text-decoration-none text-light text-capitalize"><?php echo $serie['name'];?></a>
                        </h3>
                    </div>
                </a>
            </div>
            <?php } ?>
            <!-- end movie -->
        </div>


    </div>

    <!-- footer -->
    <?php include "inc/footer.php" ?>

 <!-- bootstrap cdn -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
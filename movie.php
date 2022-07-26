<?php include "config.php";
$name = $_GET['name']; // movie name
$i = $_GET['i']; // movie id



// get serie info
$q1 =  "SELECT name, category, description, trailler, rate, YEAR(prodYear) prodYear, poster, UPPER(quality) quality, streamServ, downloadServ FROM movie WHERE movie_id = ?";
$info = $conn->prepare($q1);
$info->execute([$i]);
$movieInfo = $info->fetch();
// $movieInfo = $movieInfo;
$name = $movieInfo['name'];
$category = $movieInfo['category'];
$description = $movieInfo['description'];
$trailler = $movieInfo['trailler'];
$rate = $movieInfo['rate'];
$prodYear = $movieInfo['prodYear'];
$poster = $movieInfo['poster'];
$quality = $movieInfo['quality'];
$streamServer = json_decode($movieInfo['streamServ'], true);
$downServer   = json_decode($movieInfo['downloadServ'], true);

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
    <title><?php echo $name.' '.$prodYear;?></title>
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
            <div class="rounded bg-purple d-flex flex-column p-2 order-2 order-md-1 mt-5 mt-md-0  px-md-4" >
                <ul class="d-flex justify-content-center text-light list-unstyled mt-4 gap-3" id="wed">
                    <li class="cursor-pointer"><i class="fa-solid fa-play h6 border  rounded p-4" id="watch-btn"></i></li>
                    <li class="cursor-pointer d-none"><i class="fa-solid fa-list h6 border  rounded p-4" id="ep-btn"></i></li>
                    <li class="cursor-pointer"><i class="fa-solid fa-cloud-arrow-down h6 border rounded p-4" id="download-btn"></i></li>
                </ul>
                <div id="wed-data" class="overflow-y-sroll">
                    <!-- watch -->
                    <ul class="list-unstyled d-block" id="watch-data">
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
                    <ul class="d-none list-unstyled text-center" id="episode-data" >

                    </ul>
                    <!-- download -->
                    <ul class="px-4 list-unstyled d-none" id="download-data">
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
            
                <iframe src="<?php 
                // print_r($streamServer);
                echo $streamServer[0]['link']
                ?>" frameborder="0" class="w-100 h-100" id="myscreen"></iframe>
                <div class="d-flex justify-content-between">
                    <button class="btn bg-purple text-light turn-off-light"><i class="fa-solid fa-lightbulb"></i></button>
                </div>
        </div>
    </section>




<!-- movie info -->
<section>
        <div class="bg-purple p-5 text-light">
            <div class="d-flex flex-column anime-info p-2 p-md-5 text-center">
                <!-- poster container -->
                <div class="">
                    <!-- poster -->
                    <div class="poster rounded w-100 d-flex justify-content-center">
                        <img src="<?php echo $poster?>" class="poster img-fluid" alt="poster">
                    </div>
                </div>
                <!-- anime data -->
                <div class="anime-data mt-3">
                    <!-- title -->
                    <h3><?php echo $name?></h3>
                    <!-- genre -->
                    <ul class="genre list-unstyled d-flex flex-wrap justify-content-center flex-serieInfo my-4">
                    <script>
                    let category = '<?php echo $category;?>'
                    let categoryArr = category.split('-')
                    for (let i = 0; i < categoryArr.length; i++) {
                        document.write("<li class=\"border rounded-pill py-2 px-3\">"+categoryArr[i]+"</li>")
                    }
                    </script>
                    </ul>

                    
                    <!-- description -->
                    <p style="width: 92%;" class="mx-auto ms-md-0">
                    <?php echo $description?>
                    </p>
                    <!-- trailler -->
                    <a href="<?php echo $trailler?>" class="btn btn-light text-purple mt-3" target="_blank"><i class="fa-solid fa-circle-play"></i> العرض التشويقي</a>
                </div>
            </div>

            <!-- about anime -->
            <div class="anime-status px-md-5">
                <ul class="px-5 mt-3">
                    <div>
                        <li class="d-flex justify-content-between my-1 p-2 rounded">الجودة: <span class="quality"><?php echo $quality?></span></li>
                        <li class="d-flex justify-content-between my-1 p-2 rounded">التقييم: <span class="rate"><?php echo $rate?></span></li>
                    </div>
                    <div>
                        <li class="d-flex justify-content-between my-1 p-2 rounded">سنة الانتاج: <span class="prod-year"><?php echo $prodYear?></span></li>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include "inc/footer.php" ?>
        <!-- episode js -->
    <script><?php include "js/episode.js";?></script>
 <!-- bootstrap cdn -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
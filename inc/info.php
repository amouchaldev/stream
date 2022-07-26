<!-- anime information -->
<?php
// include "config.php";
$i = $_GET['i']; // serie id
// get serie info

$q1 =  "SELECT name, category, description, poster, trailler, UPPER(quality) AS quality, rate, YEAR(prodYear) AS prodYear FROM serie WHERE serie_id = ?";
$info = $conn->prepare($q1);
$info->execute([$i]);
$serieInfo = $info->fetch();

// select the number of episodes of the serie
$q2 = "SELECT COUNT(serie_id) AS numberOfEp FROM episode WHERE serie_id = ?";
$getEpCount = $conn->prepare($q2);
$getEpCount->execute([$i]);
$epCount = $getEpCount->fetch();
?>
<section>
    <div class="bg-purple p-2 p-md-5 text-light">
        <div class="d-flex flex-column anime-info p-2 p-md-5 text-center">
            <!-- poster container -->
            <div class="">
                <!-- poster -->
                <div class="poster rounded w-100 d-flex justify-content-center">
                    <img src="<?php echo $serieInfo['poster']; ?>" class="poster img-fluid" alt="poster">
                </div>
            </div>
            <!-- anime data -->
            <div class="anime-data mt-3">
                <!-- title -->
                <h3><?php echo $serieInfo['name']; ?></h3>
                <!-- genre -->
                <ul class="genre list-unstyled d-flex flex-wrap justify-content-center flex-serieInfo my-4">           
                <script>
                    let category = '<?php echo $serieInfo['category']; ?>'
                    let categoryArr = category.split('-')
                    for (let i = 0; i < categoryArr.length; i++) {
                        document.write("<li class=\"border rounded-pill py-2 px-3\">"+categoryArr[i]+"</li>")
                    }
                </script>
                </ul>
                <!-- description -->
                <p style="width: 92%;" class="mx-auto ms-md-0">
                    <?php echo $serieInfo['description']; ?>
                </p>
                <!-- trailler -->
                <a href="<?php echo $serieInfo['trailler']; ?>" class="btn btn-light text-purple mt-3" target="_blank"><i class="fa-solid fa-circle-play"></i> العرض التشويقي</a>
            </div>
        </div>

        <!-- about anime -->
        <div class="anime-status px-md-5">
            <ul class="px-5 mt-3">
                <div>
                    <li class="d-flex justify-content-between my-1 p-2 rounded">الجودة: <span class="quality"><?php echo $serieInfo['quality']; ?></span></li>
                    <li class="d-flex justify-content-between my-1 p-2 rounded">التقييم: <span class="quality"><?php echo $serieInfo['rate']; ?></span></li>
                </div>
                <div>
                    <li class="d-flex justify-content-between my-1 p-2 rounded">سنة الانتاج: <span class="prod-year"><?php echo $serieInfo['prodYear']; ?></span></li>
                    <li class="d-flex justify-content-between my-1 p-2 rounded">عدد الحلقات: <span class="prod-year"><?php echo $epCount['numberOfEp']?></span></li>
                </div>
            </ul>
        </div>
    </div>
</section>
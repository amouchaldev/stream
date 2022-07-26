<?php
include "getData.php";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- swiper js CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- font awsome cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <title><?php echo $siteName ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap');

        .swiper {
            width: 100%;
            height: 263px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-pagination-bullet-active {
            background: var(--purple);
        }

        /* change the size of arrows */
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 22px;
            color: var(--purple);
        }

        /* change the color of arrows in the section 2 */
        .section-2 .swiper-button-next:after,
        .section-2 .swiper-button-prev:after {
            font-size: 22px;
            color: #fff;
        }

        <?php include "css/main.css" ?>
    </style>
</head>
<body>
    <!-- navbar -->
    <?php include("./inc/navbar.php") ?>

    <!-- carousel -->
    <?php include("./inc/carousel.php") ?>


    <!-- اخر الحلقات المضاقة -->
    <!-- Swiper -->
    <section class="container-lg my-2 last-anime p-md-4 section-1">
        <div class="d-flex justify-content-between container p-0 mb-3">
            <h3 class="text-light btn bg-purple my-3">اخر الحلقات المضافة</h3>
            <div style="width: 100px" class="position-relative next-previous-btn">
                <div class="swiper-button-prev sp2"></div>
                <div class="swiper-button-next sn2"></div>
            </div>
        </div>

        <div class="swiper mySwiper s2 container">
            <div class="swiper-wrapper">
                <?php while ($lEp = $lastEp->fetch()) { ?>
                    <div class="swiper-slide episode rounded">
                        <a href="<?php echo 'episode.php?name=' . $lEp['name'] . '&season=' . $lEp['seasonNum'] . '&ep=' . $lEp['epiNum'] . '&i=' . $lEp['serie_id']; ?>">
                            <div class="bg-purple position-relative text-light  w-100">
                                <span class="quality position-absolute badge bg-purple zindex-dropdown z-index-4">الحلقة <?php echo $lEp['epiNum'] ?></span>
                                <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                                <img src="<?php echo $lEp['poster'] ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                                <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%"><a href="#" class="text-decoration-none text-light"><?php echo $lEp['name'] ?></a></h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!-- <div class="swiper-pagination spa2"></div> -->
        </div>
    </section>



    <!-- اخر الافلام المضافة - Latest movies added ->
    <!-- Swiper -->
    <section class="bg-purple p-5 movie-section">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="text-purple btn  bg-light">اخر الافلام المضافة</h3>
            <div style="width: 100px" class="position-relative section-2 next-previous-btn">
                <div class="swiper-button-prev sp3"></div>
                <div class="swiper-button-next sn3"></div>
            </div>
        </div>

        <div class="swiper mySwiper s3">
            <div class="swiper-wrapper">
                <?php while ($lMovie = $lastMovie->fetch()) { ?>
                    <div class="swiper-slide episode rounded">
                        <a href="<?php echo 'movie.php?name=' . $lMovie['name'] . '&i=' . $lMovie['movie_id']; ?>">
                            <div class="bg-purple position-relative text-light w-100">
                                <span class="rate position-absolute badge bg-warning z-index-4"><?php echo $lMovie['rate']; ?></span>
                                <span class="quality position-absolute badge bg-purple zindex-dropdown z-index-4"><?php echo $lMovie['quality']; ?></span>
                                <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                                <img src="<?php echo $lMovie['poster']; ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                                <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%">
                                    <a href="#" class="text-decoration-none text-light"><?php echo $lMovie['name']; ?></a>
                                </h3>
                        </a>
                    </div>
            </div>
        <?php } ?>

        </div>

        <!-- <div class="swiper-pagination spa3"></div> -->
        </div>
    </section>


    <!-- اخر المسلسلات المضافة -->
    <section class="container mt-3 last-anime p-5 anime-section">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="text-light btn bg-purple">اخر المسلسلات المضافة</h3>
            <div style="width: 100px" class="position-relative next-previous-btn">
                <div class="swiper-button-prev sp1"></div>
                <div class="swiper-button-next sn1"></div>
            </div>
        </div>

        <div class="swiper mySwiper s1">
            <div class="swiper-wrapper">
                <!-- start -->
                <?php while ($lSerie = $getLastSerie->fetch()) { ?>
                    <div class="swiper-slide episode rounded">
                        <div class="bg-purple position-relative text-light  w-100">
                            <a href="<?php echo 'serie.php?name=' . $lSerie['name'] . '&i=' . $lSerie['serie_id']; ?>">
                                <span class="rate position-absolute badge bg-warning z-index-4"><?php echo $lSerie['rate']; ?></span>
                                <span class="quality position-absolute badge bg-purple zindex-dropdown z-index-4 text-uppercase"><?php echo $lSerie['quality']; ?></span>
                                <img src="img/bgtransparent.png" class="position-absolute w-100 z-index-3" style="height: 100%" alt="">
                                <img src="<?php echo $lSerie['poster']; ?>" class="poster position-absolute w-100 z-index-2" style="height: 100%" alt="">
                                <h3 class="text-center h6 py-2 position-absolute w-100 end-0 z-index-4" style="top:88%">
                                    <span class="text-decoration-none text-light text-capitalize"><?php echo $lSerie['name']; ?></span>
                                </h3>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <!-- end  -->
            </div>
            <!-- <div class="swiper-pagination spa1"></div> -->
        </div>
    </section>



    <!-- footer -->
    <?php include "inc/footer.php" ?>


























    <!-- swiper js cdn -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- Initialize Swiper -->
    <script>
        // last anime
        var swiper = new Swiper(".s1", {
            slidesPerView: 6,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: false,
            pagination: {
                el: ".spa1",
                clickable: true,
            },
            navigation: {
                nextEl: ".sp1",
                prevEl: ".sn1",
            },
        });
        //   last episode
        var swiper2 = new Swiper(".s2", {
            slidesPerView: 6,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: false,
            pagination: {
                el: ".spa2",
                clickable: true,
            },
            navigation: {
                nextEl: ".sp2",
                prevEl: ".sn2",
            },
        });
        //   last movie
        var swiper3 = new Swiper(".s3", {
            slidesPerView: 6,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: false,
            pagination: {
                el: ".spa3",
                clickable: true,
            },
            navigation: {
                nextEl: ".sp3",
                prevEl: ".sn3",
            },
        });
    </script>
</body>

</html>
<?php
include "../config.php";
// get all series
$q = "SELECT name, serie_id FROM serie";
$series = $conn->prepare($q);
$series->execute();
// get all seasons
$q2 = "SELECT serie.name, serie.serie_id, season.seasonNum, season.season_id FROM serie INNER JOIN season ON serie.serie_id = season.serie_id";
$season = $conn->prepare($q2);
$season->execute();
// Get All Episodes
$q3 = "SELECT serie.serie_id, serie.name, episode.seasonNum, episode.epiNum FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id";
$ep = $conn->prepare($q3);
$ep->execute();
// get all movies
$q4 = "SELECT movie_id, name, YEAR(prodYear) AS prodYear FROM movie";
$movie = $conn->prepare($q4);
$movie->execute();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous" />
  <!-- font awsome cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
  <title>panel</title>
  <style>
    <?php include "../css/main.css"; ?>
  </style>
  <style>
    <?php include "css/panel.css"; ?>
  </style>
</head>

<body>
  <section>
    <div class="d-flex">
      <!-- menu -->
      <div id="menu">
        <ul class="list-unstyled text-center text-light mt-5">
          <li class="py-2 cursor-pointer" title="زيارة الموقع"><a href="<?php echo $websiteLink; ?>" target="_blank" class="text-light text-decoration-none"><i class="fa-solid fa-dragon"></i></a></li>
          <!-- <li class="py-2 cursor-pointer"><i class="fa-solid fa-house"></i></li> -->
          <!-- + -->
          <li>
            <!-- add menu -->
          <li class="py-2 cursor-pointer" id="addSomething" title="اضافة"><i class="fa-solid fa-plus"></i></li>
          <!-- drop down + -->
          <ul class="list-unstyled" id="mydropdown">
            <li class="py-2 cursor-pointer" id="addSerie">مسلسل</li>
            <li class="py-2 cursor-pointer" id="addSeason">موسم</li>
            <li class="py-2 cursor-pointer" id="addEpi">حلقة</li>
            <li class="py-2 cursor-pointer" id="addMovie">فيلم</li>
          </ul>
          </li>

          <!-- edit menu -->
          <li class="cursor-pointer py-2" id="addSomething2" title="تعديل"><i class="fa-solid fa-pen-to-square"></i></li>
          <!-- drop down setting -->
          <li>
            <ul class="list-unstyled" id="mydropdown2">
              <li class="py-2 cursor-pointer" id="editSerie">مسلسل</li>
              <li class="py-2 cursor-pointer" id="editSeason">موسم</li>
              <li class="py-2 cursor-pointer" id="editEpi">حلقة</li>
              <li class="py-2 cursor-pointer" id="editMovie">فيلم</li>
            </ul>
          </li>

          <!-- slider -->
          <li class="cursor-pointer py-2" id="sliderMenu" title="سلايدر"><i class="fa-solid fa-arrows-left-right-to-line"></i></li>
          <!-- drop down setting -->
          <li>
            <ul class="list-unstyled" id="sliderDropDown">
              <li class="py-2 cursor-pointer" id="addSlider">اضافة</li>
              <li class="py-2 cursor-pointer" id="editSlider">تعديل</li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- body -->
      <div id="panel-body">
        <!-- ADD SERIE -->
        <div class="w-75 ms-5 mt-5 text-capitalize pb-5 d-none" id="serie">
          <h3 class="bg-first p-3 rounded text-light">اضافة مسلسل</h3>
          <!-- title -->
          <label for="serieName" class="form-label">اسم المسلسل</label>
          <input class="form-control" type="text" id="serieName" />
          <!-- category -->
          <label for="category" class="form-label">تصنيف</label>
          <input class="form-control" type="text" id="category" />
          <!-- description -->
          <label for="description" class="form-label">الوصف</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
          <!-- trailler -->
          <label for="trailler" class="form-label">العرض الدعائي</label>
          <input class="form-control" type="text" id="trailler" />
          <!-- rate -->
          <label for="rate" class="form-label">التقييم</label>
          <input class="form-control" type="text" id="rate" name="rate" />
          <!-- prodaction year -->
          <label for="prod-year" class="form-label">سنة الانتاج</label>
          <input class="form-control" type="text" id="prod-year" />
          <!--  Poster -->
          <label for="poster" class="form-label">البوستر</label>
          <input class="form-control" type="text" id="poster" />
          <!--  quality -->
          <label for="quality" class="form-label">الجودة</label>
          <input class="form-control" type="text" id="quality" />
          <div class="mt-4">
            <button class="btn bg-first text-light add-serie">اضافة مسلسل</button>
            <button type="reset" class="btn bg-secondary text-light ms-2 reset-serie">مسح البيانات</button>
          </div>
        </div>


        <!-- ADD SEASON -->
        <div class="w-75 ms-5 mt-5 text-capitalize pb-5 d-none" id="season">
          <h3 class="bg-first p-3 rounded text-light">اضافة موسم</h3>
          <!-- for serie: ... -->
          <label for="forSerie" class="form-label">موسم خاص بـ</label>
          <input class="form-control" list="datalistSeason" id="forSerie" placeholder="مسلسل خاص بـــ .." />
          <datalist id="datalistSeason">
            <!-- options here -->

          </datalist>
          <button id="choseSerie" class="btn bg-first text-light d-block mt-3">اختيار</button>
          <!-- number of the season -->
          <label for="seasonNum" class="form-label">رقم الموسم</label>
          <input class="form-control" type="number" id="seasonNum" name="seasonNum" />
          <!-- category -->
          <label for="cSategory" class="form-label">تصنيف</label>
          <input class="form-control" type="text" id="Scategory" name="category" />
          <!-- description -->
          <label for="Sdescription" class="form-label">الوصف</label>
          <textarea class="form-control" id="Sdescription" rows="3" name="description"></textarea>
          <!-- trailler -->
          <label for="Strailler" class="form-label">العرض الدعائي</label>
          <input class="form-control" type="text" id="Strailler" name="trailler" />
          <!-- rate -->
          <label for="Srate" class="form-label">التقييم</label>
          <input class="form-control" type="text" id="Srate" name="rate" />
          <!-- prodaction year -->
          <label for="Sprod-year" class="form-label">سنة الانتاج</label>
          <input class="form-control" type="text" id="Sprod-year" name="prod-year" />
          <!--  Poster -->
          <label for="Sposter" class="form-label">البوستر</label>
          <input class="form-control" type="text" id="Sposter" />
          <!-- number of episodes -->
          <label for="epiNum" class="form-label">عدد حلقات الموسم</label>
          <input class="form-control" type="number" id="epiNum" />
          <!--  quality -->
          <label for="Squality" class="form-label">الجودة</label>
          <input class="form-control" type="text" id="Squality" />
          <div class="mt-4">
            <button class="btn bg-first text-light" id="add-season">اضافة موسم</button>
            <button type="reset" class="btn bg-secondary text-light ms-2" id="reset-season">مسح البيانات</button>
          </div>
        </div>


        <!-- ADD EPISODE -->
        <div class="w-75 ms-5 mt-5 text-capitalize pb-5 d-none" id="episode">
          <!-- title -->
          <h3 class="bg-first p-3 rounded text-light">اضافة حلقة</h3>
          <!-- for serie: ... -->
          <label for="epForSerie" class="form-label">مسلسل</label>
          <input class="form-control" list="datalistEp" id="epForSerie" placeholder="مسلسل" />
          <button id="thisSerie" class="btn bg-first text-light d-block mt-3">اختيار</button>

          <datalist id="datalistEp">
            <!-- SERIES OPTION -->
          </datalist>

          <!-- number of the episode -->
          <label for="epNum" class="form-label">رقم الحلقة</label>
          <input class="form-control" type="number" id="epNum" />
          <!-- streaming servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات المشاهدة</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-stream-server"></i>
            <div id="stream-servers">
              <div class="mt-3 border rounded p-3 server">
                <h5 class="d-inline-block me-4">سرفر 1</h5>
                <div class="mb-3">
                  <!-- name -->
                  <label class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control">
                  <!-- link -->
                  <label class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control">
                  <!--  -->
                </div>
              </div>
            </div>
          </div>
          <!-- download servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات التحميل</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-download-server"></i>
            <div id="download-servers">
              <div class="mt-3 border rounded p-3 server">
                <h5 class="d-inline-block me-4">سرفر 1</h5>
                <div class="mb-3">
                  <!-- name -->
                  <label for="server1" class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control">
                  <!-- link -->
                  <label for="server1" class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control">
                  <!--  -->
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <button class="btn bg-first text-light" id="addEp">اضافة حلقة</button>
            <button type="reset" class="btn bg-secondary text-light ms-2">مسح البيانات</button>
          </div>
        </div>

        <!-- ADD MOVIE -->
        <div class="w-75 ms-5 mt-5 text-capitalize pb-5 d-none" id="movie">
          <!-- title -->
          <h3 class="bg-first p-3 rounded text-light">اضافة فليم</h3>
          <!-- name -->
          <label for="movieName" class="form-label">اسم الفيلم</label>
          <input class="form-control movieName" type="text" id="movieName" />
          <!-- category -->
          <label for="category" class="form-label">تصنيف</label>
          <input class="form-control category" type="text" id="category" />
          <!-- description -->
          <label for="description" class="form-label">الوصف</label>
          <textarea class="form-control description" id="description" rows="3"></textarea>
          <!-- trailler -->
          <label for="trailler" class="form-label">العرض الدعائي</label>
          <input class="form-control trailler" type="text" id="trailler" />
          <!-- rate -->
          <label for="rate" class="form-label">التقييم</label>
          <input class="form-control rate" type="text" id="rate" />
          <!-- prodaction year -->
          <label for="prod-year" class="form-label">سنة الانتاج</label>
          <input class="form-control prod-year" type="text" id="prod-year" />
          <!--  Poster -->
          <label for="poster" class="form-label">البوستر</label>
          <input class="form-control poster" type="text" id="poster" />
          <!--  quality -->
          <label for="quality" class="form-label">الجودة</label>
          <input class="form-control quality" type="text" id="quality" />
          <!-- streaming servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات المشاهدة</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-stream-movie"></i>
            <div id="stream-movie">
              <div class="mt-3 border rounded p-3 server">
                <h5 class="d-inline-block me-4">سرفر 1</h5>
                <div class="mb-3">
                  <!-- name -->
                  <label class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control">
                  <!-- link -->
                  <label class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control">
                  <!--  -->
                </div>
              </div>
            </div>
          </div>
          <!-- download servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات التحميل</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-download-movie"></i>
            <div id="download-movie">
              <div class="mt-3 border rounded p-3 server">
                <h5 class="d-inline-block me-4">سرفر 1</h5>
                <div class="mb-3">
                  <!-- name -->
                  <label for="server1" class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control">
                  <!-- link -->
                  <label for="server1" class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control">
                  <!--  -->
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <button class="btn bg-first text-light" id="addMovieBtn">اضافة فيلم</button>
            <button type="reset" class="btn bg-secondary text-light ms-2">مسح البيانات</button>
          </div>
        </div>

        <!-- EDIT SERIE -->
        <div class="text-capitalize p-5 d-none" id="edit-serie-section">
          <table class="table table-hover text-center table-borderless table-striped">
            <thead>
              <tr>
                <th class="col-4">العنوان</th>
                <th class="col-2">عدد المواسم</th>
                <th class="col-2">عدد الحلقات</th>
                <th class="col-2">اجراء</th>
              </tr>
            </thead>
            <tbody>
              <!-- get all series from db -->
              <?php while ($serie = $series->fetch()) {
                $serie_id = $serie['serie_id'];
                // GET THE NUMBER SEASONS
                $q = "SELECT COUNT(seasonNum) AS NomberOfSeason FROM season GROUP BY serie_id HAVING serie_id = ?";
                $NomberOfSeason = $conn->prepare($q);
                $NomberOfSeason->execute([$serie_id]);
                $numOfS = $NomberOfSeason->fetch();
                // GET THE NUMBER OF EPISODES
                // select the number of episodes of the serie
                $q2 = "SELECT COUNT(serie_id) AS numberOfEp FROM episode WHERE serie_id = ?";
                $getEpCount = $conn->prepare($q2);
                $getEpCount->execute([$serie_id]);
                $epCount = $getEpCount->fetch();
              ?>

                <tr>
                  <!-- serie id -->
                  <input type="hidden" value="<?php echo $serie['serie_id']; ?>">
                  <td><?php echo $serie['name']; ?></td>
                  <td><?php echo empty($numOfS['NomberOfSeason']) ? '0' : $numOfS['NomberOfSeason']; ?></td>
                  <td><?php echo empty($epCount['numberOfEp']) ? '0' : $epCount['numberOfEp']; ?></td>
                  <td>
                    <button class="border-0 bg-transparent updateSerie" data-bs-toggle="modal" data-bs-target="#editSerieModal"><i class="fa-solid fa-pen text-first me-2"></i></button>
                    <button class="border-0 bg-transparent deleteSerie" data-bs-toggle="modal" data-bs-target="#deleteSerieModal"><i class="fa-solid fa-trash text-danger"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <!-- EDIT SEASON -->
        <div class="text-capitalize p-5 d-none" id="edit-season-section">
          <table class="table table-hover text-center table-borderless table-striped">
            <thead>
              <tr>
                <th class="col-4">مسلسل</th>
                <th class="col-2">موسم</th>
                <th class="col-3">عدد حلقات الموسم</th>
                <th class="col-3">اجراء</th>
              </tr>
            </thead>
            <tbody>
              <!-- get all series from db -->
              <?php while ($s = $season->fetch()) {
                // get the number of episodes of the season
                $qq = "SELECT COUNT(serie_id) AS numberOfEp FROM episode WHERE serie_id = ? AND seasonNum = ?";
                $epCount = $conn->prepare($qq);
                $epCount->execute([$s['serie_id'], $s['seasonNum']]);
                $numberOfEp = $epCount->fetch();
              ?>
                <tr>
                  <!-- serie id -->
                  <input type="hidden" value="<?php echo $s['serie_id']; ?>">
                  <td><?php echo $s['name']; ?></td>
                  <td><?php echo $s['seasonNum']; ?></td>
                  <td><?php echo $numberOfEp['numberOfEp']; ?></td>
                  <td>
                    <button class="border-0 bg-transparent updateSeason" data-bs-toggle="modal" data-bs-target="#editSeasonModal"><i class="fa-solid fa-pen text-first me-2"></i></button>
                    <button class="border-0 bg-transparent deleteSeason" data-bs-toggle="modal" data-bs-target="#deleteSeasonModal"><i class="fa-solid fa-trash text-danger"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- EDIT episode -->
        <div class="text-capitalize p-5 d-none" id="edit-ep-section">
          <table class="table table-hover text-center table-borderless table-striped">
            <thead>
              <tr>
                <th class="col-3">مسلسل</th>
                <th class="col-3">موسم</th>
                <th class="col-3">رقم الحلقة</th>
                <th class="col-3">اجراء</th>
              </tr>
            </thead>
            <tbody>
              <!-- get all series from db -->
              <?php while ($e = $ep->fetch()) { ?>
                <tr>
                  <!-- serie id -->
                  <input type="hidden" value="<?php echo $e['serie_id']; ?>">
                  <td><?php echo $e['name']; ?></td>
                  <td><?php echo $e['seasonNum']; ?></td>
                  <td><?php echo $e['epiNum']; ?></td>
                  <td>
                    <button class="border-0 bg-transparent updateEp"><a href="<?php echo 'updateEp.php?id=' . $e['serie_id'] . '&season=' . $e['seasonNum'] . '&epiNum=' . $e['epiNum'] ?>" target="_blank"><i class="fa-solid fa-pen text-first me-2"></i></a></button>
                    <button class="border-0 bg-transparent deleteEp" data-bs-toggle="modal" data-bs-target="#deleteEpModal"><i class="fa-solid fa-trash text-danger"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <!-- EDIT movie -->
        <div class="text-capitalize p-5 d-none" id="edit-movie-section">
          <table class="table table-hover text-center table-borderless table-striped">
            <thead>
              <tr>
                <th class="col-4">اسم الفيلم</th>
                <th class="col-4">سنة الانتاج</th>
                <th class="col-4">اجراء</th>
              </tr>
            </thead>
            <tbody>
              <!-- start  -->
              <?php while ($m = $movie->fetch()) { ?>
                <tr>
                  <input type="hidden" value="<?php echo $m['movie_id'] ?>">
                  <td><?php echo $m['name'] ?></td>
                  <td><?php echo $m['prodYear'] ?></td>
                  <td>
                    <button class="border-0 bg-transparent"><a href="<?php echo 'updateMovie.php?id=' . $m['movie_id'] ?>" target="_blank"><i class="fa-solid fa-pen text-first me-2"></i></a></button>
                    <button class="border-0 bg-transparent deleteMovie" data-bs-toggle="modal" data-bs-target="#deleteMovieModal"><i class="fa-solid fa-trash text-danger"></i></button>
                  </td>
                </tr>
              <?php } ?>
              <!-- end -->
            </tbody>
          </table>

        </div>
        <!-- add Slider -->
        <div class="text-capitalize p-5 d-none" id="sliderSection">
                    <h3 class="bg-first p-3 rounded text-light">اضافة سلايدر</h3>
                    <!-- big title -->
                    <label class="form-label">العنوان</label>
                    <input class="form-control bigTitle" type="text"/>
                    <!-- small title -->
                    <label class="form-label">العنوان الصغير</label>
                    <input class="form-control smallTitle" type="text" />
                    <!-- cover -->
                    <label class="form-label">الغلاف</label>
                    <input class="form-control cover" type="text" />
                    <!-- link -->
                    <label class="form-label">الرابط</label>
                    <input class="form-control link" type="text" />
                    <!-- add button -->
                    <button class="btn bg-first text-light mt-3 addSlider">اضافة</button>

        </div>
        <!-- edit Slider -->
        <div class="text-capitalize p-5 d-none" id="editSliderSection">
          <table class="table table-hover text-center table-borderless table-striped">
                <thead>
                  <tr>
                    <th class="col-6">العنوان</th>
                    <th class="col-3">اضيف في</th>
                    <th class="col-3">اجراء</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- start slider row -->

                <?php
                  $getSlider = $conn->prepare("SELECT * FROM slider");
                  $getSlider->execute();
                  while ($slider = $getSlider->fetch()) {
                  ?>
                  <tr>
                    <input type="hidden" value="<?php echo $slider['id']?>">
                    <td><?php echo $slider['bigTitle']?></td>
                    <td><?php echo $slider['addedIn']?></td>
                    <td>
                    <button class="border-0 bg-transparent updateSlider" data-bs-toggle="modal" data-bs-target="#editSliderModal"><i class="fa-solid fa-pen text-first me-2"></i></button>
                    <button class="border-0 bg-transparent deleteSlider" data-bs-toggle="modal" data-bs-target="#deleteSliderModal"><i class="fa-solid fa-trash text-danger"></i></button>
                  </td>
                  </tr>
                  <?php } ?>
                  <!-- end slider row -->
                </tbody>
          </table>
        </div>

      </div>
    </div>
    </div>
  </section>


  <!-- edit serie modal -->
  <div class="modal fade" id="editSerieModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <input type="hidden" value="test">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="serieData">
          <!--  -->
          <!-- serieData -->
          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <!-- Delete Serie Modal -->
  <div class="modal fade" id="deleteSerieModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">
          هل انت متأكد من حذف هذا المسلسل
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="delete-serie">تاكيد</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>

  <!-- edit season modal -->
  <div class="modal fade" id="editSeasonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <input type="hidden" value="test">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="seasonData">
          <!--  -->
          <!-- serieData -->
          <!--  -->
        </div>
      </div>
    </div>
  </div>

  <!-- Delete season Modal -->
  <div class="modal fade" id="deleteSeasonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">
          هل انت متأكد من حذف هذا الموسم
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="delete-season">تاكيد</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete episode Modal -->
  <div class="modal fade" id="deleteEpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">
          هل انت متأكد من حذف هذه الحلقة
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="delete-episode">تاكيد</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Movie Modal -->
  <div class="modal fade" id="deleteMovieModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">
          هل انت متأكد من حذف الفليم
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="delete-movie">تاكيد</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Delete Slider Modal -->
  <div class="modal fade" id="deleteSliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">
          هل انت متأكد من حذف السلايدر
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="delete-slider">تاكيد</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Slider Modal -->
  <div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body h3 mt-3">

      </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn bg-first text-light" id="edit-slider">تعديل</button>
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>


  <!-- bootstrap cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- externe js  -->
  <script>
    <?php include "js/panel.js" ?>
  </script>
  <!-- sweet alert library -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- add serie js -->
  <script>
    <?php include "js/addSerie.js" ?>
  </script>
  <!-- add season js -->
  <script>
    <?php include "js/addSeason.js" ?>
  </script>
  <!-- add season js -->
  <script>
    <?php include "js/addEp.js" ?>
  </script>
  <!-- update serie -->
  <script>
    <?php include "js/update.js" ?>
  </script>
</body>

</html>
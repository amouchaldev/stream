<?php
include "../config.php";
$i = $_GET['id'];
$sql = "SELECT * FROM movie WHERE movie_id = ?";
$info = $conn->prepare($sql);
$info->execute([$i]);
$result = $info->fetch();
$streamServ = json_decode($result['streamServ'], true);
$downloadServ = json_decode($result['downloadServ'], true);

// if ($info) {
//   echo var_dump(json_decode($result['streamServ'], true));
//     // echo json_encode($result, true);

// }
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
  <title>update ep</title>
  <style>
    <?php include "../css/main.css"; ?>
  </style>
  <style>
    <?php include "css/panel.css"; ?>
  </style>
</head>
<body>
 <!-- ADD MOVIE -->
 <div class="mt-5 text-capitalize pb-5 px-5 w-75 mx-auto" id="movie">
          <!-- title -->
          <h3 class="bg-first p-3 rounded text-light">تعديل فليم</h3>
          <!-- name -->
          <label for="movieName" class="form-label">اسم الفيلم</label>
          <input class="form-control movieName" type="text" id="movieName" value="<?php echo $result['name']?>" />
          <!-- category -->
          <label for="category" class="form-label">تصنيف</label>
          <input class="form-control category" type="text" id="category" value="<?php echo $result['category']?>" />
          <!-- description -->
          <label for="description" class="form-label">الوصف</label>
          <textarea class="form-control description" id="description" rows="3"><?php echo $result['description']?></textarea>
          <!-- trailler -->
          <label for="trailler" class="form-label">العرض الدعائي</label>
          <input class="form-control trailler" type="text" id="trailler" value="<?php echo $result['trailler']?>"/>
          <!-- rate -->
          <label for="rate" class="form-label">التقييم</label>
          <input class="form-control rate" type="text" id="rate" value="<?php echo $result['rate']?>"/>
          <!-- prodaction year -->
          <label for="prod-year" class="form-label">سنة الانتاج</label>
          <input class="form-control prod-year" type="text" id="prod-year" value="<?php echo $result['prodYear']?>"/>
          <!--  Poster -->
          <label for="poster" class="form-label">البوستر</label>
          <input class="form-control poster" type="text" id="poster" value="<?php echo $result['poster']?>"/>
          <!--  quality -->
          <label for="quality" class="form-label">الجودة</label>
          <input class="form-control quality" type="text" id="quality" value="<?php echo $result['quality']?>"/>
          <!-- streaming servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات المشاهدة</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-stream-movie"></i>
            <div id="stream-movie">
           <!-- start stream server -->
           <?php for ($i = 0; $i < count($streamServ); $i++) {?>
              <div class="mt-3 border rounded p-3 server">
                  <h5 class="d-inline-block me-4">سرفر </h5>
                  <i class="fa-solid fa-minus cursor-pointer remove-this"></i>
                <div class="mb-3">
                  <!-- name -->
                  <label class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control" value="<?php echo $streamServ[$i]['name']?>">
                  <!-- link -->
                  <label class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control" value="<?php echo $streamServ[$i]['link']?>">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control" value="<?php echo $streamServ[$i]['quality']?>">
                  <!--  -->
                </div>
              </div>
              <?php } ?>
          <!-- end stream server -->
            </div>
          </div>
          <!-- download servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات التحميل</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-download-movie"></i>
            <div id="download-movie">
                   <!-- start download server -->
            <?php for ($i = 0; $i < count($downloadServ); $i++) {?>
              <div class="mt-3 border rounded p-3 server">
                <h5 class="d-inline-block me-4">سرفر</h5>
                <i class="fa-solid fa-minus cursor-pointer remove-this"></i>

                <div class="mb-3">
                  <!-- name -->
                  <label for="server1" class="form-label">اسم السرفر</label>
                  <input type="text" class="form-control" value="<?php echo $downloadServ[$i]['name']?>">
                  <!-- link -->
                  <label for="server1" class="form-label">رابط السرفر</label>
                  <input type="text" class="form-control" value="<?php echo $downloadServ[$i]['link']?>">
                  <!-- quality -->
                  <label class="form-label">الجودة</label>
                  <input type="text" class="form-control" value="<?php echo $downloadServ[$i]['quality']?>">
                  <!--  -->
                </div>
              </div>
              <?php } ?>
              <!-- end download server -->
            </div>
          </div>

          <div class="mt-4">
            <button class="btn bg-first text-light" id="updateMovie">تحديث</button>
            <!-- <button type="reset" class="btn bg-secondary text-light ms-2">مسح البيانات</button> -->
          </div>
        </div>
        <script>
          // create stream server for movie
const movieContainer = document.getElementById("stream-movie");
const addStreamMov = document.getElementById("add-stream-movie");
let movieCounter = { counter: 1 };
addStreamMov.addEventListener("click", () => {
  _createServer(movieContainer, movieCounter);
});

// // add download server for movie
const movieSection = document.getElementById("movie");
const downloadMovie = document.getElementById("download-movie");
const addDownloadMov = document.getElementById("add-download-movie");
let movieDCounter = { counter: 1 };
addDownloadMov.addEventListener("click", () => {
  _createServer(downloadMovie, movieDCounter);
});

// add movie to db

const updateMovie = document.getElementById("updateMovie");
updateMovie.addEventListener("click", () => {
  // console.log('good')
  _UpdateMovie('<?php echo $_GET['id']?>', movieSection, movieContainer, downloadMovie, "updateMovie_handle.php");
});
// let title = movieSection.querySelector(".movieName");
// console.log(title)

// add movie
function _UpdateMovie(id, container, stream, download, php) {
  let title = container.querySelector(".movieName");
  let category = container.querySelector(".category");
  let description = container.querySelector(".description");
  let trailler = container.querySelector(".trailler");
  let rate = container.querySelector(".rate");
  let prodYear = container.querySelector(".prod-year");
  let poster = container.querySelector(".poster");
  let quality = container.querySelector(".quality");
  // streaming servers:
  // array contain objects that contain name and link of the streaming input
  let streamServ = [];
  // create objects with data of all streaming fields
  stream.querySelectorAll(".server").forEach((el) => {
    let data = {
      name: el.querySelector("input").value, // name of the streaming server
      link: el.querySelector("input").nextElementSibling.nextElementSibling
        .value, // link of the streaming server
      quality: el.lastElementChild.lastElementChild.value,
    };
    streamServ.push(data);
  });

  // download servers:
  // array contain objects that contain name and link of the download input
  let downloadServ = [];
  // create objects with data of all download fields
  download.querySelectorAll(".server").forEach((el) => {
    let data = {
      name: el.querySelector("input").value, // name of the streaming server
      link: el.querySelector("input").nextElementSibling.nextElementSibling
        .value, // link of the streaming server
      quality: el.lastElementChild.lastElementChild.value,
    };
    downloadServ.push(data);
  });
  // parameter that will send in post method
  let param = `id=${id}&name=${title.value}&category=${category.value}&description=${
    description.value
  }&trailler=${trailler.value}&rate=${rate.value}&prodYear=${
    prodYear.value
  }&poster=${poster.value}&quality=${quality.value}&streamServ=${JSON.stringify(
    streamServ
  )}&downloadServ=${JSON.stringify(downloadServ)}`;
  console.log(param)
  // send data to server with ajax
  const xhr = new XMLHttpRequest();
  xhr.onload = () => {
    if (xhr.responseText == 1) {
      Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Movie Update Successfully",
        showConfirmButton: false,
        timer: 1500,
      });
      // reset all inputs when episode added successfully
      // document.querySelectorAll('input').forEach(input => input.value = '')
    }
  };
  xhr.open("POST", php);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(param);
}

function _createServer(element, counter) {
//   element.querySelector('.server').classList.remove('d-none')
  // clone the first element in serverContainer
  const container = element.querySelector("div").cloneNode(true);
  container.querySelectorAll('input').forEach(input => input.value = '')

//   container.querySelector("h5").innerHTML = `سرفر ${++counter.counter}`;
  element.append(container);
  // add event listener on each element i => when click on it the parent element removed
  removeServ(element)
}
function removeServ(container) {
    let removeServer = container.querySelectorAll(".remove-this");
      removeServer.forEach(el => {
          el.addEventListener("click", () => {
              if (el.parentElement.parentElement.childElementCount > 1) {
                  
                el.parentElement.remove();
              //   counter.counter--;
              }
          })
      }
      );
}
// add event listener on each element i => when click on it the parent element removed
removeServ(movieContainer)
removeServ(downloadMovie)





        </script>
             <!-- sweet alert library -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
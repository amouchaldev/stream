<?php
include "../config.php";
$i = $_GET['id'];
$s = $_GET['season'];
$ep = $_GET['epiNum'];
$sql = "SELECT * FROM episode INNER JOIN serie ON episode.serie_id = serie.serie_id WHERE episode.serie_id = ? AND episode.seasonNum = ? AND episode.epiNum = ?";
$info = $conn->prepare($sql);
$info->execute([$i, $s, $ep]);
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
  <!-- ADD EPISODE -->
  <div class="mt-5 text-capitalize pb-5 px-5 w-75 mx-auto" id="episode">
          <!-- title -->
          <h3 class="bg-first p-3 rounded text-light">تعديل الحلقة</h3>
          <!-- for serie: ... -->
          <label for="epForSerie" class="form-label" >مسلسل</label>
          <input class="form-control" type="text" placeholder="مسلسل" readonly value="<?php echo $result['name']?>"/>

          <!-- number of the episode -->
          <label for="epNum" class="form-label">رقم الحلقة</label>
          <input class="form-control text-start epNum" type="number" value="<?php echo $result['epiNum']?>"/>
          <!-- streaming servers -->
          <div class="mt-5 border rounded p-4">
            <h4 class="d-inline-block me-4">سرفرات المشاهدة</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-stream-server"></i>
            <div id="stream-servers">
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
            <h4 class="d-inline-block me-4">سرفرات التحميل</h4><i class="fa-solid fa-plus h5 cursor-pointer" id="add-download-server"></i>
            <div id="download-servers">
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
            <button class="btn bg-first text-light col-2" id="updateEp">تحديث</button>
            <!-- <button type="reset" class="btn bg-secondary text-light ms-2">مسح البيانات</button> -->
          </div>
        </div>
   <script>
       // add stream server
const downloadContainer = document.getElementById("download-servers");
const addDownloadServer = document.getElementById("add-download-server");
// variable increment every time we added new server
let downloadCounter = { counter: 1 };
addDownloadServer.addEventListener("click", () => {
  _createServer(downloadContainer, downloadCounter);
});

// add download server
const serverContainer = document.getElementById("stream-servers");
const addStreamServer = document.getElementById("add-stream-server");
// variable increment every time we added new server
let streamCounter = { counter: 1 };
addStreamServer.addEventListener("click", () => {
  _createServer(serverContainer, streamCounter);
});

// function Create Streaming Servers
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
removeServ(serverContainer)
removeServ(downloadContainer)


// UPDATE
const updateEp = document.getElementById("updateEp");
updateEp.addEventListener("click", () => {
    _updateEp(serverContainer, downloadContainer, "updateEp_handle.php");
});

function _updateEp(stream, download, php) {
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
    // episode info from get method
    const serie_id  = '<?php echo $_GET['id'] ?>'; 
    const seasonNum = '<?php echo $s ?>';
    const currentEp = '<?php echo $ep ?>'; 
  // parameter that will send in post method 
  let epSeason = document.getElementById("episodeSeason"); // season of the episode
  let param = `serie_id=${serie_id}&seasonNum=${seasonNum}&currentEp=${currentEp}&epiNum=${document.querySelector('#episode .epNum').value}&streamServ=${JSON.stringify(streamServ)}&downloadServ=${JSON.stringify(downloadServ)}`;
  console.log(param)
  // send data to server with ajax
  const xhr = new XMLHttpRequest();
  xhr.onload = () => {
      console.log(xhr.responseText)
    if (xhr.responseText == 1) {
      Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Update Successfully",
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
   </script>
     <!-- sweet alert library -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
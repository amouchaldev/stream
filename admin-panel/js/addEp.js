const epForSerie = document.getElementById("epForSerie");   // input to write the name of serie
const datalistEp = document.getElementById("datalistEp"); // contain all series in database as option
const thisSerie = document.getElementById("thisSerie"); // button get the information of the specific serie when you click on it !
const episodeNum = document.getElementById("epNum");  // episode number
// get all series from database when you click on the input
epForSerie.addEventListener("click", _getAllAnime(datalistEp));
// show select contain all season of the selected serie
thisSerie.addEventListener("click", _getSeasons);

// create select element
const select = document.createElement("select");
select.id = "episodeSeason";
select.classList.add("form-select", "mt-3");

function _getSeasons() {
  const xhr = new XMLHttpRequest();

  xhr.onload = () => {
    let seasonN = JSON.parse(xhr.responseText);
    select.innerHTML = "";
    for (let i = 0; i < seasonN.length; i++) {
      let option = document.createElement("option");
      option.value = seasonN[i].season_id;
      option.append(seasonN[i].seasonNum);
      // option.append(seasonN[i].seasonNum);
      select.append(option);
      episode.insertBefore(select, datalistEp);
    }
  };
  xhr.open("GET", "getSeasons.php?i=" + epForSerie.value);
  xhr.send();
}

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
  element.querySelector('.server').classList.remove('d-none')
  // clone the first element in serverContainer
  const container = element.querySelector("div").cloneNode(true);

  // // create substract icon
  const i = document.createElement("i");
  i.classList.add("fa-solid", "fa-minus", "cursor-pointer", "remove-this");

  // append i to container
  container.insertBefore(i, container.querySelector("div"));
  container.querySelector("h5").innerHTML = `سرفر ${++counter.counter}`;
  element.append(container);

  // add event listener on each element i => when click on it the parent element removed
  let removeServer = element.querySelectorAll(".remove-this");
  removeServer.forEach((el) =>
    el.addEventListener("click", () => {
      el.parentElement.remove();
      counter.counter--;
    })
  );
}

// add episode
const addEp = document.getElementById("addEp");
addEp.addEventListener("click", () => {
  _addEpisode(serverContainer, downloadContainer, "addEp.php");
});

function _addEpisode(stream, download, php) {
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
  let epSeason = document.getElementById("episodeSeason"); // season of the episode
  let param = `serie_id=${epForSerie.value}&season_id=${
    epSeason.value
  }&seasonNum=${epSeason.options[epSeason.selectedIndex].text}&epiNum=${
    episodeNum.value
  }&streamServ=${JSON.stringify(streamServ)}&downloadServ=${JSON.stringify(
    downloadServ
  )}`;
  // send data to server with ajax
  const xhr = new XMLHttpRequest();
  xhr.onload = () => {
    if (xhr.responseText == 1) {
      Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Added Successfully",
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

// MOVIE

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
const addMovieBtn = document.getElementById("addMovieBtn");
addMovieBtn.addEventListener("click", () => {
  _addMovie(movieSection, movieContainer, downloadMovie, "addMovie.php");
});
let title = movieSection.querySelector(".movieName");

// add movie
function _addMovie(container, stream, download, php) {
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
  let param = `name=${title.value}&category=${category.value}&description=${
    description.value
  }&trailler=${trailler.value}&rate=${rate.value}&prodYear=${
    prodYear.value
  }&poster=${poster.value}&quality=${quality.value}&streamServ=${JSON.stringify(
    streamServ
  )}&downloadServ=${JSON.stringify(downloadServ)}`;
  // send data to server with ajax
  const xhr = new XMLHttpRequest();
  xhr.onload = () => {
    if (xhr.responseText == 1) {
      Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Added Successfully",
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


// add slider
let bigTitle = document.querySelector('#sliderSection .bigTitle'),
 smallTitle = document.querySelector('#sliderSection .smallTitle'),
 cover = document.querySelector('#sliderSection .cover'),
 link = document.querySelector('#sliderSection .link');

const addSliderBtn = document.querySelector('#sliderSection .addSlider')
addSliderBtn.addEventListener('click', () => {
  if (bigTitle.value != '' && smallTitle.value != '' && cover.value != '' && link.value != '')
   _addSlider()
})

function _addSlider() {
  //  parametre that will go by POST method
  let currentTime = `${new Date().getFullYear()}-${new Date().getMonth() + 1}-${new Date().getDate()} ${new Date().getHours()}:${new Date().getMinutes()}:${new Date().getSeconds()}`
   let param = `bigTitle=${bigTitle.value}&smallTitle=${smallTitle.value}&cover=${cover.value}&link=${link.value}&addedIn=${currentTime}`
   console.log(param)
   const xhr = new XMLHttpRequest()
   xhr.onload = () => {
    //  console.log(xhr.responseText)
     if (xhr.responseText == 1) {
      Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Slider Added Successfully",
        showConfirmButton: false,
        timer: 1500,
      });
      sliderSection.querySelectorAll('input').forEach(input => input.value = '')
     }
   }
   xhr.open('POST', 'addSlider.php')
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
   xhr.send(param)
}
// show/hide drop menu (edit)
const editLi = document.getElementById("addSomething2");
const editDropDown = document.getElementById("mydropdown2");
editLi.addEventListener("click", () => {
  if (editDropDown.clientHeight == 0) {
    editDropDown.style.height = "100%";
    editDropDown.style.width = "100%";
    editDropDown.style.opacity = "1";
    editDropDown.style.paddingTop = "7px";
    editDropDown.style.transition = "all .4s ease-out";
  } else {
    editDropDown.style.height = "0";
    editDropDown.style.width = "0";
    editDropDown.style.opacity = "0";
    editDropDown.style.paddingTop = "0";
    editDropDown.style.transition = "all .2s ease-out";
  }
});

// show/hide drop menu (add)
const addLi = document.getElementById("addSomething");
const addDropDown = document.getElementById("mydropdown");
addLi.addEventListener("click", () => {
  // console.log(add)
  if (addDropDown.clientHeight == 0) {
    addDropDown.style.height = "100%";
    addDropDown.style.width = "100%";
    addDropDown.style.opacity = "1";
    addDropDown.style.paddingTop = "7px";
    addDropDown.style.transition = "all .4s ease-out";
  } else {
    addDropDown.style.height = "0";
    addDropDown.style.width = "0";
    addDropDown.style.opacity = "0";
    addDropDown.style.paddingTop = "0";
    addDropDown.style.transition = "all .2s ease-out";
  }
});
// show/hide drop menu (slider)
const sliderLi = document.getElementById("sliderMenu");
const sliderDropDown = document.getElementById("sliderDropDown");
sliderLi.addEventListener("click", () => {
  // console.log(add)
  if (sliderDropDown.clientHeight == 0) {
    sliderDropDown.style.height = "100%";
    sliderDropDown.style.width = "100%";
    sliderDropDown.style.opacity = "1";
    sliderDropDown.style.paddingTop = "7px";
    sliderDropDown.style.transition = "all .4s ease-out";
  } else {
    sliderDropDown.style.height = "0";
    sliderDropDown.style.width = "0";
    sliderDropDown.style.opacity = "0";
    sliderDropDown.style.paddingTop = "0";
    sliderDropDown.style.transition = "all .2s ease-out";
  }
});







// add serie
const addSerie = document.getElementById("addSerie");
const serie = document.getElementById("serie");
// add season
const addSeason = document.getElementById("addSeason");
const season = document.getElementById("season");
// add season
const addEpi = document.getElementById("addEpi");
const episode = document.getElementById("episode");
// add movie
const addMovie = document.getElementById("addMovie");
const movie = document.getElementById("movie");

// edit serie
const editSerie = document.getElementById("editSerie");     // button
const editSerieSection = document.getElementById("edit-serie-section"); // section
// edit season
const editSeason = document.getElementById("editSeason");
const editSeasonSection = document.getElementById("edit-season-section");
// edit episode
const editEp = document.getElementById("editEpi");     // button
const editEpSection = document.getElementById("edit-ep-section"); // section
// edit movie
const editMovie = document.getElementById("editMovie");
const editMovieSection = document.getElementById("edit-movie-section");
// add slider 
const addSlider = document.getElementById("addSlider");
const sliderSection = document.getElementById("sliderSection");
// edit slider 
const editSlider = document.getElementById("editSlider");
const editSliderSection = document.getElementById("editSliderSection");
// all inputs
const allSections = [serie, season, episode, movie, editSerieSection, editSeasonSection, editEpSection, editMovieSection, sliderSection, editSliderSection];
// add serie handle
addSerie.addEventListener("click", () => {
  if (serie.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    serie.classList.replace("d-none", "d-block");
  }
});
// add season handle
addSeason.addEventListener("click", () => {
  if (season.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    season.classList.replace("d-none", "d-block");
  }
});
// add episode handle
addEpi.addEventListener("click", () => {
  if (episode.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    episode.classList.replace("d-none", "d-block");
  }
});
// add movie handle
addMovie.addEventListener("click", () => {
  if (movie.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    movie.classList.replace("d-none", "d-block");
  }
});

// edit serie handle
editSerie.addEventListener("click", () => {
  if (editSerieSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    editSerieSection.classList.replace("d-none", "d-block");
  }
});

// edit season handle
editSeason.addEventListener("click", () => {
  if (editSeasonSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    editSeasonSection.classList.replace("d-none", "d-block");
  }
});

// edit epi handle
editEp.addEventListener("click", () => {
  if (editEpSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    editEpSection.classList.replace("d-none", "d-block");
  }
});

// edit epi handle
editMovie.addEventListener("click", () => {
  if (editMovieSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    editMovieSection.classList.replace("d-none", "d-block");
  }
});



// add slider handle
addSlider.addEventListener("click", () => {
  if (sliderSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    sliderSection.classList.replace("d-none", "d-block");
  }
});

// edit slider handle
editSlider.addEventListener("click", () => {
  if (editSliderSection.classList.contains("d-none")) {
    allSections.forEach((el) => el.classList.replace("d-block", "d-none"));
    editSliderSection.classList.replace("d-none", "d-block");
  }
});


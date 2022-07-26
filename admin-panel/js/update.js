
// editSerieSection variabial was declared in panel js file

editSerieSection.querySelectorAll('.updateSerie').forEach(el => {
    el.addEventListener('click', () => _getSerie(el.parentElement.parentElement.firstElementChild.value))
})
function _getSerie(id) {
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        document.getElementById('serieData').innerHTML = xhr.responseText
        const updateSerie = document.getElementById('updateSerie')  // button update serie
        updateSerie.addEventListener('click', () => {
            _updateSerie(id, '#serieData .name', '#serieData .category', '#serieData .description', '#serieData .trailler', '#serieData .rate', '#serieData .prodYear', '#serieData .poster', '#serieData .quality')
        })
    }
    xhr.open('GET', 'getSerieForUpdate.php?id='+id)
    xhr.send()
}


function _updateSerie(id, titlee, categoryy, descriptionn, traillerr, ratee, prodYearr, posterr, qualityy) {
    const serieName   = document.querySelector(titlee)  // Serie Name
    const category    = document.querySelector(categoryy)  // Category
    const description = document.querySelector(descriptionn)  // description
    const trailler    = document.querySelector(traillerr)  // trailler
    const rate        = document.querySelector(ratee)  // rate
    const prodYear    = document.querySelector(prodYearr)  // production year
    const poster      = document.querySelector(posterr)  // poster
    const quality     = document.querySelector(qualityy)  // quality
    let allInputs = [serieName, category, description, trailler, rate, prodYear, poster, quality]
    let param = `id=${id}&name=${serieName.value}&category=${category.value}&description=${description.value}&trailler=${trailler.value}&rate=${rate.value}&prodYear=${prodYear.value}&poster=${poster.value}&quality=${quality.value}`
    const xhr = new XMLHttpRequest()

    xhr.onload = () => {
        if (xhr.responseText == 1) {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: serieName.value + ' Update Successfully',
                showConfirmButton: false,
                timer: 1500
              })
            allInputs.forEach(el => el.value = '')
            document.querySelector('#serieData .close').click()
        }
    }
    xhr.open('POST', 'updateSerie.php')
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(param)
}


// delete serie 
editSerieSection.querySelectorAll('.deleteSerie').forEach(del => {
    del.addEventListener('click', () => _deleteSerie(del.parentElement.parentElement.firstElementChild.value))
})

function _deleteSerie(id) {
    document.getElementById('delete-serie').addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.responseText == 1) document.querySelector('#deleteSerieModal .close').click()
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'The Serie Was Deleted',
                showConfirmButton: false,
                timer: 1500
              })
        }
        xhr.open('GET', 'deleteSerie.php?id='+id)
        xhr.send()
    })
}

// update season
// editSeasonSection already declared in panel.js
// const editSeasonSection = document.getElementById('edit-season-section')

editSeasonSection.querySelectorAll('.updateSeason').forEach(el => {
    el.addEventListener('click', () => _getSeason(el.parentElement.parentElement.firstElementChild.value, el.parentElement.parentElement.children[2].innerHTML))
})
function _getSeason(id, cureentS) {
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        document.getElementById('seasonData').innerHTML = xhr.responseText
        const updateSeason = document.getElementById('updateSeason')  // button update serie
        updateSeason.addEventListener('click', () => {
            _updateSeason(id, cureentS, '#seasonData .seasonNum', '#seasonData .name', '#seasonData .trailler', '#seasonData .rate', '#seasonData .prodYear', '#seasonData .poster', '#seasonData .quality', '#seasonData .epiNum')
        })
    }
    xhr.open('GET', 'getSeasonForUpdate.php?id='+id)
    xhr.send()
}


function _updateSeason(id, currentSeasonn, seasonNumm, titlee, traillerr, ratee, prodYearr, posterr, qualityy, epiNumm) {
    const seasonNum = document.querySelector(seasonNumm)  // season Num
    const serieName   = document.querySelector(titlee)  // Serie Name
    const trailler    = document.querySelector(traillerr)  // trailler
    const rate        = document.querySelector(ratee)  // rate
    const prodYear    = document.querySelector(prodYearr)  // production year
    const poster      = document.querySelector(posterr)  // poster
    const quality     = document.querySelector(qualityy)  // quality
    const epiNum   = document.querySelector(epiNumm)  // Serie Name
    let allInputs = [serieName, serieName, category, description, trailler, rate, prodYear, poster, quality]
    let param = `id=${id}&name=${serieName.value}&currentSeason=${currentSeasonn}&seasonNum=${seasonNum.value}&epiNum=${epiNum.value}&trailler=${trailler.value}&rate=${rate.value}&prodYear=${prodYear.value}&poster=${poster.value}&quality=${quality.value}`
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.responseText == 1) {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: serieName.value + ' Update Successfully',
                showConfirmButton: false,
                timer: 1500
              })
            allInputs.forEach(el => el.value = '')
            document.querySelector('#seasonData .close').click()
        }
    }
    xhr.open('POST', 'updateSeason.php')
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(param)
}


// delete serie 
editSerieSection.querySelectorAll('.deleteSerie').forEach(del => {
    del.addEventListener('click', () => _deleteSerie(del.parentElement.parentElement.firstElementChild.value, 'delete-serie','#deleteSerieModal .close', 'deleteSerie.php'))
})
// delete season
editSeasonSection.querySelectorAll('.deleteSeason').forEach(del =>del.addEventListener('click', () => {
    _deleteSerie(del.parentElement.parentElement.firstElementChild.value, 'delete-season','#deleteSeasonModal .close', 'deleteSeason.php', del.parentElement.parentElement.children[2].innerText)
}))
function _deleteSerie(id, lastDel, closeModal, php, season) {
    document.getElementById(lastDel).addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.responseText == 1) document.querySelector(closeModal).click()
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'The Serie Was Deleted',
                showConfirmButton: false,
                timer: 1500
              })
        }
        xhr.open('GET', php+'?id='+id+'&season='+season)
        xhr.send()
    })
}



// // delete episode 
editEpSection.querySelectorAll('.deleteEp').forEach(del => {
    del.addEventListener('click', () => _deleteEp(del.parentElement.parentElement.firstElementChild.value, 'delete-episode','#deleteEpModal .close', 'deleteEp.php', del.parentElement.parentElement.children[2].innerHTML, del.parentElement.parentElement.children[3].innerHTML))
})

function _deleteSerie(id, lastDel, closeModal, php, season, ep) {
    document.getElementById(lastDel).addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.responseText == 1) document.querySelector(closeModal).click()
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'The Serie Was Deleted',
                showConfirmButton: false,
                timer: 1500
              })
        }
        xhr.open('GET', php+'?id='+id+'&season='+season+'&ep='+ep)
        xhr.send()
    })
}

// delete episode function 
function _deleteEp(id, lastDel, closeModal, php, season, ep) {
    document.getElementById(lastDel).addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.responseText == 1) document.querySelector(closeModal).click()
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Episode Was Deleted',
                showConfirmButton: false,
                timer: 1500
              })
        }
        xhr.open('GET', php+'?id='+id+'&season='+season+"&ep="+ep)
        xhr.send()
    })
}


// // delete Movie 
editMovieSection.querySelectorAll('.deleteMovie').forEach(del => {
    del.addEventListener('click', () => _deleteEp(del.parentElement.parentElement.firstElementChild.value, 'delete-movie','#deleteMovieModal .close', 'deleteMovie.php'))
})

function _deleteMovie(id, lastDel, closeModal, php) {
    document.getElementById(lastDel).addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.onload = () => {
            console.log(xhr.responseText)
            if (xhr.responseText == 1) {
                
                document.querySelector(closeModal).click()
                Swal.fire({
                    // position: 'top-end',
                    icon: 'success',
                    title: 'Deleted Successfully',
                    showConfirmButton: false,
                    timer: 1500
                  })
                //   setTimeout(() => {window.location.reload();},200)
            }
        }
        xhr.open('GET', php+'?id='+id)
        xhr.send()
    })
}


// // delete Slider 
// editSliderSection declared in addEp file
editSliderSection.querySelectorAll('.deleteSlider').forEach(del => {
    // console.log(del.parentElement.parentElement.firstElementChild.value)
    del.addEventListener('click', () => _deleteMovie(del.parentElement.parentElement.firstElementChild.value, 'delete-slider','#deleteSliderModal .close', 'deleteSlider.php'))
})


// edit slider
editSliderSection.querySelectorAll('.updateSlider').forEach(btn => {
    btn.addEventListener('click', () => {
        _getSlider('getSlider.php', btn.parentElement.parentElement.firstElementChild.value)
        document.getElementById('edit-slider').addEventListener('click', () => {
            // function that will change the slider
            _updateSlider(btn.parentElement.parentElement.firstElementChild.value, '#editSliderModal .bigTitle', '#editSliderModal .smallTitle', '#editSliderModal .cover', '#editSliderModal .link', '#editSliderModal .close')
            console.log('good')
        })
    })
})
// functio get the data of slider 
function _getSlider(php, id) {
    const xhr = new XMLHttpRequest()
    console.log(id)
    xhr.onload = () => {
            document.querySelector('#editSliderModal .modal-body').innerHTML = xhr.responseText
    }
    xhr.open('GET', php+'?id='+id)
    xhr.send()
}

// function update slider
function _updateSlider(idd, title, smTitle, coverr, linkk, ldel) {
    let  id = idd,
      bigTitle = document.querySelector(title),
     smallTitle = document.querySelector(smTitle),
     cover = document.querySelector(coverr),
      link = document.querySelector(linkk);
    let param = `id=${id}&bigTitle=${bigTitle.value}&smallTitle=${smallTitle.value}&cover=${cover.value}&link=${link.value}`
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.responseText == 1) {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: serieName.value + ' Update Successfully',
                showConfirmButton: false,
                timer: 1500
              })
            document.querySelector(ldel).click()
        }
    }
    xhr.open('POST', 'updateSlider.php')
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(param)
}
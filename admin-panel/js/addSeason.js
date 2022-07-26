const forSerie   = document.querySelector('#season #forSerie')  // Serie Name
const dataListSeason = document.querySelector('#season #datalistSeason') 
const seasonNum = document.querySelector('#season #seasonNum') // season number
const choseSerie = document.getElementById('choseSerie')
const seasonCategory    = document.querySelector('#season #Scategory')  // Category
const seasonDesc = document.querySelector('#season #Sdescription')  // description
const seasonTrailler    = document.querySelector('#season #Strailler')  // trailler
const seasonRate        = document.querySelector('#season #Srate')  // rate
const seasonProdYear    = document.querySelector('#season #Sprod-year')  // production year
const seasonPoster      = document.querySelector('#season #Sposter')  // poster
const seasonQuality     = document.querySelector('#season #Squality')  // quality
const epiNum = document.getElementById('epiNum') // number of episodes
const addSeasonBtn      = document.querySelector('#season #add-season') // add serie button
const resetSeasonBtn    = document.querySelector('#season #reset-season') // reset serie button
let seasonInputs = [forSerie, seasonNum, seasonCategory, seasonDesc, seasonTrailler, seasonRate, seasonPoster, seasonQuality, epiNum]

let i = 0;
forSerie.addEventListener('click', _getAllAnime(dataListSeason))
function _getAllAnime(a) {
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        let result = JSON.parse(xhr.responseText)
        for (let i = 0; i < result.length; i++) {
            // append all series to datalist element when usere click on input
            let option = document.createElement('option')
            option.value = result[i].serie_id
            option.innerText = result[i].name
            a.append(option)
        }
        i = a.lastElementChild.value
    }
    xhr.open('GET', 'getAllSerie.php?i='+i.value)
    xhr.send()
}

// when you click on this button all inputs will fill by information of the serie in the input above
choseSerie.addEventListener('click', _getSerieInfo)
function _getSerieInfo() {
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        let result = JSON.parse(xhr.responseText)
       seasonCategory.value = result.category
        seasonDesc.innerText = result.description
        seasonTrailler.value = result.trailler
        seasonRate.value = result.rate
        seasonProdYear.value = result.prodYear
        seasonPoster.value = result.poster
        // seasonPoster.value = 'result.poster'
        seasonQuality.value = result.quality
        
    }
    xhr.open('GET', 'getSerieInfo.php?i='+forSerie.value)
    xhr.send()
}
// add season
addSeasonBtn.addEventListener('click', _addSeason)
function _addSeason() {
    let param = `serie_id=${forSerie.value}&seasonNum=${seasonNum.value}&rate=${seasonRate.value}&prodYear=${seasonProdYear.value}&trailler=${seasonTrailler.value}&poster=${seasonPoster.value}&quality=${seasonQuality.value}&epiNum=${epiNum.value}`
    const xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.responseText == 1) {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Added Successfully',
                showConfirmButton: false,
                timer: 1500
              })
              seasonInputs.forEach(el => el.value = '')
        }
    }
    xhr.open('POST', 'addSeason.php')
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(param)
}
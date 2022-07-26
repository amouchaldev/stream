const addBtn      = document.querySelector('#serie .add-serie') // add serie button
const resetBtn    = document.querySelector('#serie .reset-serie') // reset serie button
function _addSerie(titlee, categoryy, descriptionn, traillerr, ratee, prodYearr, posterr, qualityy) {
    // add serie
    const serieName   = document.querySelector(titlee)  // Serie Name
    const category    = document.querySelector(categoryy)  // Category
    const description = document.querySelector(descriptionn)  // description
    const trailler    = document.querySelector(traillerr)  // trailler
    const rate        = document.querySelector(ratee)  // rate
    const prodYear    = document.querySelector(prodYearr)  // production year
    const poster      = document.querySelector(posterr)  // poster
    const quality     = document.querySelector(qualityy)  // quality
    let allInputs = [serieName, category, description, trailler, rate, prodYear, poster, quality]
    let param = `name=${serieName.value}&category=${category.value}&description=${description.value}&trailler=${trailler.value}&rate=${rate.value}&prodYear=${prodYear.value}&poster=${poster.value}&quality=${quality.value}`
    const xhr = new XMLHttpRequest()

    xhr.onload = () => {
        // console.log(xhr.responseText)
        if (xhr.responseText == 1) {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: serieName.value + ' Added Successfully',
                showConfirmButton: false,
                timer: 1500
              })
            allInputs.forEach(el => el.value = '')
        }
    }
    xhr.open('POST', 'addSerie.php')
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(param)
}

addBtn.addEventListener('click', () => {
_addSerie('#serie #serieName', '#serie #category', '#serie #description', '#serie #trailler', '#serie #rate', '#serie #prod-year', '#serie #poster', '#serie #quality')
})
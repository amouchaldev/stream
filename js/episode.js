// button
const showWatch = document.querySelector('#wed #watch-btn')  // button show streaming servers
const showEpisode = document.querySelector('#wed #ep-btn') // button show episode
const showDownload = document.querySelector('#wed #download-btn') // button show download servers

// content 
const watch = document.querySelector('#wed-data #watch-data')  // streaming servers
const episode = document.querySelector('#wed-data #episode-data') // episodes
const download = document.querySelector('#wed-data #download-data') // download servers

// show streaming servers
showWatch.addEventListener('click', () => {
    watch.classList.replace('d-none', 'd-block')
    episode.classList.replace('d-block', 'd-none')
    download.classList.replace('d-block', 'd-none')
})
// show episodes
showEpisode.addEventListener('click', () => {
    watch.classList.replace('d-block', 'd-none')
    episode.classList.replace('d-none', 'd-block')
    download.classList.replace('d-block', 'd-none')
})
// show downlaod servers

showDownload.addEventListener('click', () => {
    watch.classList.replace('d-block', 'd-none')
    episode.classList.replace('d-block', 'd-none')
    download.classList.replace('d-none', 'd-block')
})



// change the streaming server
const myscreen = document.getElementById('myscreen')
const myservers = document.querySelectorAll('#wed-data #watch-data li')
myservers.forEach(element => {
    element.addEventListener('click', () => {
        // console.log(element.firstElementChild.getAttribute('data-link'))
        myscreen.src = element.firstElementChild.getAttribute('data-link')
        
    })
});




// 
const turn_off_light = document.querySelectorAll('.turn-off-light')
turn_off_light.forEach(btn => {
    btn.addEventListener('click', () => {
        if (!document.querySelector('.stream-zone').classList.contains('bg-dark-blue')) btn.firstElementChild.style.color = 'yellow';
        else btn.firstElementChild.style.color = '#fff';
        document.querySelector('.stream-zone').classList.toggle('bg-dark-blue')
    })
})

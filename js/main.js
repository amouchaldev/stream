const episode = document.getElementById('episode')
const season = document.getElementById('season')
// episode
document.getElementById('ep-btn').addEventListener('click', () => {
        episode.classList.replace('d-none', 'd-block')
        season.classList.replace('d-block', 'd-none')
})
// season
document.getElementById('season-btn').addEventListener('click', () => {
    season.classList.replace('d-none', 'd-block')
    episode.classList.replace('d-block', 'd-none')
})





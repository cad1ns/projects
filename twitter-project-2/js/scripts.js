let profile = document.getElementById('profile');
let more = document.getElementById('more');
let mobNav = document.getElementById('mobNav');
let headerBars = document.getElementById('headerBars');
profile.addEventListener('click', showMore);
headerBars.addEventListener('click', showNav);

function showNav() {
    mobNav.classList.toggle("hidden");
}

function showMore() {
    more.classList.toggle("hidden");
}
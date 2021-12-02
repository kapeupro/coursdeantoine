let date = new Date();

console.log(date);
console.log(date.getFullYear()); // 2021
console.log(date.getDay()); // 4
console.log(date.getHours()); // 14
console.log(date.getMinutes()); // 14
console.log(date.getSeconds()); // 14
console.log(date.getMonth()); // 12

setTimeout(function() {
    console.log('set timeout 1')
}, 1000);

let interval = setInterval(function() {
    console.log('setinterval 1s')
}, 1000);

const stop = document.querySelector('#stop');
stop.addEventListener('click', function(e) {
    e.preventDefault();
    clearInterval(interval)
});


// chrono
const btnStart = document.querySelector('#btn_start');
const btnStop = document.querySelector('#btn_stop');
const btnReset = document.querySelector('#btn_reset');
const counter = document.querySelector('#chrono');
let count = 0;
let chrono;

btnStart.addEventListener('click', function() {
    console.log('start');
    chrono = setInterval(function() {
        count++;
        counter.innerHTML = count;
    }, 1000)
});
btnStop.addEventListener('click', function() {
    console.log('stop');
    clearInterval(chrono);
})
btnReset.addEventListener('click', function() {
    console.log('reset');
    clearInterval(chrono);
    count = 0;
    counter.innerHTML = count;
})

const musiques = document.querySelectorAll('.music');
const response = document.querySelector('#reponse');
console.log(musiques);
for(let i = 0; i < musiques.length; i++) {
    // console.log(musiques[i]);
    musiques[i].addEventListener('click', function() {
        console.log(musiques[i].dataset.title);
        console.log(musiques[i].dataset.artiste);
        console.log(musiques[i].dataset.dateDeSortie);
        let html = `<h2>${musiques[i].dataset.title}</h2>
                    <p>Artiste: ${musiques[i].dataset.artiste}</p>
                    <p>Date de sortie: ${musiques[i].dataset.dateDeSortie}</p>`;
        response.innerHTML = html;
    });
}














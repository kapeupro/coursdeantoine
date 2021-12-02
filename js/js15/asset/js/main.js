const spans = document.querySelectorAll('#hour span');
const phrase = document.querySelector('#day');
let allMouth = ['Janvier','Février','Mars','Avril','Mai','Juin', 'juillet','Aout','septembre','octobre','novembre','décembre'];
let semaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']

let horloge = setInterval(function() {
    let date = new Date();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();
    if(hour < 10) { hour = '0' + hour }
    if(minute < 10) { minute = '0' + minute }
    if(second < 10) { second = '0' + second }
    spans[0].innerHTML = hour;
    spans[1].innerHTML = minute;
    spans[2].innerHTML = second;
    let html = '';
    html += semaine[date.getDay()] + ' ';
    html += date.getDate() + ' ';
    html += allMouth[date.getMonth()] + ' ';
    html += date.getFullYear();
    phrase.innerHTML = html;
}, 1000);




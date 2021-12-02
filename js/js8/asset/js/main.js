// DOM

// console.log(document);
// console.log(window.document);
// console.log(window);

// SELECTION
// selection par id
const title = document.getElementById('js_title');
console.log(title);
title.style.color = "lime"
title.style.backgroundColor = "blue"
title.style.marginLeft = "70px"

// selection par balise
const list = document.getElementsByTagName('li');
console.log(list);
list[0].style.color = "green";
list[1].style.color = "red";
list[2].style.color = "orange";

// selection par class
const titles = document.getElementsByClassName('title');
console.log(titles);
titles[2].style.opacity = '.5';
// font-size 4rem à tous mes titres
for(let i = 0;i < titles.length; i++) {
    titles[i].style.fontSize = '4rem';
}

// selection
// querySelector => renvoie un element, le premier rencontré
const img = document.querySelector("section img");
console.log(img);
img.style.width = '100px'

const img2 = document.querySelector("img.imgbadas");
console.log(img2);

// querySelectorAll => nodeList
const mesTitres = document.querySelectorAll('section h3.title');
console.log(mesTitres);

for(let i = 0;i < mesTitres.length; i++) {
    mesTitres[i].style.color = 'lime';
}

const premierTitre = document.querySelector('section h3.title');
premierTitre.style.backgroundColor = 'green'
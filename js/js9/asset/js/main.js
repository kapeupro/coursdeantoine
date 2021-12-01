const section = document.querySelector('section');
const p = document.querySelector('p');
const img = document.querySelector('img');
const a = document.querySelector('a');
const input = document.querySelector('input');

console.log({section,p,img,a,input})
img.style.width = '200px'

console.log(p.childNodes);
console.log(p.children);

p.childNodes[0].nodeValue = 'ici le nouveau paragraphe';
p.childNodes[1].innerHTML = 'michel link'
p.childNodes[2].nodeValue = 'kjhjkh'

// modifie le texte
a.innerHTML = "dede";

// chercher le contenu de cette balise
console.log(a.innerHTML);


console.log(img);
console.log(img.src);
// console.log(img.alt); // hello
// img.alt = 'michel bonjour';
// console.log(img.alt);// michel bonjour

setTimeout(function() {
    img.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2cGabeHbSx5T7uEMtEKs-c4L0aKRt2nBHQw&usqp=CAU'
}, 2000)
console.log(p.src); // marche pas

console.log(img.data); // // marche pas
console.log(img.attributes); // ici tous les atrributs de notre balises
// acceder à attributs
console.log(img.getAttribute('data')); // qqchose
// modifier attributs
img.setAttribute('data', 'encoreautrechose');
console.log(img.getAttribute('data')); // encoreautrechose

console.log(img.hasAttribute('data')); // true

// remove un attributs
img.removeAttribute('src');

// 14
const infos = document.querySelector('div.infos');
let id = infos.dataset.id
console.log(id);
let catid = infos.dataset.catId
console.log(catid);
//
setTimeout(function() {
    infos.innerHTML = 'newtext'
}, 3000);

console.log(input);
input.focus();

setTimeout(function() {
    input.blur()
    input.value = "michel"
    console.log(input.value);
}, 1000);

input.type = "email"
input.placeholder = "ici mettre un prenom d"

input.disabled = true; // désactive input +
input.disabled = false;
input.name = 'prenom'
input.required = true

// modification du css , modification de class

//section.style.backgroundColor = 'blue'
console.log(section.style);

console.log(section.className); // success
console.log(section.getAttribute('class')); //
//section.className = ' error';
console.log(section.className);

// ClassList
console.log(section.classList);
section.classList.add("error")
setTimeout(function() {
    section.classList.remove("error")
},3000)


section.classList.toggle("red");
setTimeout(function() {
    section.classList.toggle("red");
},4000);

// si une class existe dans un noeud
console.log(section.classList.contains('red'));

if(section.classList.contains('blue')) {
    section.classList.remove('blue');
} else {
    section.classList.add('blue');
}



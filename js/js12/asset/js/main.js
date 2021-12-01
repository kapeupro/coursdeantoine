const link = document.querySelector('#js_link');
const compteur = document.querySelector('#compteur');

link.addEventListener('click', function(e) {
    e.preventDefault();
    // let val = compteur.innerHTML
    // let newcounter = parseInt(val) + 1;
    // compteur.innerHTML = newcounter
    compteur.innerHTML = parseInt(compteur.innerHTML) + 1;
});














// const counter = document.querySelector('#counter');
//
// console.log(parseInt(counter.innerHTML) + 1)
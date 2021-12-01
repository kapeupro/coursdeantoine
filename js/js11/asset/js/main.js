console.log('Event');

function clickPerso2() {
    const btn2 = document.querySelector('#js_btn2');
    console.log(btn2);
    btn2.innerHTML = 'merci pour votre click !';
    btn2.style.color = 'green';
}

function changeColor(el, color = 'green')
{
    console.log(el);
    el.style.color = color;
}

const infos = document.querySelector('#infos');
infos.addEventListener('click', function(event){
    console.log('click sur infos !');
    //console.log(event);
    //console.log(event.clientX);

    // infos.style.backgroundColor = 'blue';
    this.style.backgroundColor = 'blue';
});
const p = document.querySelectorAll('#infos2 p');

for(let i = 0; i < p.length;i++) {
    // console.log(p[i]);
    p[i].addEventListener('click', function() {
        //p[i].style.color = 'blue'
        this.style.color = 'blue'
    });
}


// exo
    // onmouseenter, onmouseleave
    // html id="boite" => div
        // css => height, width  : 200px background color green
    // JS
        // rentre dans le boite
            //=> changer le texte "Je rentre dans la boite"
            // background color en rouge
        // sortir de la boite
            // => changer le texte "Il sort de la boîte complètement bourré..."

const boite = document.querySelector('#boite');

boite.addEventListener('mouseenter',function(e) {
    //console.log('mouseenter')
    this.innerHTML = "Je rentre dans la boite"
    this.style.backgroundColor = 'red';
});

boite.addEventListener('mouseleave', function(e) {
    // console.log('mouseleave')
    this.innerHTML = "Il sort de la boîte complètement bourré...";
    this.style.backgroundColor = 'green'
});

// move
const move = document.querySelector('#move');
move.addEventListener('click', function(event) {
    this.style.top = '10%';
    this.style.right = '100px';
});

// fonction fléchée
const move2 = document.querySelector('#move2');
move2.addEventListener('click', (event) => {
    move2.style.top = '20%';
    move2.style.right = '300px';
});


const section = document.querySelector('section');
const input = document.querySelector('input');

section.addEventListener('click', function() {
    console.log('click Section');
});
input.addEventListener('click', function(e) {
    e.stopPropagation();
    console.log('click input')
});

// link

const link = document.querySelector('a');

link.addEventListener('click', function(e) {
    e.preventDefault();
    console.log(link.href)
});

const btnsubmitbtn = document.querySelector('#submit_btn');
btnsubmitbtn.addEventListener('click', function(e) {
    e.preventDefault();
    section.style.backgroundColor = "pink"
});




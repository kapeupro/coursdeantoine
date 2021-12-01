// const app2 = document.getElementById('app');
// let html = '<section><p>michel</p></section>';
// app2.innerHTML = html

const app = document.querySelector('#app');
// créer des elements
const section = document.createElement('section');

// img
const img = document.createElement('img');
const imgSrc = document.createAttribute('src');
imgSrc.value = "https://picsum.photos/id/237/200/300"
img.setAttributeNode(imgSrc);

// p
const p = document.createElement('p');
const pClass = document.createAttribute('class');
pClass.value = 'para'
const pText = document.createTextNode('Ici le texte du paragraphe');
p.setAttributeNode(pClass);
p.append(pText);

// a => href="", target="_blank"
    // text dans le lien => Voir plus
    // lien à mettre dan dans le p
const a = document.createElement('a');
const aHref = document.createAttribute('href');
const aTarget = document.createAttribute('target');
const aText = document.createTextNode('Voir plus');
aHref.value = 'https://weblitzer.fr';
aTarget.value = '_blank';
a.setAttributeNode(aHref);
a.setAttributeNode(aTarget);
a.append(aText);

// const html = '<a href="https://weblitzer.fr" target="_blank">Voir plus</a>';
// p.innerHTML = html

app.appendChild(section);
section.appendChild(img)
section.appendChild(p)
//p.appendChild(a)

p.style.color = 'red';


// H1
const h1 = document.querySelector('h1');
console.log(h1);
h1.append('A la fin dans le h1');
h1.prepend('Au debut dans le h1');
h1.before('Avant le h1');
h1.after('Après le h1');
h1.innerHTML = 'remplace tous le contenu dans le h1';

// supprimer un noeud
setTimeout(function() {
    h1.remove()
    a.remove()
}, 1000)







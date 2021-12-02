// OBJECT
// objet est un ensemble de key => value

const a = {}; // annotation literal
const b = Object(); //
const c = new Object();
console.log({a,b,c});
const employe1 = {
    age: 34,
    salaire: 32000,
    job: 'Tech',
    'date de naissance': '12/12/12',
    vacancy: {
        noel: '24/12/21',
        paques: '12/04/22'
    },
    vire: false
}
console.log(employe1);
console.log(employe1.salaire);
console.log(employe1['date de naissance']);
console.log(employe1.vacancy.paques);


const clio = {
    marque: 'renault',
    km: 1234,
    color: {
        int: 'green',
        ext: 'grey'
    },
    isTurbo: false,
    getColorInt: function() {
        return this.color.int;
    }
}
console.log(clio);
console.log(clio.km); // 1234
console.log(clio.color.ext); // 'grey'
console.log(clio.marque.toUpperCase()); // "RENAULT"

let cc = 'color';
console.log(clio[cc].int); // 'green'
console.log(clio.getColorInt()); // 'green'

// modifier un object
const monObject = {}
monObject.prop1 = "georges";
monObject['prop2'] = "Lucien";
monObject.prop2 = "Michel";

console.log(monObject);

// raccoursi synthaxique
const x = 12;
const y = 34;
const z = { a: 34565 };
const newobject = {
    x: x,
    y: y,
    z: z
}
console.log(newobject);
const newobject2 = {
    x,
    y,
    z
}
console.log(newobject2);

const punto = {
    marque: 'fiat',
    km: 1234,
    color: {
        int: 'green',
        ext: 'grey'
    },
    isTurbo: true,
}

// const marque = punto.marque;
// const km = punto.km;
// const color = punto.color.int;
// console.log({marque,km,color})
//let km = 2454;
// décomposition d'objet
// const { marque, km: kilometre, color } = punto;
// console.log( {marque,km,kilometre,color} );

// REST => spread operator
// const {marque: model, ...rest} = punto
// console.log({model,rest});

const {g,h, ...restEncore } = {g:1,h:2,i:3,j:4}
console.log(g); // 1
console.log(h); // 2
console.log(restEncore); // {i:3,j:4}
console.log(restEncore.i); // 3

// tester existence des propriété
const gg = {
    a: 23
}
// falsy => false, null, undefined, 0, NaN, '', "", ``
if(gg.a) {
    console.log('ok'); // ok
}
if(gg.b) {
    console.log('pas ok'); //
}

if(punto.km) {
    document.write(punto.km)
}

// ajouter propriété
gg.c = 12456;
console.log(gg); // {a: 23, c: 12456}
// effacer une propriété
delete gg.a;
console.log(gg); //  {c: 12456}

// fusionner des object
const obj1 = {a:1,b:2};
const obj2 = {c:3};
console.log(obj1); // {a: 1, b: 2}
let result = Object.assign({}, obj1, obj2);
console.log(result); // {a: 1, b: 2, c: 3}

const obj3 = {a:'TYTRYTRYTRY'}
const obj4 = {b:'ferefghjh'}
let result2 = Object.assign({}, obj1,obj2,obj3,obj4);
console.log(result2); // {a: 'TYTRYTRYTRY', b: 'ferefghjh', c: 3}


// fusionner des object avec Spread ...
let result3 = {...obj1,...obj2};
console.log(result3); // {a: 1, b: 2, c: 3}

// copier un object

let original = {a:3};
let copy = original;
console.log({original,copy});
copy.a = 'michel';
console.log({original,copy});


let original2 = {a:4};
let copy2 = {...original2}
console.log({original2,copy2});
copy2.a = 'michel';
console.log({original2,copy2});

// comparer des object
console.log({} === {}); // false
console.log( original === copy );  // true

// Itérer sur un object
const user = {
    name: 'antoine',
    age: 12
};
for(propriete in user) {
    console.log(propriete); // toutes les keys
    console.log(user[propriete]);
}
// Object.values()
const user2 = Object.values(user);
console.log(user2); // ['antoine', 12]
// Object.keys()
const user3 = Object.keys(user);
console.log(user3); // ['name', 'age']
// Object.entries()
const user4 = Object.entries(user);
console.log(user4); // [['name', 'antoine'], ['age', 12] ]

// JSON
const norris = '{"categories":[],"created_at":"2020-01-05 13:42:22.089095","icon_url":"https://assets.chucknorris.host/img/avatar/chuck-norris.png","id":"h1wmJ-T6SzmLyJjtJRV0cQ","updated_at":"2020-01-05 13:42:22.089095","url":"https://api.chucknorris.io/jokes/h1wmJ-T6SzmLyJjtJRV0cQ","value":"Chuck Norris recently guested on Hardcore Pawn, where he sold some pocket lint for 8.5 million dollars. Then he brutally roundhose kicked the owner for not actually having any porn."}'

console.log(norris);
// JSON => Object
console.log(JSON.parse(norris));
console.log(JSON.parse(norris).value)

//  OBJECT => JSON
console.log(JSON.stringify(punto));
// {"marque":"fiat","km":1234,"color":{"int":"green","ext":"grey"},"isTurbo":true}

// copie d'un object

const bobo = { a: 34, b: 'fghg'};
const copyBobo = JSON.parse(JSON.stringify(bobo));
copyBobo.b = 'michel';

console.log({bobo, copyBobo});

// extra
// rare cas marche pas bien => date, function, undefined
// lodash => cloneDeep();


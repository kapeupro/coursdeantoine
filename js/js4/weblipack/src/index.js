import './asset/css/style.scss';

// Les variables var

// declaration de variable
var dede;
console.log(dede); // undefined
// declaration de variable & assignation d'une valeur
var a = "michel"; // string
var b = 123; // number
var c = ['banane','kiwi']; // array
var d = function() {  // function

}
var e = {name: 'michel', age: 12}; // object

var nom = 'dede';
var noM = 'kjlk';
var Nom = 'fghgfhfg';

console.log(a);
// modification d'une valeur
a = "Bernard";
console.log(a);
let date_naissance;
var dateNaissance;

// mot réservé
// var, let , const , for, break, case, char, continue, delete, double, final, new, public, super, class, document

// changer le type de valeur d'une variable
var dede = 1;
dede = 'GHFJHGFH';

// lire les variable
console.log(dede);
document.write(dede);


// let & const
// constante
const prenom = 'Quidel';
// const surname; // on doit assigner une valeur à l'assignation
// prenom = 'jkhkjh'; // modification impossible
console.log(prenom);

if(true) {
    var test = 'Something';
}
console.log(test); // Something

if(true) {
    let test2 = 'Something 2';
    console.log(test2); // Something 2
}
//console.log(test2); // error

const instrument = {
    title: 'Basse',
    content: 'michel est de retour'
};
console.log(instrument);
console.log(instrument['title']);
console.log(instrument.title);
instrument.title = 'Batterie';
console.log(instrument.title);
console.log(instrument.content);

var variable1;
variable1 = 1345;
console.log(variable1);
let name = "Paul"

function testfn()
{

}
const maconstante = '4554653465465';

//  STACK
// var variable1
// let name
// function testfn
// const maconstante

z = 12;
let z;


// primitifs
// object


// Les primitifs sont passés par valeur alors que les objets sont passés par référence.
let g = 'jkkj'; // => stack => g

let objeect = { // stack => objecct x3  ========> heap  x3: {dede:'kjhkjhkj'}
    dede: 'kjhkjhkj'
}
// les primitifs sont comparés par valeur alors que les objets sont comparés par référence.


// {} == {}; // false

// Les types primitifs
// boolean // true, false
console.log(typeof true); //"boolean"

// number, BigInt
console.log(typeof 157); // number
console.log(typeof 33.3); // number
// pb => 2**53

// string
console.log(typeof "hello le monde");
console.log(typeof 'hello le monde');

// null => abscence, ne pas donner de valeur
const nuuuul = null;
console.log(nuuuul); // null
console.log(typeof nuuuul); // object
// undefined
let undddddef;
console.log(undddddef); // undefined
// Symbol // donnée unique et inchangeable


//// Les non-primitifs => object.

// Tableaux *
// object littéraux *
// tableau typé (11) Int16Array,
// Map,
// Set
// WeakMaps
// fonctions *
// date *
// donnée structuré => JSON , XML *
// object de controle d'abstraction (Promise *, Generator, AsynFunction)

////////////////////////
// Les opérateurs.
/////////////////////

// opérateurs d'affectations
 let tata  = 12;
 tata += 12;
console.log(tata); // 24
tata -= 6;
console.log(tata); // 18

// opérateurs arithmétiques
// addition (+), soustraction(-), multiplication(*), division(/), modulo (%)
let toto = 1;
// incrementation et decrementation
toto++;    console.log(toto); // 2
toto--;    console.log(toto); // 1

const bb = 25;
const cc = 12;
console.log(bb + cc);
console.log(bb - cc);
console.log(bb * cc);
console.log(bb / cc);
console.log(bb % cc);


// opérateurs de comparaisons
// ==, === , !=, !===, >, < , >= , <=
console.log(bb <= cc); // false

// opérateurs logiques
    // OR, AND, !
    // ||, &&, !
// opérateur ternaire
    // ?

// opérateurs de concaténation
// +
let lemonde = "Le monde"
console.log('Hello ' + lemonde);

console.log('Volvo' + 12 + 24); // Volvo1224
console.log('Volvo' + (12 + 24)); // Volvo36
console.log(12 + 24 + 'Volvo'); // 36Volvo

console.log(true || false && true || false && false); // true
console.log(true || true || false);
console.log( true || false); // true

let x= 3 + 3 * 8 / 2; //
console.log(x)
// let x= 3 + 24 / 2; //
// let x= 3 + 12; //  15


// Les conversions

// changer le type d'une valeur
console.log(String(1)); // "1"
console.log(Number("1366783")); // 1366783
console.log(typeof Number("1366783")); // number
console.log(Boolean("true")); // true

// Conversion string
String(null); // 'null'
String(undefined); // 'undefined'
console.log(typeof String(undefined)); // 'undefined'
String(true); // 'true'
String(false); // 'false'

// Conversion en booléen
console.log(Boolean({})); // true
console.log(Boolean([])); // true
console.log(Boolean( function(){} )); // true
console.log(Boolean( 'michel' )); // true
console.log(Boolean( 22 )); // true
console.log(Boolean( '' )); // false
console.log(Boolean( 0 )); // false
console.log(Boolean( NaN )); // false     // Not a number
console.log(Boolean( null )); // false
console.log(Boolean( undefined )); // false
console.log(Boolean( false )); // false

// Conversion en nombre
console.log(Number( null ) ); // 0
console.log(Number( undefined )); // NaN
console.log(Number( true )); // 1
console.log(Number( false )); // 0
console.log(Number( "33" )); // 33
console.log(Number( "dfgd  d33" )); // NaN
console.log(Number( "-3.565764" )); // -3.565764
console.log(Number( "" )); // 0

// Conversion implicite  ou automatique
    // number, string, boolean
console.log(2 == '3'); // false
console.log(2 == '2'); // true
console.log(2 > '3');  // false
console.log(true + false); // 1
console.log('a' + 147 + 12); // a14712
console.log(22 + 3 + "a"); // 25a


console.log("1" == 1); // true
console.log("1" == true); // true
console.log(null == undefined); // true
console.log(0 == false); // true
console.log(1 == [1]); // true
console.log(1 == [3]); // false
console.log("" == false); // true
console.log("" == 0); // true
console.log("2" == true); // false
console.log("texte te" == true); // false
console.log(0 == null); // false
console.log(0 == undefined); // false
console.log(null == false); // false
console.log(undefined == false); // false
console.log("jkhkh" == NaN); // false


console.log(undefined === undefined); // true
console.log(null === null); // true
console.log(true === true); // true
console.log(false === false); // true
console.log('texte' === 'texte'); // true
console.log(0 === 0); // true
console.log(0 === false); // false
console.log('1' === 1); // false

console.log( {a:1} === {a:1} ); // false
console.log( [1] === [1] ); // false

console.log( NaN === NaN ); // false

// verifier ordre alphabétique
console.log( 'a' > 'b' ); // false
console.log( 'd' > 'c' ); // true
console.log( 'da' > 'db' ); // false
console.log( 'dh' > 'dg' ); // true

// true || true ; // true
// true || false ; // true
// false || true ; // true
// false || false ; // false

// !
// !true; // false
// !false; // true
// !""; // true
// !"test"; // false
// !42; // false

// Les primitives sont comparées par valeur

const aaa = 1;
let bbb = 1;
console.log(aaa === bbb); // true

// Les objets sont copiés par référence

// const obj = {a: 1};
// const obj2 = obj;
// obj2.a = 2;
// console.log(obj); // {a: 2}

// Les objets sont comparés par référence

const obj = {a: 1};
const obj2 = obj;
console.log(obj === obj2); // true
const obj3 = {a: 1};
console.log(obj === obj3); // false

console.log( {} === {} );  // false


// Les structures de contrôle / Conditions & boucles
//
// let age = prompt('Quel age avez vous ?');
// let poids = prompt('Quel est votre poids en kilo?')
// console.log(age);
// console.log(poids);
// // let majeur = (age >= 18);
// // console.log('Vous etes majeurs: ' + majeur)
// // if(age >= 18) {
// if(age >= 18 && poids >= 90) {
//     console.log('Vous etes un gros majeurs.');
// } else if (poids >= 90) {
//     console.log('Vous êtes gros.');
// } else {
//     console.log('Vous etes ni gros ni majeurs.');
// }

// conditions ternaire  ?
let verite = 12 < 34 ? "Vrai" : "Faux"; // "Vrai"
console.log(verite);

const age = 8;
const status = age > 18 ? 'Majeur' : age >= 12 ? 'Ado' : 'Enfant';
console.log(status);

// switch

const pays = "Italie";

switch (pays) {
    case 'France':
    case 'Allemange':
    case 'Espagne':
    case 'Italie':
        console.log('bienvenue en europe');
        break;
    case 'Usa':
        console.log('USA');
        break
    default:
        console.log('tu es pas un occidental')
}


// Boucles


// while
let j = 0;
while(j < 100) {
    console.log(j);
    j++;
}
// do while
let k = 0;
do {
    console.log(k);
    k++;
} while(k < 100)


// for
// for(initialisation ; condition ; incrementation)
// {
//     instructions
// }

for (let i = 0; i < 20; i++) {
    document.write(i);
}

let date = new Date();
let annee = date.getFullYear();
console.log(annee);
// affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "p", ayant une classe de "birth_date"
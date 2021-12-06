<?php
///////////
// Challenge
///////////

// Nous souhaitons implémenter un système permettant de gérer une liste (de courses, de choses à faire...). Ce système sera développé en utilisant jQuery, et les notions de javascript abordées au cours précédent.


// Version 1
//
// Dans cette première version, nous voulons :
//
// ●	Un champ input, de type texte
// ●	Un bouton “Ajouter”
// ●	Une liste html (<ul></ul>), vide au début
// ●	Lorsque je saisi un texte dans le champ, et que je clique sur “Ajouter”, un nouvel item est ajouté à la liste (un <li>). Il contient le texte que j’ai tapé dans le champ.


// Version 2
//
// ●	Lorsque je clique sur le bouton “Ajouter”, j’aimerai que mon champ texte soit vidé
// ●	J’aimerai que les nouveaux éléments ajoutés apparaissent en haut de la liste
// ●	J’aimerai pourvoir marquer les éléments terminés : Ajoutez une case à cocher sur chaque élément de la liste


// Version 3
//
// ●	Je souhaite pouvoir supprimer des éléments de la liste : ajoutez un bouton supprimer sur chaque élément
// ●	C’est bien mignon d’avoir une case à cocher, mais j’aimerai pouvoir supprimer tous les éléments cochés > Ajoutez un bouton “Effacer les terminés”


// Version 4
//
// ●	Je n’aime pas que les éléments disparaissent d’un coup comme ça quand on les supprime : c’est trop dur psychologiquement. Ajoutez un effet “fadeOut” pour qu’ils disparaissent joliment.
// ●	Si je saisis un élément déjà présent dans la liste, je veux qu’un message d’erreur s’affiche, et que l’élément ne soit pas ajouté
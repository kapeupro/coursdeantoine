<?php


//======================================================================
// BLOG => Exo sur deux jours
//======================================================================

//Un blog permet de :
/*
-       lister des articles;
-       créer et éditer des articles;
-       supprimer des articles;
-       commenter des articles;
-   trier des articles , recherche dans titre de l'article
-   paginer des articles.
-       modérer des commentaires;
-       supprimer des commentaires;
*/


// Il n’y a pas de droit spécifique pour la lecture d’un article ou d’un commentaire.
// Vous devrez créer un back-office (qui sera accessible à tous) mais qui auras un design légèrement different, et un header avec des liens different
// C'est dans le back-office que vous pouvez créer/modifier/supprimer un article.

// Pour pouvoir créer un commentaire, l’utilisateur peut être anonyme mais il doit renseigner un pseudonyme.

// Pour pouvoir modérer/supprimer un commentaire, Cela se fera dans la partie Back-office.
// Dans la vraie vie, ce back-office serait sécurisé.

// Remarque: Chaque étape devra mettre montré et validé avant d'attaquer l'étape suivante.

//======================================================================
// Etape 1: Création de la base de données avec les tables suivantes :
//======================================================================

// articles (id, title(255), content(text), auteur, created_at, modified_at, status)
//      comments (id, id_article, content(text), auteur, created_at(datetime), modified_at, status(varchar 20))

//======================================================================
// Etape 1 bis: Création d'un back-office, création front-office
//======================================================================
// faire quelque chose de jolie ++

//======================================================================
// Etape 2: Développement du formulaire de création d’un article. (Back-office)
//======================================================================

// Création du fichier newpost.php , lien accesible dans back-office
// faire un lien de la page dashboard vers le fichier.
// Cette étape comprend le développement du formulaire en HTML et l’enregistrement des informations en base de données.
// Créez si possible des fonctions pour la validation de formulaire.
//======================================================================
// Etape 3: Développement du formulaire d’édition d’un article existant. (Back-office)
//======================================================================

// création du fichier editpost.php , lien accessible dans back-office à partir du listing des articles
// Cette étape comprend le développement du formulaire en HTML et l’update des informations en base de données.

//======================================================================
// Etape 4: Lister les articles créés sur la page d'accueil (Front)
//======================================================================

// le status des articles doit être égale à 'publish'
// seulement leurs titres, le nom de l’auteur et la date de publication.

//======================================================================
// Etape 5: Permettre de consulter le détail d’un article.
//======================================================================

// creation fichier single.php
// On y voit le titre de l’article, son contenu, l’auteur, la date de publication et la date de modification si elle existe.

//======================================================================
// Etape 6: Permettre de supprimer un article.
//======================================================================

// La suppression d’un article est fictive. Il s’agit en fait de mettre le status d’un article à 'draft'.
// Limiter la liste des articles aux articles qui ont un statut à 'publish' sur index.php mais aussi sur le back-office

//======================================================================
// Etape 7: Dans le détail d’un article, Ajouter un formulaire pour commenter un article.
//======================================================================

//======================================================================
// Etape 8: Dans le détail d’un article, ajouter la liste des commentaires publiés.
//======================================================================

//======================================================================
// Etape 9: Création d'une pagination sur liste des articles ( front ou back ou les deux)
//======================================================================

// Savoir comment créer des liens vers la page suivante et précédente
// helper paramètre d'URI ?page=2, et "limit" et "offset" MySQL,

//======================================================================
// Etape 10: SYSTEME DE FILTRE/recherche
//======================================================================

// SQL dynamique requête sécurisé++ , LIKE
// utiliser les parametres d'URI, de type search.php?search=motclef
// creation fichier search.php  à la racine du site et envoyer la recherche vers ce fichier
// creation formulaire method get vers fichier search.php
// affichage des articles qui correspondent à la recherche

//======================================================================
// Etape 11: Mise en place d'une modération des commentaires avant publication
//======================================================================

//======================================================================
// Etape 12: Pagination numerotée sur les listings dans le back-office
//======================================================================

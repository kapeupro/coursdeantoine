<?php


// bdd
    // tables
        // user
            // id       (AUTOINCREMENT) INT 11
            // pseudo      VARCHAR 70
            // email       VARCHAR 200
            // password    VARCHAR 255
            // created_at  DATETIME
            // role        VARCHAR  20
            // token       VARCHAR 255



                // validemail
                // modified_at
                // token_at

// index.php

// register.php
    // => formulaire

        // pseudo (unique, renseigné, min 3, max 60)
        // email  (unique, renseigné, email valide)
        // password (x2)  ( identique , min 6 caractères )

// login.php
    // formulaire
        // pseudo or email
        // password

session_start();


require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

debug($_SESSION);

include('inc/header.php');


include('inc/footer.php');
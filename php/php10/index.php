<?php

// SELECT * FROM city WHERE CountryCode = 'FRA';
// SELECT * FROM city WHERE CountryCode = 'FRA' AND Population > 1000000;
// SELECT * FROM city WHERE CountryCode = 'FRA' OR Population > 1000000;
// SELECT * FROM city WHERE CountryCode = 'FRA' ORDER BY Name ASC;
// SELECT * FROM city WHERE CountryCode = 'FRA' ORDER BY Population ASC;
// SELECT * FROM city ORDER BY District ASC,Population ASC;
// SELECT * FROM city WHERE CountryCode = 'FRA' ORDER BY Population ASC LIMIT 10;
// SELECT * FROM city WHERE CountryCode LIKE '%A';
// SELECT * FROM city WHERE CountryCode LIKE '%A%';
// SELECT * FROM city WHERE CountryCode LIKE 'A%';
// SELECT * FROM city WHERE Population BETWEEN 50000 AND 60000;
// SELECT DISTINCT CountryCode FROM city ORDER BY CountryCode ASC;
// SELECT COUNT(ID) FROM city WHERE CountryCode = 'NLD'
// SELECT AVG(Population) FROM city WHERE CountryCode = 'FRA';
// SELECT SUM(Population) FROM city;
// SELECT MIN(Population) FROM city;
// SELECT MAX(Population) FROM city;
// SELECT CountryCode, AVG(Population) FROM city GROUP BY CountryCode;
// SELECT CountryCode AS code, AVG(Population) FROM city AS c GROUP BY CountryCode;

// INSERT INTO city ( Name, CountryCode, District, Population) VALUES ('Pont-audemer','FRA','Normandie',11000)

// UPDATE country
// SET HeadOfState = 'michel micron', GovernmentForm = 'dictature'
// WHERE Code = 'FRA'

// DELETE FROM country WHERE code = 'BEL'





//======================================================================
//// HELPER
////======================================================================
//
///*--insert
//        INSERT INTO table_name
//        VALUES ('val1', 'val2', 'val3');
//
//        INSERT INTO table_name (col1, col2, col3)
//        VALUES ('val1', 'val2', 'val3');
//
//        INSERT INTO table_name (col1, col2, col3)
//        VALUES ('val1', 'val2', 'val3'), ('val4', 'val5', 'val6');
//
//--update
//        UPDATE table_name
//        SET col1 = 'val_bla'
//        WHERE col3 = 'une_val';
//
//--delete
//        DELETE FROM table_name
//        WHERE col2 > 89
//        AND col3 = 'une_val';
//
//--select
//        SELECT * FROM table_name;
//
//        SELECT col1, col2, col5 FROM table_name
//        WHERE col3 = "test";
//
//        SELECT col1, col5, col3 FROM table_name
//        WHERE col2 > 39
//        AND col3 = "yo"
//        ORDER BY col1 DESC
//        LIMIT 30;
//
//        SELECT * FROM table_name
//        WHERE col6 LIKE "%y%"
//        ORDER BY col6 ASC;
//*/


try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', "root", "", array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}
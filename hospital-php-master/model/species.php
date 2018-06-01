<?php

function getAllSpecies(){
// LOGIC FISRT!!

// CONNECTIE OPBOUWEN
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
// QUERY OPBOUWEN
    $query = $conn->prepare ("SELECT * FROM `species`");

// EXECUTE QUERY
    $query->execute();

// ARRAY FETCHEN
    return $query->fetchAll();


}

function getSpecie($specie_id){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("SELECT * FROM `species` WHERE `species_id` =
		:species_id");

    $query->bindParam(":species_id", $specie_id);


    $query->execute();

    // ARRAY FETCHEN
     return $query->fetch();

}

function updateSpecie($specieData){

    $specie_description = $specieData['species_description'];
    $specie_id = $specieData['species_id'];

    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare('UPDATE species SET species_description = :species_description WHERE species_id = :species_id');

    $query->bindParam(':species_id', $specie_id);

    $query->bindParam(':species_description', $specie_description);

    $query->execute();
}

function deleteSpecie($specie_id){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("DELETE FROM `species` WHERE `species_id` =
		:species_id");

    $query->bindParam(":species_id", $specie_id);


    $query->execute();


}

function createSpecie($specieData){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
    // QUERY OPBOUWEN

    $description = $specieData['species_description'];
    $query = $conn->prepare("INSERT INTO `species` (`species_description`) VALUES (:species_description)");


    // parameters binden
    $query->bindParam(":species_description", $description);

    // execute query (uitvoeren)
    $query->execute();

}
?>
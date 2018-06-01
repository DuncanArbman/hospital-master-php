<?php

function getAllClients(){
// LOGIC FISRT!!

// CONNECTIE OPBOUWEN
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
// QUERY OPBOUWEN
    $query = $conn->prepare ("SELECT * FROM `clients`");

// EXECUTE QUERY
    $query->execute();

// ARRAY FETCHEN
    return $query->fetchAll();


}

function getClient($client_id){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("SELECT * FROM `clients` WHERE `client_id` =
		:client_id");

    $query->bindParam(":client_id", $client_id);


    $query->execute();

    // ARRAY FETCHEN
     return $query->fetch();

}

function updateClient($clientData){

    $client_firstname = $clientData['client_firstname'];
    $client_lastname = $clientData['client_lastname'];
    $client_id = $clientData['client_id'];

    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare('UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname WHERE client_id = :client_id');

    $query->bindParam(':client_id', $client_id);

    $query->bindParam(':client_firstname', $client_firstname);
    $query->bindParam(':client_lastname', $client_lastname);

    $query->execute();
}

function deleteClient($client_id){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("DELETE FROM `clients` WHERE `client_id` =
		:client_id");

    $query->bindParam(":client_id", $client_id);


    $query->execute();


}

function createClient($clientData){
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
    // QUERY OPBOUWEN

    $client_firstname = $clientData['client_firstname'];
    $client_lastname = $clientData['client_lastname'];
    $query = $conn->prepare("INSERT INTO `clients` (`client_firstname`, `client_lastname`) VALUES (:client_firstname, :client_lastname)");


    // parameters binden
    $query->bindParam(":client_firstname", $client_firstname);
    $query->bindParam(":client_lastname", $client_lastname);

    // execute query (uitvoeren)
    $query->execute();

}
?>
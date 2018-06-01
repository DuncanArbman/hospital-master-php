<?php

function getAllPatients()
{
// LOGIC FISRT!!

// CONNECTIE OPBOUWEN
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
// QUERY OPBOUWEN
    $query = $conn->prepare("SELECT * FROM `patients`");

// EXECUTE QUERY
    $query->execute();

// ARRAY FETCHEN
    return $query->fetchAll();


}

function getPatient($patient_id)
{
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("SELECT * FROM `patients` WHERE `patient_id` =
		:patient_id");

    $query->bindParam(":patient_id", $patient_id);


    $query->execute();

    // ARRAY FETCHEN
    return $query->fetch();

}

function updatePatient($patientData)
{

    $patient_name = $patientData['patient_name'];
    $patient_status = $patientData['patient_status'];
    $patient_sex = $patientData['patient_sex'];
    $patient_id = $patientData['patient_id'];
    $client_id = $patientData['client_id'];
    $species_id = $patientData['species_id'];

    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare('UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status, patient_sex = :patient_sex, client_id = :client_id, species_id = :species_id WHERE patient_id = :patient_id');

    $query->bindParam(':patient_id', $patient_id);

    $query->bindParam(':patient_name', $patient_name);
    $query->bindParam(':patient_status', $patient_status);
    $query->bindParam(':patient_sex', $patient_sex);
    $query->bindParam(':client_id', $client_id);
    $query->bindParam(':species_id', $species_id);

    $query->execute();
}

function deletePatient($patient_id)
{
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    $query = $conn->prepare("DELETE FROM `patients` WHERE `patient_id` =
		:patient_id");

    $query->bindParam(":patient_id", $patient_id);


    $query->execute();


}

function createPatient($patientData)
{
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
    // QUERY OPBOUWEN


    $patient_name = $patientData['patient_name'];
    $patient_status = $patientData['patient_status'];
    $patient_sex = $patientData['patient_sex'];
    $client_id = $patientData['client_id'];
    $species_id = $patientData['species_id'];
    $query = $conn->prepare("INSERT INTO `patients` (`patient_name`, `patient_status`, `patient_sex`, `client_id`, `species_id`) VALUES (:patient_name, :patient_status, :patient_sex, :client_id, :species_id)");

    // parameters binden
    $query->bindParam(":patient_name", $patient_name);
    $query->bindParam(":patient_status", $patient_status);
    $query->bindParam(":patient_sex", $patient_sex);
    $query->bindParam(":client_id", $client_id);
    $query->bindParam(":species_id", $species_id);

    // execute query (uitvoeren)
    $query->execute();

}

function getAllPatientInnerJoinSpecies()
{
    $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

    //QUERY OPBOUWEN
    $query = $conn->prepare("SELECT * FROM `patients` INNER JOIN `species` ON patients.species_id = species.species_id");

    // EXECUTE QUERY
    $query->execute();

    // ARRAY FETCHEN
    return $query->fetchAll();

}

?>
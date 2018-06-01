<?php

require(ROOT . "model/patients.php");
require(ROOT . "model/clients.php");
require(ROOT . "model/species.php");

function index(){


    render('patients/index', [
        'patients' => getAllPatientInnerJoinSpecies()
    ]);

}


function edit($patients_id)
{


    render('patients/edit', [
        'patients' => getPatient($patients_id),
        'clients' => getAllClients(),
        'species' => getAllSpecies()
    ]);
}

function post_edit(){

    updatePatient($_POST);

    redirect(URL.'patients');


}

function delete($patients_id)
{
    deletePatient($patients_id);

    redirect(URL.'patients');

}

function create(){

    render('patients/create',
        [
            'clients' => getAllClients(),
            'species' => getAllSpecies()
        ]);
}

function post_create(){
    createPatient($_POST);
    redirect(URL.'patients');

}
?>

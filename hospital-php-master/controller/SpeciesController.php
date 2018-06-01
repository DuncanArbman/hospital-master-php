<?php

require(ROOT . "model/species.php");

function index(){

    render('species/index', ['species' => getAllSpecies()]);

}


function edit($species_id)
{


    render('species/edit', ['species' => getSpecie($species_id)]);
}

function post_edit(){

    updateSpecie($_POST);

    redirect(URL.'species');


}

function delete($species_id)
{
    deleteSpecie($species_id);

    redirect(URL.'species');

}

function create(){

    render('species/create');
}

function post_create(){

    echo 'test1';
    createSpecie($_POST);

    redirect(URL.'species');

}
?>

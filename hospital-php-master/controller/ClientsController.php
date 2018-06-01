<?php

require(ROOT . "model/clients.php");

function index(){

    render('clients/index', ['clients' => getAllClients()]);

}


function edit($clients_id)
{


    render('clients/edit', ['clients' => getClient($clients_id)]);
}

function post_edit(){

    updateClient($_POST);

    redirect(URL.'clients');


}

function delete($clients_id)
{
    deleteClient($clients_id);

    redirect(URL.'clients');

}

function create(){

    render('clients/create');
}

function post_create(){
    createClient($_POST);

    redirect(URL.'clients');

}
?>

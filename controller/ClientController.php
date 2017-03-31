<?php

// include client model
require(ROOT . "model/ClientModel.php");

function index()
{
	// call function and render view
	$clients = getAllClients();
	render("client/index", array(
		'clients' => $clients
	));
}

function create()
{
	//render create form
	render("client/create");
}

function createSave()
{
	// if fields are filled, call function
	if (isset($_POST['fullname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['zipcode'])) {
		createClient($_POST['fullname'], $_POST['street'], $_POST['city'], $_POST['zipcode']);
	}

	header("Location:" . URL . "client/index");
}

function edit($id)
{
	// get data from database and render view
	$clients = editClient($id);
	render("client/edit", array(
		'clients' => $clients
	));
}

function editSave()
{
	// if fields are filled, call function
	if (isset($_POST['fullname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['zipcode'])) {
		editClientSave($_POST['id'], $_POST['fullname'], $_POST['street'], $_POST['city'], $_POST['zipcode']);
	}

	header("Location:" . URL . "client/index");
}

function delete($id)
{
	// check for id, then delete that id
	if (isset($id)) {
		deleteClient($id);
	}

	header("Location:" . URL . "client/index");
}
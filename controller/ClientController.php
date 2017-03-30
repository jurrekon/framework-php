<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	$clients = getAllClients();
	render("client/index", array(
		'clients' => $clients
	));
}

function create()
{
	//formulier tonen
	render("client/create");
}

function createSave()
{
	if (isset($_POST['fullname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['zipcode'])) {
		createClient($_POST['fullname'], $_POST['street'], $_POST['city'], $_POST['zipcode']);
	}

	header("Location:" . URL . "client/index");
}

function edit($id)
{
	$clients = editClient($id);
	render("client/edit", array(
		'clients' => $clients
	));
}

function editSave()
{
	if (isset($_POST['fullname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['zipcode'])) {
		editClientSave($_POST['id'], $_POST['fullname'], $_POST['street'], $_POST['city'], $_POST['zipcode']);
	}

	header("Location:" . URL . "client/index");
}

function delete($id)
{
	if (isset($id)) {
		deleteClient($id);
	}

	header("Location:" . URL . "client/index");
}
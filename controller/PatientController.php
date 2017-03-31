<?php

// include all models
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/ClientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index()
{
	// call function and render view
	$patients = getAllPatients();
	render("patient/index", array(
		'patients' => $patients
	));
}

function create()
{
	//call functions and render view
	$clients = getAllClients();
	$species = getAllSpecies();

	render("patient/create", array(
		'clients' => $clients,
		'species' => $species,
	));
}

function createSave()
{
	// if fields are filled, call function
	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['client'])) {
		createPatient($_POST['name'], $_POST['species'], $_POST['gender'], $_POST['status'], $_POST['client']);
	}

	header("Location:" . URL . "patient/index");
}

function edit($id)
{
	// get data from database and render view
	$clients = getAllClients();
	$species = getAllSpecies();
	$patients = editPatient($id);

	render("patient/edit", array(
		'patients' => $patients,
		'clients' => $clients,
		'species' => $species
	));
}

function editSave()
{
	// if fields are filled, call function
	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['client'])) {
		editPatientSave($_POST['id'], $_POST['name'], $_POST['species'], $_POST['gender'], $_POST['status'], $_POST['client']);
	}

	header("Location:" . URL . "patient/index");
}

function delete($id)
{
	// check for id, then delete that id
	if (isset($id)) {
		deletePatient($id);
	}

	header("Location:" . URL . "patient/index");
}
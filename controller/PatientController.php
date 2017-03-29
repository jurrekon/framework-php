<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	$patients = getAllPatients();
	render("patient/index", array(
		'patients' => $patients
	));
}

function create()
{
	//formulier tonen
	render("patient/create");
}

function createSave()
{
	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['client'])) {
		createPatient($_POST['name'], $_POST['species'], $_POST['gender'], $_POST['status'], $_POST['client']);
	}

	header("Location:" . URL . "patient/index");
}

function edit($id)
{
	//$student = getStudent();

	// getStudent(1);

	$patients = editPatient($id);
	render("patient/edit", array(
		'patients' => $patients
	));
}

function editSave()
{
	if (isset($_POST['id'] && $_POST['name']) && isset($_POST['species']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['client'])) {
		editPatientSave($_POST['id'], $_POST['name'], $_POST['species'], $_POST['gender'], $_POST['status'], $_POST['client']);
	}

	header("Location:" . URL . "patient/index");
}

function delete($id)
{
	if (isset($id)) {
		deletePatient($id);
	}

	header("Location:" . URL . "patient/index");
}
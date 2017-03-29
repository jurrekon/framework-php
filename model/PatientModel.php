<?php

function getStudent($id) 
{

}

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	$patients = $query->fetchAll();

	return $patients;
}

function editPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));

	$db = null;

	$patients = $query->fetchAll();

	return $patients;
}

function editPatientSave($id, $name, $species, $gender, $status, $client)
{
	$db = openDatabaseConnection();

	$sql = "UPDATE patient SET name=:name, species=:species, gender=:gender, status=:status, client_id=:client WHERE id=:id";
		$query = $db->perpare($sql);
		$query->execute(array(
		':id' => $id,
		':name' => $name,
		':species' => $species,
		':gender' => $gender,
		':status' => $status,
		':client' => $client
	));

	$db = NULL;
}

function deletePatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createPatient($name, $species, $gender, $status, $client) 
{
	$db = openDatabaseConnection();
	
	// Prepare query and execute
	$sql = "insert into patient (name, species, gender, status, client_id) values (:name, :species, :gender, :status, :client)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':gender' => $gender,
		':status' => $status,
		':client' => $client
		));

	$db = null;
}
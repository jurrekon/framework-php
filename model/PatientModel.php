<?php

function getAllPatients() 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();
	// close connection
	$db = null;
	// store data in variable
	$patients = $query->fetchAll();

	return $patients;
}

function editPatient($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));
	// close connection
	$db = null;
	// store data in variable
	$patients = $query->fetchAll();

	return $patients;
}

function editPatientSave($id, $name, $species, $gender, $status, $client)
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "UPDATE patient SET name=:name, species=:species, gender=:gender, status=:status, client_id=:client WHERE id=:id";
		$query = $db->prepare($sql);
		$query->execute(array(
		':id' => $id,
		':name' => $name,
		':species' => $species,
		':gender' => $gender,
		':status' => $status,
		':client' => $client
	));
	// close connection
	$db = NULL;
}

function deletePatient($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "DELETE FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));
	// close connection
	$db = null;
}

function createPatient($name, $species, $gender, $status, $client) 
{
	// create database connection
	$db = openDatabaseConnection();
	
	// prepare query and execute
	$sql = "insert into patient (name, species, gender, status, client_id) values (:name, :species, :gender, :status, :client)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':gender' => $gender,
		':status' => $status,
		':client' => $client
		));
	// close connection
	$db = null;
}
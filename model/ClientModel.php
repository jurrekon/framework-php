<?php

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM client";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	$clients = $query->fetchAll();

	return $clients;
}

function editClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));

	$db = null;

	$clients = $query->fetchAll();

	return $clients;
}

function editClientSave($id, $fullname, $street, $city, $zipcode)
{
	$db = openDatabaseConnection();

	$sql = "UPDATE client SET fullname=:fullname, street=:street, city=:city, zipcode=:zipcode WHERE id=:id";
		$query = $db->prepare($sql);
		$query->execute(array(
		':id' => $id,
		':fullname' => $fullname,
		':street' => $street,
		':city' => $city,
		':zipcode' => $zipcode
	));

	$db = NULL;
}

function deleteClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createClient($fullname, $street, $city, $zipcode) 
{
	$db = openDatabaseConnection();
	
	// Prepare query and execute
	$sql = "INSERT INTO client (fullname, street, city, zipcode) VALUES (:fullname, :street, :city, :zipcode)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':fullname' => $fullname,
		':street' => $street,
		':city' => $city,
		':zipcode' => $zipcode
		));

	$db = null;
}
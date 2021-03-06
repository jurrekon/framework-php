<?php

function getAllClients() 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM client";
	$query = $db->prepare($sql);
	$query->execute();
	// close connection
	$db = null;
	// store data in variable
	$clients = $query->fetchAll();

	return $clients;
}

function editClient($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));
	// close connection
	$db = null;
	// store data in variable
	$clients = $query->fetchAll();

	return $clients;
}

function editClientSave($id, $fullname, $lastname, $street, $city, $zipcode)
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "UPDATE client SET fullname=:fullname, lastname=:lastname, street=:street, city=:city, zipcode=:zipcode WHERE id=:id";
		$query = $db->prepare($sql);
		$query->execute(array(
		':id' => $id,
		':fullname' => $fullname,
		':lastname' => $lastname,
		':street' => $street,
		':city' => $city,
		':zipcode' => $zipcode
	));
	// close connection
	$db = NULL;
}

function deleteClient($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "DELETE FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));
	// close connection
	$db = null;
}

function createClient($fullname, $lastname, $street, $city, $zipcode) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "INSERT INTO client (fullname, lastname, street, city, zipcode) VALUES (:fullname, :lastname, :street, :city, :zipcode)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':fullname' => $fullname,
		':lastname' => $lastname,
		':street' => $street,
		':city' => $city,
		':zipcode' => $zipcode
		));
	// close connection
	$db = null;
}
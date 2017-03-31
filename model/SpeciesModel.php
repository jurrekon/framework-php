<?php

function getAllSpecies() 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	// close connection
	$db = null;
	// store data in variable
	$species = $query->fetchAll();

	return $species;
}

function editSpecies($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "SELECT * FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));
	// close connection
	$db = null;
	// store data in variable
	$species = $query->fetchAll();

	return $species;
}

function editSpeciesSave($id, $species)
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "UPDATE species SET species=:species WHERE id=:id";
		$query = $db->prepare($sql);
		$query->execute(array(
		':id' => $id,
		':species' => $species
	));
	// close connection
	$db = NULL;
}

function deleteSpecies($id) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "DELETE FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));
	// close connection
	$db = null;
}

function createSpecies($species) 
{
	// create database connection
	$db = openDatabaseConnection();
	// prepare query and execute
	$sql = "INSERT INTO species (species) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species' => $species
		));
	// close connection
	$db = null;
}
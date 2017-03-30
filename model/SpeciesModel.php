<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	$species = $query->fetchAll();

	return $species;
}

function editSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id 
	));

	$db = null;

	$species = $query->fetchAll();

	return $species;
}

function editSpeciesSave($id, $species)
{
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species=:species WHERE id=:id";
		$query = $db->prepare($sql);
		$query->execute(array(
		':id' => $id,
		':species' => $species
	));

	$db = NULL;
}

function deleteSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createSpecies($species) 
{
	$db = openDatabaseConnection();
	
	// Prepare query and execute
	$sql = "INSERT INTO species (species) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species' => $species
		));

	$db = null;
}
<?php

// include species model
require(ROOT . "model/SpeciesModel.php");

function index()
{
	// get data from database and render view
	$species = getAllSpecies();
	render("species/index", array(
		'species' => $species
	));
}

function create()
{
	//render create form
	render("species/create");
}

function createSave()
{
	// if fields are filled, call function
	if (isset($_POST['species'])) {
		createSpecies($_POST['species']);
	}

	header("Location:" . URL . "species/index");
}

function edit($id)
{
	// get data from database and render view
	$species = editSpecies($id);
	render("species/edit", array(
		'species' => $species
	));
}

function editSave()
{
	// if fields are filled, call function
	if (isset($_POST['species'])) {
		editSpeciesSave($_POST['id'], $_POST['species']);
	}

	header("Location:" . URL . "species/index");
}

function delete($id)
{
	// check for id, then delete that id
	if (isset($id)) {
		deleteSpecies($id);
	}

	header("Location:" . URL . "species/index");
}
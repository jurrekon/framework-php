<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	$species = getAllSpecies();
	render("species/index", array(
		'species' => $species
	));
}

function create()
{
	//formulier tonen
	render("species/create");
}

function createSave()
{
	if (isset($_POST['species'])) {
		createSpecies($_POST['species']);
	}

	header("Location:" . URL . "species/index");
}

function edit($id)
{
	$species = editSpecies($id);
	render("species/edit", array(
		'species' => $species
	));
}

function editSave()
{
	if (isset($_POST['species'])) {
		editSpeciesSave($_POST['id'], $_POST['species']);
	}

	header("Location:" . URL . "species/index");
}

function delete($id)
{
	if (isset($id)) {
		deleteSpecies($id);
	}

	header("Location:" . URL . "species/index");
}
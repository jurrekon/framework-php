<?php

function getStudent($id) 
{

}

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editStudent() 
{

}

function deleteStudent($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM students WHERE student_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createStudent($firstname, $lastname, $gender) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO students(student_firstname, student_lastname, student_gender) VALUES (:firstname, :lastname, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':gender' => $gender
		));

	$db = null;
}
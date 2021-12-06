<?php

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$salary = $_POST['salary'];
$speciality = $_POST['speciality'];
$type = $_POST['gender'];

require('../model/modelEmployees.php');

$reg = newEmployee($salary,$lastname,$firstname,$email);
newEmployeeChild($type, $reg, $speciality);

require('../view/success.php');
<?php

require('../model/modelEmployees.php');

try
{
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $type = $_POST['gender'];

    deleteEmployee($type, $lastname, $firstname);

    require('../view/successFire.php');
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('../view/error.php');
}
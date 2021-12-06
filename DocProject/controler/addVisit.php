<?php

require('../model/modelPatients.php');

try
{
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $type = $_POST['visitType'];
    $duration = $_POST['duration'];
    $duration .= ":00";
    $cost = $_POST['cost'];
    $date = date('y-m-d');
    $description = $_POST['description'];

    $patId = getPatientId($lastname, $firstname);
    if($patId)
    {
        newVisit($patId, $type, $date, $duration,$cost,$description);
    }
    else
    {
        throw new Exception('There is no patient with this name');
    }
    require('../view/success.php');
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('../view/error.php');
}
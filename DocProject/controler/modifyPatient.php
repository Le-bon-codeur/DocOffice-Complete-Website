<?php

try
{
    require('../model/modelPatients.php');

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];

    $verif = exist($lastname, $firstname);
    if(!$verif)
    {
        throw new Exception ('There is no patient with this name');
    }
    $patient = getPatient($lastname, $firstname);

    require('../view/modifyPatientSubmit.php');
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('../view/error.php');
}
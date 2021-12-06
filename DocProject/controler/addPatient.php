<?php

require('../model/modelPatients.php');

try
{
    $docName = $_POST['doctor'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['telephone'];
    $city = $_POST['city'];
    $socialNo = $_POST['socialNo'];
    $birthday = $_POST['birthday'];

    if(strlen($socialNo) != 15)
    {
        throw new Exception('The social number must be composed of 15 characters');
    }

    $reg = getDocRegno($docName);
    if($reg)
    {
        $id = getDocId($reg);
        newPatient($id, $lastname, $firstname, $socialNo, $birthday, $city, $phone, $email);
    }
    else
    {
        throw new Exception('There is no doctor with this name');
    }
    require('../view/success.php');
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('../view/error.php');
}
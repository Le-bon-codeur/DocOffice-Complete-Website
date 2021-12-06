<?php

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=doctor_office;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

// ADD PATIENT

function getDocRegno($docName)
{
    $db = dbConnect();
    $req = $db->query("SELECT Registration_Number as regno FROM Employees WHERE Last_Name = \"".$docName."\"");
    $result = $req -> fetch();
    return $result['regno'];
}

function getDocId($regno)
{
    $db = dbConnect();
    $req = $db->query("SELECT Doctor_Id as id FROM Doctor WHERE Registration_Number = ".$regno."");
    $result = $req -> fetch();
    return $result['id'];
}

function newPatient($docId, $lastname, $firstname, $socialNo, $birthday, $city, $telephone, $email)
{
    $db = dbConnect();
    $req = "INSERT INTO `Patient` (`Doctor_Id`,`Patient_Last_Name`,`Patient_First_Name`,`Patient_SocialNumber`,`Patient_BirthDate`,`Patient_City`,`Patient_Telephone`,`Patient_Email`) VALUES
            ('".$docId."','".$lastname."','".$firstname."',".$socialNo.", '".$birthday."', '".$city."', '".$telephone."', '".$email."')";
    $db->query($req);
}

// ADD VISIT

function getPatientId($lastname, $firstname)
{
    $db = dbConnect();
    $req = $db->query("SELECT Patient_Id as id FROM Patient WHERE Patient_Last_Name = \"".$lastname."\" and Patient_First_Name = \"".$firstname."\"");
    $result = $req -> fetch();
    return $result['id'];
}

function newVisit($patId, $type, $date, $duration, $cost, $description)
{
    $db = dbConnect();
    $req = "INSERT INTO `Visits` (`Patient_Id`,`Visit_Type`,`Visit_Date`,`Visit_Duration`,`Visit_Cost`,`Visit_Description`) VALUES
            ('".$patId."','".$type."','".$date."','".$duration."', ".$cost.", '".$description."')";
    $db->query($req);
}

// MODIFY PATIENT

function exist($lastname, $firstname)
{
    $dobre = false;
    $db = dbConnect();
    $req = $db -> query("SELECT Patient_Last_Name as lastname, Patient_First_Name as firstname FROM Patient");
    while($line = $req -> fetch())
    {
        if($lastname == $line['lastname'] && $firstname == $line['firstname'])
        {
            $dobre = true;
        }
    }
    return $dobre;
}

function getPatient($lastname, $firstname)
{
    $db = dbConnect();
    $req = $db -> query("SELECT Patient_Last_Name as lastname, Patient_First_Name as firstname, Patient_SocialNumber as socialNo, Patient_BirthDate as birthday, Patient_City as city, Patient_Telephone as telephone, Patient_Email as email FROM Patient WHERE Patient_Last_Name = \"".$lastname."\" and Patient_First_Name = \"".$firstname."\"");
    $result = $req -> fetch();
    return $result;
}
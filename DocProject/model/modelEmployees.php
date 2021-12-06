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

// HIRE SOMEONE

function newRegno()
{
    $db = dbConnect();
    $req = $db->query('SELECT max(Registration_Number) as regno FROM Employees');
    $result = $req -> fetch();
    $result['regno'] += 1;
    return $result;
}

function newEmployee($salary, $lastname, $firstname, $email)
{
    $db = dbConnect();
    $regno = newRegno();
    $req = "INSERT INTO `Employees`(`Registration_Number`,`Hire_Date`,`Salary`,`Last_Name`, `First_Name`,`Email_Address`) VALUES
            ('".$regno['regno']."','".date("y-m-d")."','".$salary."','".$lastname."','".$firstname."','".$email."')";
    $db->query($req);
    return $regno;
}

function newEmployeeChild($type, $regno, $spec)
{
    $db = dbConnect();
    switch ($type) {
        case 1:
            $req = "select max(Doctor_Id) as id from Doctor";
            break;
        case 2:
            $req = "select max(Nurse_Id) as id from Nurse";
            break;
        case 3:
            $req = "select max(Staff_Id) as id from Staff_Member";
            break;
    }
    $result = $db -> query($req);
    $newid = $result -> fetch();
    $newid['id'] += 1;

    switch ($type) {
        case 1:
            $req2 = "INSERT INTO `Doctor` (`Doctor_Id`,`Registration_Number`,`Doctor_Speciality`) VALUES ('".$newid['id']."','".$regno['regno']."','".$spec."')";
            break;
        case 2:
            $req2 = "INSERT INTO `Nurse` (`Nurse_Id`,`Registration_Number`,`Contract`) VALUES ('".$newid['id']."','".$regno['regno']."','".$spec."')";
            break;
        case 3:
            $req2 = "INSERT INTO `Staff_Member` (`Staff_Id`,`Registration_Number`,`Staff_Post`) VALUES ('".$newid['id']."','".$regno['regno']."','".$spec."')";
            break;
    }
    $db -> query($req2);
}

// FIRE SOMEONE

function deleteEmployee($type, $lastname, $firstname)
{
    $db = dbConnect();
    $res = $db -> query("Select Registration_Number as regno from Employees where Last_Name = \"".$lastname."\" and First_Name = \"".$firstname."\"");
    $reg = $res -> fetch();
    if(!$reg['regno'])
    {
        throw new Exception('There is no employee with this name');
    }
    
    switch ($type) {
        case 1:
            $req = "delete from `Doctor` where `Registration_Number` = \"".$reg['regno']."\"";
            break;
        case 2:
            $req = "delete from `Nurse` where `Registration_Number` = \"".$reg['regno']."\"";
            break;
        case 3:
            $req = "delete from `Staff_Member` where `Registration_Number` = \"".$reg['regno']."\"";
            break;
    }
    $tmp = $db -> query($req);
    if(!$tmp)
    {
        throw new Exception('Wrong employee type');
    }
    else
    {
        $db -> query("delete from `Employees` where `Registration_Number` = \"".$reg['regno']."\"");
    }
}

// GET EMPLOYEES LIST

function getDoctors()
{
    $db = dbConnect();
    $req = "select Last_name as lastname, First_Name as firstname, Email_Address as email, Doctor_Speciality as speciality from Doctor d, Employees e where d.Registration_Number = e.Registration_Number";
    $res = $db -> query($req);
    //$docArray = $res -> fetch();
    return $res;
}

function getNurses()
{
    $db = dbConnect();
    $req = "select Last_name as lastname, First_Name as firstname, Email_Address as email, Contract as speciality from Nurse n, Employees e where n.Registration_Number = e.Registration_Number";
    $res = $db -> query($req);
    //$docArray = $res -> fetch();
    return $res;
}

function getStaffMembers()
{
    $db = dbConnect();
    $req = "select Last_name as lastname, First_Name as firstname, Email_Address as email, Staff_Post as speciality from Staff_Member s, Employees e where s.Registration_Number = e.Registration_Number";
    $res = $db -> query($req);
    //$docArray = $res -> fetch();
    return $res;
}
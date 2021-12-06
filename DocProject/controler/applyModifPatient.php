<?php

require('../model/modelPatients.php');

$lastname = $_POST['OriginalLname'];
$firstname = $_POST['OriginalFname'];

if (empty($_POST['lastname']) && $_POST['lastname'] == ""){
    $nw_lastname = "default";
}
else{
    $nw_lastname = $_POST['lastname'];
}

if (empty($_POST['firstname']) && $_POST['firstname'] == ""){
    $nw_firstname = "default";
}
else{
    $nw_firstname = $_POST['firstname'];
}

if (empty($_POST['birthday']) && $_POST['birthday'] == ""){
    $nw_birthday = "default";
}
else{
    $nw_birthday = $_POST['birthday'];
}

if (empty($_POST['city']) && $_POST['city'] == ""){
    $nw_city = "default";
}
else{
    $nw_city = $_POST['city'];
}

if (empty($_POST['email']) && $_POST['email'] == ""){
    $nw_email = "default";
}
else{
    $nw_email = $_POST['email'];
}

if (empty($_POST['telephone']) && $_POST['telephone'] == ""){
    $nw_telephone = "default";
}
else{
    $nw_telephone = $_POST['telephone'];
}
if(strlen($_POST['socialNo']) != 15 && !(empty($_POST['socialNo']) && $_POST['socialNo'] == ""))
{
    throw new Exception('The social number must be composed of 15 characters');
}
if (empty($_POST['socialNo']) && $_POST['socialNo'] == ""){
    $nw_socialNo = "default";
}
else{
    $nw_socialNo = $_POST['socialNo'];
}

$db = dbConnect();

if($nw_lastname != "default"){
    $req = "UPDATE `Patient` SET Patient_Last_Name =\"".$nw_lastname."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_firstname != "default"){
    $req = "UPDATE `Patient` SET Patient_First_Name =\"".$nw_firstname."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_birthday != "default"){
    $req = "UPDATE `Patient` SET Patient_Birthdate =\"".$nw_birthday."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_city != "default"){
    $req = "UPDATE `Patient` SET Patient_City =\"".$nw_city."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_email != "default"){
    $req = "UPDATE `Patient` SET Patient_Email =\"".$_POST['email']."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_telephone != "default"){
    $req = "UPDATE `Patient` SET Patient_Telephone =\"".$nw_telephone."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}
if($nw_socialNo != "default"){
    $req = "UPDATE `Patient` SET Patient_SocialNumber =\"".$nw_socialNo."\" WHERE Patient_Last_Name =\"".$lastname."\" ";
    $db -> query($req);
}

require('../view/successModify.php');
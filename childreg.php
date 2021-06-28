<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) || isset($_POST['username']) || isset($_POST['gender']) || isset($_POST['schoolcode']) || isset($_POST['dob']) || isset($_POST['doreg'])) {
    if ($db->dbConnect()) {
        if ($db->childReg("children", $_POST['fullname'], $_POST['username'], $_POST['gender'], $_POST['schoolcode'] ,$_POST['dob'], $_POST['doreg'])) {
            echo "Registration Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>

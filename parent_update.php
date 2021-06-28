<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) || isset($_POST['username']) || isset($_POST['mobile']) || isset($_POST['email']) || isset($_POST['address'])) {
    if ($db->dbConnect()) {
        if ($db->Updating("users", $_POST['fullname'], $_POST['username'], $_POST['mobile'], $_POST['email'] ,$_POST['address'])) {
            echo "Succesfully updated!";
        } else echo "Updating Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>

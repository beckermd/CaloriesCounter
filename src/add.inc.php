<?php

include("connection.php");

$_name = $_POST["name"];
$_email = $_POST["email"];
$_phone = $_POST["phone"];


if (empty($_name) or empty ($_email) or empty ($_phone)) {

    echo "<div style='text-align: center'>
            <h2 >All fields are necessary</h2></br>
          </div>";

} else {
    $mysqli->select_db('secret_friend');
    $query1 = "Select * from friends_data where Name ='$_name'";

    if (!empty($query1)) {
        echo "<div style='text-align: center'>
            <h2 >$_name already exist. Please select other name</h2></br>
                </div>";
    } else {
        $query = "INSERT INTO friends_data (Name,Email,Phone) VALUES ('$_name','$_email','$_phone')";
        $result = $mysqli->query($query);

        if ($result) {

            include("index.inc.php");

        } else {
            echo $mysqli->error . "</br>";
        }
    }
}

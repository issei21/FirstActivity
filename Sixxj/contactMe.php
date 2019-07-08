<?php //this is your contactMe.php
    include_once("config.php");
    $visitorsName = $_POST['visitorsName'];
    $visitorsEmail = $_POST['visitorsEmail'];
    $visitorsCompany = $_POST['visitorsCompany'];
    $visitorsMessage = $_POST['visitorsMessage'];

    $query = mysqli_query($conn, "INSERT INTO tbl_sample(visitorsName, visitEmail, visitorsCompany, visitorsMessage) VALUES('" . $visitorsName . "','" . $visitorsEmail . "','" . $visitorsCompany . "','" . $visitorsMessage . "');");

    if($query >=1) {
    echo "Inserted";

    }else{
    echo "Not Inserted...! ";
    die("error: " . $conn->error);

    }
    ?>
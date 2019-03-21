<?php

if(isset($_POST["Submit"])){

    include('connection.php');

    $usrid = $_POST["uid"];
    $fname = $_POST["frname"];
    $lname = $_POST["ltname"];
    $departcity = $_POST["dcity"];
    $arrivlcity = $_POST["acity"];
    $stcapa = $_POST["scapa"] ;

    $sql = "INSERT INTO flights (NicNumber,FirstName, LastName, DepartureCity,ArrivalCity,SeatCapacity)
VALUES ('$usrid','$fname', '$lname','$departcity' ,'$arrivlcity','$stcapa')";

if ($con->query($sql) === TRUE) {
    echo "Record Add successfully";
} else {
    echo "Error adding record: " . $con->error;
}
}
else{
    echo "Error: ";
}


?>

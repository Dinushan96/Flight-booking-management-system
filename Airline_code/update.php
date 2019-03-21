<?php


if(isset($_POST["Submit"])){

    include('connection.php');
    $usrid = $_POST["uid"];
    $fname = $_POST["frname"];
    $lname = $_POST["ltname"];
    $departcity = $_POST["dcity"];
    $arrivlcity = $_POST["acity"];
    $stcapa = $_POST["scapa"] ;

    $sql = "UPDATE flights SET NicNumber='$usrid', FirstName='$fname', LastName='$lname', DepartureCity='$departcity', ArrivalCity='$arrivlcity',SeatCapacity='$stcapa' WHERE NicNumber='$usrid' ";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}
else{
    echo "Error: ";
}


?>
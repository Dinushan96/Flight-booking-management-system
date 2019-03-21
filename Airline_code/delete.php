<?php


if(isset($_POST["btn"])){

    include('connection.php');

    $usrid = $_POST["uid"];

    $sql = "DELETE FROM flights where NicNumber='$usrid'" ;

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
else{
    echo "Error: ";
}


?>
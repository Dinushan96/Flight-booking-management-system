<?php

if(isset($_POST["submit"])){

    include('connection.php');

    $usrid = $_POST["uid"];
    

    $sql = "SELECT NicNumber, FirstName, LastName,DepartureCity, ArrivalCity, SeatCapacity FROM flights  WHERE NicNumber='$usrid' ";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo  "NIC: " . $row["NicNumber"]. "    ||     Name: " . $row["FirstName"]. " " . $row["LastName"]."    ||    ".  "Flight:" . $row["DepartureCity"]." - ".$row["ArrivalCity"]."    ||    ". "number of seats:" ." " .$row["SeatCapacity"];
        }
    } else {
        echo "0 results";
    }
}
?>
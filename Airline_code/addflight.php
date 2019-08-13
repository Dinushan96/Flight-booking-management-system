<<!DOCTYPE html>
<html>
    <?php 
        include_once ('navbar.php');
    ?>
   <link rel="stylesheet" href="art1.css">
    <link rel="stylesheet" href="art2.css">
    <link rel="stylesheet" href="art3.css">
    <link rel="stylesheet" href="art4.css">
<body>
        <style>
        body,h1 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
        </style>
        
<form action = "add.php" method="post">

    <div> User NIC </div>
    <div style="text-align:left">
    <input type="text", name="uid">
    </div>

    <div> First name </div>
    <div style="text-align:left">
    <input type="text", name="frname">
    </div>
    <div>Last name</div>
    <div style="text-align:left">
    <input type="text", name = "ltname">
    </div>

    <div>Select Your Departure City</div>
    <div style="text-align:left">
    <input type="text", name = "dcity">
    </div>

    <div>Select Your Arrival City</div>
    <div style="text-align:left">
    <input type="text", name = "acity">
    </div>
    <div>Seat Capacity</div>
    <div style="text-align:left">
    <input type="text", name = "scapa">
    </div>
    <li class="w3-container w3-black w3-center w3-opacity w3-padding-30">
    <input type="submit" value="ADD FLIGHT", name = "Submit">
</form>

</body>
</html>

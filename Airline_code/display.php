<!DOCTYPE html>
<html>

    <?php 
        include_once ('navbar.php');
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display All Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<link rel="stylesheet" href="art1.css">
    <link rel="stylesheet" href="art2.css">
    <link rel="stylesheet" href="art3.css">
    <link rel="stylesheet" href="art4.css">
<body>

    <form action = "displayall.php" method="post">
    <br><br>
    <div>User NIC </div>    
    <div style="text-align:left">
    <input type="text", name="uid">
    </div>
    <br>
    <li class="w3-container w3-center w3-opacity w3-padding-40">
    <input type="submit" value="Display Flight", name ="submit">
    </li>

    <div class="w3-card-4 w3-margin w3-white">
    <img src="air1.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
    <div>
    </form>
</body>
</html>


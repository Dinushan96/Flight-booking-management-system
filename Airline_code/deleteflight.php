<link rel="stylesheet" href="art1.css">
    <link rel="stylesheet" href="art2.css">
    <link rel="stylesheet" href="art3.css">
    <link rel="stylesheet" href="art4.css">
    
    <?php 
        include_once ('navbar.php');
    ?>
<form action = "delete.php" method="post">
    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">FLIGHT CANCELLATION</h1>
    </div>
    <div> User NIC </div>
    <div style="text-align:left">
    <input type="text", name="uid">
    </div>
    <li class="w3-container w3-black w3-center w3-opacity w3-padding-40">
    <input type="submit" value="Cancel Flight", name="btn">
    </li>
</form>

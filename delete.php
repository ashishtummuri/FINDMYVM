<?php
if(isset($_GET["ip"])) {
    $ip = $_GET["id"];

    $connection = mysqli_connect("localhost", "root", ""); 
    $db = mysqli_select_db($connection,"vmdb");

    $query = "DELETE FROM mitc_inventory WHERE id = $ip";
    $connection->query($query);

}

header("Location: /FINDMYVM/index.php");
exit;
?>

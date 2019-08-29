<?php 

include 'connection.php';

$update = "UPDATE `rooms` SET `time`='".$_POST['time']."' WHERE `url` like '".$_POST['roomName']."'";
$connection->query($update);

?>

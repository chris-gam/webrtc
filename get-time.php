<?php 

include 'connection.php';

$select = "SELECT `time` FROM `rooms` WHERE `url` like '".$_POST['roomName']."'";
$results = $connection->query($select);
if ($results->num_rows > 0)
{
		
}
?>

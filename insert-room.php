<?php
include 'connection.php';
//print_r($_POST);


$sql = "INSERT INTO `rooms`(`url`, `time`) VALUES ('".$_POST['roomName']."', '0')";
//echo $sql;
if ($connection->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}
?>

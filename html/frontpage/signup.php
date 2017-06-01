<?php
session_start();
include 'dbhandler.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

echo $first."<br>";
echo $last."<br>";
echo $uid."<br>";
echo $pwd."<br>";

$sql = "INSERT INTO user (first, last, uid, pwd) 
	VALUES ('$first', '$last', '$uid', '$pwd')";
$result = $conn->query($sql);

header("Location: http://70.173.104.208:333");

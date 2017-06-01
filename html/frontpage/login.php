<?php
session_start();
include 'dbhandler.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
    echo "Your username or password is incorrect!";
} else {
	echo "You are logged in!";
    $_SESSION['id'] = $row['id'];
}

//header("Location: http://70.173.104.208:333");

<?php

$conn = mysqli_connect("localhost", "root", "berry", "login");
    
if (!$conn) {
    //Only use mysqli_connect_error() for testing! Otherwise you are prone to SQL injection (HACKING)
   // die("Connection failed: ".mysql_connect_error());
      echo "Connection error!";
}


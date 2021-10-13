<?php

//connect to database
$conn = mysqli_connect("localhost", "amish", "test1234", "rms");
//check connection
if (!$conn) {
  //error in connection
  echo "Connection error: " . mysqli_connect_error();
}

<?php

  define('SERVER','localhost');
  define('USER','root');
  define('PASSWORD','');
  define('DB','china');
  define('TABLE','booked');

  $connect = mysqli_connect(SERVER,USER,PASSWORD,DB);

  if(mysqli_connect_errno()){
    echo "Failed to connected to Database";
  }/*else{
    echo " You are succesfully connected to database";
  }*/

?>
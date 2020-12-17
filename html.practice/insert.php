<?php
  include './connection.php';
  if (isset($_POST['submit'])){
    $name    = $_POST['fullname'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $city    = $_POST['city'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `".TABLE."`(`fullname`, `email`,`contact`,`city`, `country`)
            VALUES 
            ('".$name."','".$email."','".$phone."','".$city."','".$country."')";
    $insertcheck = mysqli_query($connect, $sql);
    echo "<pre>";
      print_r($insertcheck);
    echo "<pre>";

    if ($insertcheck== false){
      echo "There is an error to insert data";
    }else{
      echo "Data inserted succesfully";
    }
  }
  include './index.html';
?>
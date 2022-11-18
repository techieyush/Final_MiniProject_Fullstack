<?php
$Username= $_POST['UserName'];
$Password= $_POST['Password'];
$conn = mysqli_connect('localhost','root','','form');
if(!$conn){
  die('Connection Failed');
}
if(isset($_POST['Login'])){
  $insert = "INSERT INTO `loginform`(Username, Password) values ('$Username','$Password')";
  if(mysqli_query($conn, $insert))
  {
    echo "insertion succesfully";
  }else
  {
    echo "unable to register";
  }
}
?>
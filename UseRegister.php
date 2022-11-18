<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn = mysqli_connect('localhost','root','','tesst');
if(!$conn){
    die('Connection Failed :');
}
if(isset($_POST['save'])){
  $insert = "INSERT INTO registration(firstname, lastname, email, password) values ('$firstname','$lastname','$email','$password')";
  if(mysqli_query($conn, $insert)){
    echo "insertion succescully";
  }else{
    echo "unable to register";
  }
}

  if(isset($_POST['display'])){
    $display = "SELECT firstname,lastname,email,password from registration";
    $result = mysqli_query($conn,$display);
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            echo $data['firstname'] ."<br>" ;
            echo $data['lastname'] ."<br>";
            echo $data['email'] ."<br>";
            echo $data['password'] ."<br>";
        }
    }else{
        echo "No data found";
    }
  
}
?>
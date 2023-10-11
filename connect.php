<?php
  //database connection
  $conn = mysqli_connect('localhost','root','','user');
  //if(!$conn){
    //die("connection failed:" . mysqli_connect_error());
  //}
  
  //initializing variables
  $name = null;
  $name_error = null;
  $email = null;
  $email_error = null;
  $password = null;
  $password_error = null;
  $repassword = null;
  $repassword_error = null;
  $success = null;
  


  if(isset($_POST['submit'])){
    //for any post request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repeat_password'];

    //checking for empty values
    if(empty(trim($name))){
      //display error messages
       $name_error = "Empty field";
    }else{
        if(empty(trim($email))){
          $email_error = "Empty fieid";
      }else{
      if(empty(trim($password))){
         $password_error = "Empty fieid";
      }
      else{
        if(empty(trim($repassword))){
           $repassword_error = "Empty fieid";}
           else{
            $success = "Registered Successfully";
          }
        }
      }
    }
  }





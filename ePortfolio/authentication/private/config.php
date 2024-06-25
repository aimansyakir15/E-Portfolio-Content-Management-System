<?php

session_start();
include "../../global/conn.php";

if(isset($_POST['login'])) {
  
  //mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
  
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
     
	$sql="SELECT * FROM user WHERE email='$email' AND password ='$password' ";
	$result=mysqli_query($db,$sql);  
	$row=mysqli_fetch_assoc($result); 
  $res=mysqli_num_rows($result);

  if($res) {

      if($row['usertype'] == 0){
        
        $_SESSION['userid'] = $row['userid'];
        echo "<script>
              window.location.href = '../../user/';
              </script>";

      } elseif ($row['usertype'] == 1) {

        $_SESSION['adminid'] = $row['userid'];
        echo "<script>
              window.location.href = '../../admin/';
              </script>";

      }

    } else {

        echo "<script>alert('Your Password and User ID Combination Is Incorrect !');
              window.location.href = '../public/';
              </script>";

    }
  }

if (isset($_POST['register'])) {
    // receive all input values from the form
    $userid=rand(99999, 999999);
    $lecturerid=mysqli_real_escape_string($db, $_POST['lecturerid']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $name=mysqli_real_escape_string($db, $_POST['name']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $cpassword=mysqli_real_escape_string($db, $_POST['cpassword']);

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($db, $user_check_query);
    $rowcount = mysqli_num_rows($result);
  
      if ($rowcount == '1') {

        echo "<script>alert('Email Is Already Been Used !');
            window.location.href='../public/';
                </script>";

      }  elseif ($password != $cpassword) {

        echo "<script>alert('Your Password and Confirmation Password Does Not Match ! ');
        window.location.href='../public/';
            </script>";

      }
      else {

        $query = "INSERT INTO `user`(`userid`,`name`, `email`, `lecturerid`, `password`) 
        VALUES 
      ('$userid','$name','$email','$lecturerid','$password')";
        mysqli_query($db, $query);
        echo "<script>alert('You Have Succesfully Registered ! Login to Proceed');
        window.location.href='../../authentication';
            </script>";

      }
  }

?>
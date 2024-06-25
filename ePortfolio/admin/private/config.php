<?php

session_start();
include "../../global/conn.php";
date_default_timezone_set("Asia/Kuala_Lumpur");

if (isset($_POST['adduser'])) {
  // receive all input values from the form
  $userid=rand(99999, 999999);
  $otpcode=rand(99999, 999999);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $usertype=mysqli_real_escape_string($db, $_POST['usertype']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_num_rows($result);

    if ($user > 0) {
      echo "<script>alert('User Has Already Been Registered !');
          window.location.href='../public/index';
              </script>";      
    }  else {
      $query = "INSERT INTO `user`(`userid`,`password`, `name`, `phone`, `email`, `otpcode`, `usertype`) 
      VALUES 
    ('$userid','$password','$name','$phone','$email','$otpcode','$usertype')";
      mysqli_query($db, $query);
      echo "<script>alert('User Has Successfully Been Registered !');
      window.location.href='../public/index';
          </script>";
    }
}

if (isset($_POST['updateuser'])) {
  // receive all input values from the form
  $userid=mysqli_real_escape_string($db, $_POST['userid']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $email=mysqli_real_escape_string($db, $_POST['email']);

    $query = "UPDATE `user` SET `password`='$password',`phone`='$phone',`name`='$name',`email`='$email' WHERE userid = $userid";
    mysqli_query($db, $query);
    echo "<script>alert('User Has Successfully Been Updated !');
    window.location.href='../public/index';
        </script>";

}

if (isset($_POST['updateprofilepicture'])) {
  // receive all input values from the form
  $profilepicture = $_FILES['profilepicture']['name'];
  $userid=mysqli_real_escape_string($db, $_POST['userid']);

  $filename = rand(100000,999999).basename($profilepicture);
  $target = "../../media/".$filename;

    $query = "UPDATE `user` SET `profilepicture`='$filename' WHERE userid = $userid";
    mysqli_query($db, $query);
    if (move_uploaded_file($_FILES['profilepicture']['tmp_name'], $target)) {
      echo "<script>alert('Profile Picture Has Been Successfully Updated !');
      window.location.href='../public/index';
      </script>";
    }else{
    echo "<script>alert('Profile Picture Failed To Be Update !');

          </script>"; 
  }
}

if (isset($_POST['addsubject'])) {
  // receive all input values from the form
  $subjectid=rand(99999, 999999);
  $subjectname=mysqli_real_escape_string($db, $_POST['subjectname']);
  $subjectcode=mysqli_real_escape_string($db, $_POST['subjectcode']);

      $query = "INSERT INTO `subject`(`subjectid`, `subjectname`, `subjectcode`) VALUES ('$subjectid','$subjectname','$subjectcode')";
      mysqli_query($db, $query);
      echo "<script>alert('Subject Has Successfully Been Registered !');
      window.location.href='../public/subject';
          </script>";

    }

if (isset($_POST['updatesubject'])) {
  // receive all input values from the form
  $subjectid=mysqli_real_escape_string($db, $_POST['subjectid']);
  $subjectname=mysqli_real_escape_string($db, $_POST['subjectname']);
  $subjectcode=mysqli_real_escape_string($db, $_POST['subjectcode']);

      $query = "UPDATE `subject` SET `subjectname`='$subjectname',`subjectcode`='$subjectcode' WHERE `subjectid`='$subjectid'";
      mysqli_query($db, $query);
      echo "<script>alert('Subject Has Successfully Been Updated !');
      window.location.href='../public/subject';
          </script>";
    }

if (isset($_POST['addsemester'])) {
  // receive all input values from the form
  $semesterid=rand(99999, 999999);
  $semesterdate=mysqli_real_escape_string($db, $_POST['semesterdate']);

      $query = "INSERT INTO `semester`(`semesterid`, `semesterdate`) VALUES ('$semesterid','$semesterdate')";
      mysqli_query($db, $query);
      echo "<script>alert('Semester Has Successfully Been Registered !');
      window.location.href='../public/semester';
          </script>";
          
    }

if (isset($_POST['updatesemester'])) {
  // receive all input values from the form
  $semesterid=mysqli_real_escape_string($db, $_POST['semesterid']);
  $semesterdate=mysqli_real_escape_string($db, $_POST['semesterdate']);

      $query = "UPDATE `semester` SET `semesterdate`='$semesterdate' WHERE `semesterid`='$semesterid'";
      mysqli_query($db, $query);
      echo "<script>alert('Semester Has Successfully Been Updated !');
      window.location.href='../public/semester';
          </script>";
    }


?>
<?php

session_start();
include "../../global/conn.php";
date_default_timezone_set("Asia/Kuala_Lumpur");

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
    window.location.href='../public/index';
          </script>"; 
  }
}

if (isset($_POST['assignmentproject'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `assignmentproject`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/assignmentproject';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/assignmentproject';
              </script>"; 

    }
  }

if (isset($_POST['exam'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `examination`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/examination';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/examination';
              </script>"; 

    }
  }

if (isset($_POST['attendance'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `attendance`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/attendance';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/attendance';
              </script>"; 

    }
  }

if (isset($_POST['cis'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `cis`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/cis';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/cis';
              </script>"; 

    }
  }

if (isset($_POST['cst'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `cst`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/cst';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/cst';
              </script>"; 

    }
  }

if (isset($_POST['mtp'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `mtp`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/mtp';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/mtp';
              </script>"; 

    }
  }

if (isset($_POST['qst'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `qst`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/qst';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/qst';
              </script>"; 

    }
  }

if (isset($_POST['sow'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `sow`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/sow';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/sow';
              </script>"; 

    }
  }

if (isset($_POST['timetable'])) {
  // receive all input values from the form
  $file = $_FILES['file']['name'];
  $subject=mysqli_real_escape_string($db, $_POST['subject']);
  $semester=mysqli_real_escape_string($db, $_POST['semester']);
  $userid = $_SESSION['userid'];

      $filename = rand(100000,999999).basename($file);
      $target = "../../media/".$filename;
      
       // Finally, Inserting The Data
       $query = "INSERT INTO `timetable`(`userid`, `subjectid`, `semesterid`, `file`) VALUES ('$userid','$subject','$semester','$filename')";
       mysqli_query($db, $query);
    
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              echo "<script>alert('File Has Been Succesfully Uploaded !');
              window.location.href='../public/timetable';
              </script>";
        } else {
        echo "<script>alert('File Failed To Be Upload Due To Internal Error !');
        window.location.href='../public/timetable';
              </script>"; 

    }
  }

?>
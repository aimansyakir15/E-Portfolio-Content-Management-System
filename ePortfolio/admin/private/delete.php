<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>


<?php

include "../../global/conn.php";

if (isset($_GET['userid'])) {

$sql = "DELETE FROM user WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($db, $sql)) {
    echo "<script>alert('User Has Been Deleted !')</script>";
} 
header("Location: ../public/index");
mysqli_close($db);

}

if (isset($_GET['semesterid'])) {

$sql = "DELETE FROM semester WHERE semesterid ='" . $_GET["semesterid"] . "'";
if (mysqli_query($db, $sql)) {
    echo "<script>alert('Semester Has Been Deleted !')</script>";
} 
header("Location: ../public/semester");
mysqli_close($db);

}

if (isset($_GET['subjectid'])) {

    $sql = "DELETE FROM subject WHERE subjectid ='" . $_GET["subjectid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Subject Has Been Deleted !')</script>";
    } 
    header("Location: ../public/subject");
    mysqli_close($db);
    
    }
    


?>
</body>
</html>
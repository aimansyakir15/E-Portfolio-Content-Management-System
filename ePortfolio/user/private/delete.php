<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>


<?php

include "../../global/conn.php";

if (isset($_GET['assprojectid'])) {

    $sql = "DELETE FROM assignmentproject WHERE assprojectid ='" . $_GET["assprojectid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/assignmentproject");
    mysqli_close($db);

}

if (isset($_GET['attendanceid'])) {

    $sql = "DELETE FROM attendance WHERE attendanceid ='" . $_GET["attendanceid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/attendance");
    mysqli_close($db);

}

if (isset($_GET['cisid'])) {

    $sql = "DELETE FROM cis WHERE cisid ='" . $_GET["cisid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/cis");
    mysqli_close($db);

}

if (isset($_GET['cstid'])) {

    $sql = "DELETE FROM cst WHERE cstid ='" . $_GET["cstid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/cst");
    mysqli_close($db);

}

if (isset($_GET['examid'])) {

    $sql = "DELETE FROM examination WHERE examid ='" . $_GET["examid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/examination");
    mysqli_close($db);

}

if (isset($_GET['mtpid'])) {

    $sql = "DELETE FROM mtp WHERE mtpid ='" . $_GET["mtpid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/mtp");
    mysqli_close($db);

}

if (isset($_GET['qstid'])) {

    $sql = "DELETE FROM qst WHERE qstid ='" . $_GET["qstid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/qst");
    mysqli_close($db);

}

if (isset($_GET['sowid'])) {

    $sql = "DELETE FROM sow WHERE sowid ='" . $_GET["sowid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/sow");
    mysqli_close($db);

}

if (isset($_GET['timetableid'])) {

    $sql = "DELETE FROM timetable WHERE timetableid ='" . $_GET["timetableid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('File Has Been Deleted !')</script>";
    } 
    header("Location: ../public/timetable");
    mysqli_close($db);

}


?>
</body>
</html>
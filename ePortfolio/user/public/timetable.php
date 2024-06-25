<?php

include "../include/header.php"

?>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

        <?php

            include "../include/navbar.php";

        ?>
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Timetable</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timetable</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Timetable</h3>
                                    </div>
                                    <div class="card-body">
                                        <a href="config?timetable=true"><button class="btn btn-primary mb-4">Add File</button></a>
                                        <a href="#"><button class="btn btn-primary mb-4" onClick="window.print()">Print</button></a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered border text-nowrap mb-0" >
                                                <thead>
                                                    <tr>
                                                        <th>Timetable ID</th>
                                                        <th>Subject</th>
                                                        <th>Semester</th>
                                                        <th>Timestamp</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php

                                                $check = $_SESSION['userid'];
                                                $query = "SELECT * FROM timetable INNER JOIN user ON timetable.userid = user.userid INNER JOIN subject ON timetable.subjectid = subject.subjectid INNER JOIN semester ON timetable.semesterid = semester.semesterid WHERE user.userid = '$check'";
                                                $query_run = mysqli_query($db,$query);

                                                while($row = mysqli_fetch_array($query_run))
                                                {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['timetableid']; ?></td>
                                                        <td><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</td>
                                                        <td><?php echo $row['semesterdate']; ?></td>
                                                        <td><?php echo $row['timestamp']; ?></td>
                                                        <td>
                                                            <a href="../../media/<?php echo $row['file']; ?>" target="_blank"><button class="btn btn-success-light">View File</button></a>
                                                            <a href="../private/delete.php?timetableid=<?php echo $row['timetableid']; ?>"><button class="btn btn-danger-light">Delete</button></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <?php echo $websitefooter; ?>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="assets/js/jquery.sparkline.min.js"></script>

    <!-- Select2 js-->
    <script src="assets/plugins/select2/select2.full.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL Edit-Table JS -->
    <script src="assets/plugins/edit-table/bst-edittable.js"></script>
    <script src="assets/plugins/edit-table/edit-table.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
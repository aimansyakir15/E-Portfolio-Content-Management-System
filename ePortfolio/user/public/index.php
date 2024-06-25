<?php

include "../include/header.php"

?>
<body class="app sidebar-mini ltr light-mode">

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
                            <h1 class="page-title">Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->

                        <?php

                        $check = $_SESSION['userid'];

                        $query = mysqli_query($db , "SELECT * FROM assignmentproject WHERE userid = '$check'");
                        $rowcount = mysqli_num_rows($query);
                        $query1 = mysqli_query($db , "SELECT * FROM cis WHERE userid = '$check'");
                        $rowcount1 = mysqli_num_rows($query1);
                        $query2 = mysqli_query($db , "SELECT * FROM cst WHERE userid = '$check'");
                        $rowcount2 = mysqli_num_rows($query2);
                        $query3 = mysqli_query($db , "SELECT * FROM examination WHERE userid = '$check'");
                        $rowcount3 = mysqli_num_rows($query3);
                        $query4 = mysqli_query($db , "SELECT * FROM mtp WHERE userid = '$check'");
                        $rowcount4 = mysqli_num_rows($query4);
                        $query5 = mysqli_query($db , "SELECT * FROM qst WHERE userid = '$check'");
                        $rowcount5 = mysqli_num_rows($query5);
                        $query6 = mysqli_query($db , "SELECT * FROM sow WHERE userid = '$check'");
                        $rowcount6 = mysqli_num_rows($query6);
                        $query7 = mysqli_query($db , "SELECT * FROM timetable WHERE userid = '$check'");
                        $rowcount7 = mysqli_num_rows($query7);

                        ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Assignment Project Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Courses Information Summary Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount1; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Coursework Specification Table Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount2; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Exam Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount3; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Micro Teaching Plan Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount4; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Question Specification Table Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount5; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Scheme of Work Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount6; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Timetable Files Uploaded</h6>
                                                        <h2 class="mb-0 number-font"><?php echo $rowcount7; ?></h2>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-header">
                                                <h3 class="card-title">Vision and Mission</h3>
                                            </div>
                                            <div class="card-body"> 
                                                <div class="table-responsive">
                                                    <center>
                                                        <h1 class="mb-0 number-font">Vision</h1><br>
                                                    </center>
                                                        <h5 class=""><b style="color: black;">MSU</b> aspires to be a leading transformative global university, engaging the society through entrepreneurship, research, innovation, industry embedment, and holistic education for abetter future.</h5><br>
                                                    <center>
                                                        <h1 class="mb-0 number-font">Mission</h1><br>
                                                    </center>
                                                    <h5 class=""><b style="color: black;">TRANSFORMATIVE :</b> To provide compelling transformative learning experiences through educational opportunities and a collaborative learning environment, both centred on pioneering socio-economic transformations through innovative deliveries and with ethical values.</h5><br>
                                                    <h5 class=""><b style="color: black;">GLOBAL :</b> To be a leading globally connected university rooted in culture yet diverse in inclusiveness, providing pathways to knowledge and facilitating knowledge exchange through mobility.</h5><br>
                                                    <h5 class=""><b style="color: black;">ENTREPRENEURIAL :</b> To be the catalyst of a sustainable entrepreneur ecosystem promoting entrepreneurial culture in building leaders with a global mindset.</h5><br>
                                                    <h5 class=""><b style="color: black;">RESEARCH & INNOVATION DRIVEN :</b> To promote a culture of interdisciplinary as well as translational research and innovation in responding to national and global challenges, and facilitate commercialisation of the outcomes through entrepreneurship and incubation.</h5><br>
                                                    <h5 class=""><b style="color: black;">INDUSTRY EMBEDDED :</b> To enhance an already collaborative learning environment with the embedment of industries, where applications of knowledge and research align with contemporary needs and are delivered through a curriculum that complements career pathways with the advantages of global mobility and community engagement.</h5><br>
                                                    <h5 class=""><b style="color: black;">CARING INSTITUTION :</b> To ensure the advancement in life of the talented but disadvantaged is not impeded by socio-economic standing, with opportunities that enable the gifted to achieve their true potential and actualise their dreams.</h5><br>
                                                    <h5 class=""><b style="color: black;">HOLISTIC EDUCATION :</b> To mould holistic graduates through a balanced education that enriches their personal, interpersonal and social skills, with a multi-disciplinary approach that nurtures leadership, integrity, professionalism, academic excellence, and a passion for lifelong learning.</h5><br>
                                                    <h5 class=""><b style="color: black;">BETTER FUTURE :</b> To create diversified career pathways that help transform lives into responsible global citizenship contributing professional talent towards a better future.</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- ROW-1 END -->  
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

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

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="assets/plugins/chart/Chart.bundle.js"></script>
    <script src="assets/plugins/chart/rounded-barchart.js"></script>
    <script src="assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/plugins/apexchart/irregular-data-series.js"></script>

    <!-- C3 CHART JS -->
    <script src="assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- CHART-DONUT JS -->
    <script src="assets/js/charts.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
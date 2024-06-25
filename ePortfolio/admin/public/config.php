<?php

include "../include/header.php";

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
                            <h1 class="page-title">Configuration</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Configuration</li>
                                </ol>
                            </div>
                        </div>

                        <form method="POST" action="../private/config" enctype='multipart/form-data'>

                        <!-- PAGE-HEADER END -->

                        <?php

                            if (isset($_GET['assignmentproject'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Upload Assignment / Project File</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">File :</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Subject : </label>
                                            <div class="col-md-9">
                                                <select name="subject" class="form-control" required>

                                                    <?php

                                                        $query = mysqli_query($db, "SELECT * FROM subject");

                                                        while($row = mysqli_fetch_assoc($query)){

                                                    ?>

                                                    <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>

                                                    <?php

                                                        }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Semester : </label>
                                            <div class="col-md-9">
                                                <select name="semester" class="form-control" required>

                                                <?php

                                                    $query = mysqli_query($db, "SELECT * FROM semester");

                                                    while($row = mysqli_fetch_assoc($query)){

                                                ?>

                                                    <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>

                                                <?php

                                                    }

                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="assignmentproject" class="btn btn-primary">Upload File</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['userid'])) {

                                $check = $_GET['userid'];
                                $query = mysqli_query($db, "SELECT * FROM user WHERE userid = '$check'");
                                $rowcheck = mysqli_fetch_array($query);

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Details</div>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="userid" value="<?php echo $rowcheck['userid']; ?>">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $rowcheck['name']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Phone :</label>
                                            <div class="col-md-9">
                                                <input type="tel" class="form-control" placeholder="Phone" name="phone" value="<?php echo $rowcheck['phone']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Email :</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $rowcheck['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Password :</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $rowcheck['password']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="updateuser" class="btn btn-primary">Update User</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['useridimg'])) {

                                $check = $_GET['useridimg'];
                                $query = mysqli_query($db, "SELECT * FROM user WHERE userid = '$check'");
                                $rowcheck = mysqli_fetch_array($query);

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Profile Picture</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Upload Profile Picture :</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="profilepicture">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="userid" value="<?php echo $_SESSION['userid'];?>">
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="updateprofilepicture" class="btn btn-primary">Update Profile Picture</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['attendance'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Upload Attendance File</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">File :</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Subject : </label>
                                            <div class="col-md-9">
                                                <select name="subject" class="form-control" required>

                                                    <?php

                                                        $query = mysqli_query($db, "SELECT * FROM subject");

                                                        while($row = mysqli_fetch_assoc($query)){

                                                    ?>

                                                    <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>

                                                    <?php

                                                        }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Semester : </label>
                                            <div class="col-md-9">
                                                <select name="semester" class="form-control" required>

                                                <?php

                                                    $query = mysqli_query($db, "SELECT * FROM semester");

                                                    while($row = mysqli_fetch_assoc($query)){

                                                ?>

                                                    <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>

                                                <?php

                                                    }

                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="attendance" class="btn btn-primary">Upload File</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['cis'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Upload Courses Information Summary File</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">File :</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Subject : </label>
                                            <div class="col-md-9">
                                                <select name="subject" class="form-control" required>

                                                    <?php

                                                        $query = mysqli_query($db, "SELECT * FROM subject");

                                                        while($row = mysqli_fetch_assoc($query)){

                                                    ?>

                                                    <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>

                                                    <?php

                                                        }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Semester : </label>
                                            <div class="col-md-9">
                                                <select name="semester" class="form-control" required>

                                                <?php

                                                    $query = mysqli_query($db, "SELECT * FROM semester");

                                                    while($row = mysqli_fetch_assoc($query)){

                                                ?>

                                                    <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>

                                                <?php

                                                    }

                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="cis" class="btn btn-primary">Upload File</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['exam'])) {

                        ?>
        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Upload Examination File</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label">File :</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="file" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Subject : </label>
                                                    <div class="col-md-9">
                                                        <select name="subject" class="form-control" required>
        
                                                            <?php
        
                                                                $query = mysqli_query($db, "SELECT * FROM subject");
        
                                                                while($row = mysqli_fetch_assoc($query)){
        
                                                            ?>
        
                                                            <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>
        
                                                            <?php
        
                                                                }
        
                                                            ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Semester : </label>
                                                    <div class="col-md-9">
                                                        <select name="semester" class="form-control" required>
        
                                                        <?php
        
                                                            $query = mysqli_query($db, "SELECT * FROM semester");
        
                                                            while($row = mysqli_fetch_assoc($query)){
        
                                                        ?>
        
                                                            <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>
        
                                                        <?php
        
                                                            }
        
                                                        ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!--Row-->
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="submit" name="exam" class="btn btn-primary">Upload File</button>
                                                    </div>
                                                </div>
                                                <!--End Row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        <?php
        
                            } elseif(isset($_GET['cst'])) {

                        ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Upload Coursework Specification Table File</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">File :</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Subject : </label>
                                            <div class="col-md-9">
                                                <select name="subject" class="form-control" required>

                                                    <?php

                                                        $query = mysqli_query($db, "SELECT * FROM subject");

                                                        while($row = mysqli_fetch_assoc($query)){

                                                    ?>

                                                    <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>

                                                    <?php

                                                        }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label"> Semester : </label>
                                            <div class="col-md-9">
                                                <select name="semester" class="form-control" required>

                                                <?php

                                                    $query = mysqli_query($db, "SELECT * FROM semester");

                                                    while($row = mysqli_fetch_assoc($query)){

                                                ?>

                                                    <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>

                                                <?php

                                                    }

                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="cst" class="btn btn-primary">Upload File</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                            } elseif(isset($_GET['mtp'])) {

                        ?>
        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Upload Micro Teaching Plan File</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label">File :</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="file" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Subject : </label>
                                                    <div class="col-md-9">
                                                        <select name="subject" class="form-control" required>
        
                                                            <?php
        
                                                                $query = mysqli_query($db, "SELECT * FROM subject");
        
                                                                while($row = mysqli_fetch_assoc($query)){
        
                                                            ?>
        
                                                            <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>
        
                                                            <?php
        
                                                                }
        
                                                            ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Semester : </label>
                                                    <div class="col-md-9">
                                                        <select name="semester" class="form-control" required>
        
                                                        <?php
        
                                                            $query = mysqli_query($db, "SELECT * FROM semester");
        
                                                            while($row = mysqli_fetch_assoc($query)){
        
                                                        ?>
        
                                                            <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>
        
                                                        <?php
        
                                                            }
        
                                                        ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!--Row-->
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="submit" name="mtp" class="btn btn-primary">Upload File</button>
                                                    </div>
                                                </div>
                                                <!--End Row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                        <?php
        
                            } elseif(isset($_GET['qst'])) {

                        ?>
        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Upload Question Specification Table File</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label">File :</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="file" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Subject : </label>
                                                    <div class="col-md-9">
                                                        <select name="subject" class="form-control" required>
        
                                                            <?php
        
                                                                $query = mysqli_query($db, "SELECT * FROM subject");
        
                                                                while($row = mysqli_fetch_assoc($query)){
        
                                                            ?>
        
                                                            <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>
        
                                                            <?php
        
                                                                }
        
                                                            ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Semester : </label>
                                                    <div class="col-md-9">
                                                        <select name="semester" class="form-control" required>
        
                                                        <?php
        
                                                            $query = mysqli_query($db, "SELECT * FROM semester");
        
                                                            while($row = mysqli_fetch_assoc($query)){
        
                                                        ?>
        
                                                            <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>
        
                                                        <?php
        
                                                            }
        
                                                        ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!--Row-->
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="submit" name="qst" class="btn btn-primary">Upload File</button>
                                                    </div>
                                                </div>
                                                <!--End Row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                        <?php
        
                            } elseif(isset($_GET['sow'])) {

                        ?>
        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Upload Scheme of Work File</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label">File :</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="file" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Subject : </label>
                                                    <div class="col-md-9">
                                                        <select name="subject" class="form-control" required>
        
                                                            <?php
        
                                                                $query = mysqli_query($db, "SELECT * FROM subject");
        
                                                                while($row = mysqli_fetch_assoc($query)){
        
                                                            ?>
        
                                                            <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>
        
                                                            <?php
        
                                                                }
        
                                                            ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-3 form-label"> Semester : </label>
                                                    <div class="col-md-9">
                                                        <select name="semester" class="form-control" required>
        
                                                        <?php
        
                                                            $query = mysqli_query($db, "SELECT * FROM semester");
        
                                                            while($row = mysqli_fetch_assoc($query)){
        
                                                        ?>
        
                                                            <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>
        
                                                        <?php
        
                                                            }
        
                                                        ?>
        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!--Row-->
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="submit" name="sow" class="btn btn-primary">Upload File</button>
                                                    </div>
                                                </div>
                                                <!--End Row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                    <?php
        
                        } elseif(isset($_GET['timetable'])) {

                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Upload Timetable File</div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">File :</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label"> Subject : </label>
                                        <div class="col-md-9">
                                            <select name="subject" class="form-control" required>

                                                <?php

                                                    $query = mysqli_query($db, "SELECT * FROM subject");

                                                    while($row = mysqli_fetch_assoc($query)){

                                                ?>

                                                <option value="<?php echo $row['subjectid']; ?>"><?php echo $row['subjectname']; ?> ( <?php echo $row['subjectcode']; ?> )</option>

                                                <?php

                                                    }

                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label"> Semester : </label>
                                        <div class="col-md-9">
                                            <select name="semester" class="form-control" required>

                                            <?php

                                                $query = mysqli_query($db, "SELECT * FROM semester");

                                                while($row = mysqli_fetch_assoc($query)){

                                            ?>

                                                <option value="<?php echo $row['semesterid']; ?>"><?php echo $row['semesterdate']; ?></option>

                                            <?php

                                                }

                                            ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <!--Row-->
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                            <button type="submit" name="timetable" class="btn btn-primary">Upload File</button>
                                        </div>
                                    </div>
                                    <!--End Row-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                        } elseif(isset($_GET['addsemester'])){

                    ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add New Semester Date</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Semester Date :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="semesterdate" placeholder="January 2022 ( First Semester )" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <button type="submit" name="addsemester" class="btn btn-primary">Add Semester</button>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                        } elseif(isset($_GET['semesterid'])){

                            $check = $_GET['semesterid'];
                            $query = mysqli_query($db, "SELECT * FROM semester WHERE semesterid = '$check'");
                            $row = mysqli_fetch_assoc($query);

                    ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Semester Date</div>
                                    </div>
                                    <input type="hidden" name="semesterid" value="<?php echo $row['semesterid']; ?>">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Semester Date :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="semesterdate" value="<?php echo $row['semesterdate']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <button type="submit" name="updatesemester" class="btn btn-primary">Update Semester</button>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                        } elseif(isset($_GET['addsubject'])){

                    ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add New Subject</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Subject Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subjectname" placeholder="English" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Subject Code :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subjectcode" placeholder="ENG2043" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <button type="submit" name="addsubject" class="btn btn-primary">Add Subject</button>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                        } elseif(isset($_GET['subjectid'])){

                            $check = $_GET['subjectid'];
                            $query = mysqli_query($db, "SELECT * FROM subject WHERE subjectid = '$check'");
                            $row = mysqli_fetch_assoc($query);

                    ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Update Subject</div>
                                    </div>
                                    <input type="hidden" name="subjectid" value="<?php echo $row['subjectid']; ?>">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Subject Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subjectname" value="<?php echo $row['subjectname']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Subject Code :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subjectcode" value="<?php echo $row['subjectcode']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <button type="submit" name="updatesubject" class="btn btn-primary">Update Subject</button>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                        }

                    ?>


                        </form>
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

    <!-- CHART-CIRCLE JS-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="assets/plugins/wysiwyag/jquery.richtext.js "></script>
    <script src="assets/plugins/wysiwyag/wysiwyag.js "></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/fancy-uploader.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>



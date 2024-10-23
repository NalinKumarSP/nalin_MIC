<?php
include("dp.php");
$sql="SELECT * FROM academic_table1";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>MIC MKCE</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="nalin.css">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="IMG/mkce name pic.png" alt="homepage" class="light-logo"
                                style="margin-left:-12px;" />

                        </b>

                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->



                    </ul>
                    <!-- ============================================================== -->
                    <!-- bulb icon script -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>


        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="margin-left: -10px;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.html" aria-expanded="false"><img src="IMG/dash.png"><span
                                    class="hide-menu">&nbsp;Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="charts.html" aria-expanded="false"><img src="IMG/profile.png"><span
                                    class="hide-menu">&nbsp;Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><img src="IMG/Eprofile.png"><span
                                    class="hide-menu">&nbsp;Edit Profile</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="Editprofile.html" class="sidebar-link"><img
                                            src="IMG/basic details.png"><span class="hide-menu">&nbsp;Basic
                                            details</span></a></li>
                                <li class="sidebar-item"><a href="form-academics.html" class="sidebar-link"><img
                                            src="IMG/academic details.png"><span class="hide-menu"> &nbsp;Acadamic
                                            Details </span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><img
                                            src="IMG/exam details.png"><span class="hide-menu"> &nbsp;Exam
                                            Details</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span
                                    class="hide-menu">&nbsp;Bus Booking</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span
                                    class="hide-menu">&nbsp;Complaints</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span
                                    class="hide-menu">&nbsp;Feedback</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-elements.html" aria-expanded="false"><img src="IMG/keys.png"><span
                                    class="hide-menu">&nbsp;Change Password</span></a></li>
                        <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    </div>



    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit profile</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Personal Information</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"
            style="background-color: white;margin-top: 20px;margin-left: 15px;padding-right: 15px;">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card" style="margin: 0;padding: 0;">
                        <div class="card-body" style="margin: 0;padding: 0;">
                            <h5 class="card-title">
                                <h3>Profile Information</h3>
                            </h5>
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline">
                                    <a href="Editprofile.html"> <button class="btn btn-outline-success" type="button"
                                            style="background-color: rgb(30, 30, 244);color: rgb(254, 253, 253);padding: 5px; border: 10px solid rgb(215, 235, 228);">Basics</button></a>

                                    <a href="form-academic-details.php"><button class="btn btn-outline-success"
                                            type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Academic
                                            Details</button></a>
                                    <a href="form-family.php"><button class="btn btn-outline-success" type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Family
                                            Details</button></a>
                                    <a href="form-parent-meeting.php"><button class="btn btn-outline-success"
                                            type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Parents
                                            Meeting</button></a>
                                    <a href="form-conselling.php"><button class="btn btn-outline-success" type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Counselling
                                            Details</button></a>
                                    <a href=""><button class="btn btn-outline-success" type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Medical
                                            Leave</button></a>
                                    <a href=""><button class="btn btn-outline-success" type="button"
                                            style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">SWOT
                                            Analysis</button></a>

                                </form>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================================== -->

            <!--add user buttons -->
            <br>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addacademic">Add
                Academic Details</button><br>
            <br>
            <!-- Academic details table      -->
            <table class="table table-striped" id="t1">
                <thead>
                    <tr>

                        <th scope="col">S.No</th>
                        <th scope="col">Year</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Arrears</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $s = 1;
        while ($row = mysqli_fetch_array($result)) {
            ?>
                    <tr>
                        <td> <?php echo $s ?></td>
                        <td><?php echo $row['year'] ?></td>
                        <td><?php echo $row['semester'] ?></td>
                        <td><?php echo $row['arrear'] ?></td>
                        <td><?php echo $row['cgpa'] ?></td>
                        <td><button type="button" value="<?php echo $row['id']; ?>"
                                class="btn btn-primary btnuseredit">Edit</button>
                            <button type="button" class=" btn btn-danger btnacademicdelete"
                                value="<?php echo $row['id'];?>">Delete</button>
                        </td>
                    </tr>
                    <?php
$s++;
        }
?>
                </tbody>
            </table>
            <!-- add academic details table end     -->
            <!-- Button trigger modal -->
            <!-- add academic details modal      -->
            <!-- Modal -->
            <div class="modal fade" id="addacademic" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Academic Details</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <form id="adduser">

                                <input type="text" name="year" placeholder="Enter Year">
                                <br>
                                <br>
                                <input type="text" name="semester" placeholder="Enter Semester">
                                <br>
                                <br>
                                <input type="text" name="arrear" placeholder="Enter no of Arrears">
                                <br>
                                <br>
                                <input type="text" name="cgpa" placeholder="Enter CGPA">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit user Modal -->
        <div class="modal fade" id="Edituser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="Editnewuser">

                            <input type="hidden" name="id" id="id" required>
                            <label>Enter Year</label><br>
                            <input type="text" name="year" id="year" placeholder="" required>
                            <br>
                            <br>
                            <label>Enter Semester</label><br>
                            <input type="text" name="semester" id="semester" placeholder="" required>
                            <br>
                            <br>
                            <label>Enter no of Arrears</label><br>
                            <input type="text" name="arrear" id="arrear" placeholder="" required>
                            <br>
                            <br>
                            <label>Enter Year</label><br>
                            <input type="text" name="cgpa" id="cgpa" placeholder="" required>
                            <br>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <!-- add academic details modal finish      -->






    </div><!-- /.container-fluid-->
    </div><!-- /.box-body -->


    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    <!-- ============================================================== -->

    <!-- Bootstrap modal scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>






    <script>
    //adding user academic details
    $(document).on('submit', '#adduser', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        formData.append('saveuser', true);
        $.ajax({
            type: 'POST',
            url: 'backend.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                console.log(res) //checking
                //if success
                if (res.status == 200) {
                    $('#addacademic').modal('hide');
                    $('#adduser')[0].reset();
                    $('#t1').load(location.href + " #t1");
                    alert(res.message)

                }
                //if failure
                else if (res.status == 500) {
                    $('#addacademic').modal('hide');
                    $('#adduser')[0].reset();
                    console.error("Error:", res.message);
                    alert("Something Went wrong.! try again");
                }
            }
        })
    });
    // adding userser details endpoint

    // deleting user details
    $(document).on('click', '.btnacademicdelete', function(e) {
        e.preventDefault();

        if (confirm('Are you sure you want to delete this data?')) {
            var user_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "backend.php",
                data: {
                    'delete_user': true,
                    'user_id': user_id
                },
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#t1').load(location.href + " #t1");
                    }
                }
            });
        }
    });
    //delect user details endpoint

    //edit user details

    $(document).on('click', '.btnuseredit', function(e) {
        e.preventDefault();
        var user_id = $(this).val();
        console.log(user_id)
        $.ajax({
            type: "POST",
            url: "backend.php",
            data: {
                'edit_user': true,
                'user_id': user_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                console.log(res)
                if (res.status == 500) {
                    alert(res.message);
                } else {
                    //$('#student_id2').val(res.data.uid);

                    $('#id').val(res.data.id);
                    $('#year').val(res.data.year);
                    $('#semester').val(res.data.semester);
                    $('#arrear').val(res.data.arrear);
                    $('#cgpa').val(res.data.cgpa);


                    $('#Edituser').modal('show');
                }
            }
        });
    });

    $(document).on('submit', '#Editnewuser', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData)
        formData.append("save_edituser", true);
        $.ajax({
            type: "POST",
            url: "backend.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 200) {
                    $('#Edituser').modal('hide');
                    $('#Editnewuser')[0].reset();
                    $('#t1').load(location.href + " #t1");
                    alert(res.message)

                } else if (res.status == 500) {
                    $('#Edituser').modal('hide');
                    $('#Editnewuser')[0].reset();
                    console.error("Error:", res.message);
                    alert("Something Went wrong.! try again")
                }
            }
        });
    });
    //edituser details end
    </script>
</body>

</html>
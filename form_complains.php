<?php
include("dp.php");
$sql="SELECT * FROM ";
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
    <title>Counselling Details</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="nalin.css">
    <link rel="html" href="dashboard.html">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
     <!-- poup css -->
     
    
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
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="IMG/mkce name pic.png" alt="homepage" class="light-logo" style="margin-left:-12px;" />
                           
                        </b>
                       
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- bulb icon script -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html" aria-expanded="false"><img src="IMG/dash.png"><span class="hide-menu">&nbsp;Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><img src="IMG/profile.png"><span class="hide-menu">&nbsp;Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="IMG/Eprofile.png"><span class="hide-menu">&nbsp;Edit Profile</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="Editprofile.html" class="sidebar-link"><img src="IMG/basic details.png"><span class="hide-menu">&nbsp;Basic details</span></a></li>
                               <li class="sidebar-item"><a href="form-academics.html" class="sidebar-link"><img src="IMG/academic details.png"><span class="hide-menu"> &nbsp;Acadamic Details </span></a></li>
                               <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><img src="IMG/exam details.png"><span class="hide-menu"> &nbsp;Exam Details</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span class="hide-menu">&nbsp;Bus Booking</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span class="hide-menu">&nbsp;Complaints</span></a></li> 
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><img src="IMG/busN.png"><span class="hide-menu">&nbsp;Feedback</span></a></li>  
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><img src="IMG/keys.png"><span class="hide-menu">&nbsp;Change Password</span></a></li>
                    </ul>
                </nav>

                        <!-- End Sidebar navigation -->
                            </div>
                            <!-- End Sidebar scroll-->
                        </aside>
<!-- ============================================================== -->

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
    <div class="container-fluid" style="background-color: white;margin-top: 20px;margin-left: 15px;padding-right: 15px;">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->


                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <h4 class="card-title">Work Information</h4>
                            <h6 class="card-subtitle"></h6>
                            <div class="card">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#dashboard" role="tab" aria-selected="true"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi-person"></i><b>Dashboard</b></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-people-fill"></i><b>Pending work</b></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inprogress" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-people-fill"></i><b>Work-In Progress</b></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#completed" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-house-door-fill"></i><b>Completed Work</b></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#parents" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-house-door-fill"></i><b>Rejected Work</b></span></a> </li>
                                </ul>
    
                                <div class="tab-content tabcontent-border">
                                    <!-----------------------------------DashBoard---------------------------------------->
                                    <div class="tab-pane p-20 active show" id="dashboard" role="tabpanel">
                                        <div class="container-fluid">
                                            <div class="container text-center">
                                                <div class="row row-cols-4">
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="card card-hover">
                                                            <div class="box bg-cyan text-center">
                                                                <h1 class="font-light text-white">
                                                                    1
                                                                </h1>
                                                                <h6 class="text-white">Total Compliances</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card card-hover">
                                                            <div class="box bg-success text-center">
                                                                <h1 class="font-light text-white">
                                                                    1
                                                                </h1>
                                                                <h6 class="text-white">Pending</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                            </div>
                                            <div class="container text-center">
                                                <div class="row row-cols-4">
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="card card-hover">
                                                            <div class="box bg-warning text-center">
                                                                <h1 class="font-light text-white">
                                                                    1
                                                                </h1>
                                                                <h6 class="text-white">Progress</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card card-hover">
                                                            <div class="box bg-danger text-center">
                                                                <h1 class="font-light text-white">
                                                                    1
                                                                </h1>
                                                                <h6 class="text-white">Completed</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---------------------------DashBoard Ends-------------------------->

                                    <div class="tab-pane p-20" id="home" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Pending Work
                                                    </h4>
                                                </div>
                                                <div class="card-body">
                                                    <div>
                                                <button type="button" class="btn btn-info float-right" data-bs-toggle="modal" data-bs-target="#cmodal">Raise Compliant</button>
                                                <br><br>
                                                </div>
                                                    <div class="table-responsive">
                                                        <table id="user" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>S.No</b></th>
                                                                    <th><b>Venue</b></th>
                                                                    <th><b>Problem</b></th>
                                                                    <th><b>Problem description</b></th>
                                                                    <th><b>Date Of submission</b></th>
                                                                    <th><b>Photo</b></th>
                                                                    <th><b>Status</b></th>
                                                                    <th><b>Action</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $s = 1;
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $s; ?></td>
                                                                        <td><?php echo $row['block_venue']; ?></td>
                                                                        <td><?php echo $row['type_of_problem']; ?></td>
                                                                        <td><?php echo $row['problem_description']; ?></td>
                                                                        <td><?php echo $row['date_of_reg']; ?></td>
                                                                        <td><button type="button" class="btn btn-info showimage" data-bs-toggle="modal" data-bs-target="#imageModal" value="<?php echo $row['id']; ?>">View</button></td>
                                                                        <td><button type="button" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#viewstatus">Status</button></td>
                                                                        <td>
                                                                            <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-secondary btncounuseredit" data-bs-toggle="modal" data-bs-target="#Edituser3">Edit</button>
                                                                            <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btncounuserdelete">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                    $s++;
                                                                }
                                                                ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div><!--end of row in cotainer-->
    </div><!--end of container -->
</div><!--end of page wrapper-->

<!-- ============================================================== -->
                                                            <!-- Modal -->
                                        <!-- input complaints modal -->
                                                             <div class="modal fade" id="cmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Raise Complaint</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></button>
                                                </div>
                                                <div>
                                                    <form id="addnewuser" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="id" class="form-label">Faculty ID</label>
                                                                <input type="text" class="form-control" name="faculty_id" placeholder="Enter Faculty ID" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="faculty_name" class="form-label">Faculty Name</label>
                                                                <input type="text" class="form-control" name="faculty_name" placeholder="Enter Faculty Name" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="department" class="form-label">Faculty Name</label>
                                                                <input type="text" class="form-control" name="department" placeholder="Enter Faculty Name" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="contact" class="form-label">Mobile No</label>
                                                                <input type="text" class="form-control" name="faculty_contact" placeholder="Enter Mobile no" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="mail" class="form-label">Mail id</label>
                                                                <input type="text" class="form-control" name="faculty_mail" placeholder="Enter mail id" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="block" class="form-label">Block</label>
                                                                <input type="text" class="form-control" name="block_venue" placeholder="Eg:RK-206" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="venue" class="form-label">Venue</label>
                                                                <select class="form-control" name="venue_name" style="width: 100%; height:36px;">
                                                                    <option>Select</option>
                                                                    <option value="class">Class Room</option>
                                                                    <option value="department">Department</option>
                                                                    <option value="lab">Lab</option>
                                                                    <option value="staff_room">Staff Room</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="type_of_problem" class="form-label">Type of Problem</label>
                                                                <select class="form-control" name="type_of_problem" style="width: 100%; height:36px;">
                                                                    <option>Select</option>
                                                                    <option value="Electrical Work">Electrical Work</option>
                                                                    <option value="Carpenter Work">Carpenter Work</option>
                                                                    <option value="Civil Work">Civil Work</option>
                                                                    <option value="Partition Work">Partition Work</option>
                                                                    <option value="IT Infra Work">IT Infra Work</option>
                                                                    <option value="Plumbing Work">Plumbing Work</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="description" class="form-label">Problem Description</label>
                                                                <input type="text" class="form-control" name="problem_description" placeholder="Enter Description" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="images" class="form-label">Image</label>
                                                                <input type="file" class="form-control" name="images" >
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="days_to_complete" class="form-label">Days to Complete</label>
                                                                <input type="text" class="form-control" name="days_to_complete" placeholder="Not necessary">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                                    crossorigin="anonymous"></script>
                            
                                <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                                <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                                <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                                <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                                <script src="assets/extra-libs/sparkline/sparkline.js"></script>
                                <script src="dist/js/waves.js"></script>
                                <script src="dist/js/sidebarmenu.js"></script>
                                <script src="dist/js/custom.min.js"></script>
                                <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
                                <script src="dist/js/pages/mask/mask.init.js"></script>
                                <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
                                <script src="assets/libs/select2/dist/js/select2.min.js"></script>
                                <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
                                <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
                                <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
                                <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
                                <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                                <script src="assets/libs/quill/dist/quill.min.js"></script>
                                <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
                                    <script>

                                    </script>                                
                                   
                                    </body>
                                    
                                    </html>
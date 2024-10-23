<?php
include("dp.php");
$sql="SELECT * FROM parent_table1";
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
    <title>Parent Meeting Details</title>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><img src="IMG/busN.png"><span class="hide-menu">&nbsp;Complaints</span></a></li> 
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><img src="IMG/busN.png"><span class="hide-menu">&nbsp;Feedback</span></a></li> 
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark " href="pages-elements.html" aria-expanded="false"><img src="IMG/keys.png"><span class="hide-menu">&nbsp;Change Password</span></a></li>
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
        <div class="row" >
            <div class="col-12">
                <div class="card" style="margin: 0;padding: 0;">
                    <div class="card-body" style="margin: 0;padding: 0;">
                        <h5 class="card-title"><h3>Profile Information</h3></h5>
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline">
                                <a href="Editprofile.html"><button class="btn btn-outline-success" type="button" style="background-color: rgb(30, 30, 244);color: rgb(254, 253, 253);padding: 5px; border: 10px solid rgb(215, 235, 228);">Basics</button>

                             <a href="form-academic-details.php"><button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Academic Details</button></a> 
                              <a href="form-family.php"><button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Family Details</button></a>
                             <a href="form-parent-meeting.php"> <button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Parents Meeting</button></a>
                             <a href="form-conselling.php"><button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Counselling Details</button></a>
                             <a href=""><button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">Medical Leave</button></a>
                             <a href=""><button class="btn btn-outline-success" type="button" style="background-color: blue;color: white;margin-left: 20px;padding: 5px;">SWOT Analysis</button></a>
                              
                            </form>
                          </nav>
                    </div>
                </div>
            </div>
                <!-- ============================================================== -->
                <br>
            <div>
            <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addmeetingdetails">Add Parents Meeting Details</button>
        </div>
         <br>
        <br>
       
       <div id="meeting_table1">
            <table class="table table-striped table-hover" style="text-align: center;" >
                <thead>
                    <tr>
                    <th scope="col" style="text-align: center;">Date</th>
                    <th scope="col">Purpose of Meeting</th>
                    <th scope="col">Point Discussed</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php
              
                while ($row = mysqli_fetch_array($result)) {
                    ?>
            <tr>
             
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['purpose'] ?></td>
              <td><?php echo $row['points'] ?></td>
                       <td><button type="button" value="<?php echo $row['id']; ?>" class="btn btn-primary " id="bteditmeetingdetails">Edit</button>
      <button type="button" class=" btn btn-danger btnmeetingdelete" value="<?php echo $row['id'];?>">Delete</button>
    <td>-</td>
    </td>
    </tr>
            <?php
     
                }
        ?>
                </tbody>
                </tbody>
            </table>
        </div>
        </div>
        <!-- End of Page Content -->
    </div>
    <!--end of container fluid-->
    </div>
      <!-- End Page wrapper  -->

                          <!-- ============================================================== -->
                                                 <!--modal starts-->
    <!--add new meeting details modal-->  
    <div class="modal fade" id="addmeetingdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Parents Meeting Details</h5>
            
                 </div>
                <div class="modal-body">
                    <form id="addmeeting">
                      
                            <label > Enter Date</label>
                            <br>
                            <input type="date"   name="date" required>
                            <br>
                            <br>
                            <label>Enter Purpose of Meeting</label> <br>
                            <input type="text" name="purpose" placeholder="Enter Purpose of Meeting" required>
                            <br>
                            <br>
                            <label>Enter Points Discussed</label> <br>
                            <input type="text" name="points" placeholder="Enter Points Discussed" required>
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

     <!-- edit user modal -->
</div>
<div class="modal fade" id="Editmeetingdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="Editmeeting">
            
            <input type="hidden" name="id" id="id" required>
            <label > Enter Date</label><br>
            <input type="text" name="date" id="mdate"  required><br>
            <label >Enter Purpose</label><br>
            <input type="text" name="purpose" id="mpurpose" required><br>
            <div class="col-md-12">
            <label >Enter Points Discussed</label><br>
            <input type="description" name="points" id="mpoints"  required><br>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!--end of modal-->

<!-- ============================================================== -->
                              <!-- Bootstrap core JavaScript-->
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
       
       
           <!-- Bootstrap modal scripts -->
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <!-- ============================================================== -->

       <script>

 //adding meeting details
 $(document).on('submit','#addmeeting',function(e){
    e.preventDefault();
    var formdata = new FormData(this);
    console.log(formdata);
    formdata.append('save_meetingdetails',true);
    $.ajax({
        type : "POST",
        url : 'backend.php',
        data : formdata,
        processData : false,
        contentType :false,
        success: function(response){
            var res = jQuery.parseJSON(response);
            console.log(res);// checking
            //is success
            if(res.status==200){
                $('#addmeetingdetails').modal('hide');
                $('#addmeeting')[0].reset();
                $('#meeting_table1').load(location.href + " #meeting_table1>*", "");
                alert(res.message);
            }
            //if failure
            else if (res.status==500){
                $('#addmeetingdetails').modal('hide');
                $('#addmeeting')[0].reset();
                console.error("Error :",res.message);
                alert("something went wrong .! try again");

            }

        }
    })
 });
 //end of add meeting

//delete meeting start
 $(document).on('click', '.btnmeetingdelete', function (e) {
      e.preventDefault();
      if (confirm('Are you sure you want to delete this data?')) {
        var user_id = $(this).val();
        //ajax initializaition
        $.ajax({
          type: "POST",
          url: "backend.php",
          data: {
            'delete_meeting': true,
            'user_id': user_id
          },
          success: function (response) {

            var res = jQuery.parseJSON(response);
            if (res.status == 500) {
              alert(res.message);
            }
            else {
                $('#meeting_table1').load(location.href + " #meeting_table1>*", "");
             
            }
          }
        })
      }
    });
    //delete user details end

    //edit user details
                    //featching user details
$(document).on('click', '#bteditmeetingdetails', function (e) {
      e.preventDefault();
      var user_id = $(this).val();
      console.log(user_id)
      $.ajax({
        type: "POST",
        url: "backend.php",
        data: {
          'edit_meetingdetails': true,
          'user_id': user_id
        },
        success: function (response) {

          var res = jQuery.parseJSON(response);
          console.log(res)
          if (res.status == 500) {
            alert(res.message);
          }
          else {
            //$('#student_id2').val(res.data.uid);

            $('#id').val(res.data.id);
            $('#mdate').val(res.data.date);
            $('#mpurpose').val(res.data.purpose);
            $('#mpoints').val(res.data.points);
    
            $('#Editmeetingdetails').modal('show');
          }
        }
      });
    });

                        //end of featching details
//reset the details
    $(document).on('submit', '#Editmeeting', function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      console.log(formData)
      formData.append("save_editmeeting", true);
      $.ajax({
        type: "POST",
        url: "backend.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {

          var res = jQuery.parseJSON(response);
          if (res.status == 200) {
            $('#Editmeetingdetails').modal('hide');
            $('#Editmeeting')[0].reset();
            $('#meeting_table1').load(location.href + " #meeting_table1>*", "");
            alert(res.message)

          }
          else if (res.status == 500) {
            $('#Editmeetingdetails').modal('hide');
            $('#Editmeeting')[0].reset();
            console.error("Error:", res.message);
            alert("Something Went wrong.! try again")
          }
        }
      });
    });
    //edituser details end



       </script>

       </div><!--main-content -->
    </body>

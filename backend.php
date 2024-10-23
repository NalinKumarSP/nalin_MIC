<?php
include("dp.php");


//adding users to table
if(isset($_POST["saveuser"])){
    try{
        $year = mysqli_real_escape_string($conn, $_POST['year']);
        $semester = mysqli_real_escape_string($conn, $_POST['semester']);
        $arrear = mysqli_real_escape_string($conn, $_POST['arrear']);
        $cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);


        $query = "INSERT INTO academic_table1(year,semester,arrear,cgpa)VALUES('$year','$semester','$arrear','$cgpa')";

        if(mysqli_query($conn, $query)){
            $res = [
                'status' => 200,
                'message' => 'Details Updated Successfully'
            ];
            echo json_encode($res);
    }else {
        throw new Exception('Query Failed: ' . mysqli_error($conn));
    }
} catch (Exception $e) {
    $res = [
        'status' => 500,
        'message' => 'Error: ' . $e->getMessage()
    ];
    echo json_encode($res);
}
}

//deleting academic detail

if(isset($_POST['delete_user'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $query = "DELETE FROM academic_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $res = [
            "status"=> 200,
            "message"=> "Deleted succesfully"
            ];
            echo json_encode($res);
            return;
    }else {
        $res = [
            "status"=> 500,
            "message"=> "Details not deleted"
        ];
        echo json_encode($res);
        return;
    }
}
//deleting academic detail end


//get data for User edit
if (isset($_POST['edit_user'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  
    $query = "SELECT * FROM academic_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  
    $User_data = mysqli_fetch_array($query_run);
  
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Fetch Successfully by id',
        'data' => $User_data
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  
  //User edit
  if (isset($_POST['save_edituser'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['id']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $arrear = mysqli_real_escape_string($conn, $_POST['arrear']);
    $cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);

    $query = "UPDATE academic_table1 SET year='$year',semester='$semester',arrear='$arrear',cgpa='$cgpa' WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Updated Successfully'
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  //end of editing of academics table

                                  //<!-- ============================================================== -->
//adding family to table
if(isset($_POST['savefamily'])){
    try{
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $relation = mysqli_real_escape_string($conn, $_POST['relation']);
        $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);


        $query = "INSERT INTO family_table1(name,relation,occupation)VALUES('$name','$relation','$occupation')";

        if(mysqli_query($conn, $query)){
            $res = [
                'status' => 200,
                'message' => 'Details Updated Successfully'
            ];
            echo json_encode($res);
    }else {
        throw new Exception('Query Failed: ' .mysqli_error($conn));
    }
} catch (Exception $e) {
    $res = [
        'status' => 500,
        'message' => 'Error: ' . $e->getMessage()
    ];
    echo json_encode($res);
}
}
//end of add family members

//edit of family table
if (isset($_POST['edit_familydetails'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  
    $query = "SELECT * FROM family_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  //data only for editing
    $User_data = mysqli_fetch_array($query_run);
  
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Fetch Successfully by id',
        'data' => $User_data
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  
  // edit family details table
  if (isset($_POST['save_editfamily'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $relation = mysqli_real_escape_string($conn, $_POST['relation']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);


  
    $query = "UPDATE family_table1 SET name='$fname',relation='$frelation',occupation='$foccupation' WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Updated Successfully'
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  
  //end of editing of family table

//deleting family detail

if(isset($_POST['delete_family'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $query = "DELETE FROM family_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $res = [
            "status"=> 200,
            "message"=> "Deleted succesfully"
            ];
            echo json_encode($res);
            return;
    }else {
        $res = [
            "status"=> 500,
            "message"=> "Details not deleted"
        ];
        echo json_encode($res);
        return;
    }
}
//deleting family detail end

///                         <!-- ============================================================== -->

//adding of meeting details start

if(isset($_POST['save_meetingdetails'])){
    try{
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $purpose = mysqli_real_escape_string($conn,$_POST['purpose']);
        $points = mysqli_real_escape_string($conn,$_POST['points']);

        $query = "INSERT INTO  parent_table1(date,purpose,points) VALUES ('$date', '$purpose', '$points')";
        if(mysqli_query($conn, $query)){
            $res = [
                'status' => 200,
                'message' => 'Details Updated Successfully'
            ];
            echo json_encode($res);
    }else {
        throw new Exception('Query Failed: ' .mysqli_error($conn));
    }
} catch (Exception $e) {
    $res = [
        'status' => 500,
        'message' => 'Error: ' . $e->getMessage()
    ];
    echo json_encode($res);
}
}


//deleting meeting detail

if(isset($_POST['delete_meeting'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $query = "DELETE FROM parent_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $res = [
            "status"=> 200,
            "message"=> "Deleted succesfully"
            ];
            echo json_encode($res);
            return;
    }else {
        $res = [
            "status"=> 500,
            "message"=> "Details not deleted"
        ];
        echo json_encode($res);
        return;
    }
}
//deleting meeting detail end

//editine of meeting detail  start

if (isset($_POST['edit_meetingdetails'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  
    $query = "SELECT * FROM parent_table1 WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  //data only for editing
    $User_data = mysqli_fetch_array($query_run);
  
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Fetch Successfully by id',
        'data' => $User_data
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  

if (isset($_POST['save_editmeeting'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['id']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
    $points = mysqli_real_escape_string($conn, $_POST['points']);


  
    $query = "UPDATE parent_table1 SET date='$date',purpose='$purpose',point='$points'  WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Updated Successfully'
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  
  //end of editing of meeting details endpoint

  ?>

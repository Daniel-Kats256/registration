<?php
$errorMessage = " ";
if(isset($_POST['next'])){
    
//declaring variables
$regno = $_POST['regno'];
$stdno = $_POST['stdno'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$course = $_POST['course'];

 
//creating db connection
if(!empty($regno) || !empty($stdno) || !empty($phone) || !empty($email) || !empty($course))  {
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname = "students_db";

    //connection
    $conn = new mysqli($hostname, $user, $password, $dbname);

    //checking error
    if(mysqli_connect_error()){
        die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else {
        $SELECT = "SELECT regno FROM id_detail WHERE regno=? limit 1";
        $INSERT = "INSERT Into id_detail ( regno, stdno, phone, email, course ) values ( ?,?,?,?,?)";

         //prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $regno);
         $stmt->execute();
         $stmt->bind_result($regno);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         //checking firstname
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss", $regno, $stdno, $phone, $email, $course);
            $stmt->execute();
            header("location: index.php?ref=location");
            exit(); 
            // $errorMessage = "record inserted successfully";
        }
        else{
            $errorMessage = "record has not been inserted";
            // exit();
        }
        $stmt->close();
        $conn->close();
    }
}
else{
    $errorMessage = "all fields are required";
    exit();
}
}
?>
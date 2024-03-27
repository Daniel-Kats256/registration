<?php
$errorMessage = " ";
if(isset($_POST['next'])){
//declaring variables
$pname = $_POST['pname'];
$relation = $_POST['relation'];
$work = $_POST['work'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$residence = $_POST['residence'];

//creating db connection
if(!empty($pname) || !empty($relation) || !empty($work) || !empty($email) || !empty($phone) || !empty($residence))  {
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
        $SELECT = "SELECT pname FROM parents WHERE pname=? limit 1";
        $INSERT = "INSERT Into parents ( pname, relation, work, phone, email, residence ) values ( ?,?,?,?,?,?)";

         //prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $pname);
         $stmt->execute();
         $stmt->bind_result($pnmae);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         //checking firstname
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $pname, $relation, $work, $phone, $email, $residence);
            $stmt->execute();
            header("location: index.php?ref=school");
            exit(); 
            // $errorMessage = "record inserted successfully";
        }
        else{
            $errorMessage = "All fields are required";
            // exit();
        }
        $stmt->close();
        $conn->close();
    }
}
else{
    $errorMessage = "record has not been inserted";
    exit();
}
}
?>
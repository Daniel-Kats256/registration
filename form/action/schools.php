<?php
$errorMessage = " ";
if(isset($_POST['next'])){
//declaring variables
$school = $_POST['school'];
$place = $_POST['place'];
$faculty = $_POST['faculty'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];


 
//creating db connection
if(!empty($school) || !empty($place) || !empty($faculty) || !empty($email) || !empty($phone) || !empty($phone1) || !empty($phone2))  {
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
        $SELECT = "SELECT school FROM schools WHERE school=? limit 1";
        $INSERT = "INSERT Into schools ( school, place, faculty, email, phone, phone1, phone2 ) values ( ?,?,?,?,?,?,?)";

         //prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $school);
         $stmt->execute();
         $stmt->bind_result($school);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         //checking firstname
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssss", $school, $place, $faculty, $email, $phone, $phone1, $phone2);
            $stmt->execute();
            header("location: index.php?ref=final");
            exit(); 
            // $errorMessage = "record inserted successfully";
        }
        else{
            $errorMessage = "All fields are required";
            exit();
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
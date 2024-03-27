<?php
$errorMessage = " ";
if(isset($_POST['next'])){
//declaring variables
$sname = $_POST['sname'];
$fname = $_POST['fname'];
$oname = $_POST['oname'];
$dob = $_POST['dob'];
$dropdown = $_POST['dropdown'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
//creating db connection
if(!empty($sname) || !empty($fname) || !empty($oname) || !empty($dob) || !empty($dropdown) || !empty($religion) || !empty($nationality))  {
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
        $SELECT = "SELECT fname FROM bio_data WHERE fname=? limit 1";
        $INSERT = "INSERT Into bio_data ( sname, fname, oname, dob, dropdown, religion, nationality) values ( ?,?,?,?,?,?,?)";

         //prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $fname);
         $stmt->execute();
         $stmt->bind_result($fname);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         //checking firstname
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssss", $sname, $fname, $oname, $dob, $dropdown, $religion, $nationality);
            $stmt->execute();
            header("location: index.php?ref=id_details");
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
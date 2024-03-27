<?php
$errorMessage = " ";
if(isset($_POST['next'])){
//declaring variables
$district = $_POST['district'];
$county = $_POST['county'];
$scounty = $_POST['scounty'];
$parish = $_POST['parish'];
$village = $_POST['village'];
$residence = $_POST['residence'];

 
//creating db connection
if(!empty($district) || !empty($county) || !empty($scounty) || !empty($parish) || !empty($village) || !empty($residence))  {
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
        $SELECT = "SELECT district FROM locations WHERE district=? limit 1";
        $INSERT = "INSERT Into locations ( district, county, scounty, parish, village, residence ) values ( ?,?,?,?,?,?)";

         //prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $district);
         $stmt->execute();
         $stmt->bind_result($district);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         //checking firstname
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $district, $county, $scounty, $parish, $village, $residence);
            $stmt->execute();
            header("location: index.php?ref=parent");
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
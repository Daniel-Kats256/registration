<?php
session_start();
// ob_start()
error_reporting(E_ALL);
// include "db_conn.php";
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "students_db";

$conn = mysqli_connect($hostname, $user, $password, $dbname);
// if($conn){
//     $errorMessage = "". mysqli_connect_error();
// }

$errorMessage = "";
if (isset($_POST['login'])){
    
    $fname = $_POST['fname'];
    $stdno = $_POST['stdno'];

    if (empty($fname)|| empty($stdno)) {
        $errorMessage = "Both student name and number are required.";
    } 
    else {
        $sql = "SELECT *
        FROM bio_data
        INNER JOIN id_detail ON bio_data.id = id_detail.id
        INNER JOIN parents ON id_detail.id = parents.id
        INNER JOIN schools ON parents.id = schools.id
        WHERE bio_data.fname = ? AND id_detail.stdno = ?";
                
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $fname, $stdno);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if($row['fname'] === $fname && $row['stdno'] === $stdno ){
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['stdno'] = $row['stdno'];
                $_SESSION['sname'] = $row['sname'];
                $_SESSION['oname'] = $row['oname'];
                $_SESSION['course'] = $row['course'];
                $_SESSION['regno'] = $row['regno'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['school'] = $row['school'];
                $_SESSION['place'] = $row['place'];
                $_SESSION['faculty'] = $row['faculty'];
                $_SESSION['phone2'] = $row['phone2'];
                $_SESSION['pname'] = $row['pname'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['work'] = $row['work'];
                $_SESSION['residence'] = $row['residence'];
                $_SESSION['id'] = $row['id'];

                $pname = $row['pname'];
                $school = $row['school'];
                $_SESSION['pname'] = $pname;
                $_SESSION['school'] = $school;

                header("location: index.php?ref=urban");
                exit();      
            }
            else {
                $errorMessage = "Student name and student number don't match";
                exit();
            }
        } 
        else {
            $errorMessage = "Account not found.";
        }
    }
}
?>
<form action="<?=$_SERVER['REQUEST_URI']?>" class="login" method="post">
        <div>
            <div class="logo"></div>
            <?php if (isset($errorMessage)): ?>
                <p><?php echo $errorMessage; ?></p>
            <?php endif; ?>
           <div>
             <label for="fname">Student Name: </label>
                <div>
                    <input type="text" name="fname" id="fname">
                </div>
            </div>
            <div>
                <label for="stdno">Student Number: </label>
                <div>
                    <input type="text" name="stdno" id="stdno">
                </div>
            </div>
            <div>
                <button type="submit" name="login">LOGIN</button>
            </div>
            <div>
                <!-- <button >
                    <a href="index.php?ref=bio_data">Register Here</a>
                </button> -->
            </div>
            
        </div>
    </form>
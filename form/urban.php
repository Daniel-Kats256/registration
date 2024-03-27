<?php 
session_start();
   if(isset($_SESSION['id']) && isset($_SESSION['sname']) && isset($_SESSION['fname']) && isset($_SESSION['oname']) && isset($_SESSION['regno']) && isset($_SESSION['course']) && isset($_SESSION['residence']) && isset($_SESSION['phone']) && isset($_SESSION['email']) && isset($_SESSION['school']) && isset($_SESSION['place']) && isset($_SESSION['faculty']) && isset($_SESSION['phone2']) && isset($_SESSION['pname']) && isset($_SESSION['phone']) && isset($_SESSION['work']) && isset($_SESSION['residence'])) {
    // include 'action/session.php';
?>
<div class="top">
            <div class="logo"></div>
        </div>
    <section class="">
        <h1>Hello, <?php echo $_SESSION['fname']; ?></h1>
    </section>
    <section class="content_urban">
        <div class="top">
            <h1>Congragulations, Fully Registered with Urban Students System</h1>
        </div>
        <div class="form">
            <div>
                <div>
                    <p>Surname : </p>
                    <p>
                    <?php echo $_SESSION['sname']; ?>
                    </p>
                </div>
                <div>
                    <p>First Name :</p>
                    <p>
                         <?php echo $_SESSION['fname']; ?>
                    </p>
                </div>
                <div>
                    <p>Other Names : </p>
                    <p>
                        <?php echo $_SESSION['oname']; ?>
                    </p>
                </div>
                <div>
                    <p>Students Number:</p>
                    <p>
                        <?php echo $_SESSION['stdno']; ?>
                    </p>
                </div>
                <div>
                    <p>Course :</p>
                   <p>
                        <?php echo $_SESSION['course']; ?>
                   </p>
                </div>
                <div>
                    <p>Registration Number :</p>
                   <p>
                         <?php echo $_SESSION['regno']; ?>
                   </p>
                </div>
                <div>
                    <p>Phone Contact :</p>
                   <p>
                        <?php echo $_SESSION['phone']; ?>
                   </p>
                </div>
                <div>
                    <p>Email Address :</p>
                    <p>
                        <?php echo $_SESSION['email']; ?>
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <p>Institution : </p>
                    <p>
                        <?php echo $_SESSION['school']; ?>
                    </p>
                </div>
                <div>
                    <p>Department : </p>
                    <p>
                        <?php echo $_SESSION['place']; ?>
                    </p>
                </div>
                <div>
                    <p>Faculty :</p>
                    <p>
                        <?php echo $_SESSION['faculty']; ?>
                    </p>
                </div>
                <div>
                    <p>Registrar's Contact :</p>
                    <p>
                        <?php echo $_SESSION['phone2']; ?>
                    </p>
                </div>
                <div>
                    <p>Parent/Gaudian :</p>
                    <p>
                        <?php echo $_SESSION['pname']; ?>
                    </p>
                </div>
                <div>
                    <p>Phone Contact :</p>
                    <p>
                        <?php echo $_SESSION['phone']; ?>
                    </p>
                </div>
                <div>
                    <p>Occupation :</p>
                    <p>
                        <?php echo $_SESSION['work']; ?>
                    </p>
                </div>
                <div>
                    <p>Place of Residence :</p>
                    <p>
                        <?php echo $_SESSION['residence']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
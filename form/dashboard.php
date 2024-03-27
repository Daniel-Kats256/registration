<div class="container">
    <div class="left">
        <div class="logo_dash"></div>
        <h2>URBAN STUDENTS <br> REGISTRATION SYSTEM</h2>
        <div>
            <nav>
                <div class="">
                    <a href="index.php?ref=bio_data">Register here</a>  
                </div>
                <div>
                    <a href="index.php?ref=logins">Login</a>
                </div> 
            </nav>
        </div>
    </div>
    <div class="right"><?php
            if(isset($_GET['ref'])){
                $file = $_GET['ref'];
                if($file == 'bio_data'){
                    include ("./form/bio_data.php");
                }
                if($file == 'id_details'){
                    include ("./form/id_details.php");
                }
                if($file == 'location'){
                    include ("./form/location.php");
                }
                if($file == 'parent'){
                    include ("./form/parent.php");
                }
                if($file == 'school'){
                    include ("./form/school.php");
                }
                if($file == 'logins'){
                    include ("./form/logins.php");
                }
                if($file == 'urban'){
                    include ("./form/urban.php");
                }
                if($file == 'final'){
                    include ("./form/final.php");
                }
            }?></div>
</div>
<?php
    include 'action/schools.php';
?>
<div class="title">
        <div class="logo"></div>
        <h2>URBAN STUDENTS REGISTRATION SYSTEM</h2>
</div>    
    <div class="sheet">
        <form action="" method="post">
            <fieldset>
                <legend>School/Institution Details</legend>
                <?php if (isset($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div>
                    <label>Name of School/Institution</label>
                    <div><input type="text" name="school"></div>
                </div>
                <div>
                    <label>Department</label>
                    <div><input type="text" name="place"></div>
                </div>
                <div>
                    <label>Faculty</label>
                    <div><input type="text" name="faculty"></div>
                </div>
                <div>
                    <label>Location</label>
                    <div> <input type="text" name="phone" id=""></div>
                    
                 </div>
                 <div>
                        
                     <label>Principal's Contact</label>
                     <div > <input type="number" name="phone1" id=""></div>
                </div>    
                 <div>
                        <label>Academic Registrar's</label>
                        <div><input type="number" name="phone2" id=""></div>
                </div>
                <div>
                    <label>Email Address</label>
                   <div> <input type="email" name="email"></div>
                </div>
            </fieldset>
            
            <div class="button">
                <div>
                    <a href="index.php?ref=parent">
                        <button type="button">BACK</button>
                    </a>
                </div>
        
                <div>
                   
                        <button type="submit" name="next">SUBMIT</button>
                   
                </div>
            </div>
        </form>
    </div>
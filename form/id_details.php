<?php
    include 'action/id_detail.php';
?>
<div class="title">
        <div class="logo"></div>
        <h2>URBAN STUDENTS REGISTRATION SYSTEM</h2>
</div>

    <div class="sheet">
        <form action="" method="post">
            <fieldset>
                <legend>Student's Identification Details</legend>
                <?php if (isset($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div>
                    <label>Registration Number</label>
                    <div><input type="text" name="regno"></div>
                </div>
                <div>
                    <label>Students' Number</label>
                   <div> <input type="text" name="stdno"></div>
                </div>
                <div>
                    <label>Phone Number</label>
                   <div> <input type="text" name="phone"></div>
                </div>
                <div>
                    <label>Email Address</label>
                    <div><input type="email" name="email"></div>
                </div>
                <div>
                    <label>Course</label>
                    <div><input type="text" name="course"></div>
                </div>
            </fieldset>
            
           <div class="button">
            <div>
                <a href="index.php?ref=bio_data">
                    <button type="button">BACK</button>
                </a>
            </div>
    
            <div class="next">
                
                    <button type="submit" submit="next" name="next">SUBMIT</button>
                
            </div>
           </div>
        </form>
</div>
<?php
include 'action/parents.php';
?>
<div class="title">
        <div class="logo"></div>
        <h2>URBAN STUDENTS REGISTRATION SYSTEM</h2>
</div>    
    <div class="sheet">
        <form action="" method="post">
            <fieldset>
                <legend>Parent/Gaudian's Details</legend>
                <?php if (isset($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div>
                    <label>Full Names</label>
                    <div><input type="text" name="pname"></div>
                </div>
                <div>
                    <label>Relation to the student</label>
                    <div><input type="text" name="relation"></div>
                </div>
                <div>
                    <label>Occupation</label>
                    <div><input type="text" name="work"></div>
                </div>
                <div>
                    <label>Phone Contact</label>
                   <DIV> <input type="text" name="phone"></DIV>
                </div>
                <div>
                    <label>Email Address</label>
                   <div> <input type="email" name="email"></div>
                </div>
                <div>
                    <label>Place of Resident</label>
                    <div><input type="text" name="residence"></div>
                </div>
                <!-- <div>
                    <label>National ID No(NIN)</label>
                    <input type="text" name="nin">
                </div> -->
            </fieldset>
            
            <div class="button">
                <div>
                    <a href="index.php?ref=location">
                        <button type="button">BACK</button>
                    </a>
                </div>
        
                <div>
                    
                        <button type="submit" name="next">SUBMIT</button>
                    
                </div>
            </div>
        </form>
    </div>
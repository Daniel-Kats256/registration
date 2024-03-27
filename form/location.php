<?php
    include 'action/locations.php';
?>
<div class="title">
        <div class="logo"></div>
        <h2>URBAN STUDENTS REGISTRATION SYSTEM</h2>
</div>    
    <div class="sheet">
        <form action="" method="post">
            <fieldset>
                <legend>Student's Physical Location</legend>
                <?php if (isset($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div>
                    <label>District</label>
                   <div> <input type="text" name="district"></div>
                </div>
                <div>
                    <label>County</label>
                   <div> <input type="text" name="county"></div>
                </div>
                <div>
                    <label>Sub-county</label>
                    <div><input type="text" name="scounty"></div>
                </div>
                <div>
                    <label>Parish</label>
                    <div><input type="text" name="parish"></div>
                </div>
                <div>
                    <label>Village</label>
                    <div><input type="text" name="village"></div>
                </div>
                <div>
                    <label>Place of Resident</label>
                   <div><input type="text" name="residence"></div>
                </div>
        
            </fieldset>
            
            <div class="button">
                <div>
                    <a href="index.php?ref=id_details">
                        <button type="button">BACK</button>
                    </a>
                </div>
        
                <div>
                    
                        <button type="submit" name="next">SUBMIT</button>
                    
                </div>
            </div>
        </form>
    </div>
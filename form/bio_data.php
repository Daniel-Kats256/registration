<?php include 'action/bio_datas.php'; ?>
    <div class="title">
        <div class="logo"></div>
        <h2>URBAN STUDENTS REGISTRATION SYSTEM</h2>
    </div>
    
    <div class="sheet">
        <form action="" method="post">
            <fieldset>
                <legend>Student's Bio-data</legend>
                <?php if (isset($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div>
                    <label>Surname</label>
                   <div> <input type="text" name="sname"></div>
                </div>
                <div>
                    <label>First Name</label>
                   <div> <input type="text" name="fname"></div>
                </div>
                <div>
                    <label>Other names</label>
                   <div> <input type="text" name="oname"></div>
                </div>
                <div>
                    <label>Date Of birth</label>
                    <div><input type="date" name="dob"></div>
                </div>
                <div>
                    <label>Gender</label>
                   <div>
                        <select name="dropdown" id="">
                            <option value="gender" selected>select gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                   </div>
                </div>
                <div>
                    <label>Religion</label>
                    <div><input type="text" name="religion"></div>
                </div>
                <div>
                    <label>Nationality</label>
                   <div> <input type="text" name="nationality"></div>
                </div>
            </fieldset>
            
            <div class="button">
                
                <div>
                    <a href="index.php">
                        <button type="button">BACK</button>
                    </a>
                </div>
                <div class="next">
                   
                        <button type="submit" submit="next" name="next">SUBMIT</button>
                
                </div>
            </div>
        </form>
    </div>
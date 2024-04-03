<?php
  include("./header.php");
  
?>      
        <hr>
        <div id="bodysection">
          <center>
        <form onSubmit="return regi_vali(this)" action="../api/chekar.php" method="post" name="register_voter" enctype="multipart/form-data" >
            
            <h2>Registration</h2>
            <div><span><input type="text" name="name" placeholder="Enter Your Name"/></span>
                 <span><input type="number" class="no-spin" name="number" placeholder="Enter Your Number" maxlength="10"/></span>
            </div></br>
            <div><span><input type="password" name="password" placeholder="Enter Your Password"/></span>
                 <span><input type="password" name="cPassword" placeholder="Enter Your Confirm Password"/></span>
            </div></br>
            <input type="text" id="address" name="address" placeholder="Enter Your Address" /></br></br>
            <div id="photo">Select Image:<input type="file" name="photo" /></div></br>
            <div id= drop_role>Select Your Role: <select id="role" name="role">
                <option value="0">Plz Select</option>
                <option value="1">Voter </option>
                <option value="2">Group </option>
              </select></div></br>
            <button type="submit" id="btn">Register</button></br></br>
            Allready user? <a href="../">Login Here</a>
            <input type="hidden" value="voter_save" name="act" />
            </form>
         </center>
        </div>
        
      <?php
        include("./fooder.php");
      ?>
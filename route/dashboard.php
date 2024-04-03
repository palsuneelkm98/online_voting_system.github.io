<?php
    session_start();
    if(isset($_SESSION['login'])){
        $userData=$_SESSION['userData'];
        $groupData=$_SESSION['groupData'];

                          ##################### Check User status ####################       

        if($_SESSION['userData']['status']==0){
          $status="<b style='color:red'>Not Voted</b>";
        }else{
           $status="<b style='color:green'>Voted</b>";
         }
  ?>
  <div id="mainsection">
    <div id="headerSection">
        <a href="../index.php"><input type="button" id="btn_left" value="Back"/></a>
        <input type="button" value="Logout" id="btn_right" onClick="javascript:logout()"/>
        <?php include("header.php"); ?>
    </div>
    <hr>
    
    <div id="profile">
      <div id="pro_img"> <img  id="img_round" src="../uploads/<?php echo $userData['photo'] ;?>" height="150" width="150" id="pro_image" alt="Image Not Found" /></div></br></br>
      <b>Name: </b> <?=$userData['name']?></br></br>
      <b>Mobile: </b> <?=$userData['number']?></br></br>
      <b>Address: </b> <?=$userData['address']?></br></br>
      <b>Status: </b> <?=$status?></br>
    </div>  
      <div id="group">   
        <?php
          if($_SESSION['groupData']){
              for($i=0; $i< count($groupData); $i++){
               ?>
                <div>
                   <div id="group_img">
                      <img src="../uploads/<?php echo $groupData[$i]['photo'] ?>" height="80" width="80" alt="Image Not Fount" />
                    </div></br>
                   <b>Group Name:</b><?=$groupData[$i]['name'];?><br></br>
                   <b>Total Votes:</b><?=$groupData[$i]['voted'];?></br></br>
                   <form action="../api/vote_check.php">
                     <input type="hidden" name="g_voted" value="<?=$groupData[$i]['voted']?>" />
                     <input type="hidden" name="g_id" value="<?=$groupData[$i]['id'] ?>" />
                     <?php 
                        if($_SESSION['userData']['status']==1){
                      ?>
                      <input type="button" value="Voted" id="btn" disabled style="border:1px solid transparent; visibility:hidden " />
                      <?php }else{?> 
                      <input type="submit" name="votebtn" value="Voted" id="btn" />
                      <?php } ?>
                    </form>
                 </div>   
                 <hr>
               <?php     
              }
          }else{
             echo '
               <script>
                  document.getElementById("group").innerHTML="<center><b>Please Add Groups Details</b></center>";
               </script>
              ';          
          }
        ?>
      </div>
    </div>
    <?php
        include("./fooder.php");
        }else{
           header("location:../");
        }
     ?>


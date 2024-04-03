<?php

                  ############### Database Connection #################

   include("./connect.php");
                     
                  ############## Set Session at Login Time #############

   session_start();
   $_SESSION['login']=$_REQUEST['number'];
   global $con;
   $R=$_REQUEST;
   if($_REQUEST['act']='login_voter'){
      $number=$R['number'];
      $password=$R['password'];
      $role=$R['role'];
      
                  ################### Find User Data From Database ###################

      $sql="select * from registration where number='$number' AND password='$password' AND role='$role'";
      $rs=mysqli_query($con,$sql) or die("Query Error");
      $userData=mysqli_fetch_assoc($rs);
      if($userData){

                  #################### Find Group Data on Role From Database #################   
          
         $sql2="select * from registration where role='2'";
         $data2=mysqli_query($con,$sql2) or die("Query Error");
         $groupData=mysqli_fetch_all($data2,MYSQLI_ASSOC);

                  ################## Set session ###################

         $_SESSION['userData']=$userData;
         $_SESSION['groupData']=$groupData;
         
        echo "
        <script>
           alert('Voter login is Successfully !');
           window.location='../route/dashboard.php';
        </script>
        ";
      }
      else{
        echo "
           <script>
              alert('Plz Enter Correct Data');
              window.location='../';
           </script>
        ";
      }  
    }
?>
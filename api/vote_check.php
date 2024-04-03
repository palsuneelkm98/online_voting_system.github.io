<?php

                    ################ Check login or Not login ###############
         
  session_start();
  if(isset($_SESSION['login'])){


                    #################### Database connection #####################

  include("../api/connect.php");
  $g_id=$_REQUEST['g_id'];
  $t_voted=$_REQUEST['g_voted']+1;
  $u_id=$_SESSION['userData']['id'];

                     ################## Update Count of Vote from Database ####################

  $sql="UPDATE registration SET voted='$t_voted' WHERE id='$g_id'";
  $rs=mysqli_query($con,$sql) or die("Query Error");
  
                    ################## Update status from Database ####################    

  $sql1="UPDATE registration SET status='1' WHERE id='$u_id'";
  $rs1=mysqli_query($con,$sql1) or die("Query Error");
  $sql2="SELECT * FROM registration WHERE role='2'";
  
                    ################## Set Session ###################

  if($rs and $rs1){
    $group=mysqli_query($con,$sql2) or die("Query Error");
    $groupData=mysqli_fetch_all($group,MYSQLI_ASSOC);
    $_SESSION['userData']['status']=1;
    $_SESSION['groupData']=$groupData;
    echo"
         <script>
          alert('Thanks For Voting');
          window.location='../route/dashboard.php';
          </script>
        ";
  }else{
    echo "
           <script>
             alert('Some Error Occur');
             window.location='../';
           </script>
         ";
  }


  echo "Groups Id: ".$g_id."</br> Groups Voted: ".$t_voted."</br>User Id: ".$u_id;
}else{
  header("location:../");
}
?>
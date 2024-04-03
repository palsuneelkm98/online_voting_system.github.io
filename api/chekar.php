<?php

                    ################### Database Connection ################# 

  include("./connect.php");
  global $con;
  if($_REQUEST['act']=="voter_save")
  {
     $R=$_REQUEST;
     global $con;
     $name=$R['name'];
     $number=$R['number'];
     
     

               ######################## Check unic Voter ############################     
             
 $sql1="SELECT number FROM registration WHERE number='$number'";
 $rs=mysqli_query($con,$sql1) or die("Query Error");
 $data=mysqli_fetch_array($rs);
 if($data['number']==$number){
   echo "
        <script>
          alert('This Number is Allready Exist !');
          window.location='../route/register.php';
        </script>
        ";
        
 }


            ################## Get Image name and Extention Name #####################
            
            
     $tmp_name=$_FILES['photo']['tmp_name'];
     $photo=$_FILES['photo']['name'];
     $photo_name=explode('.',$photo);


            ################### Set Unic Name in Image ###################  


     $d= getdate();
     $date= $d['hours'].$d['minutes'].$d['seconds'].$d['mday'].$d['mon'].$d['year'];

     $a=array($photo_name[0].$date,$photo_name[1]);
     $photo=implode(".",$a);
    
           #################### Uploades Image on local system ###################

     if($photo){
        move_uploaded_file("$tmp_name","../uploads"."/$photo");
     }

         ################# Save data on Database ##################

      $sql="INSERT INTO registration (`name`,`number`,`password`,`address`,`photo`,`role`,`voted`,`status`) VALUES ('$R[name]','$R[number]','$R[password]','$R[address]','$photo','$R[role]','0','0')";
   
     $rs=mysqli_query($con,$sql) or die("Query Error");
     if($rs){
        echo "
              <script>
                  alert('Your Registration is Successfully !!') ;
                  window.location='../';   
              </script>
             ";       
     }else{
        echo "
               <script>
                   alert('Somethings Went Wrong Please Try Again !!');
                   window.location='../route/register.php';
               </script>
             ";       
      }
   }

?>
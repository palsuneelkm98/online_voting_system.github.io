        /////////////////////// VALIDATE INDEX FUNCTION ////////////////

function validate_index(frm)
 { 
     if(frm.number.value==""){
        alert("Plz Enter User Number");
        frm.number.focus();
        return false;
      }

     if(isNaN(frm.number.value)){
         alert("Plz Enter Only Number");
         frm.number.focus();
         return false;
      }

     if(frm.number.value.length<10){
        alert("Minimume Digit Lenth is 10");
        frm.number.focus();
        return false;
      }

     if(frm.number.value.length>10){
        alert("Max Digit Lenth is 10");
        frm.number.focus();
        return false;
      }

     if(frm.password.value==""){
        alert("Plz Enter Password");
        frm.password.focus();
        return false;
      }

     if(1>frm.role.value){
        alert("Plz Select Currect Role");
        frm.role.focus();
        return false;
      }
     return true;
  }
    


///////////////////////////////////// REGISTER VALIDATE FUNCTION ///////////////////////

 


function regi_vali(frm)
 {  
    if(frm.name.value==""){
        alert("Plz Enter Your Name");
        frm.name.focus();
        return false;
     }

     if(!isNaN(frm.name.value)){
        alert("Plz Enter Only A-Z Character");
        frm.name.focus();
        return false;
      }
 
     if(frm.number.value==""){
         alert("Plz Enter Your Number");
         frm.number.focus();
         return false;
      }

      if(frm.number.value.length<10){
         alert("Minimume Digit Lenth is 10");
         frm.number.focus();
         return false;
      }
  
      if(frm.number.value.length>10){
        alert("Max Digit Lenth is 10");
        frm.number.focus();
        return false;
      }
 
      if(isNaN(frm.number.value)){
         alert("Plz Enter Only Number");
         frm.number.focus();
         return false;
      }

      if(frm.password.value==""){
        alert("Plz Enter Your Password");
        frm.password.focus();
        return false;
      }

    if(frm.cPassword.value==""){
        alert("Plz Enter Your Confirm Password");
        frm.cPassword.focus();
        return false;
      }

     if(frm.password.value != frm.cPassword.value){
        alert("Your Password is Not Match");
        frm.cPassword.focus();
        return false;
      }

     if(frm.address.value==""){
        alert("Plz Enter Your Address");
        frm.address.focus();
        return false;
      }

     if(!isNaN(frm.address.value)){
        alert("Plz Enter Character");
        frm.address.focus();
        return false;
      }

     if(frm.photo.value==""){
        alert("Plz Upload Your Image");
        return false;
      }

     if(frm.photo.value){
       let image=frm.photo.value;
       let img_arr=image.split(".");
       if(img_arr[1]!='jpg' && img_arr[1]!='png' && img_arr[1]!='jpeg'){
          alert("Plz Upload Only JPG or JPEG ro PNG Image");
          return false;
        }
      }

     if(frm.role.value<=0){
        alert("Plz Select Your Role");
        frm.role.focus();
        return false;
      }
      return true;
  }


                             ///////////////////////////// LOGOUT FUNCTION //////////////////////////

function logout(){
   let check=confirm("Are you sure want to logout ?");
   if(check==true){
      window.location="../api/logout.php";
   }
}
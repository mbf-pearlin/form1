<script>
function validationform()                                   
{
    // var name = document.forms["contact-form"]["name"];              
    var fname = document.forms["contact-form"]["fname"];              
    var email = document.forms["contact-form"]["email"];   
    var phone = document.forms["contact-form"]["phone"]; 
    var comments =  document.forms["contact-form"]["comments"]; 
    var x = 0;
    if (fname.value == "")                                 
    {
        document.getElementById("fname-errmsg").style.display = "block";
        x++;        //return false;
    }
    
   else if (email.value == "")                                  
    {
        document.getElementById("email-errmsg").style.display ="block";
        x++;
    }
  
    else if (email.value.indexOf("@", 0) < 0)                
    {
        document.getElementById("email-errmsg").style.display ="block";
        x++;
    }
  
   else if (email.value.indexOf(".", 0) < 0)                
    {
        document.getElementById("email-errmsg").style.display="block";
        x++;
        
    }
  
   else if (phone.value == "")                          
    {
      document.getElementById("phone-errmsg").style.display="block";
        x++;
    }



    else if (comments.value == "")                                 
    {
        document.getElementById("comments-errmsg").style.display="block";
        x++;
    }
    if(x==0){
        return true;
    }else{
        return false;
    }
  
  return true;
    
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        return false;
            return true;
    }

</script>
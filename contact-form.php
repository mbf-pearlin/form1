<!DOCTYPE html>
<html>
<head>
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
 
#loading-img{
display:none;
}
 
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
 .error-message{
    display: none;
 }
</style>
</head>
<body>
 
<div class="container">
<div class="row">
 
<div class="col-md-8">
<h1><img src="" width="80px">Contact Form With mysql</h1>
<form name="contact-form"  onsubmit="return validationform()" action="insert.php" method="post" id="contact-form" >
<div class="form-group">
<label for="Name">Name</label>
<input type="text" onkeypress="return ValidateAlpha(event);" class="form-control" name="fname" placeholder="Name">
<div class="error-message" id="fname-errmsg">Please enter your name</div>
</div> 
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="text" class="form-control" name="email" placeholder="Email">
<div class="error-message" id="email-errmsg">please enter valid mail id</div>
</div>
<div class="form-group">
<label for="Phone">Phone</label>
<input type="text" maxlength="10" pattern="\d{10}"  onkeypress="return isNumber();" class="form-control" name="phone" placeholder="Phone">
<div class="error-message" id="phone-errmsg">enter valid phone number</div>
</div>
<div class="form-group">
<label for="comments">Comments</label>
<textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
</div>
<div class="error-message" id="comments-errmsg">please fill this</div>
 <button type="submit" class="btn btn-primary" name="submit"  value="Submit" id="submit_form">Submit</button>
<img src="img/loading.gif" id="loading-img">
</form>
<form name="contact-form" action="display.php" method="post" id="contact-form" >
</form>
<div class="response_msg"></div>
</div>
</div>
</div>

</body>>
</html>

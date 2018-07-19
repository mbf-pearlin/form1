




















<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("chmc", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL


$contactName = $_POST['contactname'] ;
$contactEmail = $_POST['contactemail'];
$contactNumber = $_POST['contactnumber'];
$contactSub = $_POST['contactsub'];
$contactContent = $_POST['contactcontent'];

if($contactName !=''||$contactEmail !='')
{
        $sql ="INSERT INTO contact_form_info (contactname,contactemail,contactnumber,contactsub,contactcontent) VALUES ('$contactName','$contactEmail','$contactNumber','$contactSub','$contactContent')";
        
        echo "Thank you for Submitting.";
    }
else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}


}
mysql_close($connection); 
?>


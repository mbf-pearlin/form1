 <html>
 <body>
<?php
session_start();

echo $_SESSION['fname'];
echo $_SESSION['email'];
echo $_SESSION['phone'];
echo $_SESSION['comments'];

?>
 </body>
 </html> 
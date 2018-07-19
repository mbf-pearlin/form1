<html>
<body>
<?php
$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "fyrhp";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);

}
?>
<form action="display.php" method="post">
            Name
            <input type="text" name="name" value="<?php echo $row ['fname']; ?> " size=10>
            Username
            <input type="email" name="email" value="<?php echo $row ['email']; ?> " size=10>
            Password
            <input type="text" name="phone" value="<?php echo $row ['phone']; ?>" size=10>
            comments
            <input type="text" name="comments" value="<?php echo $row ['comments']; ?>" size=10>
            <input type="submit" name="submit" value="Update">
        </form>
        </body>
        </html>
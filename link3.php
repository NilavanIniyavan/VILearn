<?php
 
// Username is root
$username = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'vilearn';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $username,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM wishlist ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WISHLIST REGISTRATION</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fevicon.png">
  </head>
  
 
<body>
    <section>
    <header>
      <div id = "hd">
        <h1>ViLearn!</h1>
        <img src="image2.png" alt="">
      </div>
    </header>
	<center>
        <h1>WISHLIST REGISTRATION</h1>
        <!-- TABLE CONSTRUCTION -->
        <table border="1">
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>No of Wishlist</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['course_code'];?></td>
                <td><?php echo $rows['course_name'];?></td>
                <td><?php echo $rows['no_of_wishlist'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>

      <p style="color: red">
        If course has less than 10 registrations please ignore !!!
      </p>

	</center>
    </section>
</body>
 
</html>
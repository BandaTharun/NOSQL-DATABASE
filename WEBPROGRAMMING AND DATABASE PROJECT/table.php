
<?php

// connecting to the DB
include 'db_connect.php';

?>




<?php

// Create table
$email = "user@gamail.com";
$sql = "CREATE TABLE  `" . $email . "`  (
    id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Descriptions VARCHAR(100) NOT NULL,
    Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

?>








$sql = "SELECT * FROM USERS_NOTEBOOK_DATA INNER JOIN users ON USERS_NOTEBOOK_DATA.user_id = users.id WHERE users.email ='".$email."'";
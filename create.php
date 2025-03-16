<?php include('dbconnect.php');
// query creating a table with 5 fields
$sql = "CREATE TABLE Photographs (
    picture_number INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Subject VARCHAR(255) NOT NULL,
    Location VARCHAR(255) NOT NULL,
    date_taken TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    picture_url VARCHAR(255) NOT NULL
    );";

if (mysqli_query($connect, $sql)) {
  echo "New Photographs table created successfully.<br>";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
    
?>
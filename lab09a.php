<?php include('dbconnect.php'); ?>

<div style="font-size:28px; color:Blue; font-family:sans-serif">
<?php

$sql = "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Bulbasaur', 'Kanto', '~kbondoc/lab09pics/pokemon1.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Ivysaur', 'Kanto','~kbondoc/lab09pics/pokemon2.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Venusaur', 'Kanto', '~kbondoc/lab09pics/pokemon3.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Charmander', 'Kanto', '~kbondoc/lab09pics/pokemon4.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Charmeleon', 'Kanto', '~kbondoc/lab09pics/pokemon5.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Charizard', 'Kanto', '~kbondoc/lab09pics/pokemon6.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Squirtle', 'Kanto', '~kbondoc/lab09pics/pokemon7.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Wartortle', 'Kanto', '~kbondoc/lab09pics/pokemon8.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Blastoise', 'Kanto', '~kbondoc/lab09pics/pokemon9.png');";
$sql .= "INSERT INTO Photographs (Subject, Location, picture_url) 
        VALUES ('Farfetch\'d', 'Kanto', '~kbondoc/lab09pics/pokemon83.png');";

if (mysqli_multi_query($connect, $sql)) {
    echo "New records created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}   

?>
</div>
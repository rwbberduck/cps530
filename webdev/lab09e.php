<?php include('dbconnect.php'); ?>
<style>
    div {
        font-family: arial, sans-serif;
    }
    p {
        padding: 10px;
        font-size: 30pt;
        color: blue;
        text-align: center;
    }
</style>
<div>
<?php
$sql = "SELECT COUNT(*) AS total FROM Photographs";
$result = mysqli_query($connect, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "Number of images currently in database: " . $row["total"];
}
else {
    echo "Error: " . mysqli_error($connect);
}

$sql = "SELECT * FROM Photographs ORDER BY RAND() LIMIT 1";
$result = mysqli_query($connect, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<figure>" . 
        "<img src=" . '"' . $row["picture_url"] . '" ' . "alt=" . '"' . $row["Subject"] . '"' . ">" .
        "<figcaption>" . $row["Subject"] . " in " . $row["Location"] . "</figcaption>";
}
else {
    echo "Error: " . mysqli_error($connect);
}

?>
</div>
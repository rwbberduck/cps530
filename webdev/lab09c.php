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
$sql = "SELECT * FROM Photographs ORDER BY date_taken DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    $inONT = false;
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["Location"] == "Ontario") {
            echo "<figure>" . 
                  "<img src=" . '"' . $row["picture_url"] . '" ' . "alt=" . '"' . $row["Subject"] . '"' . ">" .
                  "<figcaption>" . $row["Subject"] . " in " . $row["Location"] . "</figcaption>";
            $inONT = true;
        }
    }
    if (!$inONT) {
        echo "<p>No Ontario Photos<p>";
    }
}
else {
    echo "No results";
}

?>
</div>
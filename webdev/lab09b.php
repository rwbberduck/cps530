<?php include('dbconnect.php'); ?>
<style>
    table {
        font-family: arial, sans-serif;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 5px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div style="font-size:28px; color:Blue; font-family:sans-serif">

<?php

$sql = "SELECT * FROM Photographs ORDER BY date_taken DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table> <tr> <th>Picture Number</th> <th>Subject</th> <th>Location</th>
          <th>Date Taken</th> <th>Picture URL</th> </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>" .
             "<td>" . $row["picture_number"]. "</td>" . 
             "<td>" . $row["Subject"]. "</td>" . 
             "<td>" . $row["Location"]. "</td>" . 
             "<td>" . $row["date_taken"]. "</td>" . 
             "<td>" . $row["picture_url"]. "</td>" .
             "</tr>";
    }
    echo "</table>";
}
else {
    echo "No results";
}

// mysqli_close($connect);

?>
</div>

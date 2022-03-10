<?php
if (isset($_GET['sort'])) {
    $SortingOrder = $_GET['sort'];
} else {
    $SortingOrder = "ASC";
}

$sql = "SELECT * FROM medicijnen ORDER BY medicijn $SortingOrder";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    //output data from every row selected and inserts it into the scoreboard container
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='table'><td>", $row["medicijn"], "</td><td>", $row["voorraad"], "</td><td>","<a href=",$row["links"]," target='_blank'>", "Meer Informatie</a>", "</td></tr>";
    }
}


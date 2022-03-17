<?php
if (isset($_GET['sort'])) {
    if ($_GET['sort'] != 'DESC') {
        $sql = "SELECT * FROM medicijnen ORDER BY medicijn ASC";
    } else {
        $sql = "SELECT * FROM medicijnen ORDER BY medicijn DESC";
    }
} else {
    $sql = "SELECT * FROM medicijnen ORDER BY medicijn ASC";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    //output data from every row selected and inserts it into the scoreboard container
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='table'><td>", $row["medicijn"], "</td><td>", $row["voorraad"], "</td><td>","<a href=",$row["links"]," target='_blank'>", "Meer Informatie</a>", "</td></tr>";
    }
}


<?php
$sql = "SELECT medicijn, links, voorraad FROM medicijnen ORDER BY medicijn ASC";

$result = mysqli_query($conn, $sql);
echo "<div class='table-style'> <table>";
echo "<th>medicijn</th>";
echo "<th>voorraad</th>";
if (mysqli_num_rows($result) > 0) {
    //output data from every row selected and inserts it into the scoreboard container
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='table'><td>", $row["medicijn"], "</td><td>", $row["voorraad"], "</td><td>","<a href=",$row["links"]," target='_blank'>", "Meer Informatie</a>", "</td></tr>";
    }
}
echo "</table></div>";

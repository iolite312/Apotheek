<?php
$sql = "SELECT * FROM news ORDER BY RAND()";
$result = mysqli_query($conn, $sql);
echo "<div class='div'>";
if(mysqli_num_rows($result) > 0) {
  //output data from every row selected and inserts it into the scoreboard container
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		if($i < 3){
	  echo "<div class='center'>";
      echo "<img class='scale' src=/apo_leon/img/" . $row["IMG"]. ">";
	  echo "<h2 class='newsheader'>" . $row["Titel"] . "</h2>";
	  echo "<p class='newsdesc'>" . $row["Intro"] . "</p>";
	  echo "</div>";
		}
		$i++;
	}
}
else {
  echo "0 results";
}
echo "</div";

$conn->close();
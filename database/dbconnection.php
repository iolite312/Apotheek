<?php    
    $servername = 'localhost';
    $username = 'apotheek';
    $password = 'Website';
    $dbname = 'apo_leon';
    $conn = mysqli_connect($servername,$username, $password, $dbname);
    //check that connection happend
    if(mysqli_connect_errno())
    {
        echo "1: Connection Failed"; //error code #1 - connection failed
        exit();
    }
?>

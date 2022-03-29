<?php
        $servername = '82.151.61.71';
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
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    //check if name exists
    $namecheckquery = "SELECT name FROM users WHERE name='" . $username . "';";
   
    $namecheck = mysqli_query($conn, $namecheckquery) or die("2: Name check query failed"); //error code #2 - namecheckquery failed

    if (mysqli_num_rows($namecheck) > 0)
    {
        echo "3: Name already exists"; //error code #3 - name already exists
        exit();
    }

    //add user to the table
    $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    $insertuserquery = "INSERT INTO users (name, hash) VALUES ('" . $username . "', '" . $hash . "');";
    mysqli_query($conn, $insertuserquery) or die("4: Insert player query failed"); //error code #4 - insert query failed

    header("Location: /apo_leon")

?>
<html>
    <head>
        <title>Table</title>
        <style>
            body{
                background-color: black;
                text-align: center;
                color: white;
                font-family: monospace;
            }
            table{
                border-collapse: collapse;
                width: 80%;
                margin: auto;
            }
            th, td{
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            tr:hover{
                background-color: #f5f5f5;
                color: black;
            }
            h1{
                text-align: center;
                border: 10px outset grey;
                background-color: grey;
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <h1>Music Database</h1>
    </body>
</html>
<?php
    $host = "localhost"; 
    $user = "pphejlada1"; 
    $pass = "pphejlada1"; 
    $db = "pphejlada1";
    $artist = $_POST['artist'];
    $album = $_POST['album']; 
    $r = mysql_connect($host, $user, $pass);
    if (!$r) {
        echo "Could not connect to server\n";
        trigger_error(mysql_error(), E_USER_ERROR);
    }
    $r2 = mysql_select_db($db);
    if (!$r2) {
        echo "Cannot select database\n";
        trigger_error(mysql_error(), E_USER_ERROR); 
    } 
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO music(artist, album) VALUES ('$artist', '$album')";
        $rs = mysql_query($sql);
        if (!$rs) {
            echo "Could not execute query: $query";
            trigger_error(mysql_error(), E_USER_ERROR); 
        }
        echo "<table><tr><th>ID</th><th>Artist</th><th>Album</th></tr>";
        $query = "SELECT * FROM music";
        $rs = mysql_query($query);
        if (!$rs) {
            echo "Could not execute query: $query";
            trigger_error(mysql_error(), E_USER_ERROR); 
        }
        while ($row = mysql_fetch_assoc($rs)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['artist'] . "</td><td>" . $row['album'] . "</td></tr>";
        }
        echo "</table>";
        mysql_close();
    }
    if(isset($_POST['view'])){
        echo "<table><tr><th>ID</th><th>Artist</th><th>Album</th></tr>";
        $query = "SELECT * FROM music";
        $rs = mysql_query($query);
        if (!$rs) {
            echo "Could not execute query: $query";
            trigger_error(mysql_error(), E_USER_ERROR); 
        }
        while ($row = mysql_fetch_assoc($rs)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['artist'] . "</td><td>" . $row['album'] . "</td></tr>";
        }
        echo "</table>";
        mysql_close();
    }
?>
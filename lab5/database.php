<?php
$localhost = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "WPRG";
if(!$connection = mysqli_connect($localhost, $username, $password, $dbname)){
    exit("Error: could not establish database connection");
}
else{
    echo "Connected to the database";
}

$query = "Show tables";
$result = mysqli_query($connection, $query);
echo "<br>Numer of tables in the database: ".mysqli_num_rows($result);
echo "<br>Tables in the database[fetch_rows]: <br>";
while($row = mysqli_fetch_row($result)){
    echo $row[0]."<br>";
}
$result = mysqli_query($connection, $query);
echo "<br>Tables in the database[fetch_rows]: <br>";
while($row = mysqli_fetch_array($result)){
    echo $row[0]."<br>";
}
$result = mysqli_query($connection, $query);
echo "<br>Tables in the database[fetch_rows]: <br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['Tables_in_WPRG']."<br>";
}

$query = "INSERT INTO `test` (name) VALUES ('Jan'), ('Anna'), ('Krzysztof')";
if(mysqli_query($connection, $query)){
    echo "<br>Records inserted successfully";
}
else{
    echo "<br>Error: could not able to execute $query. ".mysqli_error($connection);
}

mysqli_close($connection);
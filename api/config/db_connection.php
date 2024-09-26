<?php
/*$numero1 = 20;
$numero2 = 30;
$suma = $numero1 + $numero2;
echo $suma;*/


/* Postgres Database connection
Developer : Jessica Ortega*/

$host      = "localhost"; //127.0.0.1
$username  = "postgres";
$password  = "unicesmag";
$dbname    = "beta";
$port      = "5432";

$data_connection = "
host     = $host
port     = $port
dbname   = $dbname
user = $username
password = $password
";

$conn = pg_connect($data_connection);

if (!$conn){
    die("Connection failed: ".pg_last_error());
}else{
    echo "Connected successfully";
}

pg_close($conn);

?> 
<?php

//DB connection
require('../../config/db_connection.php');


$email = $_POST['email'];
$pass = $_POST['passwd'];
$enc_pass = md5($pass);

//Query to insert data into user database

$query ="INSERT INTO users (email,password) VALUES('$email', '$enc_pass')
";

$result = pg_query($conn, $query);

if($result){
    echo "Registration successfully";
}else{
    echo "Registration failed";
}

pg_close($conn);
?>
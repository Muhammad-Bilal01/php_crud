<?php

// call database file
include("config/database.php");
// require("config/database.php");

// Insert Query
/*
    $date = date("Y-m-d H:i:s");
    $sql = "insert into users (username, password, created_at) 
                        values ('bilal','bilal@123','$date')";
*/

// Select Query
// $sql = "select * from users";

// $result = $conn->query($sql);
// if($result){
//     echo "Successful! <br>";
//     // echo "<pre>";
//     // print_r($result);
//     // exit;
//     if($result->num_rows > 0){
//         while($row = $result->fetch_assoc()){
//             echo "<pre>";
//             print_r($row);
//         }
//         exit;
//     }

// }else{
//     echo "ERROR: Query Failed " . $conn->error;
// }


// Update Query

$sql = "UPDATE users SET `username`='shayan' WHERE id = 2";

$result = $conn->query($sql);

// Delete Query
$sql = "Delete from users where id = 3";

$result = $conn->query($sql);
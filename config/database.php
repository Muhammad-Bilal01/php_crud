<?php

// Start session
session_start();
    /**
     * Database Connection:
     * MySQLi extension: work only with mySQL databases.
     * PDO (PHP Data Objects): works with 12 different databases.
     */

     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "inotes";
    
    //  Connecting mySQL with object oriented approch.
    
    //  Create Connection
    $conn = new mysqli($servername,$username,$password,$database);
    // check connection
    if($conn->connect_error){
        
        die("Connection Failed ". $conn->connect_error); # stop the execution and print the message.
    }
    // echo "Connection Successful!";
    

    //  Connecting mySQL with procedual approch.
    // $conn = @mysqli_connect($servername,$username,$password,$database);
    // if(!$conn){
    //     die("ERROR! connection Failed! " . mysqli_connect_error());
    // }

    // echo "Connection Successfull!";

<?php 
if(isset($_SESSION['success'])){
// Show session message
echo $_SESSION['success'];
unset($_SESSION['success']); # clear session storage
}   
if(isset($_SESSION['error'])){
        // Show session message
        echo $_SESSION['error'];
        unset($_SESSION['error']); # clear session storage
}
?>
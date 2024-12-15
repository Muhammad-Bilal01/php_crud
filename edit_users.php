<?php
include("config/database.php");

// GET SELECTED USER
if(isset($_GET['id'])){
    $sql =  "SELECT * FROM users where id = " . $_GET['id'];
    $result = $conn->query($sql);
    // $user = mysqli_fetch_assoc(); // work same
    $user = $result->fetch_assoc();
}


// UPDATE USER


if(isset($_POST['update'])){
    extract($_POST);

   
    $sql = "UPDATE users SET username='$username', password='$password' where id=".$_GET['id'];
    $result = $conn->query($sql);

    if($result){
        $_SESSION["success"] = "User has been updated successfully!";

    }else{
        $_SESSION["error"] = "Something went wrong! ";
    }
    header("LOCATION: users.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Update User</h2>

        <form action="edit_users.php?id=<?php echo $user['id'];?>" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" value="<?php echo $user['username']; ?>" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" value="<?php echo $user['password']; ?>" required>

                <button type="submit" name="update">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>

            <a href="logout.php" class="footerbtn">Logout</a>

        </div>
    </section>

</body>

</html>
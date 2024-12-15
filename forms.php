<?php

    // PHP -GET & POST REQUEST USING HTML FORMS

//     print_r($_GET);
//     echo "<br>";
//    echo isset($_GET);


// echo "<pre>";
// print_r($_GET);
// exit;

if (isset($_POST["submit"])) {
    if(empty($_POST["username"])){
        echo "username is empty <br>";
    }else if(empty($_POST["password"])){
        echo "password is empty <br>";
    }
    else{
        echo "Everything is Okay! <br>";
    }

    if (isset($_POST['courses'])) {
        $course = $_POST['courses'];

        echo "You select the course ". $course ." <br>";
    }else{
        echo "You did not select the course <br>";    
    }

    if (isset($_POST["foods"])) {
      $foods = $_POST["foods"];
      foreach($foods as $food){
        echo "Your favourite food is ". $food . " <br>";
      }
    }

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INotes - Make notes easy</title>
</head>

<body>
    <h1>Forms</h1>
    <form action="index.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </div>

        <div>
            <p>Select course:</p>
            <label for="bscs">
                <input type="radio" name="courses" value="BSCS" id="bscs">BSCS <br>
            </label>
            <label for="bsse">
                <input type="radio" name="courses" value="BSSE" id="bsse">BSSE <br>
            </label>

            <label for="bsai">
                <input type="radio" name="courses" value="BSAI" id="bsai">BSAI <br>
            </label>

        </div>
        <div>
            <p>Select Favourite Foods:</p>
            <label for="tikka">
                <input type="checkbox" name="foods[]" value="Tikka" id="tikka">Tikka <br>
            </label>
            <label for="sweets">
                <input type="checkbox" name="foods[]" value="Sweets" id="sweets">Sweets <br>
            </label>
            <label for="Lassi">
                <input type="checkbox" name="foods[]" value="Lassi" id="Lassi">Lassi <br>
            </label>

        </div>

        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br><br><br>
    <a href="./index.php">Home</a>

</body>

</html>
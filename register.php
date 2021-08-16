<?php
    include 'config.php';

    if($login == 1){
        echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
    } else {

    if(isset($_POST["i_btn"])) {
        $i_name = addslashes($_POST["i_name"]);
        $i_lastName = addslashes($_POST["i_lastName"]);
        $i_phone = addslashes($_POST["i_phone"]);
        $i_email = addslashes($_POST["i_email"]);
        $i_pass = addslashes($_POST["i_pass"]);
        $i_confPass = addslashes($_POST["i_confPass"]);
        if(empty($i_name) || empty($i_lastName) || empty($i_phone) || empty($i_email) || empty($i_pass) || empty($i_confPass)) {
            echo "Please complete all data";
        } else {
            if($i_pass == $i_confPass) {
                $insert = mysqli_query($conn,"INSERT INTO `users` (`i_name`, `i_lastName`, `i_phone`, `i_email`, `i_pass`, `i_confPass`) VALUES ('$i_name', '$i_lastName', '$i_phone', '$i_email', '$i_pass', '$i_confPass')");
                echo "Succes!";
            } else {
                echo "E-mail e ou senha, incorretos!";
            }
        }
    } 
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form</title>
</head>
<body>
   <div class="d1">

   </div> 
   <div class="register">
        <form class="" action="register.php" method="post">
            <h2>Register Form</h2>
            <label for="">Name :</label>
            <input class="txtb" type="text" name="i_name" value="">
            <label for="">Last Name :</label>
            <input class="txtb" type="text" name="i_lastName" value="">
            <label for="">Telephone :</label>
            <input class="txtb" type="text" name="i_phone" value="">
            <label for="">Email :</label>
            <input class="txtb" type="text" name="i_email" value="">
            <label for="">Password :</label>
            <input class="txtb" type="text" name="i_pass" value="">
            <label for="">Confirm Password :</label>
            <input class="txtb" type="text" name="i_confPass" value="">
            <input class="btn2" type="submit" name="i_btn" value="Register">
            <a href="login.php">Sign in</a>
        </form>
        <?php } ?>
   </div>
</body>
</html>
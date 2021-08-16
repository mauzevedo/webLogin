<?php
    include 'config.php';

    if($login == 1){
        echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
    } else {

    

    if(isset($_POST["i_btn"])) {
        $i_email = addslashes($_POST['i_email']);
        $i_pass = addslashes($_POST['i_pass']);
        if(empty($i_email) || empty($i_pass)) {
            echo "Please complete all data";
        } else {
            $selectfdb = mysqli_query($conn,"SELECT * FROM users WHERE i_email = '$i_email' AND i_pass = '$i_pass'");
            $row = mysqli_fetch_array($selectfdb);
            if(isset($row["i_email"]) == $i_email && isset($row["i_pass"]) == $i_pass) {
            echo "Welcome ".$row["i_name"]." in your Accont";

                setcookie('iid',$row['i_id'],time()+(3600 + 24));
                setcookie('login',1,time()+(3600 + 24));
                echo " <meta http-equiv='refresh' content='0; url=profile.php'>";

            } else {
                echo "Email or Password incorrect";
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
   <div class="login">
        <form class="" action="login.php" method="post">
            <h2>Login Form</h2>
            <label for="">Email :</label>
            <input class="txtb" type="text" name="i_email" value="">
            <label for="">Password :</label>
            <input class="txtb" type="text" name="i_pass" value="">
            <div class="check">
                <input type="checkbox" name="" value="">
                <span>Lembrar de mim!</span>
            </div>
            <input class="btn" type="submit" name="i_btn" value="Login">
            <a href="register.php">Ainda não é cliente?
                        <strong>Cadastre-se!</strong></a>
        </form>
        <?php } ?>
   </div>
</body>
</html>
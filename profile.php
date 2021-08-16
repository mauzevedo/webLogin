<?php
include 'config.php';
if($login == 0){
    echo " <meta http-equiv='refresh' content='0; url=login.php'>";
} else {

    $i_id = $_COOKIE['iid'];
    $getinfo = mysqli_query($conn,"SELECT * FROM users WHERE i_id = $i_id "); 
    $arr = mysqli_fetch_array($getinfo);

?>

<span><?php echo " Bem vindo! ". $arr['i_name']; ?></span>
<span><?php echo $arr['i_lastName']; ?></span><br>
<a href="logout.php">Logout</a>

<?php } ?>
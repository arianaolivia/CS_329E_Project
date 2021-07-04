<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userlogins";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "connection";
if(isset($_POST['Login'])){
$username=$_POST['user'];
$password=$_POST['pass'];
$usertype=$_POST['usertype'];
$query="SELECT * FROM userlogin WHERE username='".$username."' and password='".$password."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row = mysqli_fetch_array($result)){
    echo '<script type="text/javascript">alert("you are logined successfully and you are logined as '. $row['usertype'] . '")</script>';
}

if($usertype=="admin"){
?>
<script type="text/javascript">

    window.location.href = "RPS_game_admin.html";
</script>
<?php

}else{
    ?>
    <script type="text/javascript">

        window.location.href = "RPS_game.php";
    </script>
    <?php
}

}else{
    echo 'no result';
}
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Multip User Login</title>
</head>

<form method="POST">
    <table>
        <tr>
            <td>Username:<input type="TEXT" name="user" placeholder="enter username"></td>
        </tr>
        <tr>
            <td>Password:<input type="TEXT" name="pass" placeholder="enter Password"></td>
        </tr>
        <tr>
            <td>Select user type:<select name="usertype">
                    <option value="admin" >admin</option>
                    <option value="user">user</option>

                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="Login" value="Login"></td>
        </tr>
</form>
</body>
</html>
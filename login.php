<!DOCTYPE html>
<?php
$servername="localhost";
$username="crypzzhj";
$password="D7iqck9yZMdr";
$dbname="crypzzhj_userlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $usertype=$_POST['usertype'];
    $query="SELECT * FROM userlogin WHERE username='".$username."' and password='".$password."' and usertype='".$usertype."'";
    $result = mysqli_query($conn, $query);
    if($result==TRUE){
        if($row = mysqli_fetch_array($result)){
            echo '<script type="text/javascript">alert("Success! You are logged in as '. $username . ' and you have *'.$row['usertype'].'* access")</script>';
                if($usertype=="admin"){
                    setcookie("usertype", $usertype, time()+3600);
                    header("Location:../RPS_game_admin.html");
                    exit();
                }elseif($usertype=="user"){
                    setcookie("usertype", $usertype, time()+3600);
                    header("Location:../RPS_game.php");
                    exit();
                }
        }else{
            echo 'Password and username do not match. Please try again or create a new account.'; //create new not yet finished
        }
    }
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Login</title>
</head>

<form method="POST">
    <table>
        <tr>
            <td>Username:<input type="username" name="user" placeholder="enter username"></td>
        </tr>
        <tr>
            <td>Password:<input type="password" name="pass" placeholder="enter password"></td>
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
    On the next page you can upload an image file! </br>
</body>
</html>



<!DOCTYPE html>
<?php
$servername="localhost";
$username=""; //removed for security
$password=""; //removed for security
$dbname=""; //removed for security
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $usertype=$_POST['usertype'];
    $query="SELECT * FROM userlogin WHERE username='".$username."' and password='".$password."' and usertype='".$usertype."'";
    $result = mysqli_query($conn, $query);
    if($result==TRUE){
        if($row = mysqli_fetch_array($result)){
            setcookie("usertype", $usertype, time()+3600);
            setcookie("username", $username);
            header("Location:../index.php");
            exit();
        }else{
            echo 'Password and username do not match. Please try again.'; //create new not yet finished
        }
    }
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Login</title>
    
    <link rel="stylesheet" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet"> 
    
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
</body>
</html>

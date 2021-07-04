<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userlogins";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$query="SELECT * FROM userlogin WHERE username='".$username."' and password='".$password."' and usertype='".$usertype."'";


$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    
}
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>You Chose paper!</title>
</head>
<body>
    
    <script src="main.js"> </script>
    <script> 
        userPaper();
        
    </script>
    
    
    

   <br/> 
   <input type="button" onclick="location.href='RPS_game.php'" value="Lets go again bois!!">
    
</body>
</html>
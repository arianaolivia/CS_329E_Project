<form action="" enctype="multipart/form-data" method="post">
    Select user image:
    <input type="file" name="file"><br/>
    <input type="submit" value="Upload" name="Submit1"> <br/>


</form>

<?php
if(isset($_POST['Submit1']))
{
    $filepath = "images/" . $_FILES["file"]["name"];
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {
        echo "<img src=".$filepath." height=500 width=500/>";
    }
    else
    {
        echo "Error !!";
    }
}
?>

<body>

<input type="button" onclick="location.href='RPS_game.php'" value="Enter Game?"><br/>
<input type="button" onclick="location.href='login.php'" value="Log in!">

</body>
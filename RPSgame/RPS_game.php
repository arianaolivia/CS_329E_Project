<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>
    


</head>
<body>
<h1>Rock, Paper, Scissors!</h1>

<input type="button" onclick="location.href='paper.html'" value="Paper">
<input type="button" onclick="location.href='scissors.html'" value="Scissors">
<input type="button" onclick="location.href='rock.html'" value="Rock">

   
    
    <?php include 'test.php';
    createZero();
    addWin();
    ?>
    


<form action="Project_0.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<img src="fileToUpload" alt="username" width="50" height="50">

</body>
</html>
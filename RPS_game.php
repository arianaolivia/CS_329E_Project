<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>
    
    <link rel="stylesheet" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet"> 



</head>
<body>
    <h1>
       <div id="title">
        Rock, Paper, Scissors!
        </div>
    </h1>
    
    <h2>
        Pick your poisson!
    </h2>


<div id="button">
    <input class="input" type="button" onclick="location.href='paper.html'" value="Paper">
    
    <input class="input" type="button" onclick="location.href='scissors.html'" value="Scissors">
    
    <input class="input" type="button" onclick="location.href='rock.html'" value="Rock">
</div>
   
   
    <!-- cookie is null to start, needs to be set to 0 to start -->
    <script src="main.js"></script>
    <script>
        var wins = getCookie('winCount')
        wins = Number(wins);
        document.write("Wins = " + wins);
    </script>
    
    

<br/>    
<form method="POST" action="logout.php">
    <input type="submit" value="Log out">
</form>

<!--
<form action="Project_0.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<img src="fileToUpload" alt="username" width="50" height="50">-->

</body>
</html>

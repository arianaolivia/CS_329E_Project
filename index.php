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

<!-- cryptococcus: this will check if the person logged in is an admin (using cookies) and will display the gun option if they are -->
<?php if($_COOKIE["usertype"] == "admin") : ?>
    <input type="button" onclick="location.href='paper.html'" value="Paper">
    <input type="button" onclick="location.href='scissors.html'" value="Scissors">
    <input type="button" onclick="location.href='rock.html'" value="Rock">
    <input type="button" onclick="location.href='gun.html'" value="Gun">
<?php else : ?>
    <input type="button" onclick="location.href='paper.html'" value="Paper">
    <input type="button" onclick="location.href='scissors.html'" value="Scissors">
    <input type="button" onclick="location.href='rock.html'" value="Rock">
<?php endif; ?>


    <script src="main.js"></script>
    <script>
        var wins = getCookie('winCount');
        wins = Number(wins);
        document.write("Wins = " + wins);
    </script>
    
    

<br/>
<!-- cryptococcus: redirects to log in (makes cookies) and log out (erases all cookies) pages -->
<input type="button" onclick="location.href='login.php'" value="Log in!">
<form method="POST" action="logout.php">
    <input type="submit" value="Log out">
</form>

<!-- cryptococcus: upload image form accessible to all -->
<form action="upload_image.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<!-- cryptococcus: displays image  -->
<?php $userImage = $_COOKIE["username"]; ?>
<img src="images/<?php echo $userImage; ?>.jpg">

</body>
</html>

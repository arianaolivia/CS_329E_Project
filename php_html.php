<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is correct
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Thanks!"; //here we can add the way to display the file
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>

<!-- cryptococcus, 2018-09-12 -->
<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>

    <script>

        function compPick(){
            var randNum =  Math.floor(Math.random() * 3);

            if(randNum == 0){
                return "Paper"
            }
            if(randNum == 1){
                return "Scissors"
            }
            if(randNum == 2){
                return "Rock"
            }
        }

        function winCondition(user,comp){
            document.write("User picked: " + user + "<br/>")
            document.write("Computer picked: " + comp + "<br/>")

            if(user == comp){
                document.write('No winner, go again bois!')
            }
            if(user == "Paper" && comp =="Rock"){
                document.write('User wins!')
            }
            if(user == "Paper" && comp =="Scissors"){
                document.write('Computer wins!')
            }
            if(user == "Scissors" && comp =="Rock"){
                document.write('Computer wins!')
            }
            if(user == "Scissors" && comp =="Paper"){
                document.write('User wins!')
            }
            if(user == "Rock" && comp =="Paper"){
                document.write('Computer wins!')
            }
            if(user == "Rock" && comp =="Scissors"){
                document.write('User wins!')
            }



        }



        function userPaper(){
            var userHand = "Paper"
            var compHand = compPick()
            winCondition(userHand,compHand)

        }

        function userScissors(){
            var userHand = "Scissors"
            var compHand = compPick()
            winCondition(userHand,compHand)
        }

        function userRock(){
            var userHand = "Rock"
            var compHand = compPick()
            winCondition(userHand,compHand)
        }


    </script>

</head>
<body>
<h1>Rock, Paper, Scissors!</h1>



<input type="button" onclick="userPaper()" value="Paper">
<input type="button" onclick="userScissors()" value="Scissors">
<input type="button" onclick="userRock()" value="Rock">

<script>
    // paper = 0
    //scissors = 1
    // rock = 2
</script>


<script src="main.js"> </script>


<!-- trying to display the image -->
<img src="fileToUpload" alt="username" width="50" height="50">

</body>
</html>
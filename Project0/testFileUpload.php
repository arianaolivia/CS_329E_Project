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



<html>
<head>
    <title>PHP File Upload example</title>
</head>
<body>

<form action="" enctype="multipart/form-data" method="post">
    Select image :
    <input type="file" name="file"><br/>
    <input type="submit" value="Upload" name="Submit1"> <br/>


</form>

<?php
if(isset($_POST['Submit1']))
{
    $filepath = "images/" . $_FILES["file"]["name"];

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {
        echo "<img src=".$filepath." height=200 width=300 />";
    }
    else
    {
        echo "Error !!";
    }

}
?>



</body>
</body>
</html>
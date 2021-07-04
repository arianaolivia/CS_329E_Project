    
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
            
            if (user == "Gun"){
                document.write('User wins!')
                
            }
        

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
                winCounter++
                document.write(winCounter)
            }
            if(user == "Rock" && comp =="Paper"){
                document.write('Computer wins!')
            }
            if(user == "Rock" && comp =="Scissors"){
                document.write('User wins!')
                winCounter++
                document.write(winCounter)
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

        function userGun(){
            var userHand = "Gun"
            var compHand = compPick()
            winCondition(userHand,compHand)

        }


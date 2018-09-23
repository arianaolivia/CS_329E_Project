     /** Cryptococcus; setting a cookie that can be pulled on the game page */

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
     /** Cryptococcus; geteing a cookie that can be associated with user login */



     function compPick(){
            var randNum =  Math.floor(Math.random() * 3);

            if(randNum === 0){
                return "Paper";
            }s
            if(randNum == 1){
                return "Scissors";
            }
            if(randNum == 2){
                return "Rock";
            }
        }

        function winCondition(user,comp){
            document.write("User picked: " + user + "<br/>");
            document.write("Computer picked: " + comp + "<br/>");
            
            if (user == "Gun"){
                document.write('<h1>User winssss!</h1>');
                addWin();
                
            }

            if(user == comp){
                document.write('No winner, go again bois!')
            }
            if(user == "Paper" && comp =="Rock"){
                document.write('User wins!');
                addWin();   
            }
            
            if(user == "Paper" && comp =="Scissors"){
                document.write('Computer wins!');    
            }
            
            if(user == "Scissors" && comp =="Rock"){
                document.write('Computer wins!');    
            }
            
            if(user == "Scissors" && comp =="Paper"){
                document.write('User wins!');
                addWin();
            }
            
            if(user == "Rock" && comp =="Paper"){
                document.write('Computer wins!');
            }
            
            if(user == "Rock" && comp =="Scissors"){
                document.write('User wins!');
                addWin();
            }

        }


        function userPaper(){
            var userHand = "Paper";
            var compHand = compPick();
            winCondition(userHand,compHand);

        }

        function userScissors(){
            var userHand = "Scissors";
            var compHand = compPick();
            winCondition(userHand,compHand);
        }

        function userRock(){
            var userHand = "Rock";
            var compHand = compPick();
            winCondition(userHand,compHand);
        }

        function userGun(){
            var userHand = "Gun";
            var compHand = compPick();
            winCondition(userHand,compHand);

        }

  
    function addWin(){
        // extract cookie string and isolate number string
        var x = getCookie('winCount');
        x = Number(x)
        x++;
        x = x.toString();
        document.cookie = "winCount = " + x;   
        
    
        // var x = document.cookie;
        //x = x.substring(9);
        //x = Number(x);
        //x++;
        //x = x.toString();
        //document.cookie = "winCount = " + x;        
    }





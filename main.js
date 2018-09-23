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
            }
            if(randNum == 1){
                return "Scissors";
            }
            if(randNum == 2){
                return "Rock";
            }
        }

      function compPick(){
            var randNum =  Math.floor(Math.random() * 3);

            if(randNum === 0){
                return "Paper";
            };
            if(randNum == 1){
                return "Scissors";
            };
            if(randNum == 2){
                return "Rock";
            };
        }

        function winCondition(user,comp){
            document.write("<h3>User picked: " + user + "<br/></h3>");
            document.write("<h3>Computer picked: " + comp + "<br/></h3>");
            
            if (user == "Gun"){
                document.write('<h3>User wins!</h3>');
                addWin();
            }

            if(user == comp){
                document.write('<h3>No winner, go again bois!</h3>')
            }
            if(user == "Paper" && comp =="Rock"){
                document.write('<h3>User wins!</h3>');
                addWin();   
            }
            
            if(user == "Paper" && comp =="Scissors"){
                document.write('<h3>Computer wins!</h3>');    
            }
            
            if(user == "Scissors" && comp =="Rock"){
                document.write('<h3>Computer wins!</h3>');    
            }
            
            if(user == "Scissors" && comp =="Paper"){
                document.write('<h3>User wins!</h3>');
                addWin();
            }
            
            if(user == "Rock" && comp =="Paper"){
                document.write('<h3>Computer wins!</h3>');
            }
            
            if(user == "Rock" && comp =="Scissors"){
                document.write('<h3>User wins!</h3>');
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





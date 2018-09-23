     /** Cryptococcus; setting a cookie that can be pulled on the game page */
     function setCookie(cookieName, cookieValue, expTime){
         var date = new Date();
         date.setTime(date.getTime() + (expTime*24*60*60*1000));
         var expires = "expires=" + date.toUTCString();
         document.cookie = cookieName + "=" + cookieValue + ";" + expTime + ";path=/"
         
         
         window.readCookie = readCookie;
     }
     /** Cryptococcus; getting a cookie that can be associated with user login */
     function getCookie(cookieName) {
         var user = cookieName + "=";
         var cookieSplit = document.cookie.split(";");
         for(var counter = 0; counter < cookieSplit.length; counter++) {
             var currentChar = cookieSplit[counter];
             while (currentChar.charAt(0) === " ") {
                 currentChar = currentChar.substring(1);
             }
             if (currentChar.indexOf(cookieName) === 0) {
                 return currentChar.substring(cookieName.length, currentChar.length);
             }
         }
         return "";
     }

     /**Cryptococcus; check the cookie to make sure user rights are correct */
     function checkCookie() {
         var userType = getCookie("usertype");
         if(userType === "admin"){

         }
         else{
             prompt("Please log in again, redirecting you to the login page.");

         }
     }

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

        function winCondition(user,comp){
            document.write("User picked: " + user + "<br/>");
            document.write("Computer picked: " + comp + "<br/>");
            
            if (user == "Gun"){
                document.write('User wins!');
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
        var wins = document.cookie
        wins = wins.substring(9);
        wins = Number(wins);
        document.write("Wins = " + wins);
}

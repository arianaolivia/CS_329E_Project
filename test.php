<?php
    
    function createZero(){
        $myfile = fopen("C:\txtFile\newfile.txt", "w") or die("Unable to open file!");
        $numWins = "0";
        fwrite($myfile, $numWins);
        fclose($myfile);      
    }
    

    
    function addWin(){
        $myfile = fopen("C:\txtFile\newfile.txt", "r+") or die("Unable to open file!");
        $wins = fgets($myfile)
        $winCount = settype($wins, 'integer')
        $winCount++
        fwrite($myfile, $winCount);
        fclose($myfile);
        return $winCount;
        
     } 
    
createZero();


?> 
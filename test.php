<?php
    
    function createZero(){
        $my_file = 'newfile.txt';
        $handle = fopen($my_file, "w") or die("Unable to open file!");
        $numWins = "0";
        fwrite($handle, $numWins);
        fclose($handle);      
    }
    
    
    function addWin(){
        $myfile = fopen("newfile.txt", "r+") or die("Unable to open file!");
        $wins = fgets($myfile);
        $winCount = settype($wins, 'int');
        $winCount++ ;
        fwrite($myfile, $winCount);
        fclose($myfile);
        return $winCount;        
     } 

?> 
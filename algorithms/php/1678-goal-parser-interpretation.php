// 1678. Goal Parser Interpretation
// Source : https://leetcode.com/problems/goal-parser-interpretation/

/**************************************************************************************************
 
 You own a Goal Parser that can interpret a string command. The command consists of an alphabet of "G", "()" and/or "(al)" in some order. The Goal Parser will interpret "G" as the string "G", "()" as the string "o", and "(al)" as the string "al". The interpreted strings are then concatenated in the original order.

 Given the string command, return the Goal Parser's interpretation of command.

  

 Example 1:

 Input: command = "G()(al)"
 Output: "Goal"
 Explanation: The Goal Parser interprets the command as follows:
 G -> G
 () -> o
 (al) -> al
 The final concatenated result is "Goal".
 Example 2:

 Input: command = "G()()()()(al)"
 Output: "Gooooal"
 Example 3:

 Input: command = "(al)G(al)()()G"
 Output: "alGalooG"
  

 Constraints:

 1 <= command.length <= 100
 command consists of "G", "()", and/or "(al)" in some order.
 
**************************************************************************************************/

<?php
class Solution {

    /**
     * @param String $command
     * @return String
     */
    function interpret($command) {
        $chr = "";
        $returnStr = "";
        $charArr = str_split($command);

        for($i=0; $i< count($charArr); $i++){

            $chr .= $charArr[$i];


            if($chr == "G"){
                $returnStr .= $chr;
                $chr = "";
            } else if ( $chr == "()"){
                $returnStr .= "o";
                $chr = "";
            } else if($chr == "(al)"){
                $returnStr .= "al";
                $chr = "";
            }

        }

        return  $returnStr;
    }
   
}
    
    
?>

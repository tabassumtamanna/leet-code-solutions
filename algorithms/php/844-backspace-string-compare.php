// 844. Backspace String Compare
// Source : https://leetcode.com/problems/backspace-string-compare/

/**************************************************************************************************
 Given two strings s and t, return true if they are equal when both are typed into empty text editors. '#' means a backspace character.

 Note that after backspacing an empty text, the text will continue empty.

  

 Example 1:

 Input: s = "ab#c", t = "ad#c"
 Output: true
 Explanation: Both s and t become "ac".
 Example 2:

 Input: s = "ab##", t = "c#d#"
 Output: true
 Explanation: Both s and t become "".
 Example 3:

 Input: s = "a##c", t = "#a#c"
 Output: true
 Explanation: Both s and t become "c".
 Example 4:

 Input: s = "a#c", t = "b"
 Output: false
 Explanation: s becomes "c" while t becomes "b".
  

 Constraints:

 1 <= s.length, t.length <= 200
 s and t only contain lowercase letters and '#' characters.

  
 **************************************************************************************************/


<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        
        $arrS = str_split($s);
        $arrT = str_split($t);
        
        $strS = "";
        for($i=0; $i<count($arrS); $i++){
            
            if ($arrS[$i] != "#"){
                $strS .= $arrS[$i];
            }else {
                 $strS = substr($strS, 0, -1);
            }
        }
        
        $strT = "";
        for($i=0; $i<count($arrT); $i++){
            
            if ($arrT[$i] != "#"){
                $strT .= $arrT[$i];
            }else {
                $strT = substr($strT, 0, -1);
            }
        }
        
        
        return $strS == $strT;
        
    }
}

    
?>

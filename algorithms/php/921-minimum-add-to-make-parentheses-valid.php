// 921. Minimum Add to Make Parentheses Valid
// Source : https://leetcode.com/problems/minimum-add-to-make-parentheses-valid/

/**************************************************************************************************
 Given a string S of '(' and ')' parentheses, we add the minimum number of parentheses ( '(' or ')', and in any positions ) so that the resulting parentheses string is valid.

 Formally, a parentheses string is valid if and only if:

 It is the empty string, or
 It can be written as AB (A concatenated with B), where A and B are valid strings, or
 It can be written as (A), where A is a valid string.
 Given a parentheses string, return the minimum number of parentheses we must add to make the resulting string valid.

  

 Example 1:

 Input: "())"
 Output: 1
 Example 2:

 Input: "((("
 Output: 3
 Example 3:

 Input: "()"
 Output: 0
 Example 4:

 Input: "()))(("
 Output: 4
  

 Note:

 S.length <= 1000
 S only consists of '(' and ')' characters.
 
 **************************************************************************************************/


<?php
    
class Solution {

    /**
     * @param String $S
     * @return Integer
     */
    function minAddToMakeValid($S) {
        
        
        if($S == ""){
            return 0;
        }
            
        $arr = str_split($S);
        $stack = [];
        
        for($i=0; $i<count($arr); $i++){
            
            if($arr[$i] == ")" && $stack[count($stack)-1] == "("){
                array_pop($stack);
            } else {
                array_push($stack, $arr[$i]);
            }
            
        }
       
        return count($stack);
       
    }
}
    
?>

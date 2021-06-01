// 856. Score of Parentheses
// Source : https://leetcode.com/problems/score-of-parentheses/

/**************************************************************************************************
 Given a balanced parentheses string s, compute the score of the string based on the following rule:

 () has score 1
 AB has score A + B, where A and B are balanced parentheses strings.
 (A) has score 2 * A, where A is a balanced parentheses string.
  

 Example 1:

 Input: s = "()"
 Output: 1
 Example 2:

 Input: s = "(())"
 Output: 2
 Example 3:

 Input: s = "()()"
 Output: 2
 Example 4:

 Input: s = "(()(()))"
 Output: 6
  

 Note:

 s is a balanced parentheses string, containing only ( and ).
 2 <= s.length <= 50
  
 **************************************************************************************************/

<?php

    
class Solution {

    /**
     * @param String $S
     * @return Integer
     */
    function scoreOfParentheses($S) {
        
        $stack = [];
        $score = 0;
        
        $list = str_split($S);
       
        for($i=0; $i<count($list); $i++){
            
            if($list[$i] == "("){
                array_push($stack, $score);
                $score = 0;
            } else {
                $score = array_pop($stack) + max(2 * $score, 1);
            }
        }
        
        return $score;
        
    }
}
?>

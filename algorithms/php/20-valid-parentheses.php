// 20. Valid Parentheses
// Source : https://leetcode.com/problems/valid-parentheses/

/**************************************************************************************************
 Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

 An input string is valid if:

 Open brackets must be closed by the same type of brackets.
 Open brackets must be closed in the correct order.
  

 Example 1:

 Input: s = "()"
 Output: true
 Example 2:

 Input: s = "()[]{}"
 Output: true
 Example 3:

 Input: s = "(]"
 Output: false
 Example 4:

 Input: s = "([)]"
 Output: false
 Example 5:

 Input: s = "{[]}"
 Output: true
  

 Constraints:

 1 <= s.length <= 104
 s consists of parentheses only '()[]{}'.

  
 **************************************************************************************************/


<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        
        $list = str_split($s);
        
        $mapping = array(
                    "(" => ")",
                    "{" => "}",
                    "[" => "]"
                    );
       
        $stack = array();
        $count = 0;
        for ($i=0; $i<count($list); $i++) {
           
           
           if ( $list[$i] == "(" || $list[$i] == "{" || $list[$i] == "["){
               array_push($stack, $list[$i]);
               $count += 1;
                
           } else if (count($stack) > 0 && $list[$i] == $mapping[$stack[$count-1]]) {
              
                  array_pop($stack);
                  $count -= 1;
              
           }  else {
               return false;
           }
        
            
           
        }
        return count($stack) == 0;
    }
}

    
?>

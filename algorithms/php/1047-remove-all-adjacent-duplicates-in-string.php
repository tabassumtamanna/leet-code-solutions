// 1047. Remove All Adjacent Duplicates In String
// Source : https://leetcode.com/problems/remove-all-adjacent-duplicates-in-string/

/**************************************************************************************************
 Given a string S of lowercase letters, a duplicate removal consists of choosing two adjacent and equal letters, and removing them.

 We repeatedly make duplicate removals on S until we no longer can.

 Return the final string after all such duplicate removals have been made.  It is guaranteed the answer is unique.

  

 Example 1:

 Input: "abbaca"
 Output: "ca"
 Explanation:
 For example, in "abbaca" we could remove "bb" since the letters are adjacent and equal, and this is the only possible move.  The result of this move is that the string is "aaca", of which only "aa" is possible, so the final string is "ca".
  

 Note:

 1 <= S.length <= 20000
 S consists only of English lowercase letters.
 **************************************************************************************************/


<?php
class Solution {

    /**
     * @param String $S
     * @return String
     */
    function removeDuplicates($S) {
        
        
        $result = [];
        
        $arr = str_split($S);
        
        for($i=0; $i<count($arr); $i++){
         
            if ( count($result) > 0 && $arr[$i] == $result[count($result)-1]){
                array_pop($result);
            }else {
                array_push($result, $arr[$i]);
            }
            
        }
       
        return implode($result);
        
    }
}
?>

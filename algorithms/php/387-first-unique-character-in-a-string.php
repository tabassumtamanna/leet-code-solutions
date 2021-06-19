// 387. First Unique Character in a String
// Source : https://leetcode.com/problems/first-unique-character-in-a-string/

/**************************************************************************************************
 Given a string s, return the first non-repeating character in it and return its index. If it does not exist, return -1.

  

 Example 1:

 Input: s = "leetcode"
 Output: 0
 Example 2:

 Input: s = "loveleetcode"
 Output: 2
 Example 3:

 Input: s = "aabb"
 Output: -1
  

 Constraints:

 1 <= s.length <= 105
 s consists of only lowercase English letters.
  
 **************************************************************************************************/

<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        
        $list = str_split($s);
        $arr = [];
        
        for($i=0; $i<count($list); $i++){
            
            if( $arr[$list[$i]] ){
                $arr[$list[$i]]++;
            } else {
                $arr[$list[$i]] = 1;
            }
            
        }
        
        $char = "";
        foreach( $arr as $key=>$val){
            
            if( $val == 1){
                $char = $key;
                break;
            }
           
        }
        
        $key =  array_search($char, $list);
        
        return $key === false ? -1 : $key;
        
    }
}
?>

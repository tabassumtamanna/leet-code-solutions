// 242. Valid Anagram
// Source : https://leetcode.com/problems/valid-anagram/

/**************************************************************************************************
 Given two strings s and t, return true if t is an anagram of s, and false otherwise.

  

 Example 1:

 Input: s = "anagram", t = "nagaram"
 Output: true
 Example 2:

 Input: s = "rat", t = "car"
 Output: false
  

 Constraints:

 1 <= s.length, t.length <= 5 * 104
 s and t consist of lowercase English letters.

  
 **************************************************************************************************/

<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        
        if(strlen($s) != strlen($t)){
            return false;
        }
        
        $arr1 = str_split($s);
        $arr2 = str_split($t);
        
        sort($arr1);
        sort($arr2);
        
        
        for($i=0; $i<count($arr1); $i++){
            if($arr1[$i] != $arr2[$i]){
                return false;
            }
        }
        
        return true;
      
    }
}
?>

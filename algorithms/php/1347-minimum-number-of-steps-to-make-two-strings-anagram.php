// 1347. Minimum Number of Steps to Make Two Strings Anagram
// Source : https://leetcode.com/problems/minimum-number-of-steps-to-make-two-strings-anagram/

/**************************************************************************************************
 Given two equal-size strings s and t. In one step you can choose any character of t and replace it with another character.

 Return the minimum number of steps to make t an anagram of s.

 An Anagram of a string is a string that contains the same characters with a different (or the same) ordering.

  

 Example 1:

 Input: s = "bab", t = "aba"
 Output: 1
 Explanation: Replace the first 'a' in t with b, t = "bba" which is anagram of s.
 Example 2:

 Input: s = "leetcode", t = "practice"
 Output: 5
 Explanation: Replace 'p', 'r', 'a', 'i' and 'c' from t with proper characters to make t anagram of s.
 Example 3:

 Input: s = "anagram", t = "mangaar"
 Output: 0
 Explanation: "anagram" and "mangaar" are anagrams.
 Example 4:

 Input: s = "xxyyzz", t = "xxyyzz"
 Output: 0
 Example 5:

 Input: s = "friend", t = "family"
 Output: 4
  

 Constraints:

 1 <= s.length <= 50000
 s.length == t.length
 s and t contain lower-case English letters only.
 
 **************************************************************************************************/

<?php
    
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function minSteps($s, $t) {
        
        $arrS = str_split($s);
        $arrT = str_split($t);
        
        
        $hashS = [];
        $hashT = [];
        
        foreach($arrS as $key=>$val){
           $hashS[$val] = array_key_exists($val, $hashS) ? $hashS[$val]+1 : 1;
        }
        foreach($arrT as $key=>$val){
           $hashT[$val] = array_key_exists($val, $hashT) ? $hashT[$val]+1 : 1;
        }
        
        $nums = 0;
        
        foreach($hashS as $key => $val){
            
            if( !array_key_exists($key, $hashT) ){
                $hashT[$key] = 0;
            }
            
            if($hashT[$key] < $hashS[$key]){
                
                $nums += $hashS[$key] - $hashT[$key];
            }
        }
        
        return $nums;
        
    }
}

    
?>

// 125. Valid Palindrome
// Source : https://leetcode.com/problems/valid-palindrome/

/**************************************************************************************************
 Given a string s, determine if it is a palindrome, considering only alphanumeric characters and ignoring cases.

  

 Example 1:

 Input: s = "A man, a plan, a canal: Panama"
 Output: true
 Explanation: "amanaplanacanalpanama" is a palindrome.
 Example 2:

 Input: s = "race a car"
 Output: false
 Explanation: "raceacar" is not a palindrome.
  

 Constraints:

 1 <= s.length <= 2 * 105
 s consists only of printable ASCII characters.

 **************************************************************************************************/

<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
       
        $str = strtolower($s);

        $str = preg_replace("/[^a-zA-Z0-9]+/", "", $str);
        $revStr = strrev($str);
        
        if(strcmp($str, $revStr)==0)
            return true;
        else
            return false;
    }
}
?>


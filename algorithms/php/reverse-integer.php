// 7. Reverse Integer
// Source : https://leetcode.com/problems/reverse-integer/

/**************************************************************************************************
 Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

 Assume the environment does not allow you to store 64-bit integers (signed or unsigned).

  

 Example 1:

 Input: x = 123
 Output: 321
 Example 2:

 Input: x = -123
 Output: -321
 Example 3:

 Input: x = 120
 Output: 21
 Example 4:

 Input: x = 0
 Output: 0
  

 Constraints:

 -231 <= x <= 231 - 1
 **************************************************************************************************/

<?php

    
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $rev = 0;
        $neg = 0;
        
        if($x < 0){
            $x *= -1;
            $neg = 1;
        }
         
       
        $rev = (int)Strrev($x);
        
        if($rev > 2147483647 || $rev < -2147483648)
            return 0;
        
        
        if($neg)
            $rev *= -1;
        
        return $rev;
        
        
    }
}
?>


// 9. Palindrome Number
// Source : https://leetcode.com/problems/palindrome-number/

/**************************************************************************************************
Given an integer x, return true if x is palindrome integer.

An integer is a palindrome when it reads the same backward as forward. For example, 121 is palindrome while 123 is not.

 

Example 1:

Input: x = 121
Output: true
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
Example 4:

Input: x = -101
Output: false

 **************************************************************************************************/

<?php

class Solution
{

/**
 * @param Integer $x
 * @return Boolean
 */
    public function isPalindrome($x)
    {
        $revNumber = 0;
        $num = $x;

        if ($num
            < 0) {return false;} while ($num >= 1) {
            $revNumber = $revNumber * 10 + $num % 10;
            $num = $num / 10;

        }

        if ($revNumber > 2147483647 || $revNumber < -2147483648) {
            return false;
        }

        if ($revNumber == $x) {
            return true;
        }

        return false;
    }
}

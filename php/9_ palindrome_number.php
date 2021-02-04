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
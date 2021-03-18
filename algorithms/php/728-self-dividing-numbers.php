// 728. Self Dividing Numbers
// Source : https://leetcode.com/problems/self-dividing-numbers/

/**************************************************************************************************
 A self-dividing number is a number that is divisible by every digit it contains.

 For example, 128 is a self-dividing number because 128 % 1 == 0, 128 % 2 == 0, and 128 % 8 == 0.

 Also, a self-dividing number is not allowed to contain the digit zero.

 Given a lower and upper number bound, output a list of every possible self dividing number, including the bounds if possible.

 Example 1:
 Input:
 left = 1, right = 22
 Output: [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 15, 22]

 **************************************************************************************************/

<?php
    
class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $selfDividingArr = array();
    
        for($i=$left; $i <= $right; $i++){
            $arr = str_split($i);

            $isSelfDividing = 1;

            for($j= 0; $j< count($arr); $j++){


                if($arr[$j] == 0 || ($i%$arr[$j] != 0) ){
                    $isSelfDividing = 0;
                    break;
                }

            }

            if($isSelfDividing){
                array_push($selfDividingArr, $i);
            }

        }
        return $selfDividingArr;
    }
}
?>


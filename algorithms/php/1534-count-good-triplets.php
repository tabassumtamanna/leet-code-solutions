// 1534. Count Good Triplets
// Source : https://leetcode.com/problems/count-good-triplets/

/**************************************************************************************************
 Given an array of integers arr, and three integers a, b and c. You need to find the number of good triplets.

 A triplet (arr[i], arr[j], arr[k]) is good if the following conditions are true:

 0 <= i < j < k < arr.length
 |arr[i] - arr[j]| <= a
 |arr[j] - arr[k]| <= b
 |arr[i] - arr[k]| <= c
 Where |x| denotes the absolute value of x.

 Return the number of good triplets.

  

 Example 1:

 Input: arr = [3,0,1,1,9,7], a = 7, b = 2, c = 3
 Output: 4
 Explanation: There are 4 good triplets: [(3,0,1), (3,0,1), (3,1,1), (0,1,1)].
 Example 2:

 Input: arr = [1,1,2,2,3], a = 0, b = 0, c = 1
 Output: 0
 Explanation: No triplet satisfies all conditions.
  

 Constraints:

 3 <= arr.length <= 100
 0 <= arr[i] <= 1000
 0 <= a, b, c <= 1000
 
**************************************************************************************************/

<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function countGoodTriplets($arr, $a, $b, $c) {
        
        $tripletList = 0;
        
        for ($i=0; $i<count($arr)-2; $i++){
            for($j=$i+1; $j<count($arr)-1; $j++){
                for($k=$j+1; $k<count($arr); $k++){
                    
                    if (  abs($arr[$i] - $arr[$j]) <= $a  &&
                          abs($arr[$j] - $arr[$k]) <= $b  &&
                          abs($arr[$i] - $arr[$k]) <= $c ){
                        
                        $tripletList++;
                    }
                }
            }
        }
        
        return $tripletList;
    }
}
    
    
?>

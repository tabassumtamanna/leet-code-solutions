// 75. Sort Colors
// Source : https://leetcode.com/problems/sort-colors/

/**************************************************************************************************
 Given an array nums with n objects colored red, white, or blue, sort them in-place so that objects of the same color are adjacent, with the colors in the order red, white, and blue.

 We will use the integers 0, 1, and 2 to represent the color red, white, and blue, respectively.

  

 Example 1:

 Input: nums = [2,0,2,1,1,0]
 Output: [0,0,1,1,2,2]
 Example 2:

 Input: nums = [2,0,1]
 Output: [0,1,2]
 Example 3:

 Input: nums = [0]
 Output: [0]
 Example 4:

 Input: nums = [1]
 Output: [1]
  

 Constraints:

 n == nums.length
 1 <= n <= 300
 nums[i] is 0, 1, or 2.
  
 **************************************************************************************************/

<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        
        $arrLength = count($nums);
        
        for($i=0; $i<$arrLength; $i++){
            
            for($j=0; $j<$arrLength - $i -1; $j++){
                
                if($nums[$j] > $nums[$j+1]){
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j+1];
                    $nums[$j+1] = $temp;
                }
            }
        }
        
        
    }
}

?>

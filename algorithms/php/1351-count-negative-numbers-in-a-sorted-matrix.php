// 1351. Count Negative Numbers in a Sorted Matrix
// Source : https://leetcode.com/problems/count-negative-numbers-in-a-sorted-matrix/

/**************************************************************************************************
 Given a m x n matrix grid which is sorted in non-increasing order both row-wise and column-wise, return the number of negative numbers in grid.

  

 Example 1:

 Input: grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
 Output: 8
 Explanation: There are 8 negatives number in the matrix.
 Example 2:

 Input: grid = [[3,2],[1,0]]
 Output: 0
 Example 3:

 Input: grid = [[1,-1],[-1,-1]]
 Output: 3
 Example 4:

 Input: grid = [[-1]]
 Output: 1
  

 Constraints:

 m == grid.length
 n == grid[i].length
 1 <= m, n <= 100
 -100 <= grid[i][j] <= 100
 
 **************************************************************************************************/

<?php
class Solution {


    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        
        $countNum = 0;
        foreach($grid as $list){
            
            foreach($list as $val){
                if($val < 0)
                    $countNum++;
            }
            
        }
        return $countNum;
    }
}
    
    
?>

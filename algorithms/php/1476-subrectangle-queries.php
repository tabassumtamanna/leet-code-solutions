// 1476. Subrectangle Queries
// Source : https://leetcode.com/problems/subrectangle-queries/

/**************************************************************************************************
 Implement the class SubrectangleQueries which receives a rows x cols rectangle as a matrix of integers in the constructor and supports two methods:

 1. updateSubrectangle(int row1, int col1, int row2, int col2, int newValue)

 Updates all values with newValue in the subrectangle whose upper left coordinate is (row1,col1) and bottom right coordinate is (row2,col2).
 2. getValue(int row, int col)

 Returns the current value of the coordinate (row,col) from the rectangle.
  

 Example 1:

 Input
 ["SubrectangleQueries","getValue","updateSubrectangle","getValue","getValue","updateSubrectangle","getValue","getValue"]
 [[[[1,2,1],[4,3,4],[3,2,1],[1,1,1]]],[0,2],[0,0,3,2,5],[0,2],[3,1],[3,0,3,2,10],[3,1],[0,2]]
 Output
 [null,1,null,5,5,null,10,5]
 Explanation
 SubrectangleQueries subrectangleQueries = new SubrectangleQueries([[1,2,1],[4,3,4],[3,2,1],[1,1,1]]);
 // The initial rectangle (4x3) looks like:
 // 1 2 1
 // 4 3 4
 // 3 2 1
 // 1 1 1
 subrectangleQueries.getValue(0, 2); // return 1
 subrectangleQueries.updateSubrectangle(0, 0, 3, 2, 5);
 // After this update the rectangle looks like:
 // 5 5 5
 // 5 5 5
 // 5 5 5
 // 5 5 5
 subrectangleQueries.getValue(0, 2); // return 5
 subrectangleQueries.getValue(3, 1); // return 5
 subrectangleQueries.updateSubrectangle(3, 0, 3, 2, 10);
 // After this update the rectangle looks like:
 // 5   5   5
 // 5   5   5
 // 5   5   5
 // 10  10  10
 subrectangleQueries.getValue(3, 1); // return 10
 subrectangleQueries.getValue(0, 2); // return 5
 
 Constraints:

 There will be at most 500 operations considering both methods: updateSubrectangle and getValue.
 1 <= rows, cols <= 100
 rows == rectangle.length
 cols == rectangle[i].length
 0 <= row1 <= row2 < rows
 0 <= col1 <= col2 < cols
 1 <= newValue, rectangle[i][j] <= 10^9
 0 <= row < rows
 0 <= col < cols
  
 **************************************************************************************************/

<?php

class SubrectangleQueries {
    /**
     * @param Integer[][] $rectangle
     */
    
    private $rectangle;
    
    function __construct($rectangle) {
        $this->rectangle = $rectangle;
        
    }
  
    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @param Integer $newValue
     * @return NULL
     */
    function updateSubrectangle($row1, $col1, $row2, $col2, $newValue) {
        for($i=$row1; $i<=$row2; $i++){
            for($j=$col1; $j<=$col2; $j++){
                $this->rectangle[$i][$j] = $newValue;
            }
        }
    }
  
    /**
     * @param Integer $row
     * @param Integer $col
     * @return Integer
     */
    function getValue($row, $col) {
        return $this->rectangle[$row][$col];
    }
}

/**
 * Your SubrectangleQueries object will be instantiated and called as such:
 * $obj = SubrectangleQueries($rectangle);
 * $obj->updateSubrectangle($row1, $col1, $row2, $col2, $newValue);
 * $ret_2 = $obj->getValue($row, $col);
 */


?>

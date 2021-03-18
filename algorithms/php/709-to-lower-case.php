// 709. To Lower Case
// Source : https://leetcode.com/problems/to-lower-case/

/**************************************************************************************************
 Implement function ToLowerCase() that has a string parameter str, and returns the same string in lowercase.

  

 Example 1:

 Input: "Hello"
 Output: "hello"
 Example 2:

 Input: "here"
 Output: "here"
 Example 3:

 Input: "LOVELY"
 Output: "lovely"

 **************************************************************************************************/

<?php
    
class Solution {

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str) {
        
        $arr = str_split($str);

        for($i = 0; $i < count($arr); $i++){
            $x = ord($arr[$i]);
            if($x >=65 && $x <= 90){
                $x = $x *1 + 32;
            }

            $arr[$i] = chr($x);
        }

        return implode($arr);
    }
}
?>


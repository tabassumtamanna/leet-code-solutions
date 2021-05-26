// 17. Letter Combinations of a Phone Number
// Source : https://leetcode.com/problems/letter-combinations-of-a-phone-number/

/**************************************************************************************************
 Given a string containing digits from 2-9 inclusive, return all possible letter combinations that the number could represent. Return the answer in any order.

 A mapping of digit to letters (just like on the telephone buttons) is given below. Note that 1 does not map to any letters.



  

 Example 1:

 Input: digits = "23"
 Output: ["ad","ae","af","bd","be","bf","cd","ce","cf"]
 Example 2:

 Input: digits = ""
 Output: []
 Example 3:

 Input: digits = "2"
 Output: ["a","b","c"]
  
 **************************************************************************************************/

<?php

    
class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        
        if($digits == ""){
            return [];
        }
        $mapping = array( 2 => array("a", "b", "c"),
                          3 => array("d", "e", "f"),
                          4 => array("g", "h", "i"),
                          5 => array("j", "k", "l"),
                          6 => array("m", "n", "o"),
                          7 => array("p", "q", "r", "s"),
                          8 => array("t", "u", "v"),
                          9 => array("w", "x", "y", "z"));
        
        $list = str_split($digits);
        $output = $mapping[$list[0]];
        
       
        for($i=1; $i<count($list); $i++){
            
            $tmp = [];
            
            foreach ($output as $key=>$val) {
                
                foreach ($mapping[$list[$i]] as $letter) {
                    
                    $tmp[] = $val.$letter;
                }
                
            }
            
            $output = $tmp;
        }
       
        return $output;
    }
}

?>

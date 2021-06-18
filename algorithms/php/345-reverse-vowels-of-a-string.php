// 345. Reverse Vowels of a String
// Source : https://leetcode.com/problems/reverse-vowels-of-a-string/

/**************************************************************************************************
 Given a string s, reverse only all the vowels in the string and return it.

 The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both cases.

  

 Example 1:

 Input: s = "hello"
 Output: "holle"
 Example 2:

 Input: s = "leetcode"
 Output: "leotcede"
  

 Constraints:

 1 <= s.length <= 3 * 105
 s consist of printable ASCII characters.
  
 **************************************************************************************************/

<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        
        
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        
        $list = str_split($s);
        
        $len = count($list) - 1;
        $j = $len;
        
        for($i=0; $i<$len; $i++){
            
            if(in_array($list[$i], $vowels)){
                
                while($j>$i){
                    if ( in_array($list[$j], $vowels) ){
                       
                        
                        $tmp = $list[$i];
                        $list[$i] = $list[$j];
                        $list[$j] = $tmp;
                        $j--;
                        break;
                    }
                    $j--;
                }
               
            }
            
        }
       
        return implode($list);
    }
}
?>

// 1832. Check if the Sentence Is Pangram
// Source : https://leetcode.com/problems/check-if-the-sentence-is-pangram/

/**************************************************************************************************
 A pangram is a sentence where every letter of the English alphabet appears at least once.

 Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.

  

 Example 1:

 Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
 Output: true
 Explanation: sentence contains at least one of every letter of the English alphabet.
 Example 2:

 Input: sentence = "leetcode"
 Output: false
  

 Constraints:

 1 <= sentence.length <= 1000
 sentence consists of lowercase English letters.
  
 **************************************************************************************************/

<?php

    
class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        
        $arr = str_split($sentence);
        $pangramArr = [];
            
       for($i=0; $i<count($arr); $i++){
           
           $pangramArr[ord($arr[$i])] = true;
       }
       ksort($pangramArr);
      
        for($i=97; $i<=122; $i++){
            
            if( !array_key_exists($i, $pangramArr) )
                return false;
        }
        
        return true;
    }
}

?>

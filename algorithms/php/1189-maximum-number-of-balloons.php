// 1189. Maximum Number of Balloons
// Source : https://leetcode.com/problems/maximum-number-of-balloons/

/**************************************************************************************************
 Given a string text, you want to use the characters of text to form as many instances of the word "balloon" as possible.

 You can use each character in text at most once. Return the maximum number of instances that can be formed.

  

 Example 1:



 Input: text = "nlaebolko"
 Output: 1
 Example 2:



 Input: text = "loonbalxballpoon"
 Output: 2
 Example 3:

 Input: text = "leetcode"
 Output: 0
  

 Constraints:

 1 <= text.length <= 10^4
 text consists of lower case English letters only.

 **************************************************************************************************/

<?php
    
class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        
        $arr = ["b"=>0, "a"=>0, "l"=>0, "o"=>0, "n"=>0];

        foreach($arr as $key=>$val){
            $arr[$key]= substr_count($text, $key);
        }

        $balloonCount = 0;
        while( min($arr) > 0){
          $totalCharCount = 0;
          foreach($arr as $key=>$val){
            if($val > 0){

                if(($key == "l" || $key == "o") && $val >=2){
                    $arr[$key] -=2;
                    $totalCharCount += 2;

                }else{
                    $arr[$key]--;
                    $totalCharCount++;
                }
             }

          }

          if ($totalCharCount == 7){
            $balloonCount++;
          }
        }
        
        return $balloonCount;
    }
}
    
?>


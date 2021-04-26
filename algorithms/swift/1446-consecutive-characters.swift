// 1446. Consecutive Characters
// Source : https://leetcode.com/problems/consecutive-characters/

/**************************************************************************************************
 Given a string s, the power of the string is the maximum length of a non-empty substring that contains only one unique character.

 Return the power of the string.

  

 Example 1:

 Input: s = "leetcode"
 Output: 2
 Explanation: The substring "ee" is of length 2 with the character 'e' only.
 Example 2:

 Input: s = "abbcccddddeeeeedcba"
 Output: 5
 Explanation: The substring "eeeee" is of length 5 with the character 'e' only.
 Example 3:

 Input: s = "triplepillooooow"
 Output: 5
 Example 4:

 Input: s = "hooraaaaaaaaaaay"
 Output: 11
 Example 5:

 Input: s = "tourist"
 Output: 1
  

 Constraints:

 1 <= s.length <= 500
 s contains only lowercase English letters.
  
 **************************************************************************************************/

import Foundation

class Solution {
    func maxPower(_ s: String) -> Int {
        
        var count = 0
        var maxCount = 0
        var prev = ""
        
        var arr = Array(s)
        
        
        for i in 0..<arr.count {
            
            if( String(arr[i]) == prev){
                count += 1
            } else {
                count = 1
                prev = String(arr[i])
            }
            
            maxCount = max(maxCount, count)
        }
        
        return maxCount
    }
}

// 242. Valid Anagram
// Source : https://leetcode.com/problems/valid-anagram/

/**************************************************************************************************
 Given two strings s and t, return true if t is an anagram of s, and false otherwise.

 Example 1:

 Input: s = "anagram", t = "nagaram"
 Output: true
 Example 2:

 Input: s = "rat", t = "car"
 Output: false
  

 Constraints:

 1 <= s.length, t.length <= 5 * 104
 s and t consist of lowercase English letters.

  
 **************************************************************************************************/

import Foundation

class Solution {
    func isAnagram(_ s: String, _ t: String) -> Bool {
        
        if(s.count != t.count){
            return false
        }
        
        var arr1 = Array(s)
        var arr2 = Array(t)
        
        
        if arr1.sorted() == arr2.sorted() {
            return true
        }
        return false
        
    }
}

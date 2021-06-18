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

import Foundation

class Solution {
    func reverseVowels(_ s: String) -> String {
        
        let vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"]
        
        var list = Array(s)
        var j = list.count-1
        
        for i in 0..<list.count {
            if vowels.contains(String(list[i])){
                
                while j>i {
                    
                    if vowels.contains(String(list[j])){
                        
                        (list[i], list[j]) = (list[j], list[i])
                        j = j - 1
                        break
                    }
                    j = j - 1
                }
            }
            
        }
        
        return String(list)
    }
}

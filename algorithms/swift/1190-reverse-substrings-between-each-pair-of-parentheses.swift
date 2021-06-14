// 1190. Reverse Substrings Between Each Pair of Parentheses
// Source : https://leetcode.com/problems/reverse-substrings-between-each-pair-of-parentheses/

/**************************************************************************************************
 You are given a string s that consists of lower case English letters and brackets.

 Reverse the strings in each pair of matching parentheses, starting from the innermost one.

 Your result should not contain any brackets.

  

 Example 1:

 Input: s = "(abcd)"
 Output: "dcba"
 Example 2:

 Input: s = "(u(love)i)"
 Output: "iloveu"
 Explanation: The substring "love" is reversed first, then the whole string is reversed.
 Example 3:

 Input: s = "(ed(et(oc))el)"
 Output: "leetcode"
 Explanation: First, we reverse the substring "oc", then "etco", and finally, the whole string.
 Example 4:

 Input: s = "a(bcdefghijkl(mno)p)q"
 Output: "apmnolkjihgfedcbq"
  

 Constraints:

 0 <= s.length <= 2000
 s only contains lower case English characters and parentheses.
 It's guaranteed that all parentheses are balanced.
  
 **************************************************************************************************/

import Foundation

class Solution {
    func reverseParentheses(_ s: String) -> String {
        
        
        var stack : [String] = []
        var list  = Array(s)
        var str: String
        
        for i in 0..<list.count {
            
            if list[i] == ")" {
                str = ""
                while(stack[stack.count - 1] != "("){
                    str  = str + stack.removeLast().reversed()
                }
                stack.removeLast()
                stack.append(String(str))
                
                
            } else {
                
                stack.append(String(list[i]))
            }
            
        }
        
        return stack.joined(separator: "")
    }
}

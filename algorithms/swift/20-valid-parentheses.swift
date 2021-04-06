// 20. Valid Parentheses
// Source : https://leetcode.com/problems/valid-parentheses/

/**************************************************************************************************
 Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

 An input string is valid if:

 Open brackets must be closed by the same type of brackets.
 Open brackets must be closed in the correct order.
  

 Example 1:

 Input: s = "()"
 Output: true
 Example 2:

 Input: s = "()[]{}"
 Output: true
 Example 3:

 Input: s = "(]"
 Output: false
 Example 4:

 Input: s = "([)]"
 Output: false
 Example 5:

 Input: s = "{[]}"
 Output: true
  

 Constraints:

 1 <= s.length <= 104
 s consists of parentheses only '()[]{}'.

  
 **************************************************************************************************/


import Foundation

class Solution {
    func isValid(_ s: String) -> Bool {
        
        var list = Array(s)
        var mapping = ["(" : ")", "{" : "}", "[" : "]"]
       
        var stack: [String] = []
        var count = 0
        for i in 0..<list.count {
           
           if list[i] == "(" || list[i] == "{" || list[i] == "["{
               stack.append(String(list[i]))
               count += 1
                
           } else if stack.count > 0 && String(list[i]) == mapping[stack[count-1]] {
              
                  stack.removeLast()
                  count -= 1
              
           }  else {
               return false
           }
           
        }
        return stack.count == 0
        
    }
}

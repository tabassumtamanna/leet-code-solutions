// 856. Score of Parentheses
// Source : https://leetcode.com/problems/score-of-parentheses/

/**************************************************************************************************
 Given a balanced parentheses string s, compute the score of the string based on the following rule:

 () has score 1
 AB has score A + B, where A and B are balanced parentheses strings.
 (A) has score 2 * A, where A is a balanced parentheses string.
  

 Example 1:

 Input: s = "()"
 Output: 1
 Example 2:

 Input: s = "(())"
 Output: 2
 Example 3:

 Input: s = "()()"
 Output: 2
 Example 4:

 Input: s = "(()(()))"
 Output: 6
  

 Note:

 s is a balanced parentheses string, containing only ( and ).
 2 <= s.length <= 50
  
 **************************************************************************************************/

import Foundation

class Solution {
    func scoreOfParentheses(_ S: String) -> Int {
        
        var stack = [Int]()
        var score = 0
        
        let list = Array(S)
        
        for i in 0..<list.count {
            
            if  list[i] == "(" {
                
                stack.append(score)
                score = 0
                
            } else {
                score = stack.removeLast() + max ( 2 * score, 1)
            }
        }
        
        return score
    }
}

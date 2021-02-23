
// Source : https://leetcode.com/problems/reverse-integer/

/**************************************************************************************************
 Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

 Assume the environment does not allow you to store 64-bit integers (signed or unsigned).

  

 Example 1:

 Input: x = 123
 Output: 321
 Example 2:

 Input: x = -123
 Output: -321
 Example 3:

 Input: x = 120
 Output: 21
 Example 4:

 Input: x = 0
 Output: 0
  

 Constraints:

 -231 <= x <= 231 - 1
 **************************************************************************************************/


import Foundation

class Solution {
    func reverse(_ x: Int) -> Int {
        
        var neg: Bool = false
        var tempX = x
        var rev: Int = 0
        
        if x < 0 {
            neg = true
            tempX *= -1
        }
        
        while(tempX > 0)
       {
           rev *= 10
           rev += tempX%10
           tempX /= 10
       }
        
        if rev > 2147483647 || rev < -2147483648 {
            return 0
        }
            
       if neg {
           rev *= -1
       }
       return rev
        
    }
}

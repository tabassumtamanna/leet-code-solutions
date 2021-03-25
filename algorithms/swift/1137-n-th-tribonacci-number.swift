// 1137. N-th Tribonacci Number
// Source : https://leetcode.com/problems/n-th-tribonacci-number/

/**************************************************************************************************
 The Tribonacci sequence Tn is defined as follows:

 T0 = 0, T1 = 1, T2 = 1, and Tn+3 = Tn + Tn+1 + Tn+2 for n >= 0.

 Given n, return the value of Tn.

  

 Example 1:

 Input: n = 4
 Output: 4
 Explanation:
 T_3 = 0 + 1 + 1 = 2
 T_4 = 1 + 1 + 2 = 4
 Example 2:

 Input: n = 25
 Output: 1389537
  

 Constraints:

 0 <= n <= 37
 The answer is guaranteed to fit within a 32-bit integer, ie. answer <= 2^31 - 1.

 **************************************************************************************************/
import Foundation

class Solution {
    func tribonacci(_ n: Int) -> Int {
        if n == 0 || n == 1 {
            return n
        } else if n == 2{
            return 1
        }
        
        var first = 0
        var second = 1
        var third = 1
        
        var total = 0
            
        var count = 3
        while(count <= n){
            total = first + second + third
            
            first = second
            second = third
            third = total
            
            count += 1
        }
        
        return total
    }
}

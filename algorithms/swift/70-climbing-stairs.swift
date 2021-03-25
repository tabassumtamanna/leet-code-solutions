// 70. Climbing Stairs
// Source : https://leetcode.com/problems/climbing-stairs/

/**************************************************************************************************
 You are climbing a staircase. It takes n steps to reach the top.

 Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?

  

 Example 1:

 Input: n = 2
 Output: 2
 Explanation: There are two ways to climb to the top.
 1. 1 step + 1 step
 2. 2 steps
 Example 2:

 Input: n = 3
 Output: 3
 Explanation: There are three ways to climb to the top.
 1. 1 step + 1 step + 1 step
 2. 1 step + 2 steps
 3. 2 steps + 1 step
  

 Constraints:

 1 <= n <= 45

 **************************************************************************************************/
import Foundation

class Solution {
    func climbStairs(_ n: Int) -> Int {
        if n == 2 || n == 1 {
            return n
        }
        
        var first = 1
        var second = 2
        var totalStairs = 1
        
        
        for _ in 3...n{
            totalStairs = first + second
            first = second
            second = totalStairs
        
        }
        return totalStairs
    }
}

// 1512. Number of Good Pairs
// Source : https://leetcode.com/problems/number-of-good-pairs/

/**************************************************************************************************
 
 Given an array of integers nums.

 A pair (i,j) is called good if nums[i] == nums[j] and i < j.

 Return the number of good pairs.

  

 Example 1:

 Input: nums = [1,2,3,1,1,3]
 Output: 4
 Explanation: There are 4 good pairs (0,3), (0,4), (3,4), (2,5) 0-indexed.
 Example 2:

 Input: nums = [1,1,1,1]
 Output: 6
 Explanation: Each pair in the array are good.
 Example 3:

 Input: nums = [1,2,3]
 Output: 0
  

 Constraints:

 1 <= nums.length <= 100
 1 <= nums[i] <= 100
 
**************************************************************************************************/

class Solution {
    func numIdenticalPairs(_ nums: [Int]) -> Int {
        
        var counts: [Int : Int] = [:]
        var totalPair = 0
        
        for item in nums{
            counts[item] = ( counts[item] ?? 0 ) + 1
        }
        
        for (key, value) in counts {
            totalPair += (value * (value-1)) / 2
        }
        
        return totalPair
    }
}
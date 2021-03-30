// 912. Sort an Array
// Source : https://leetcode.com/problems/sort-an-array/

/**************************************************************************************************
 Given an array of integers nums, sort the array in ascending order.

  

 Example 1:

 Input: nums = [5,2,3,1]
 Output: [1,2,3,5]
 Example 2:

 Input: nums = [5,1,1,2,0,0]
 Output: [0,0,1,1,2,5]
  

 Constraints:

 1 <= nums.length <= 50000
 -50000 <= nums[i] <= 50000
  
 **************************************************************************************************/


import Foundation

class Solution {
    func sortArray(_ nums: [Int]) -> [Int] {
        
        var result = quickSort(nums, low: 0, high: nums.count-1)
        
        return result
    }
    
    func quickSort(_ input: [Int], low: Int, high: Int) -> [Int] {
        
        var result = input
      
        if low < high {
            let pivot = result[high]
            var i = low
            
            for j in low..<high {
                
                if result[j] < pivot {
                    (result[i], result[j]) = (result[j], result[i])
                     
                    i += 1
                }
                
            }
           
            (result[i], result[high]) = (result[high], result[i])
            
            result = quickSort(result, low: low, high: i-1)
            result = quickSort(result, low: i+1, high: high)
            
        }
        return result
    }
}

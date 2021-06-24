// 387. First Unique Character in a String
// Source : https://leetcode.com/problems/first-unique-character-in-a-string/

/**************************************************************************************************
 Given a string s, return the first non-repeating character in it and return its index. If it does not exist, return -1.

  

 Example 1:

 Input: s = "leetcode"
 Output: 0
 Example 2:

 Input: s = "loveleetcode"
 Output: 2
 Example 3:

 Input: s = "aabb"
 Output: -1
  

 Constraints:

 1 <= s.length <= 105
 s consists of only lowercase English letters.
  
 **************************************************************************************************/

import Foundation

class Solution {
    func firstUniqChar(_ s: String) -> Int {
        
        var list = Array(s)
        var arr : [String : Int] = [:]
        
        for i in 0..<list.count {
           
            let str = String(list[i])
            
            if let val = arr[str]{
                 arr[str] = arr[str]! + 1
            } else {
                arr[str] = 1
            }
            
        }
       
        
        var key = -1
        for i in 0..<list.count{
            
            let str = String(list[i])
            for (indx, val) in arr {
               
                if val == 1 && str == indx {
                    key = i
                    break
                }
            }
            if key != -1{
                break
            }
        }
        
        return key
    
    }
}

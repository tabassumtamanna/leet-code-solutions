// 1768. Merge Strings Alternately
// Source : https://leetcode.com/problems/merge-strings-alternately/

/**************************************************************************************************
 You are given two strings word1 and word2. Merge the strings by adding letters in alternating order, starting with word1. If a string is longer than the other, append the additional letters onto the end of the merged string.

 Return the merged string.

  

 Example 1:

 Input: word1 = "abc", word2 = "pqr"
 Output: "apbqcr"
 Explanation: The merged string will be merged as so:
 word1:  a   b   c
 word2:    p   q   r
 merged: a p b q c r
 Example 2:

 Input: word1 = "ab", word2 = "pqrs"
 Output: "apbqrs"
 Explanation: Notice that as word2 is longer, "rs" is appended to the end.
 word1:  a   b
 word2:    p   q   r   s
 merged: a p b q   r   s
 Example 3:

 Input: word1 = "abcd", word2 = "pq"
 Output: "apbqcd"
 Explanation: Notice that as word1 is longer, "cd" is appended to the end.
 word1:  a   b   c   d
 word2:    p   q
 merged: a p b q c   d
  

 Constraints:

 1 <= word1.length, word2.length <= 100
 word1 and word2 consist of lowercase English letters.
  
 **************************************************************************************************/

import Foundation


class Solution {
    func mergeAlternately(_ word1: String, _ word2: String) -> String {
        
        var arr1 = Array(word1)
        var arr2 = Array(word2)
        
        var str = ""
        
        var len = ( arr1.count > arr2.count)  ? arr1.count : arr2.count
        
        
        for i in 0..<len {
           
            let str1 = (i < arr1.count) ? String(arr1[i]) : ""
            let str2 = (i < arr2.count) ? String(arr2[i]) : ""
             
            str = str + str1 + str2
            
        }
        
        return str
        
    }
}

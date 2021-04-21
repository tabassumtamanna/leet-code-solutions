// 1832. Check if the Sentence Is Pangram
// Source : https://leetcode.com/problems/check-if-the-sentence-is-pangram/

/**************************************************************************************************
 A pangram is a sentence where every letter of the English alphabet appears at least once.

 Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.

  

 Example 1:

 Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
 Output: true
 Explanation: sentence contains at least one of every letter of the English alphabet.
 Example 2:

 Input: sentence = "leetcode"
 Output: false
  

 Constraints:

 1 <= sentence.length <= 1000
 sentence consists of lowercase English letters.
  
 **************************************************************************************************/


import Foundation

class Solution {
    func checkIfPangram(_ sentence: String) -> Bool {
        
        var alphabetList : [String : Bool] = [:]
        
        
        for i in 97..<123 {
            let s = String(UnicodeScalar(UInt8(i)))
            alphabetList[s] = false
        }
        
        for chr in sentence{
           alphabetList[String(chr)] = true
        }
        
        if let i = alphabetList.firstIndex(where: { $0.value == false}) {
           return false
        }
        
        return true
    }
}

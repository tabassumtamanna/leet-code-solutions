// 234. Palindrome Linked List
// Source : https://leetcode.com/problems/palindrome-linked-list/

/**************************************************************************************************
 Given the head of a singly linked list, return true if it is a palindrome.

  

 Example 1:


 Input: head = [1,2,2,1]
 Output: true
 Example 2:


 Input: head = [1,2]
 Output: false
  

 Constraints:

 The number of nodes in the list is in the range [1, 105].
 0 <= Node.val <= 9

  
 **************************************************************************************************/


import Foundation

/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     public var val: Int
 *     public var next: ListNode?
 *     public init() { self.val = 0; self.next = nil; }
 *     public init(_ val: Int) { self.val = val; self.next = nil; }
 *     public init(_ val: Int, _ next: ListNode?) { self.val = val; self.next = next; }
 * }
 */
class Solution {
    func isPalindrome(_ head: ListNode?) -> Bool {
        
        var current = head
        var str1: String = ""
        
        while (current != nil ){
           if let val = current?.val {
                str1 += String(val)
            }
            current = current?.next
        }
        
        let str2 = String(str1.reversed())
        
        return str1 == str2
    }
    
    
}

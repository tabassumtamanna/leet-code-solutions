// 206. Reverse Linked List
// Source : https://leetcode.com/problems/reverse-linked-list/

/**************************************************************************************************
 Given the head of a singly linked list, reverse the list, and return the reversed list.

  

 Example 1:


 Input: head = [1,2,3,4,5]
 Output: [5,4,3,2,1]
 Example 2:


 Input: head = [1,2]
 Output: [2,1]
 Example 3:

 Input: head = []
 Output: []
  

 Constraints:

 The number of nodes in the list is the range [0, 5000].
 -5000 <= Node.val <= 5000

  
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
    func reverseList(_ head: ListNode?) -> ListNode? {
        
        var prevNode: ListNode? = nil
        var currNode = head
        
        while(currNode != nil){
            
            let tempNode = currNode?.next
            
            currNode?.next = prevNode
            prevNode = currNode
            currNode = tempNode
        }
        
        return prevNode
    }
}

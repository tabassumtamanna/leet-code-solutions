// 83. Remove Duplicates from Sorted List
// Source : https://leetcode.com/problems/remove-duplicates-from-sorted-list/

/**************************************************************************************************
 Given the head of a sorted linked list, delete all duplicates such that each element appears only once. Return the linked list sorted as well.


 Example 1:


 Input: head = [1,1,2]
 Output: [1,2]
 Example 2:


 Input: head = [1,1,2,3,3]
 Output: [1,2,3]
  

 Constraints:

 The number of nodes in the list is in the range [0, 300].
 -100 <= Node.val <= 100
 The list is guaranteed to be sorted in ascending order.

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
    func deleteDuplicates(_ head: ListNode?) -> ListNode? {
        
        var current = head
        var nextNode: ListNode?
        
        while current?.next != nil {
           
            nextNode = current?.next
            
            if current?.val ==  nextNode?.val {
                current?.next = nextNode?.next
            } else {
                 current = current?.next
            }
            
        }
        
        return head
        
    }
}

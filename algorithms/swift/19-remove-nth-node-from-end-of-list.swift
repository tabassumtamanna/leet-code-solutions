// 19. Remove Nth Node From End of List
// Source : https://leetcode.com/problems/remove-nth-node-from-end-of-list/

/**************************************************************************************************
 Given the head of a linked list, remove the nth node from the end of the list and return its head.

 Follow up: Could you do this in one pass?

  

 Example 1:


 Input: head = [1,2,3,4,5], n = 2
 Output: [1,2,3,5]
 Example 2:

 Input: head = [1], n = 1
 Output: []
 Example 3:

 Input: head = [1,2], n = 1
 Output: [1]
  

 Constraints:

 The number of nodes in the list is sz.
 1 <= sz <= 30
 0 <= Node.val <= 100
 1 <= n <= sz
  
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
    func removeNthFromEnd(_ head: ListNode?, _ n: Int) -> ListNode? {
        
        var length = 0
        var current = head
        
        while current != nil {
            length += 1
            current = current?.next
        }
        
        if length == 1 {
            return head?.next
        }
        
        var counter = 0
        current = head
         
        while current != nil {
            
            if(length - n == 0){
                return current?.next
            }
            
            if counter == length - n - 1 {
                
                let nextNode = current?.next
                current?.next = nextNode?.next
            }
            
            counter += 1
            current = current?.next
        }
        
    
        return head
    }
    
    
}

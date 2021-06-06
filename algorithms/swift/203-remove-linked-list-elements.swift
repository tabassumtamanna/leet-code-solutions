// 203. Remove Linked List Elements
// Source : https://leetcode.com/problems/remove-linked-list-elements/

/**************************************************************************************************
 Given the head of a linked list and an integer val, remove all the nodes of the linked list that has Node.val == val, and return the new head.

  

 Example 1:


 Input: head = [1,2,6,3,4,5,6], val = 6
 Output: [1,2,3,4,5]
 Example 2:

 Input: head = [], val = 1
 Output: []
 Example 3:

 Input: head = [7,7,7,7], val = 7
 Output: []
  

 Constraints:

 The number of nodes in the list is in the range [0, 104].
 1 <= Node.val <= 50
 0 <= k <= 50

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
    func removeElements(_ head: ListNode?, _ val: Int) -> ListNode? {
        
        if head == nil {
            return nil
        }
        var curr = head
        
        while(curr != nil && curr?.next != nil){
            let currVal = curr?.next?.val ?? 0
            
            if currVal == val{
                curr?.next = curr?.next?.next
            } else {
                curr = curr?.next
            }
        }
        
        return head!.val == val ? head!.next : head!
    }
}

// 1721. Swapping Nodes in a Linked List
// Source : https://leetcode.com/problems/swapping-nodes-in-a-linked-list/

/**************************************************************************************************
 You are given the head of a linked list, and an integer k.

 Return the head of the linked list after swapping the values of the kth node from the beginning and the kth node from the end (the list is 1-indexed).

  

 Example 1:


 Input: head = [1,2,3,4,5], k = 2
 Output: [1,4,3,2,5]
 Example 2:

 Input: head = [7,9,6,6,7,8,3,0,9,5], k = 5
 Output: [7,9,6,6,8,7,3,0,9,5]
 Example 3:

 Input: head = [1], k = 1
 Output: [1]
 Example 4:

 Input: head = [1,2], k = 1
 Output: [2,1]
 Example 5:

 Input: head = [1,2,3], k = 2
 Output: [1,2,3]
  

  
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
    func swapNodes(_ head: ListNode?, _ k: Int) -> ListNode? {
        
        var length = 0
        var position: ListNode?
        var current = head
        
        while (current != nil){
            
            length += 1
            
            if length == k {
                 position = current
            }
            
            current = current?.next
        }
        
       
        current = head
        var counter = 1
        while (current != nil){
        
            if counter == length - k + 1 {
                break
            }
            counter += 1
            current = current?.next
        }
        
        if let tmp = position?.val, let tmp1 = current?.val {
            
            current?.val = tmp
            position?.val = tmp1
        }
        
        return head
        
    }
}

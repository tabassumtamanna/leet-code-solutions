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


<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function swapNodes($head, $k) {
        
        $length = 0;
        
        $current = $head;
        
        while ($current != null){
            
            $length += 1;
            
            if ( $length == $k ){
                 $position = $current;
            }
            $current = $current->next;
        }
        
        $current = $head;
        $counter = 1;
        while ($current != null){
        
            if ( $counter == $length - $k + 1) {
                $tmp = $current->val;
                $current->val = $position->val;
                $position->val = $tmp;
                
                break;
            }
            $counter += 1;
            $current = $current->next;
        }
        
        return $head;
    }
}
?>

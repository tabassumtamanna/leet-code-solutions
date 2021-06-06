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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        
        while($head != null && $head->val == $val){
            $head = $head->next;
        }
        
        $curr = $head;
        
        while ($curr != null && $curr->next != null){
            
            if($curr->next->val == $val ){
                $curr->next = $curr->next->next;
            } else {
                $curr = $curr->next;
            }
        }
        
        return $head;
    }
}
?>

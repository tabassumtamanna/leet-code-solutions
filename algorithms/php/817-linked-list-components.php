// 817. Linked List Components
// Source : https://leetcode.com/problems/linked-list-components/

/**************************************************************************************************
 We are given head, the head node of a linked list containing unique integer values.

 We are also given the list nums, a subset of the values in the linked list.

 Return the number of connected components in nums, where two values are connected if they appear consecutively in the linked list.

 Example 1:

 Input:
 head: 0->1->2->3
 nums = [0, 1, 3]
 Output: 2
 Explanation:
 0 and 1 are connected, so [0, 1] and [3] are the two connected components.
 Example 2:

 Input:
 head: 0->1->2->3->4
 nums = [0, 3, 1, 4]
 Output: 2
 Explanation:
 0 and 1 are connected, 3 and 4 are connected, so [0, 1] and [3, 4] are the two connected components.
 Note:

 If n is the length of the linked list given by head, 1 <= n <= 10000.
 The value of each node in the linked list will be in the range [0, n - 1].
 1 <= nums.length <= 10000.
 nums is a subset of all values in the linked list.
  
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
     * @param Integer[] $nums
     * @return Integer
     */
    function numComponents($head, $nums) {
        
        $curr = $head;
        $count = 0;
        $flag = true;
        
        while($curr != null){
           if ( in_array($curr->val , $nums)){
               
                if($flag){
                   $flag = false;
                   $count++;
               }
            } else {
                $flag = true;
            }
            
            $curr = $curr->next;
        }
                
        return $count;
    }
}
?>

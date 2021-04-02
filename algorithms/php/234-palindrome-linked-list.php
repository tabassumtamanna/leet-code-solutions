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
         * @return Boolean
         */
        function isPalindrome($head) {
            
            $str1 = $this->listToString($head);
            
            $revList = $this->reverseList($head);
            
            $str2 = $this->listToString($revList);
          
           
            return $str1 == $str2;
          
        }
        
        function listToString($head){
            
            $current = $head;
            $str = "";
            while($current != null){
                
                $str .=  $current->val;
                $current = $current->next;
            }
            
            return $str;
        }
        
        function reverseList($head){
            
            $current = $head;
            $prev = null;
            
            while($current != null){
               
                $tmp = $current->next;
                
                $current->next = $prev;
                $prev = $current;
                $current = $tmp;
            }
           
            return $prev;
        }
    }

?>

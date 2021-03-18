// 938. Range Sum of BST
// Source : https://leetcode.com/problems/range-sum-of-bst/

/**************************************************************************************************
 Given the root node of a binary search tree, return the sum of values of all nodes with a value in the range [low, high].

  

 Example 1:


 Input: root = [10,5,15,3,7,null,18], low = 7, high = 15
 Output: 32
 Example 2:


 Input: root = [10,5,15,3,7,13,18,1,null,6], low = 6, high = 10
 Output: 23
  

 Constraints:

 The number of nodes in the tree is in the range [1, 2 * 104].
 1 <= Node.val <= 105
 1 <= low <= high <= 105
 All Node.val are unique.
 **************************************************************************************************/

<?php
    
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high) {
        
        if($root == NULL)
            return 0;
        
        $sum = 0;
        $sum += $this->rangeSumBST($root->left, $low, $high);
        $sum += $this->rangeSumBST($root->right, $low, $high);
        
        if($root->val >= $low && $root->val <= $high )
            $sum += $root->val;
        
        return $sum;
    }
}
    
?>


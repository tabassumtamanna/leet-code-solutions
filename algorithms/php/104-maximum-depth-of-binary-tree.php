// 104.  Maximum Depth of Binary Tree
// Source : https://leetcode.com/problems/maximum-depth-of-binary-tree/

/**************************************************************************************************
 Given the root of a binary tree, return its maximum depth.

 A binary tree's maximum depth is the number of nodes along the longest path from the root node down to the farthest leaf node.

  

 Example 1:


 Input: root = [3,9,20,null,null,15,7]
 Output: 3
 Example 2:

 Input: root = [1,null,2]
 Output: 2
 Example 3:

 Input: root = []
 Output: 0
 Example 4:

 Input: root = [0]
 Output: 1
  

 Constraints:

 The number of nodes in the tree is in the range [0, 104].
 -100 <= Node.val <= 100
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
     * @return Integer
     */
    function maxDepth($root) {
        
        if($root == NULL)
            return 0;
        
        
       $left  =  $this->maxDepth($root->left);
       $right = $this->maxDepth($root->right);
        
       return max($left,$right) + 1;
        
    }
}
    

?>


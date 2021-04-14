// 155. Min Stack
// Source : https://leetcode.com/problems/min-stack/

/**************************************************************************************************
 Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.

 Implement the MinStack class:

 MinStack() initializes the stack object.
 void push(val) pushes the element val onto the stack.
 void pop() removes the element on the top of the stack.
 int top() gets the top element of the stack.
 int getMin() retrieves the minimum element in the stack.
  

 Example 1:

 Input
 ["MinStack","push","push","push","getMin","pop","top","getMin"]
 [[],[-2],[0],[-3],[],[],[],[]]

 Output
 [null,null,null,null,-3,null,0,-2]

 Explanation
 MinStack minStack = new MinStack();
 minStack.push(-2);
 minStack.push(0);
 minStack.push(-3);
 minStack.getMin(); // return -3
 minStack.pop();
 minStack.top();    // return 0
 minStack.getMin(); // return -2
  

 Constraints:

 -231 <= val <= 231 - 1
 Methods pop, top and getMin operations will always be called on non-empty stacks.
 At most 3 * 104 calls will be made to push, pop, top, and getMin.

  
 **************************************************************************************************/


<?php

class MinStack {
    
     private $minStack = array();
    
    /**
     * initialize your data structure here.
     */
    function __construct() {
         $this->minStack = [];
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val) {
        array_push($this->minStack, $val);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        return array_pop($this->minStack);
    }
  
    /**
     * @return Integer
     */
    function top() {
        $length = count($this->minStack)-1;
        return $this->minStack[$length];
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->minStack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
?>
    

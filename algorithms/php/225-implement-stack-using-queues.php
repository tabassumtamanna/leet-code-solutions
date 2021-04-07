// 225. Implement Stack using Queues
// Source : https://leetcode.com/problems/implement-stack-using-queues/

/**************************************************************************************************
 Implement a last in first out (LIFO) stack using only two queues. The implemented stack should support all the functions of a normal queue (push, top, pop, and empty).

 Implement the MyStack class:

 void push(int x) Pushes element x to the top of the stack.
 int pop() Removes the element on the top of the stack and returns it.
 int top() Returns the element on the top of the stack.
 boolean empty() Returns true if the stack is empty, false otherwise.
 Notes:

 You must use only standard operations of a queue, which means only push to back, peek/pop from front, size, and is empty operations are valid.
 Depending on your language, the queue may not be supported natively. You may simulate a queue using a list or deque (double-ended queue), as long as you use only a queue's standard operations.
  

 Example 1:

 Input
 ["MyStack", "push", "push", "top", "pop", "empty"]
 [[], [1], [2], [], [], []]
 Output
 [null, null, null, 2, 2, false]

 Explanation
 MyStack myStack = new MyStack();
 myStack.push(1);
 myStack.push(2);
 myStack.top(); // return 2
 myStack.pop(); // return 2
 myStack.empty(); // return False
  

 Constraints:

 1 <= x <= 9
 At most 100 calls will be made to push, pop, top, and empty.
 All the calls to pop and top are valid.
 **************************************************************************************************/


<?php
    
class MyStack {
    
    private $myStack = array();
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        
        $this->myStack = [];
    }
  
    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->myStack, $x);
    }
  
    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {
        return array_pop($this->myStack);
    }
  
    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        return $this->myStack[count($this->myStack)-1];
    }
  
    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return count($this->myStack) == 0;
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
    
?>

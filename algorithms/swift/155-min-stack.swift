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


import Foundation


class MinStack {

    var minStack : [Int]
    var minVal: Int
    
    
    /** initialize your data structure here. */
    init() {
       self.minStack = []
       self.minVal = Int.max
      
    }
    
    func push(_ val: Int) {
        self.minStack.append(val)
        
        if minVal > val {
            minVal = val
        }
    }
    
    func pop() {
       let val = self.minStack.removeLast()
       
       if val == minVal {
           minVal = self.minStack.min() ?? Int.max
       }
    }
    
    func top() -> Int {
        return self.minStack[self.minStack.count - 1 ]
    }
    
    func getMin() -> Int {
        return self.minVal
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * let obj = MinStack()
 * obj.push(val)
 * obj.pop()
 * let ret_3: Int = obj.top()
 * let ret_4: Int = obj.getMin()
 */

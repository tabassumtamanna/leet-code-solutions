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


import Foundation


class MyStack {
    var myStack: [Int]
    
    /** Initialize your data structure here. */
    init() {
        myStack = []
    }
    
    /** Push element x onto stack. */
    func push(_ x: Int) {
        myStack.append(x)
    }
    
    /** Removes the element on top of the stack and returns that element. */
    func pop() -> Int {
        return myStack.removeLast()
    }
    
    /** Get the top element. */
    func top() -> Int {
        return myStack[myStack.count-1]
    }
    
    /** Returns whether the stack is empty. */
    func empty() -> Bool {
        return myStack.count == 0
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * let obj = MyStack()
 * obj.push(x)
 * let ret_2: Int = obj.pop()
 * let ret_3: Int = obj.top()
 * let ret_4: Bool = obj.empty()
 */

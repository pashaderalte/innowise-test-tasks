## **Task 1**

Write a PHP functions to test whether a number is greater than 30, 20 or 10 using a if conditions, switch and ternary operator.

*Input args*: (int $inputNumber).

*Output args*: Function must be return one value from list:

- More than 30
- More than 20
- More than 10
- Equal or less than 10

**What would success look like?**

3 functions that perform the same action, but in 3 different ways (if, switch, ternary operator).

**Questions**: 

- What is the difference between if, switch, and the ternary operator? 
  - *If* and *switch* are both control structures, but with different implementation. Both of them are used to execute code fragments based on the result of given condition. 
  - The *ternary operator* is an operator, so it forms an expression to further use of its value.
- Which is better to use in what situations.
  - *If* is the most common implementation of control structure use cases. 
  - *Switch* is convenient in situations where we have many options to choose from. Overall, it's more readable and maintainable in that situations.
  - *Ternary operator* used for simple situations where a variable can take two possible values depending on a condition.
- What is the Nullish coalescing operator?
  - Operator that checks the existence of some value -- if it's *null*, and if it is, return specified value. In other words expression `isset( $someVar ) ? $someVar : 'Not exists'` equals `$someVar ?? 'Not exists'`.
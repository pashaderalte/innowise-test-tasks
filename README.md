## **Task 10**

Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

You need to implement 8 methods: *add(), multiply(), divide(), add(), subtract(), addBy(), divideBy(), multiplyBy(), subtractBy()*.

**Provide an opportunity to make calculations by chain.**

**For example:**

`$mycalc = new MyCalculator(12, 6);`

`echo $mycalc->add(); // Displays 18`

`echo $mycalc->multiply(); // Displays 72`

`// Calculation by chain`

`echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )`

**What would success look like?**

A class that executes the necessary methods.
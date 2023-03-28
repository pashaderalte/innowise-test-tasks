## **Task 2**

Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday. Your script should determine the number of days based on the current date.

Func args: (string $date).

Acceptable date format is ’DD-MM-YYYY’.

**What would success look like?**

A function that returns how many days are left until the entered birthday.

**Questions**: 
- What functions are available for working with dates?
  - Two main ways to work with date in PHP are creating Date/DateTime objects or working with raw numbers using timestamps (both options are invertible).
    - For the DateTime option it's just methods of this class or its parent like *add(), diff(), format(), modify()* and so on.
    - Timestamp *"work lifecycle"* is to convert string into timestamp itself with *strtotime()* and make simple arithmetical operations with it not forgetting to convert values with division operation. After you can convert it back to string using *date()* function. 
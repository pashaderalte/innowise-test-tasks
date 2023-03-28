## **Task 4**

Given a list of values. Delete the element from the list in the 'n' position. After deleting the element, integer keys must be normalized. Use function *array_values()* is forbidden.

Func args: (array $arr, int $position)

**For example**

*Input:*

array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }

$position = 3;

*Output:*

array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

**What would success look like?**

A function that removes an element from an array by a key and restores the order of elements in that array.

**Questions**: 
- What are some ways to remove an element from an array? How does this affect memory?
  - Iterating through array with the help of *for/foreach* or using *array_shift()*, *array_pop()*, *unset()*, *array_splice()*, *array_diff()*, *array_diff_key()* and *array_filter()* functions.
  - For the first option good practice is to use a reference to a variable in which array is stored because it help us to avoid making copies of array in each loop iteration. Speaking of the second option it's totally memory safe.
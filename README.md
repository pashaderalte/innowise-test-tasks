## **Task 6**

Given a string where words are separated by any of the '_', '-', ' ' characters. Write a function that converts such strings to single studly caps case words and removes extra spaces on both sides.

**For example**

*Input*:       ‘               The quick-brown_fox jumps over the_lazy-dog       ’

*Output*:    ‘TheQuickBrownFoxJumpsOverTheLazyDog’

Func args:  (string $input)

**What would success look like?**

A function that returns a string where all the individual words begin with a capital letter.

**Questions**: 
- What methods are available for working with strings?
  - implode(), explode(), str_replace(), chop(), strlen(), strtolower(), strtoupper(), ucwords() and others from https://www.php.net/manual/en/ref.strings.php
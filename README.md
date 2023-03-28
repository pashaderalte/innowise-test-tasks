## **Task 11**

Write a program to find the path. Create a 10x10 array of coordinates, any multidimensional array of the form $array[y][x] = status, where status is the availability of the cell (if 1 - then there is an obstacle and it must be bypassed, 0 - you can pass). You need to make a path to get from point A to point B bypassing obstacles. You can only move horizontally or vertically. Use classes, serialization to store data. The result of the previous search attempts can be retrieved from the save file.

*The points A and B are arbitrary:*

A ($a = array("x"=>2, "y"=>3);)

B ($b = array("x"=>9, "y"=>1);)

You need to generate a field (10x10 or other), output with the field and with the search result to a file.

**What would success look like?**

A program that generates a 10x10 field and finds the shortest path from point A to point B.

**Questions**: 
- What methods are available for working with files? 
  - General functions to work with files: *fopen()*, *fclose()*, *file()*, *file_exists()*, *file_put_contents()*
  - Edit rights like in Unix-based systems: *chgrp()*, *chown()*, *chmod()* 
  - Copy/delete: *copy()*, *delete()*
- What is serialization?
  - Serialization encodes objects into another format. Basically, to store an object in readable form for further usage. 
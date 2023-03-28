## **Task 9**

Create an example of inheritance, implement the Student class and the Aspirant class, a graduate student differs from a student in having some kind of research work.

The **Student** class contains variables:

Strings: firstName, lastName, group.

Float: averageMark.

Create a variable of type **Student** that refers to an object of type **Aspirant**.

Create a *getScholarship()* method for the **Student** class that returns the scholarship amount.

If the average grade of the student is 5, then the amount is 100 USD, otherwise 80 USD. Override this method in the **Aspirant** class. If the average grade of a graduate student is 5, then the amount is 200 USD, otherwise 180 USD.

Create an array of Student type that contains objects of **Student** and **Aspirant** class. Call *getScholarship()* method for each element of the array.

**What would success look like?**

Implemented classes with defined methods, inheritance.

**Questions**: 
- What is inheritance? 
  - It is a mechanism where you can to derive a class from another class for a hierarchy of classes that share a set of attributes and methods.
- What are interfaces, abstract classes? What are the differences between them?
  - Interface define semantics of inherited class -- skeleton of it, abstract class in its turn may have implemented methods and abstract methods that must be implemented in inherited class. We can inherit many interfaces and only one abstract class. Both can't have their objects.
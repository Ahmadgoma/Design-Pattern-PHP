
## Facade 
 
* An object provides simple interface of complex subsystem "large body of code" as class library.

#### When to use :
* Used as a class wraps more classes as sub-systems in application.
  
#### How to Implement:
1 - Declare a class that has large of code.

2 - Provide method of facade class and inject this class in constructor.

5 - Go over the client code and call the method of class "simple interface".

#### Examples:
1 - Computer provides button "simple interface" to turn on/off 
and internally in machine has a lot of stuff to make it happen. 

2- Video converter application 
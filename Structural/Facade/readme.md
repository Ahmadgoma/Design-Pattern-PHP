
## Facade 
 
* An object provides a simple interface of complex subsystem "large body of code" as class library.
* Class wrapping complex subsystems (subclasses) to provide a simple and more readable interface of it. 
#### When to use :
* Used as a class wraps more classes as sub-systems in application.
  
#### How to Implement:
1 - Declare a class that has large of code.

2 - Provide method of facade class and inject this class in the constructor.

5 - Go over the client code and call the method of class "simple interface".

#### Examples:
1 - Computer provides button "simple interface" to turn on/off 
and internally in the machine has a lot of stuff to make it happen. 

2- Video converter application.
3- Online shopping system => Purchase order (check stock availability - place order -create invoice - payment process)

### 
There is no conflict between it and single responsibility,
because this class responsible for execute one process 
ex : purchase order.
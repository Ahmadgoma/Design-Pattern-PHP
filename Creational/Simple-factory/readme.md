
## Simple factory
 
* Generates an instance for client without exposing any instantiation
 logic to the client.

#### When to use :
* when creating an object with (logic and assignments),
it makes sense to put it in dedicated factory instead of repeating
same code every where.
  
#### How to Implement:
1 - Interface of needed class.

2 - Declare a class that implement that interface.

3 - Declare a public static creation method in factory class.

4 - Create new instance in this method of class that need to create.

5 - Go over the client code and call static method when need to create object from class.

#### Examples:
1 - Building house and you need doors, windows and you don’t need to care about how it was made. 

2 - Notifier with email or sms as real world example, see this [link](https://adnanahmed.info/blog/2017/01/20/simple-factory-pattern/).
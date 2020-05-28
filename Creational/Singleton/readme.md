
## Singleton
 
* Ensures that the class has only one instance with
providing global access point to this instance.

####Notes:
* Considered an anti-pattern and overuse of it should be avoided.
* Difficulty to debug.
* Makes your code tightly coupled plus mocking it could be difficult.
  
####How to Implement:
1 - Add a private static field to the class for storing the singleton instance.

2 - Declare a public static creation method for getting the singleton instance.

3 - Implement “lazy initialization” inside the static method. It should create a new object on its first call and put it into the static field. The method should always return that instance on all subsequent calls.

4 - Make the constructor of the class private.
'In php Disable cloning and extension'

5 - Go over the client code and replace all direct calls to the singleton’s constructor with calls to its static creation method.

#######Examples:
1 - The database connection

2 - The President of a country as real world example.
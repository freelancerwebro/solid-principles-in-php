# SOLID Principles in PHP
SOLID Principles coded in PHP scripting language.

1. Single responsibility
  - a class or a module should have only a single responsibility
  - there should be only one reason to change a class or module
2. Open/closed
  - classes, functions, modules should be open for extension, but closed for modification
3. Liskov substitution
  - if a program module is using a Base class then the reference to the Base class be replaced with a Derived class without affecting the functionality of the module.
    - subclass does not allow or ignores some operation that the base class provides
    - subclass does not allow some parameters or ignores them.
4. Interface segregation
  - classes that implement interfaces should not be forced to implement methods they do not use
  - it is better to have many small interfaces, rather than a few large interfaces
5. Dependency inversion
  - high level objects should not depend on low level implementations. Both should depend on abstractions.
  - abstractions should not depend on details. Details should depend on abstractions.

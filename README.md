# Pancake Maker

A simple demo of the _Ports and Adapters_ concept written in PHP.

# Setup and Installation

There are no setup steps needed. 
A composer.json is provided, but it is not 
really necessary.

# Usage / Entry Points

- {web-root}/web/index.php?amount={number}
- {project-root}/cli/index.php {number}

# Concept

- All the _Ports_ are declared as interfaces 
inside the _Application Core_
- The primary adapters are implemented in the
_Application Core_ and are injected in the classes
related to the delivery mechanisms (Web, CLI, etc.)
- The secondary adapters are implemented in the
infrastructure and are injected in the 
_Application Core_ classes where needed.
- Bonus: the dependency injection is based on the
concept of _Composition Root_.

# Static Analysis
- Just for fun, the code passes the 
_PhpStorm_ (incl. EA Plugin),
_PHAN_, _PhpStan_ and _Psalm_ checks at
maximum possible levels.

# Credits

Based on the ideas from the following repository: 
https://github.com/claresudbery/ClaresPancakes
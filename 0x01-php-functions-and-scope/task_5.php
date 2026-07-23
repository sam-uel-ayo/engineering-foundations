<?php
/**
 * Task 5: Anonymous Functions (Closures)
 *
 * Anonymous functions are functions without a name. They are assigned to
 * variables or passed as arguments. This is fundamental to modern PHP.
 *
 * Requirements:
 * Part A: Create an anonymous function and assign it to $greet.
 *         $greet should accept a name and return "Hello, [name]!"
 *         Call it like a regular function: $greet("Samuel")
 *
 * Part B: Create an array of numbers [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5].
 *         Use usort() with an anonymous function to sort it descending.
 *         Print the sorted array.
 *
 * Part C: Write a function multiplier($factor) that RETURNS an anonymous
 *         function. The returned function should multiply its argument by $factor.
 *         $double = multiplier(2);
 *         $triple = multiplier(3);
 *         echo $double(5);  // 10
 *         echo $triple(5);  // 15
 *         This pattern is called a "closure factory". Write a comment explaining it.
 *
 * Part D: Demonstrate the use keyword — create $prefix = "Mr." outside a closure,
 *         then use it inside the closure with use ($prefix).
 *         Without use, can the closure see $prefix? Test it and explain why not.
 */

// Your solution below.

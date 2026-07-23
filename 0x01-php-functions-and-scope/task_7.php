<?php
/**
 * Task 7: Recursive Functions
 *
 * A recursive function calls itself. It must have a base case or it runs forever.
 * Recursion is fundamental to understanding how computers solve problems.
 *
 * Requirements:
 * Part A: Write a recursive function factorial($n) that calculates n!
 *         factorial(0) = 1, factorial(1) = 1, factorial(5) = 120
 *         Add a guard: if $n < 0, throw an InvalidArgumentException.
 *
 * Part B: Write a recursive function fibonacci($n) that returns the nth
 *         Fibonacci number. fibonacci(0)=0, fibonacci(1)=1, fibonacci(10)=55.
 *         Then write a comment explaining why this naive recursive approach
 *         is inefficient for large n. What is the time complexity?
 *
 * Part C: Write a recursive function flattenArray($arr) that takes a
 *         deeply nested array and returns a flat array.
 *         Input:  [1, [2, 3], [4, [5, 6]], 7]
 *         Output: [1, 2, 3, 4, 5, 6, 7]
 *
 * Part D: Write a recursive function treeSum($node) that sums all values
 *         in a tree represented as nested arrays:
 *         $tree = ["value" => 1, "children" => [
 *           ["value" => 2, "children" => []],
 *           ["value" => 3, "children" => [
 *             ["value" => 4, "children" => []]
 *           ]]
 *         ]];
 *         treeSum($tree) should return 10.
 */

// Your solution below.

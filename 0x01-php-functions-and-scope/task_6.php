<?php
/**
 * Task 6: Arrow Functions
 *
 * Arrow functions (fn =>) are a shorter syntax for closures introduced in PHP 7.4.
 * They automatically capture variables from the outer scope without use.
 *
 * Requirements:
 * Part A: Rewrite ALL four parts of task_5 using arrow functions wherever possible.
 *         Note which parts can be rewritten and which cannot — and write a comment
 *         explaining the limitation of arrow functions (single expression only).
 *
 * Part B: Given this array of user arrays:
 *         $users = [
 *           ["name" => "Alice", "age" => 28, "active" => true],
 *           ["name" => "Bob", "age" => 34, "active" => false],
 *           ["name" => "Charlie", "age" => 23, "active" => true],
 *           ["name" => "Tolu", "age" => 27, "active" => true],
 *         ];
 *
 *         Use array_filter() with an arrow function to get only active users.
 *         Use array_map() with an arrow function to get only their names.
 *         Use array_reduce() with an arrow function to get total age of active users.
 *         Print each result.
 *
 * Part C: Write a comment explaining when you would choose arrow functions
 *         over regular closures and vice versa. Minimum 4 sentences.
 */

// Your solution below.

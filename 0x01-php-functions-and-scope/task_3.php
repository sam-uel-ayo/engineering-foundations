<?php
/**
 * Task 3: Pass by Value vs Pass by Reference
 *
 * This is one of the most important concepts in PHP and causes real bugs
 * in production when misunderstood.
 *
 * Requirements:
 * Part A: Write a function doubleValue($n) that doubles $n.
 *         Call it with $x = 5. Print $x before and after the call.
 *         What happened to $x? Write a comment explaining pass by value.
 *
 * Part B: Write a function doubleReference(&$n) that doubles $n using reference.
 *         Call it with $y = 5. Print $y before and after.
 *         What is different now?
 *
 * Part C: Write a function appendItem($arr, $item) and call it with an array.
 *         Does the original array change? Why not?
 *
 * Part D: Write a function appendItemRef(&$arr, $item) using reference.
 *         Now does the original array change?
 *
 * Part E: Real scenario — write a function sortAndReturn($arr) that sorts
 *         an array and returns it (pass by value approach).
 *         Write a function sortInPlace(&$arr) that sorts in place (reference).
 *         Which approach is better for a large dataset and why?
 *         Write a comment with minimum 3 sentences answering this.
 */

// Your solution below.

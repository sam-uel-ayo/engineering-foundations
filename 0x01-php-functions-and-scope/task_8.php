<?php
/**
 * Task 8: Higher-Order Functions
 *
 * A higher-order function either accepts a function as an argument
 * or returns a function. You have seen this in task_5 and task_6.
 * Now you will build your own versions of PHP's built-in higher-order functions.
 *
 * Requirements:
 * DO NOT use array_map, array_filter, or array_reduce in this task.
 * Build your own versions from scratch.
 *
 * Part A: Write myMap(array $arr, callable $fn): array
 *         It should apply $fn to each element and return a new array.
 *         Test: myMap([1,2,3,4,5], fn($n) => $n * 2) => [2,4,6,8,10]
 *
 * Part B: Write myFilter(array $arr, callable $fn): array
 *         It should return only elements where $fn returns true.
 *         Test: myFilter([1,2,3,4,5,6], fn($n) => $n % 2 === 0) => [2,4,6]
 *
 * Part C: Write myReduce(array $arr, callable $fn, mixed $initial): mixed
 *         It should accumulate a single value by applying $fn.
 *         Test: myReduce([1,2,3,4,5], fn($carry, $item) => $carry + $item, 0) => 15
 *
 * Part D: Write myPipe(callable ...$fns): callable
 *         It returns a function that passes a value through each function in order.
 *         $process = myPipe(
 *           fn($n) => $n * 2,
 *           fn($n) => $n + 10,
 *           fn($n) => $n / 2
 *         );
 *         echo $process(5); // ((5 * 2) + 10) / 2 = 10
 */

// Your solution below.

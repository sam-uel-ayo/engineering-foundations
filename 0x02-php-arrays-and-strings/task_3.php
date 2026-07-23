<?php
/**
 * Task 3: Array Manipulation
 *
 * Requirements:
 * Part A: Array slicing and splicing
 *         $letters = ["a","b","c","d","e","f","g","h","i","j"];
 *         - Get elements from index 2 to 5 using array_slice()
 *         - Get last 3 elements using array_slice() with negative offset
 *         - Remove elements from index 3 to 5 and insert ["x","y"] using array_splice()
 *         - Print result after each operation
 *
 * Part B: Merging arrays
 *         $defaults = ["color" => "blue", "size" => "medium", "quantity" => 1];
 *         $custom = ["color" => "red", "quantity" => 5, "gift_wrap" => true];
 *         - Merge with array_merge() — what happens to duplicate keys?
 *         - Merge with + operator — what is different?
 *         - Merge with array_merge() but $custom overrides $defaults
 *         Write a comment explaining which merge strategy to use in a config system.
 *
 * Part C: Array chunking and combining
 *         $ids = [1,2,3,4,5,6,7,8,9,10];
 *         - Split into chunks of 3 using array_chunk()
 *         - Combine with array_combine():
 *           $keys = ["first", "last", "email"];
 *           $values = ["Samuel", "Ayomide", "samuel@example.com"];
 *           Print the combined result.
 *
 * Part D: Flatten this nested array WITHOUT using array_merge inside a loop trick:
 *         $nested = [[1,2],[3,4],[5,6],[7,8]];
 *         Use array_merge(...$nested) with splat operator.
 *         Print result and explain why this works.
 */

// Your solution below.

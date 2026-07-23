<?php
/**
 * Task 2: Generators
 *
 * Generators allow you to iterate over large datasets without loading
 * everything into memory. Critical for processing large files or DB results.
 *
 * Requirements:
 * Part A: Write a generator function fibonacci() that yields Fibonacci numbers
 *         indefinitely (no upper limit). Use it with a foreach and break at 1000.
 *
 * Part B: Write a generator function readCsvLines($filename) that yields
 *         one row at a time from a large CSV file.
 *         Create a test CSV with 1000 rows first, then use the generator
 *         to process only rows where the "amount" column > 5000.
 *         Prove memory usage is low by printing memory_get_peak_usage() before and after.
 *
 * Part C: Write a generator pipeline:
 *         function take(Generator $gen, int $n): Generator — yields first n items
 *         function map(Generator $gen, callable $fn): Generator — transforms each item
 *         function filter(Generator $gen, callable $fn): Generator — filters items
 *
 *         Chain them: take(filter(map(fibonacci(), fn($n) => $n * 2), fn($n) => $n % 3 === 0), 10)
 *         Print the first 10 doubled Fibonacci numbers divisible by 3.
 *
 * Write a comment: "When would you use a generator in a real Laravel application?
 *                   Give 2 concrete examples from API or background job work."
 */

// Your solution below.

<?php
/**
 * Task 13: Ternary and Null Coalescing
 *
 * PHP has shorthand operators that experienced developers use constantly.
 * This task forces you to read and write them fluently.
 *
 * Requirements:
 * Part A: Rewrite these if/else blocks as single-line ternary expressions:
 *
 *   Block 1:
 *   if ($age >= 18) { $status = "adult"; } else { $status = "minor"; }
 *
 *   Block 2:
 *   if ($score > 50) { $result = "pass"; } else { $result = "fail"; }
 *
 *   Block 3 (nested ternary — be careful with PHP 8 changes here):
 *   if ($score >= 90) { $grade = "A"; }
 *   elseif ($score >= 70) { $grade = "B"; }
 *   else { $grade = "C"; }
 *
 * Part B: Use the null coalescing operator ?? for these scenarios:
 *   - Get $_GET['username'] but default to "guest" if not set
 *   - Get a deeply nested array value $config['db']['host'] defaulting to "localhost"
 *   - Chain three potential sources: $user->name ?? $user->email ?? "Anonymous"
 *
 * Part C: Use ??= (null coalescing assignment) to:
 *   - Set $cache['results'] to an empty array only if it is not already set
 *
 * Write a comment above each Part B and C example explaining what ?? saves
 * you from compared to writing it with isset() and if/else.
 */

// Your solution below.

<?php
/**
 * Task 10: Final Challenge — Build a Simple Calculator with Function Map
 *
 * This task combines everything from 0x01 into one coherent program.
 *
 * Requirements:
 * Build a calculator that:
 * 1. Has separate functions for: add, subtract, multiply, divide, power, modulo, sqrt
 * 2. Each function has proper type declarations and handles edge cases
 *    (divide by zero, sqrt of negative number)
 * 3. Has a $operations array that maps string names to function references:
 *    $operations = ["add" => $add, "subtract" => $subtract, ...]
 * 4. Has a calculate($operation, $a, $b = null) function that:
 *    - Looks up the operation in $operations
 *    - Calls it with the appropriate arguments
 *    - Returns the result or throws InvalidArgumentException for unknown operations
 * 5. Has a history system using a static variable that records every calculation
 * 6. Has a getHistory() function that returns all past calculations
 * 7. Has a clearHistory() function
 *
 * Test with at least 10 different calculations, then print full history.
 *
 * Congratulations — you have completed 0x01.
 * You now understand PHP functions deeply. Commit and move to 0x02.
 */

// Your solution below.

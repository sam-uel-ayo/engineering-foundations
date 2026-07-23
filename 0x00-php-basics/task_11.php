<?php
/**
 * Task 11: Type Casting
 *
 * Explicit type casting is different from type juggling (task_2).
 * This task forces you to understand when and how to cast deliberately.
 *
 * Requirements:
 * Write a function strictConvert($value, $targetType) that:
 * - Accepts any value and a target type string ("int", "float", "string", "bool", "array")
 * - Returns the value cast to that type
 * - Prints before and after: "Before: [value] ([type]) => After: [value] ([type])"
 *
 * Test with:
 * - ("42.9", "int") — what is lost?
 * - (0, "bool") — surprising?
 * - ("", "bool") — what does PHP consider falsy strings?
 * - (null, "array") — what does PHP do here?
 * - ([1,2,3], "string") — does this work? Why or why not?
 * - (true, "int") — what value does true cast to?
 *
 * Write a comment after each test explaining the result.
 * The comments are mandatory.
 */

// Your solution below.

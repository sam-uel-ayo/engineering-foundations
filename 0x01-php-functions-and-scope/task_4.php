<?php
/**
 * Task 4: Variadic Functions
 *
 * Variadic functions accept an unlimited number of arguments.
 * PHP uses the ... (splat) operator for this.
 *
 * Requirements:
 * Part A: Write a function sum(...$numbers): float that accepts any number
 *         of numeric arguments and returns their sum.
 *         Call with: sum(1, 2, 3), sum(1.5, 2.5, 3.0, 4.0), sum(100)
 *
 * Part B: Write a function logMessage(string $level, string ...$messages): void
 *         that prints each message prefixed with the level.
 *         Format: "[LEVEL] message"
 *         Call with: logMessage("ERROR", "DB connection failed", "Retrying...")
 *
 * Part C: Write a function buildQuery(string $table, string ...$columns): string
 *         that builds a SELECT SQL query string.
 *         buildQuery("users", "id", "name", "email") => "SELECT id, name, email FROM users"
 *         buildQuery("users") => "SELECT * FROM users"
 *
 * Part D: Use the splat operator in the OTHER direction — to unpack an array
 *         into a function call.
 *         Create $args = [1, 2, 3, 4, 5] and call sum(...$args).
 *         Print the result.
 */

// Your solution below.

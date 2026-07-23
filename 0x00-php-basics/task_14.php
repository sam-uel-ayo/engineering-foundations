<?php
/**
 * Task 14: Match Expression (PHP 8+)
 *
 * match is like switch but stricter and more powerful.
 * This is the final task of 0x00 and it combines everything.
 *
 * Requirements:
 * Part A: Write a function httpStatus($code) using match that returns
 *         the standard HTTP status message for these codes:
 *         200, 201, 204, 301, 302, 400, 401, 403, 404, 422, 429, 500, 503
 *         Default: "Unknown Status"
 *
 * Part B: Write a function routeRequest($method, $path) using match that
 *         simulates a simple router. It should handle:
 *         GET  /users      => "List all users"
 *         GET  /users/1    => "Get user 1" (any ID)
 *         POST /users      => "Create user"
 *         PUT  /users/1    => "Update user 1"
 *         DELETE /users/1  => "Delete user 1"
 *         Anything else    => "404 Not Found"
 *
 * Part C: Write a comment explaining the THREE differences between
 *         match and switch. This is mandatory and proves understanding.
 *         Hint: think about strict comparison, return values, and exhaustiveness.
 *
 * Congratulations — if you reach here, you have completed 0x00.
 * Commit this file and move to 0x01.
 */

// Your solution below.

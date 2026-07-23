<?php
/**
 * Task 7: JSON in PHP
 *
 * JSON is the universal data format for APIs. You will use this daily.
 *
 * Requirements:
 * Part A: Encode a complex PHP array to JSON:
 *         $response = [
 *           "status" => "success",
 *           "data" => [
 *             "users" => [
 *               ["id" => 1, "name" => "Samuel", "active" => true],
 *               ["id" => 2, "name" => "Tolu", "active" => false],
 *             ],
 *             "total" => 2,
 *             "page" => 1
 *           ],
 *           "timestamp" => time()
 *         ];
 *         Use json_encode() with JSON_PRETTY_PRINT flag.
 *         Print the result.
 *
 * Part B: Decode the JSON string back to PHP.
 *         Decode to array (second argument true).
 *         Decode to object (without second argument).
 *         Access a nested value both ways. Print both.
 *
 * Part C: Handle JSON errors:
 *         $invalid = '{"name": "Samuel", "age": }'; // malformed
 *         Try to decode it, catch the error, print a meaningful message.
 *
 * Part D: Write a function apiResponse($status, $data, $message = null): string
 *         that always returns a consistent JSON structure:
 *         {"status": "success|error", "message": null|string, "data": mixed}
 *         This is the pattern every API you build will use.
 */

// Your solution below.

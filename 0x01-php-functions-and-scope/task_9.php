<?php
/**
 * Task 9: String Functions (The Important Ones)
 *
 * PHP has over 100 string functions. This task covers the ones you will
 * use constantly in backend development.
 *
 * Requirements:
 * For each part, write the solution AND a comment explaining what
 * the function does internally at a conceptual level.
 *
 * Part A: Given $email = "  Samuel.Ayomide@Gmail.COM  "
 *         - Trim whitespace
 *         - Convert to lowercase
 *         - Check if it contains "@"
 *         - Split into username and domain
 *         - Print each step result
 *
 * Part B: Given $slug = "Hello World! This is a Blog Post #1"
 *         Convert it to a URL slug: "hello-world-this-is-a-blog-post-1"
 *         No special characters. No multiple hyphens. Lowercase.
 *         Do not use regex for this (that comes later). Use string functions only.
 *
 * Part C: Given $template = "Hello {{name}}, your order {{order_id}} is {{status}}."
 *         Write a function renderTemplate($template, $data) that replaces
 *         {{placeholders}} with values from the $data array.
 *         $data = ["name" => "Samuel", "order_id" => "ORD-001", "status" => "shipped"]
 *
 * Part D: Write a function truncate($text, $maxLength, $suffix = "...") that
 *         truncates a string to $maxLength characters and appends $suffix.
 *         Must not cut in the middle of a word — end at the last complete word.
 */

// Your solution below.

<?php
/**
 * Task 5: Design Patterns — Pipeline Pattern
 *
 * The Pipeline pattern passes an object through a series of handlers.
 * Laravel's middleware is a pipeline. Laravel has a Pipeline class built in.
 *
 * Requirements:
 * Build a Pipeline class:
 *
 * class Pipeline {
 *   private array $stages = [];
 *   public function pipe(callable $stage): static
 *   public function process(mixed $payload): mixed
 * }
 *
 * Build a request validation pipeline for job postings:
 * Each stage receives the $payload, can modify it, and returns it (or throws).
 *
 * Stages:
 * 1. SanitizeInput — trim all string values, strip HTML tags
 * 2. ValidateRequired — throw Exception if title or company missing
 * 3. ValidateSalary — throw Exception if salary < 0, normalize to float
 * 4. EnrichData — add created_at timestamp, generate slug from title, set status="pending"
 * 5. FormatOutput — ensure consistent key ordering in final array
 *
 * Test with:
 * - Valid data
 * - Data with HTML in title
 * - Data missing company
 * - Data with negative salary
 *
 * Write a comment: "How does Laravel's HTTP middleware pipeline differ from
 *                   this implementation? What extra capabilities does it have?"
 */

// Your solution below.

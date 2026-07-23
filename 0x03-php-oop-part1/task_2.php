<?php
/**
 * Task 2: Static Properties and Methods
 *
 * Static members belong to the class, not instances.
 * This task shows you when and why to use them.
 *
 * Requirements:
 * Build a Counter class where:
 * - private static $count = 0 tracks total instances created
 * - private static $instances = [] stores all instances (Multiton pattern)
 * - public $name
 *
 * Methods:
 * - __construct($name) — increments $count, stores $this in $instances
 * - static getCount(): int — returns total instances
 * - static getAll(): array — returns all instances
 * - static reset(): void — resets count and instances
 * - __destruct() — decrements $count, removes from $instances
 *
 * Test: Create 5 Counter instances, print count, unset 2, print count again.
 *
 * Part B: Build a Config class using the Singleton pattern:
 * - Only ONE instance can ever exist
 * - private static $instance = null
 * - private __construct() (cannot be called directly)
 * - static getInstance(): self — returns the one instance, creates if needed
 * - private $settings = []
 * - set($key, $value): void
 * - get($key, $default = null): mixed
 *
 * Test: Get Config::getInstance() twice and prove they are the same object.
 * Write a comment: "When is Singleton useful and when is it an anti-pattern?"
 */

// Your solution below.

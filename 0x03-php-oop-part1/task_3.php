<?php
/**
 * Task 3: Magic Methods
 *
 * PHP has magic methods that are called automatically in certain situations.
 * These are used extensively in Laravel's Eloquent ORM.
 *
 * Requirements:
 * Build a MagicBag class that implements these magic methods:
 *
 * - __set($name, $value): store arbitrary properties in private $data array
 * - __get($name): retrieve from $data, return null if not found
 * - __isset($name): return true if key exists in $data
 * - __unset($name): remove key from $data
 * - __toString(): return JSON representation of $data
 * - __debugInfo(): return $data (used by var_dump)
 * - __invoke($key): when class is called like a function, return $data[$key]
 * - __clone(): deep clone the $data array
 *
 * Test ALL magic methods explicitly. Show each one working.
 *
 * Part B: Write a comment explaining how Eloquent models use __get and __set
 *         to allow you to write $user->name instead of $user->getAttribute('name').
 *         This is what happens inside Laravel. Minimum 3 sentences.
 */

// Your solution below.

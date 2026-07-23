<?php
/**
 * Task 5: Interfaces
 *
 * An interface defines a CONTRACT. Any class that implements it
 * MUST provide implementations for all its methods.
 * Laravel uses interfaces everywhere for dependency injection.
 *
 * Requirements:
 * Define these interfaces:
 *
 * interface Serializable {
 *   public function serialize(): string;
 *   public function unserialize(string $data): void;
 * }
 *
 * interface Cacheable {
 *   public function getCacheKey(): string;
 *   public function getCacheTtl(): int;
 * }
 *
 * interface Validatable {
 *   public function validate(): bool;
 *   public function getErrors(): array;
 * }
 *
 * Build a JobPosting class that implements ALL THREE interfaces:
 * - Properties: id, title, company, salary, description, tags[]
 * - serialize(): returns JSON string of all properties
 * - unserialize($data): populates properties from JSON string
 * - getCacheKey(): returns "job:[id]"
 * - getCacheTtl(): returns 3600 (1 hour)
 * - validate(): returns false if title or company is empty, or salary < 0
 * - getErrors(): returns array of error messages from last validate() call
 *
 * Test all methods. Show that validate() catches invalid data.
 *
 * Write a comment: "What is the difference between an interface and an abstract class?
 * When do you choose one over the other?" Minimum 4 sentences.
 */

// Your solution below.

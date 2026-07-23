<?php
/**
 * Task 3: Final Challenge — Config File Parser
 *
 * Build a configuration file system like what Laravel uses internally.
 *
 * Requirements:
 * Support reading from three file formats: PHP arrays, JSON, and INI.
 *
 * class ConfigLoader {
 *   private array $config = [];
 *
 *   public function load(string $path): void
 *     — detects format by extension (.php, .json, .ini)
 *     — loads and merges into $config
 *     — throws InvalidArgumentException for unsupported formats
 *     — throws RuntimeException if file not found
 *
 *   public function get(string $key, mixed $default = null): mixed
 *     — supports dot notation: get("database.host") accesses $config["database"]["host"]
 *
 *   public function set(string $key, mixed $value): void
 *     — supports dot notation
 *
 *   public function has(string $key): bool
 *
 *   public function all(): array
 *
 *   public function save(string $path): void
 *     — saves current config back to file in its original format
 * }
 *
 * Create test config files for each format and demonstrate all methods.
 *
 * Write a comment: "How does Laravel's config() helper function relate
 *                   to what you built here? What does config('database.host') do
 *                   internally?" (Min 4 sentences)
 *
 * Congratulations — 0x05 complete. Commit and move to 0x06.
 */

// Your solution below.

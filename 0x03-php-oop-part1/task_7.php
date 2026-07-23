<?php
/**
 * Task 7: Final Challenge — Build a Mini ORM
 *
 * This task simulates what an ORM (Object-Relational Mapper) does.
 * Building a mini version gives you deep understanding of Eloquent.
 *
 * Requirements:
 * Build a Model base class that:
 * - Has protected static $table = "" (subclasses set this)
 * - Has private $attributes = [] to store column values
 * - Uses __get and __set magic methods to access $attributes
 * - Has fill(array $data): void to mass-assign attributes
 * - Has toArray(): array to return all attributes
 * - Has toJson(): string to return JSON
 * - Has static create(array $data): static that instantiates and fills
 * - Has static find($id): ?static — simulates finding by ID from a static $records store
 * - Has static all(): array — returns all records
 * - Has save(): void — adds to static $records if new, updates if existing
 * - Has delete(): void — removes from static $records
 * - Has static where($key, $value): array — filters $records
 *
 * Build two model classes:
 * class User extends Model { protected static $table = "users"; }
 * class Job extends Model { protected static $table = "jobs"; }
 *
 * Test:
 * - Create 5 users and 5 jobs
 * - Find a user by id
 * - Get all jobs
 * - Filter users where role = "admin"
 * - Update a user and save
 * - Delete a job
 * - Print all remaining records
 *
 * Write a comment: "What does this mini ORM teach you about how Eloquent works?"
 * Minimum 5 sentences.
 *
 * Congratulations — 0x03 complete. This is the hardest module so far.
 * Commit and move to 0x04.
 */

// Your solution below.

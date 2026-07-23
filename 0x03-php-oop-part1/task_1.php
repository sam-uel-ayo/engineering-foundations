<?php
/**
 * Task 1: Visibility and Encapsulation
 *
 * Visibility controls who can access what. This task forces you to
 * understand why encapsulation matters in real systems.
 *
 * Requirements:
 * Build a User class with:
 * - private $id
 * - private $email
 * - private $passwordHash
 * - protected $role
 * - public $displayName
 *
 * Methods:
 * - __construct($email, $password, $displayName, $role = "user")
 * - getId(): string — returns the id (auto-generated UUID-like string)
 * - getEmail(): string
 * - setEmail($email): void — validates format before setting
 * - verifyPassword($password): bool — compares against hash
 * - changePassword($currentPassword, $newPassword): void
 * - getRole(): string
 * - toArray(): array — returns safe representation (NO password hash, NO private id)
 *
 * Write a comment answering:
 * "Why should $passwordHash be private and never appear in toArray()?"
 * "What would happen in a real API if you accidentally returned the password hash?"
 * Minimum 4 sentences. This is mandatory.
 *
 * Test: Create a user, verify correct password, verify wrong password,
 *       change password, verify new password, print toArray().
 */

// Your solution below.

<?php
/**
 * Task 3: Design Patterns — Repository Pattern
 *
 * The Repository pattern separates your business logic from data access.
 * Laravel developers use this to keep controllers thin and services testable.
 *
 * Requirements:
 * Build a complete repository system for a Job board:
 *
 * interface JobRepositoryInterface {
 *   public function findById(int $id): ?array;
 *   public function findAll(array $filters = []): array;
 *   public function create(array $data): array;
 *   public function update(int $id, array $data): ?array;
 *   public function delete(int $id): bool;
 *   public function findByCompany(string $company): array;
 *   public function countByStatus(string $status): int;
 * }
 *
 * class InMemoryJobRepository implements JobRepositoryInterface {
 *   // stores jobs in a private array
 * }
 *
 * class JobService {
 *   public function __construct(private JobRepositoryInterface $repo) {}
 *   public function postJob(array $data): array — validates and creates
 *   public function closeJob(int $id): bool — sets status to "closed"
 *   public function getActiveJobs(): array — returns only active jobs
 *   public function getJobStats(): array — returns count by status
 * }
 *
 * Test: Post 10 jobs, close 3, get active, get stats.
 *
 * Write a comment: "What would you change to swap InMemoryJobRepository
 *                   for a real PostgreSQL implementation? How much of the
 *                   rest of the code would need to change?" (Min 4 sentences)
 */

// Your solution below.

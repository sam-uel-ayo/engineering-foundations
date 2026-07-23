<?php
/**
 * Task 0: PDO Connection and First Queries
 *
 * Requirements:
 * Part A: Create a Database class that:
 *         - Stores connection as private static property (singleton)
 *         - static connect(array $config): PDO — creates and returns connection
 *         - static getConnection(): PDO — returns existing connection
 *         - Sets error mode to ERRMODE_EXCEPTION
 *         - Sets fetch mode to FETCH_ASSOC
 *         - Sets ATTR_EMULATE_PREPARES to false (important for security)
 *
 * Part B: Write and execute these queries:
 *         CREATE TABLE IF NOT EXISTS jobs (
 *           id SERIAL PRIMARY KEY,
 *           title VARCHAR(255) NOT NULL,
 *           company VARCHAR(255) NOT NULL,
 *           salary DECIMAL(12,2),
 *           location VARCHAR(255),
 *           status VARCHAR(50) DEFAULT 'active',
 *           created_at TIMESTAMP DEFAULT NOW()
 *         );
 *
 * Part C: Write functions:
 *         - createJob(PDO $db, array $data): array
 *         - findJobById(PDO $db, int $id): ?array
 *         - getAllJobs(PDO $db): array
 *         - updateJob(PDO $db, int $id, array $data): bool
 *         - deleteJob(PDO $db, int $id): bool
 *
 * Insert 10 jobs, update 2, delete 1, fetch all remaining.
 *
 * CRITICAL: All queries MUST use prepared statements.
 * Write a comment explaining what SQL injection is and how
 * prepared statements prevent it. Show an example of the vulnerable
 * query vs the safe query side by side.
 */

// Your solution below.

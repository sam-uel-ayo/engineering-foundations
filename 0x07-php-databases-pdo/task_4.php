<?php
/**
 * Task 4: Final Challenge — Database Migrations System
 *
 * Laravel has a migration system. Build your own mini version.
 *
 * Requirements:
 * Create a migrations table if it doesn't exist:
 * CREATE TABLE migrations (id SERIAL, migration VARCHAR(255), ran_at TIMESTAMP DEFAULT NOW());
 *
 * Build a MigrationRunner class:
 * - Scans a /migrations directory for PHP files named 001_create_users.php etc.
 * - Each migration file returns an array ["up" => "SQL...", "down" => "SQL..."]
 * - migrate(): runs all pending migrations (not yet in migrations table), records them
 * - rollback($steps = 1): reverses last N migrations using the "down" SQL
 * - status(): prints which migrations have run and which are pending
 * - fresh(): rolls back all, re-runs all
 *
 * Create migration files for the BuildBoard schema:
 * 001_create_users_table.php
 * 002_create_jobs_table.php
 * 003_create_applications_table.php
 * 004_add_status_to_jobs.php
 * 005_create_wallets_table.php
 *
 * Test: run migrate, check status, rollback 2, check status, migrate again.
 *
 * Write a comment: "Why do migrations need both up() and down() methods?
 *                   What is a migration conflict and how do teams avoid them?"
 *
 * Congratulations — 0x07 complete. You now understand databases at a level
 * most Laravel developers never reach. Commit and move to 0x08.
 */

// Your solution below.

<?php
/**
 * Task 2: The N+1 Problem
 *
 * The N+1 problem is one of the most common performance bugs in backend development.
 * Understanding it is essential before using any ORM.
 *
 * Requirements:
 * Create tables: companies (id, name, location), jobs (id, company_id, title, salary)
 * Insert 20 companies, each with 5 jobs (100 jobs total).
 *
 * Part A: THE WRONG WAY (N+1):
 *         Write a function getJobsWithCompanyNPlus1($db) that:
 *         1. Queries all jobs (1 query)
 *         2. For each job, queries its company separately (N queries)
 *         Count total queries executed. Print them. Show the problem.
 *
 * Part B: THE RIGHT WAY (JOIN):
 *         Write getJobsWithCompanyJoin($db) using a single JOIN query.
 *         Print query count. Compare with Part A.
 *
 * Part C: THE OTHER RIGHT WAY (eager loading pattern):
 *         Write getJobsEagerLoad($db) that:
 *         1. Gets all jobs (1 query)
 *         2. Extracts all unique company_ids
 *         3. Gets all those companies in ONE query using WHERE id IN (...)
 *         4. Maps companies onto jobs in PHP
 *         Print query count. Compare.
 *
 * Benchmark all three approaches with microtime(true) and print the times.
 *
 * Write a comment: "When would you prefer JOIN over eager loading and vice versa?
 *                   How does Laravel's with() solve the N+1 problem?"
 */

// Your solution below.

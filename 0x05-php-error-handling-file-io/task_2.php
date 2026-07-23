<?php
/**
 * Task 2: CSV Processing
 *
 * CSV is one of the most common data formats you will encounter.
 *
 * Requirements:
 * Part A: Generate a CSV file of 500 fake employees with columns:
 *         id, name, department, salary, hire_date, active
 *         Use realistic-looking data (make up names, use real departments).
 *
 * Part B: Write a CsvReader class that:
 *         - Opens a CSV file in the constructor
 *         - Has a read(): ?array method that returns one row per call as associative array
 *         - Uses the first row as headers automatically
 *         - Implements Iterator interface so you can foreach over it
 *         - Closes file handle in destructor
 *
 * Part C: Use your CsvReader to:
 *         - Find all employees in the "Engineering" department
 *         - Calculate average salary per department
 *         - Find the 5 most recently hired employees
 *         - Count active vs inactive employees
 *         Print a summary report.
 *
 * Part D: Write a CsvWriter class that:
 *         - Takes headers in constructor
 *         - Has writeRow(array $row): void
 *         - Has close(): void
 *         Use it to write a new CSV of only Engineering employees.
 */

// Your solution below.

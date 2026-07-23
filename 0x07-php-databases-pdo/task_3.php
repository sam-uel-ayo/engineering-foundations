<?php
/**
 * Task 3: Query Builder
 *
 * Build a simple query builder that generates safe SQL queries.
 * This is what Laravel's DB facade does under the hood.
 *
 * Requirements:
 * class QueryBuilder {
 *   private string $table = "";
 *   private array $conditions = [];
 *   private array $params = [];
 *   private ?int $limitVal = null;
 *   private ?int $offsetVal = null;
 *   private array $orderByClauses = [];
 *   private array $columns = ["*"];
 *
 *   public function table(string $table): static
 *   public function select(string ...$columns): static
 *   public function where(string $column, string $operator, mixed $value): static
 *   public function orWhere(string $column, string $operator, mixed $value): static
 *   public function whereIn(string $column, array $values): static
 *   public function whereNull(string $column): static
 *   public function whereNotNull(string $column): static
 *   public function orderBy(string $column, string $direction = "ASC"): static
 *   public function limit(int $limit): static
 *   public function offset(int $offset): static
 *   public function toSql(): string — returns the SQL string with ? placeholders
 *   public function getParams(): array — returns bound parameters
 *   public function get(PDO $db): array — executes and returns results
 *   public function first(PDO $db): ?array — returns first result
 *   public function count(PDO $db): int
 *   public function insert(PDO $db, array $data): int — returns insert id
 *   public function update(PDO $db, array $data): int — returns affected rows
 *   public function delete(PDO $db): int — returns affected rows
 * }
 *
 * Test by rewriting all queries from task_0 and task_1 using the builder.
 *
 * Write a comment: "What does the fluent interface pattern (method chaining) achieve?
 *                   Is it always a good pattern? When does it become problematic?"
 */

// Your solution below.

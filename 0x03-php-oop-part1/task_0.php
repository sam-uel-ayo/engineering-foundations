<?php
/**
 * Task 0: Your First Class
 *
 * Write a BankAccount class from scratch.
 *
 * Requirements:
 * Properties (all private):
 * - $owner (string)
 * - $balance (float)
 * - $currency (string, default "NGN")
 * - $transactions (array, starts empty)
 *
 * Methods (public):
 * - __construct($owner, $initialBalance = 0.0, $currency = "NGN")
 * - deposit($amount): void — adds to balance, records transaction
 * - withdraw($amount): void — deducts from balance, throws exception if insufficient
 * - getBalance(): float
 * - getOwner(): string
 * - getTransactionCount(): int
 * - printStatement(): void — prints all transactions formatted
 *
 * Requirements:
 * - deposit() must reject amounts <= 0
 * - withdraw() must reject amounts <= 0
 * - withdraw() must throw RuntimeException if balance insufficient
 * - Each transaction recorded as ["type" => "deposit|withdrawal", "amount" => x, "balance_after" => x]
 *
 * Test: Create an account, deposit 50000, deposit 25000, withdraw 10000,
 *       try to withdraw 200000 (should fail gracefully), print statement.
 */

// Your solution below.

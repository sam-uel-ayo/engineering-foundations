<?php
/**
 * Task 1: Transactions
 *
 * A transaction is a group of queries that must ALL succeed or ALL fail.
 * This is fundamental to financial systems and any data integrity work.
 *
 * Requirements:
 * Create these tables:
 * wallets (id, user_id, balance DECIMAL(12,2), currency)
 * transactions (id, from_wallet_id, to_wallet_id, amount, status, created_at)
 *
 * Write a transfer($db, $fromWalletId, $toWalletId, $amount) function that:
 * 1. Begins a transaction
 * 2. Locks both wallet rows (SELECT FOR UPDATE)
 * 3. Checks sender has sufficient balance
 * 4. Deducts from sender
 * 5. Adds to receiver
 * 6. Records transaction with status "completed"
 * 7. Commits if all succeed
 * 8. Rolls back if ANY step fails
 * 9. Returns the transaction record
 *
 * Test scenarios:
 * - Successful transfer
 * - Insufficient funds (should rollback)
 * - Simulate a failure mid-transaction (throw exception after deduct but before credit)
 *   Verify: sender balance went back up, no orphaned transaction record
 *
 * Write a comment: "What is atomicity? What is the ACID guarantee?
 *                   Why does SELECT FOR UPDATE matter in concurrent transfers?"
 * Minimum 5 sentences.
 */

// Your solution below.

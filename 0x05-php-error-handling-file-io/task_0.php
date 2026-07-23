<?php
/**
 * Task 0: Exception Hierarchy
 *
 * Build a custom exception hierarchy for a payment system.
 *
 * Requirements:
 * class AppException extends RuntimeException {}
 * class PaymentException extends AppException {}
 * class InsufficientFundsException extends PaymentException {
 *   public function __construct(float $required, float $available) { ... }
 *   public function getRequired(): float
 *   public function getAvailable(): float
 *   public function getShortfall(): float
 * }
 * class PaymentGatewayException extends PaymentException {
 *   public function __construct(string $gateway, string $reason, int $code = 0) { ... }
 * }
 * class ValidationException extends AppException {
 *   public function __construct(array $errors) { ... }
 *   public function getErrors(): array
 * }
 *
 * Write a processPayment($amount, $balance) function that:
 * - Throws ValidationException if amount <= 0
 * - Throws InsufficientFundsException if balance < amount
 * - Throws PaymentGatewayException 30% of the time (simulate with rand)
 * - Returns true on success
 *
 * Test with try/catch blocks that:
 * - Catch each specific exception type separately
 * - Always run a finally block that logs the attempt
 * - Show catching a parent exception type catches children too
 */

// Your solution below.

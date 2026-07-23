<?php
/**
 * Task 0: Dependency Injection
 *
 * Dependency Injection (DI) is the most important pattern in modern PHP.
 * Laravel's entire service container is built on this concept.
 * Instead of a class creating its own dependencies, they are injected.
 *
 * Requirements:
 * WITHOUT dependency injection (the wrong way):
 * class OrderService {
 *   public function place($userId, $items) {
 *     $db = new MySQLConnection(); // bad — hardcoded dependency
 *     $mailer = new SMTPMailer();  // bad — hardcoded dependency
 *   }
 * }
 *
 * Build the RIGHT way:
 *
 * interface DatabaseInterface {
 *   public function query(string $sql, array $params = []): array;
 *   public function execute(string $sql, array $params = []): bool;
 * }
 *
 * interface MailerInterface {
 *   public function send(string $to, string $subject, string $body): bool;
 * }
 *
 * class FakeDatabase implements DatabaseInterface { ... } (simulate with arrays)
 * class FakeMailer implements MailerInterface { ... } (simulate by printing)
 *
 * class OrderService {
 *   public function __construct(
 *     private DatabaseInterface $db,
 *     private MailerInterface $mailer
 *   ) {}
 *   public function place($userId, array $items): array { ... }
 * }
 *
 * Test: Create FakeDatabase and FakeMailer, inject into OrderService, place an order.
 *
 * Write a comment (mandatory, minimum 5 sentences):
 * "Why does DI make code easier to test? What is a 'mock' and how does DI enable it?
 *  How does Laravel's service container automate what we did manually here?"
 */

// Your solution below.

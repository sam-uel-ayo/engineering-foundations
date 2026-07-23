<?php
/**
 * Task 6: Final Challenge — Build a Miniature Service Container
 *
 * Laravel's service container is the heart of the framework.
 * It resolves dependencies automatically. Building a mini version
 * gives you deep understanding of how DI works at the framework level.
 *
 * Requirements:
 * Build a Container class:
 *
 * class Container {
 *   private array $bindings = [];
 *   private array $instances = [];
 *
 *   // Register a binding: how to build something
 *   public function bind(string $abstract, callable $factory): void
 *
 *   // Register a singleton: build once, reuse
 *   public function singleton(string $abstract, callable $factory): void
 *
 *   // Resolve: build the thing (or return cached singleton)
 *   public function make(string $abstract): mixed
 *
 *   // Auto-resolve a class by inspecting its constructor with Reflection
 *   public function resolve(string $class): mixed
 * }
 *
 * Test your container:
 * $container = new Container();
 * $container->singleton(DatabaseInterface::class, fn() => new FakeDatabase());
 * $container->bind(MailerInterface::class, fn() => new FakeMailer());
 *
 * // Auto-resolve: OrderService needs DatabaseInterface and MailerInterface
 * // The container should figure this out automatically using PHP Reflection
 * $service = $container->resolve(OrderService::class);
 * $service->place(1, [["product" => "Rice", "qty" => 2]]);
 *
 * Write a comment (mandatory, minimum 6 sentences):
 * "What is PHP Reflection? How does Laravel use it to auto-resolve constructor
 *  dependencies? What is the difference between bind() and singleton() in
 *  practical terms? Give a real example of when you would use each."
 *
 * Congratulations — 0x04 is the hardest PHP module.
 * If you completed this, you understand more about Laravel's internals
 * than most developers who have used Laravel for years.
 * Commit and move to 0x05.
 */

// Your solution below.

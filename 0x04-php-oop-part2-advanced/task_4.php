<?php
/**
 * Task 4: Design Patterns — Observer Pattern
 *
 * The Observer pattern is how Laravel Events and Listeners work.
 * When something happens, observers are notified automatically.
 *
 * Requirements:
 * Build an event system from scratch:
 *
 * interface EventInterface {
 *   public function getName(): string;
 *   public function getPayload(): array;
 * }
 *
 * interface ListenerInterface {
 *   public function handle(EventInterface $event): void;
 * }
 *
 * class EventDispatcher {
 *   private $listeners = [];
 *   public function listen(string $eventName, ListenerInterface $listener): void
 *   public function dispatch(EventInterface $event): void — calls all listeners
 *   public function forget(string $eventName): void — removes listeners
 * }
 *
 * Build these concrete events and listeners:
 * - JobPostedEvent(array $job) — dispatched when a job is created
 * - UserRegisteredEvent(array $user) — dispatched on registration
 * - SendWelcomeEmailListener — handles UserRegisteredEvent (print "Sending email to...")
 * - NotifyAdminListener — handles both events (print "Admin notified of...")
 * - IndexJobListener — handles JobPostedEvent (print "Indexing job for search...")
 *
 * Test: Register all listeners, dispatch both events, show all listeners firing.
 *
 * Write a comment: "How does this map to Laravel's EventServiceProvider
 *                   and the $listen array?" (Min 4 sentences)
 */

// Your solution below.

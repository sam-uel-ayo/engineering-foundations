<?php
/**
 * Task 1: Enums (PHP 8.1+)
 *
 * Enums replace the pattern of using class constants for fixed sets of values.
 * Laravel uses enums for things like order statuses, user roles, etc.
 *
 * Requirements:
 * Part A: Create a pure enum:
 *         enum Direction { case North; case South; case East; case West; }
 *         Use it in a function move($direction) that prints the movement.
 *         Show that you cannot pass an invalid direction.
 *
 * Part B: Create a backed enum with string values:
 *         enum OrderStatus: string {
 *           case Pending = "pending";
 *           case Confirmed = "confirmed";
 *           case Shipped = "shipped";
 *           case Delivered = "delivered";
 *           case Cancelled = "cancelled";
 *         }
 *         - Show how to get enum from value: OrderStatus::from("pending")
 *         - Show tryFrom() for safe lookup: OrderStatus::tryFrom("invalid")
 *         - Show how to get the value: $status->value
 *         - Loop through all cases with OrderStatus::cases()
 *
 * Part C: Add methods to OrderStatus enum:
 *         - label(): string — returns human-friendly label ("Pending" => "Order Placed")
 *         - canTransitionTo(OrderStatus $next): bool — valid transitions only
 *           pending -> confirmed, confirmed -> shipped, shipped -> delivered
 *           Any status -> cancelled
 *           Nothing -> pending (can't go back)
 *
 * Part D: Write a comment: "How do enums prevent a class of bugs that string constants cannot?"
 */

// Your solution below.

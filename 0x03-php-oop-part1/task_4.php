<?php
/**
 * Task 4: Inheritance
 *
 * Inheritance allows a class to extend another class, inheriting its
 * properties and methods. This is the foundation of Laravel's class hierarchy.
 *
 * Requirements:
 * Build a vehicle hierarchy:
 *
 * Base class Vehicle:
 * - protected $make, $model, $year, $speed = 0
 * - __construct($make, $model, $year)
 * - accelerate($amount): void — increase speed, cannot exceed maxSpeed()
 * - brake($amount): void — decrease speed, cannot go below 0
 * - abstract maxSpeed(): int — subclasses must define this
 * - getInfo(): string — "[year] [make] [model] going [speed]km/h"
 * - __toString(): calls getInfo()
 *
 * Child class Car extends Vehicle:
 * - private $doors
 * - __construct($make, $model, $year, $doors = 4)
 * - maxSpeed(): int — returns 200
 * - getInfo(): string — parent getInfo() + " ([doors]-door car)"
 *
 * Child class Truck extends Vehicle:
 * - private $payload (kg)
 * - maxSpeed(): int — returns 120
 * - getInfo(): string — parent info + " (payload: [payload]kg)"
 *
 * Child class Motorcycle extends Vehicle:
 * - maxSpeed(): int — returns 280
 *
 * Test: Create one of each, accelerate them, try to exceed max speed, print each.
 *
 * Write a comment: "What does 'abstract' mean and what does it enforce?"
 */

// Your solution below.

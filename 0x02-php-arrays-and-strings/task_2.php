<?php
/**
 * Task 2: Searching and Filtering Arrays
 *
 * Requirements:
 * Given $products = [
 *   ["id" => 1, "name" => "Laptop", "price" => 450000, "category" => "electronics", "in_stock" => true],
 *   ["id" => 2, "name" => "Rice 50kg", "price" => 35000, "category" => "food", "in_stock" => true],
 *   ["id" => 3, "name" => "Phone", "price" => 180000, "category" => "electronics", "in_stock" => false],
 *   ["id" => 4, "name" => "Beans 10kg", "price" => 12000, "category" => "food", "in_stock" => true],
 *   ["id" => 5, "name" => "Tablet", "price" => 250000, "category" => "electronics", "in_stock" => true],
 * ];
 *
 * Part A: Find all products in the "electronics" category using array_filter()
 * Part B: Find all in-stock products under 200000 using array_filter()
 * Part C: Get just the names of all products using array_map()
 * Part D: Get the total price of all in-stock products using array_reduce()
 * Part E: Find the product with id=3 using array_search() — explain its return value
 * Part F: Check if any product is named "Laptop" using in_array() on the names array
 * Part G: Get all unique categories using array_unique() on a mapped categories array
 *
 * Part H (Hard): Write a function searchProducts($products, $criteria) where
 *         $criteria is an associative array of filter conditions.
 *         searchProducts($products, ["category" => "electronics", "in_stock" => true])
 *         Must return all products matching ALL criteria.
 */

// Your solution below.

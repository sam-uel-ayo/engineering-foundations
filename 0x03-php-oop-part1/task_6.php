<?php
/**
 * Task 6: Traits
 *
 * Traits solve the problem of code reuse when you cannot use inheritance
 * (because PHP has single inheritance). Laravel uses traits extensively.
 * HasFactory, SoftDeletes, Notifiable — all traits.
 *
 * Requirements:
 * Build these traits:
 *
 * trait Timestamps {
 *   private $createdAt;
 *   private $updatedAt;
 *   public function setCreatedAt(): void — sets to current datetime
 *   public function setUpdatedAt(): void — sets to current datetime
 *   public function getCreatedAt(): ?string
 *   public function getUpdatedAt(): ?string
 * }
 *
 * trait SoftDeletable {
 *   private $deletedAt = null;
 *   public function softDelete(): void — sets $deletedAt to now
 *   public function restore(): void — sets $deletedAt to null
 *   public function isDeleted(): bool
 *   public function getDeletedAt(): ?string
 * }
 *
 * trait HasUuid {
 *   private $id;
 *   public function generateId(): void — generates a UUID-like string
 *   public function getId(): string
 * }
 *
 * Build a Post class that uses all three traits:
 * - Properties: title, body, authorId
 * - __construct calls generateId(), setCreatedAt()
 * - update($title, $body) calls setUpdatedAt()
 *
 * Test: Create a post, update it, soft delete it, restore it, print all timestamps.
 *
 * Write a comment: "How does Laravel's SoftDeletes trait work and what does it
 * add to your Eloquent queries automatically?" Minimum 3 sentences.
 */

// Your solution below.

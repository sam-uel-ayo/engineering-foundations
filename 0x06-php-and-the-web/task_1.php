<?php
/**
 * Task 1: Build a Router from Scratch
 *
 * Before you use Laravel's router, build your own. This is how you
 * understand what a router actually does.
 *
 * Requirements:
 * Build a Router class with:
 * - get($path, $handler): void
 * - post($path, $handler): void
 * - put($path, $handler): void
 * - delete($path, $handler): void
 * - dispatch(): void — matches current request and calls handler
 *
 * Route matching must support:
 * - Exact paths: "/users"
 * - Dynamic segments: "/users/{id}" — extract id and pass to handler
 * - Optional trailing slash
 * - 404 if no match found
 * - 405 if path matches but method does not
 *
 * Register these routes and test each with curl:
 * GET /             => returns "Welcome to BuildBoard API"
 * GET /jobs         => returns JSON list of 3 fake jobs
 * GET /jobs/{id}    => returns JSON of job with that id or 404
 * POST /jobs        => reads JSON body, returns created job with 201
 * DELETE /jobs/{id} => returns 204 No Content
 *
 * Write a comment: "How does Laravel's router differ from what you built?
 *                   What features does it add?" (Min 4 sentences)
 */

// Your solution below.

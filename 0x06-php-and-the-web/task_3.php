<?php
/**
 * Task 3: Final Challenge — Mini REST API
 *
 * Build a complete REST API for job listings without any framework.
 * Pure PHP, your own router, your own auth, JSON in/out.
 *
 * Endpoints:
 * POST   /auth/register   — register new user
 * POST   /auth/login      — login, create session
 * POST   /auth/logout     — destroy session
 * GET    /auth/me         — current user
 *
 * GET    /jobs            — public, list all active jobs (paginated: ?page=1&limit=10)
 * GET    /jobs/{id}       — public, single job
 * POST   /jobs            — requires auth, create job (user becomes owner)
 * PUT    /jobs/{id}       — requires auth, only owner can update
 * DELETE /jobs/{id}       — requires auth, only owner can delete
 *
 * GET    /my/jobs         — requires auth, list current user's jobs
 *
 * Requirements:
 * - All responses are JSON with consistent envelope: {status, data, message, meta}
 * - Validation on all inputs
 * - Pagination on list endpoints
 * - 401 for unauthenticated, 403 for unauthorized, 404 for not found
 * - Store data in JSON files (no database yet — that comes in 0x07)
 *
 * Test every endpoint with curl. Include your curl commands as comments.
 *
 * Write a comment: "What are the limitations of file-based storage?
 *                   What problems would appear if 100 users hit this simultaneously?"
 *
 * Congratulations — 0x06 complete. You just built an API without any framework.
 * This means when you use Laravel, you will understand exactly what it is doing for you.
 * Commit and move to 0x07.
 */

// Your solution below.

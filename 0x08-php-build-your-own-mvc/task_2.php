<?php
/**
 * Task 2: Wire Everything Together — Build the BuildBoard API
 *
 * Use your mini framework to build the complete BuildBoard API.
 * This is the final boss of the PHP section.
 *
 * Requirements:
 * Using YOUR mini framework (not Laravel), build:
 *
 * Auth:
 * POST /api/auth/register
 * POST /api/auth/login
 * POST /api/auth/logout
 * GET  /api/auth/me
 *
 * Jobs (public):
 * GET  /api/jobs              (paginated, filterable by location/category)
 * GET  /api/jobs/{id}
 *
 * Jobs (authenticated):
 * POST   /api/jobs
 * PUT    /api/jobs/{id}       (owner only)
 * DELETE /api/jobs/{id}       (owner only)
 * GET    /api/my/jobs
 *
 * Applications (authenticated):
 * POST /api/jobs/{id}/apply
 * GET  /api/my/applications
 * GET  /api/my/jobs/{id}/applications  (job owner only)
 *
 * Requirements:
 * - JWT-based authentication (implement JWT encode/decode yourself, no libraries)
 * - Real PostgreSQL database
 * - Middleware: AuthMiddleware, JsonResponseMiddleware, RateLimitMiddleware
 * - Consistent JSON responses
 * - Input validation on all endpoints
 * - Proper HTTP status codes
 *
 * Write a comprehensive README.md explaining your framework architecture.
 *
 * Write a final comment (minimum 10 sentences):
 * "What did building this framework teach me about Laravel?
 *  What problems does Laravel solve that I had to solve manually here?
 *  What would I need to add to make this production-ready?
 *  What are the performance limitations of my approach?"
 *
 * Congratulations — 0x08 complete.
 * You have now built a web framework from scratch.
 * Laravel will never be magic again.
 * Commit everything and move to 0x09 — Laravel.
 */

// Your solution below.

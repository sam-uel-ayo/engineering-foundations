<?php
/**
 * Task 2: Sessions and Authentication
 *
 * Build a simple session-based auth system from scratch.
 *
 * Requirements:
 * $users = [
 *   ["id" => 1, "email" => "samuel@example.com", "password" => password_hash("secret123", PASSWORD_DEFAULT), "role" => "admin"],
 *   ["id" => 2, "email" => "tolu@example.com", "password" => password_hash("pass456", PASSWORD_DEFAULT), "role" => "user"],
 * ];
 *
 * Build these endpoints using your router from task_1:
 * POST /auth/login    — validates credentials, creates session, returns user data
 * POST /auth/logout   — destroys session
 * GET  /auth/me       — returns current user from session or 401
 * GET  /admin/users   — requires session AND role="admin", returns users list
 *
 * Requirements:
 * - Use PHP sessions (session_start(), $_SESSION)
 * - Never store the password in the session
 * - Regenerate session ID on login (prevents session fixation)
 * - Set secure session cookie params
 * - Implement a requireAuth() middleware function
 * - Implement a requireRole($role) middleware function
 *
 * Test with curl — show login, protected route, logout, then protected route again.
 *
 * Write a comment: "What is session fixation and how does session_regenerate_id() prevent it?"
 */

// Your solution below.

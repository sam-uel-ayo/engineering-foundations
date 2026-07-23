<?php
/**
 * Task 0: Superglobals and HTTP Headers
 *
 * Requirements:
 * Build an endpoint inspector script. When visited in a browser or called
 * with curl, it returns a JSON object containing:
 *
 * {
 *   "method": "GET|POST|PUT|DELETE",
 *   "path": "/current/path",
 *   "query_params": {"key": "value"},
 *   "headers": {"Host": "...", "User-Agent": "...", ...},
 *   "body": "raw body if POST/PUT",
 *   "body_parsed": "parsed JSON if Content-Type is application/json",
 *   "ip": "client IP address",
 *   "timestamp": "current datetime"
 * }
 *
 * Requirements:
 * - Always set Content-Type: application/json response header
 * - Always set X-Request-Id header with a unique ID per request
 * - Handle OPTIONS preflight request (return 200 immediately)
 * - Test with: curl -X POST http://localhost:8000/task_0.php \
 *              -H "Content-Type: application/json" \
 *              -d '{"name": "Samuel"}'
 *
 * Write a comment explaining each $_SERVER key you use.
 */

// Your solution below.

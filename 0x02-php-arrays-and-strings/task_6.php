<?php
/**
 * Task 6: Regular Expressions
 *
 * Regex is a pattern-matching language. It is used in validation,
 * parsing, and string manipulation. This is not optional knowledge.
 *
 * Requirements:
 * Part A: Write a function validate($value, $type) using preg_match() that validates:
 *         - "email": basic email pattern
 *         - "phone_ng": Nigerian phone numbers (+234XXXXXXXXXX or 0XXXXXXXXXX)
 *         - "username": 3-20 characters, letters, numbers, underscores only
 *         - "password": min 8 chars, at least 1 uppercase, 1 lowercase, 1 number
 *         - "url": basic URL with http or https
 *         Test each with valid and invalid examples.
 *
 * Part B: Use preg_replace() to:
 *         - Remove all HTML tags from a string
 *         - Replace multiple spaces with a single space
 *         - Convert camelCase to snake_case (e.g. getUserById => get_user_by_id)
 *
 * Part C: Use preg_match_all() to extract all email addresses from this text:
 *         "Contact us at info@buildboard.ng or support@buildboard.ng.
 *          Our CEO is ceo@company.com and CTO is cto@company.com"
 *
 * Part D: Write a comment explaining what each part of this pattern does:
 *         /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/
 *         Break it down character by character.
 */

// Your solution below.

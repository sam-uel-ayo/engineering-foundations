<?php
/**
 * Task 8: Final Challenge — Data Pipeline
 *
 * This task combines arrays, strings, JSON, and functions into one system.
 *
 * Scenario: You are building a simple data import system for BuildBoard.
 * A JSON file of raw job listings comes in. You must clean, validate,
 * transform, and output it.
 *
 * Requirements:
 * Given this raw JSON string (copy exactly as your starting data):
 * '[
 *   {"title":"  Senior PHP Developer  ","company":"Tech Corp","salary":"₦500,000","location":"Lagos","tags":["PHP","Laravel","MySQL"]},
 *   {"title":"Frontend Engineer","company":"","salary":"negotiable","location":"Remote","tags":["React","TypeScript"]},
 *   {"title":"backend developer","company":"StartupNG","salary":"₦300000","location":"  Abuja  ","tags":["Node.js","Express"]},
 *   {"title":"","company":"FinTech Ltd","salary":"₦800,000","location":"Lagos","tags":[]},
 *   {"title":"DevOps Engineer","company":"Cloud Co","salary":"₦450,000","location":"Lagos","tags":["Docker","Kubernetes","AWS"]}
 * ]'
 *
 * Build a pipeline that:
 * 1. Decodes the JSON
 * 2. Validates each listing — skip invalid ones (missing title or company)
 * 3. Cleans strings — trim whitespace, title-case the title, uppercase company
 * 4. Parses salary — extract numeric value or set to null if not parseable
 * 5. Generates a URL slug from the title for each listing
 * 6. Adds an "id" field (incrementing from 1, only for valid listings)
 * 7. Sorts results by salary descending (null salaries go last)
 * 8. Re-encodes to pretty-printed JSON
 * 9. Prints a summary: "Processed X listings, skipped Y invalid"
 *
 * Congratulations — 0x02 complete. Commit and move to 0x03.
 */

// Your solution below.

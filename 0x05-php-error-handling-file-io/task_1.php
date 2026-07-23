<?php
/**
 * Task 1: File Reading and Writing
 *
 * Requirements:
 * Part A: Write a function writeLog($message, $level = "INFO") that:
 *         - Appends to a file called app.log
 *         - Format: "[Y-m-d H:i:s] [LEVEL] message\n"
 *         - Creates the file if it doesn't exist
 *         - Throws RuntimeException if file cannot be written
 *         Call it 10 times with different messages and levels.
 *
 * Part B: Write a function readLastLines($filename, $n = 10): array that
 *         reads the last N lines of a file efficiently.
 *         Do NOT read the whole file into memory at once.
 *         Use fseek() to work backwards from the end.
 *         Test with app.log from Part A.
 *
 * Part C: Write a function rotateLogs($filename, $maxSize = 1024) that:
 *         - Checks file size
 *         - If over $maxSize bytes, renames to filename.1, creates fresh filename
 *         - If filename.1 already exists, it becomes filename.2 (keeps last 3)
 *
 * Write a comment: "Why is it important to use fclose() after fopen()?
 *                   What happens if you don't in a long-running PHP process?"
 */

// Your solution below.

<?php
/**
 * Task 0: Autoloading and Project Structure
 *
 * Create a proper project structure with PSR-4 autoloading.
 *
 * Requirements:
 * Create this directory structure:
 * mini-framework/
 *   src/
 *     Core/
 *       Application.php
 *       Container.php    (from 0x04 task_6)
 *       Router.php       (upgraded from 0x06 task_1)
 *       Request.php
 *       Response.php
 *       Middleware/
 *         MiddlewareInterface.php
 *         Pipeline.php
 *     Database/
 *       Connection.php   (from 0x07)
 *       QueryBuilder.php (from 0x07 task_3)
 *       Model.php        (from 0x03 task_7, now with real DB)
 *     Http/
 *       Controller.php   (base controller)
 *   app/
 *     Controllers/
 *     Models/
 *     Middleware/
 *   public/
 *     index.php          (entry point)
 *   config/
 *     app.php
 *     database.php
 *   composer.json        (for autoloading only)
 *
 * Requirements:
 * - Set up PSR-4 autoloading via composer.json
 * - public/index.php bootstraps the application
 * - Application class boots: container, router, middleware
 * - Write a comment explaining what PSR-4 autoloading is and how it works
 *   before you had a composer autoloader (require_once hell)
 *
 * This task is primarily structural. Commit the empty structure with README files.
 */

// Your solution below — set up composer.json and directory structure.
// Document your decisions in comments.

<?php
/**
 * Task 4: Multidimensional Arrays
 *
 * Requirements:
 * Part A: Create a $school array representing:
 *         - 3 classes (JSS1, JSS2, JSS3)
 *         - Each class has a name and an array of students
 *         - Each student has id, name, and scores array (Math, English, Science)
 *         - Minimum 3 students per class
 *
 * Part B: Write functions to query this structure:
 *         - getStudent($school, $className, $studentId): returns student array or null
 *         - getClassAverage($school, $className): returns average score across all students
 *         - getTopStudent($school): returns the student with highest average across all classes
 *         - getFailingStudents($school, $passMark = 50): returns all students below pass mark
 *
 * Part C: Write a function generateReport($school) that prints a formatted
 *         report card for every student showing their scores and whether they passed.
 *
 * Part D (Hard): Sort $school so that within each class, students are sorted
 *         by their average score descending. The top student in each class
 *         should be first. Do not rebuild the array — sort in place.
 */

// Your solution below.

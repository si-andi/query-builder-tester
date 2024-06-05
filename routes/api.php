<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('task1', [DatabaseController::class, 'task1']);
// SELECT * FROM students;

Route::get('task2', [DatabaseController::class, 'task2']);
//SELECT * FROM students WHERE grade = '10';

Route::get('task3', [DatabaseController::class, 'task3']);
//SELECT * FROM students WHERE age BETWEEN 15 AND 18;

Route::get('task4', [DatabaseController::class, 'task4']);
//SELECT * FROM students WHERE city = 'Manila';

Route::get('task5', [DatabaseController::class, 'task5']);
//SELECT * FROM students ORDER BY age DESC;

Route::get('task6', [DatabaseController::class, 'task6']);
/* 
SELECT students.*, teachers.name AS teacher_name 
FROM students 
LEFT JOIN teachers ON students.teacher_id = teachers.id;
*/

Route::get('task7', [DatabaseController::class, 'task7']);
/* 
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id;
*/

Route::get('task8', [DatabaseController::class, 'task8']);
/* 
SELECT students.*, subjects.name AS subject_name 
FROM students 
INNER JOIN subjects ON students.subject_id = subjects.id;
*/

Route::get('task9', [DatabaseController::class, 'task9']);
/* 
SELECT students.*, AVG(scores.score) AS average_score 
FROM students 
LEFT JOIN scores ON students.id = scores.student_id 
GROUP BY students.id
*/

Route::get('task10', [DatabaseController::class, 'task10']);
/* 
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id 
ORDER BY student_count DESC 
LIMIT 5;
*/





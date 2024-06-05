<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    //TASK 1
    Public function task1() {
        return
        DB::table('students')
        ->get();
        ;
    }

    //TASK 2
    Public function task2() {
        return
        DB::table('students')
        ->where('grade', '10')
        ->get();
        ;
    }

    //TASK 3
    Public function task3() {
        return
        DB::table('students')
        ->whereBetween('age', ['15', '18'])
        ->get();
        ;
    }

    //TASK 4
    Public function task4() {
        return
        DB::table('students')
        ->where('city', 'Manila')
        ->get();
        ;
    }

     //TASK 5
     Public function task5() {
        return
        DB::table('students')
        ->orderBy('age', 'desc')
        ->get();
        ;
    }

    //TASK 6
    Public function task6() {
        return
        DB::table('students')
        ->select('students.*', 'teachers.name as teacher_name')
        ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
        ->get();
        ;
    }

    //TASK 7
    Public function task7() {
        return
        DB::table('teachers')
        ->selectRaw('teachers.*, count(students.id) as student_count')
        ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
        ->groupBy('teachers.id')
        ->get();
        ;
    }

    //TASK 8
    Public function task8() {
        return
        DB::table('students')
        ->select('students.*', 'subjects.name as subject_name')
        ->join('subjects', 'students.subject_id', '=', 'subjects.id')
        ->get();
        ;
    }

    //TASK 9
    Public function task9() {
        return
        DB::table('students')
        ->selectRaw('students.*, avg(scores.score) as average_score')
        ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
        ->groupBy('students.id')
        ->get();
        ;
    }

    //TASK 10
    Public function task10() {
        return
        DB::table('teachers')
        ->selectRaw('teachers.*, count(students.id) as student_count')
        ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
        ->groupBy('teachers.id')
        ->ordeyBy('student_count', 'desc')
        ->limit(5)
        ->get();
        ;
    }


    
}

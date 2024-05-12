<?php

}

// 1 Retrieve all students
    return
    $students = DB::table('students')->get();

//  <!-- 2 Retrieve students in a specific grade -->

    $students = DB::table('students')
        ->where('grade', '=', '10')
        ->get();

        return $students;

//  <!-- 3 Retrieve students in a specific age range -->

    $students = DB::table('students')
        ->whereBetween('age', [15, 18])
        ->get();

        return $students;

//  <!-- 4 Retrieve students from a specific city -->

    $students = DB::table('students')
        ->where('city', 'Manila')
        ->get();

        return $students;


//  <!-- 5 Retrieve students sorted by their age in descending order -->

    $students = DB::table('students')
        ->orderBy('age', 'desc')
        ->get();

        return $students;

//  <!-- 6 Retrieve students with their corresponding teacher -->

    $students = DB::table('students')
        ->leftJoin('teachers', 'teachers.id', '=','students.teacher_id')
        ->select('students.*', 'teachers.name as teacher_name')
        ->get();

        return $students;

//  <!-- 7 Retrieve teachers along with the number of students they teach -->
    
    $teachers = DB::table('teachers')
        ->selectRaw('teachers.*, count(students.id) as student_count')
        ->leftJoin('students', 'teachers.id', '=','students.teacher_id')
        ->groupBy('teachers.id')
        ->get();

        return $teachers;
    
//  <!-- 8 Retrieve students with their corresponding subjects -->

    return
    $students = DB::table('students')
        ->select('students.*','subjects.name as subject_name')
        ->join('subjects','subjects.id', '=','students.subject_id')
        ->get();

//  <!-- 9 Retrieve students along with their average scores -->

    return
    $students = DB::table('students')
        ->selectRaw('students.*, AVG(scores.score) as average_score')
        ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
        ->groupBy('students.id')
        ->get();

//  <!-- 10 Retrieve top 5 teachers with the highest number of students -->

    return
    $teachers = DB::table('teachers')
        ->selectRaw('teachers.*, count(students.id) as student_count')
        ->leftJoin('students', 'teachers.id', '=','students.teacher_id')
        ->groupBy('teachers.id')
        ->orderBy('student_count', 'desc')
        ->limit(5)
        ->get();
}
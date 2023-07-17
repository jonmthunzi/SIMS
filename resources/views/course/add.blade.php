<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add course</title>
    <style>
        label {
          display: block;
          margin-bottom: 5px;
        }
      </style>
</head>
<body>
    <div>
    @extends('layouts.master')
    @section('pagetitle', isset($pagetitle) ? $pagetitle : 'Home' )
    @section('content')

    <header class="card">
        <h1>Add course</h1>
      </header>

      <nav class="card">
        <ul class="cmanageorder">
          <li class="cmanagelist"><a class="cmanagelink" href="{{ route('course.view') }}">View Courses</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="">Add a route map</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="">Create Course Allocation</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="{{ route('course.index')  }}">Back</a></li>
        </ul>
      </nav>


        <!--display successfull message!-->
        @if(session()->has('success') )
        <p style="color: green; font-size: 16px; text-align: center;"> {{ session('success') }}</p>

        @endif

        <div class="row">
            <form method="post" action="{{ route('course.store') }}" class="caddform">
                @csrf
                @method('post')

              <label for="course-code">Course Code:</label>
              <input class="caddinput" type="text" id="course-code" name="course_code" required><br><br>

              <label for="course-name">Course Name:</label>
              <input class="caddinput" type="text" id="course-name" name="course_name" required><br><br>



              <label for="unit-type">Unit Type</label>
              <select name="unit_type" id="">
                <option value="Full">Full Unit</option>
                <option value="Half">Half Unit</option>
              </select>


              <label for="dp_id">department:</label>
              <select name="dp_id" id="">
                <option value="">Select the departments</option>
                <option value="CEN">Computer Engineering department</option>
                <option value="EDUCATION">Education Department</option>
                <option value="">Select the department</option>
                <option value="">Select the department</option>
              </select><br><br>

              <label for="course-description">Course Description:</label><br>
              <textarea id="course-description" name="description" rows="4" cols="50" required></textarea><br><br>

              <input class="caddinput" type="submit" value="Add Course">
        </div>



    @endsection
</div>
</body>
</html>

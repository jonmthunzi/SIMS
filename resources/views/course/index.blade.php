<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>course management</title>
</head>
<!DOCTYPE html>
<html>
<head>
  <title>Head of Department Dashboard</title>
</head>
<!--
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #f9f9f9;
    }

    nav li {
      float: left;
    }

    nav li a {
      display: block;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav li a:hover {
      background-color: #89caeb;
    }
  </style>!-->

<body>




  @extends('layouts.master')
  @section('pagetitle', isset($pagetitle) ? $pagetitle : 'Home' )
  @section('content')

  <header class="card">
    <h1>Manage Courses</h1>
  </header>

  <nav class="card">
    <ul class="cmanageorder" >
      <li class="cmanagelist"><a class="cmanagelink"href="{{ route('course.add') }}">Add Course</a></li>
      <li class="cmanagelist"><a class="cmanagelink" href="{{ route('course.view') }}">View Courses</a></li>
      <li class="cmanagelist"><a class="cmanagelink"href="">Add a route map</a></li>
      <li class="cmanagelist"><a class="cmanagelink" href="">Create Course Allocation</a></li>
    </ul>
  </nav>

  @endsection



</body>
</html>

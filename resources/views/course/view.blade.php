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
<style>

  </style>
<body>

    @extends('layouts.master')
    @section('pagetitle', isset($pagetitle) ? $pagetitle : 'Home' )
    @section('content')

    <header class="card">
        <h1>Courses</h1>
      </header>

    <nav class="card">
        <ul class="cmanageorder">
          <li class="cmanagelist"><a class="cmanagelink" href="{{ route('course.add') }}">Add Course</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="">Add a route map</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="">Create Course Allocation</a></li>
          <li class="cmanagelist"><a class="cmanagelink" href="{{ route('course.index')  }}">Back</a></li>
        </ul>
    </nav>

    <div class="card-body">
        <table class="table table-hover my-0">
            <tr >
                <th> Course Code</th>
                <th> Course Name</th>
                <th> Department</th>
                <th> Description</th>
                <th>Action</th>
            </tr>
            @foreach ($courses as $courses)
            <tr>
                <td>{{ $courses->course_code }}</td>
                <td>{{ $courses->course_name}}</td>
                <td>{{ $courses->dp_id }}</td>
                <td>{{ $courses->description}}</td>
                <td>
                    <a href="{{ route('course.edit', ['course'=>$courses]) }}">Edit</a>

                    <form action="" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" name="" id="" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
      </div>
    @endsection

</body>
</html>

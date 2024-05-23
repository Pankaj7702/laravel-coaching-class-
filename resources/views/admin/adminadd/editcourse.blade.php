@extends('admin.adminadd.admininclude.adminlayout.adminapp');
 

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <style>
        .container {
            margin-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .add-button {
            font-size: 22px;
            cursor: pointer;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Update Courses</h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
                                    @if(count($errors))
                                     <div class="alert alert-danger">
                                        <strong>Validateion errors:Please solve the following issues</strong>
                                    <ul>        
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                    @endif
        
        <!-- <button class="btn btn-primary" onclick="document.getElementById('addCourseForm').style.display='block'">Add Course</button>
        <br></br>
        <div id="addCourseForm" style="display:none;"> -->
        <form action="{{ route('update-course',$course->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $course->name }}"  required>
            </div>
            <div class="form-group">
                <label for="fees">Fees</label>
                <input type="number" id="fees" name="fees" class="form-control" value="{{ $course->fees }}" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (years)</label>
                <input type="text" id="duration" name="duration" class="form-control" value="{{ $course->duration }}"  required>
            </div>
            <button type="submit" class="btn btn-success">Update </button>
        </form>
    </div>
</div>
</body>
</html>
@endsection
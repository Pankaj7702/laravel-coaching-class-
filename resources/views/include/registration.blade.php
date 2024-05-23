@extends('layout.app')

    @section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <link rel="stylesheet" href="{{asset('assets/css/styleregister.css')}}">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div class="content-page">
      <div class="content">
      <div class="card">
                <div class="card-body">
    <div class="form-container">
        <h2>Course Registration Form </h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('store-register') }}" method="POST" id="registration-form">
        @csrf
            <div class="form-group">
                <label for="student-name">Student Name</label>
                <input type="text" id="student-name" name="studentName" required>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                    <option value="{{$course->id}}" data-fees="{{$course->fees}}" data-duration="{{$course->duration}}">
                        {{$course->name}} 
                        </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fees">Fees</label>
                <input type="number" id="fees" name="fees"  class="form-control" required readonly>
            </div>  
            <div class="form-group">
                <label for="durations">Durations</label>
                <input type="text" id="duration" name="duration" class="form-control" required readonly>
            </div>
            <button type="submit"  class="btn-submit">Submit</button>
        </form>
    </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/api/courses')
            .then(response => response.json())
            .then(data => {
                const courseSelect = document.getElementById('course');
                data.forEach(course => {
                    const option = document.createElement('option');
                    option.value = course.id;
                    // option.textContent = course.name;
                    option.dataset.fees = course.fees;
                    option.dataset.duration = course.duration;
                    courseSelect.appendChild(option);
                });
            });

        document.getElementById('course').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            document.getElementById('fees').value = selectedOption.dataset.fees;
            document.getElementById('duration').value = selectedOption.dataset.duration;
        });
    });
</script>
</body>
</html>
@endsection
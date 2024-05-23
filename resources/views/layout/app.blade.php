<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaching Classes Registration</title>
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('assets/css2/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
  <link href="{{asset('assets/css2/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

  <link href="{{asset('assets/css2/bootstrap-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet"
    disabled />
  <link href="{{asset('assets/css2/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"
    disabled />

  <!-- icons -->
  <link href="{{asset('assets/css2/icons.min.css')}}" rel="stylesheet" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--Code For counter-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Count Up Animation</title>
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <!-- Stylesheet -->
  <link href="{{asset('assets/css/counter.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
</head>
<body>
<nav class="navbar">
    <div class="content">
     
        
    <img src="assets/images/users/user-5.jpg" alt="Logo" class="logo">
    <span class="brand-text">EDUCLASS</span>
      </div>
    
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li class="fa fa-home"  aria-hidden="true"><a href="{{route('/')}}">Home</a></li>
        <li class="fa-solid fa-book-open-reader" aria-hidden="true"><a href="{{route('user-register')}}">Courses</a></li> 
        <!-- <li class="fa-solid fa-book-open-reader" aria-hidden="true"><a href="#">Sign Up</a></li>  -->
        
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    <!-- </div> -->
  </nav>
   @yield('content')
 
    <!-- Your content goes here -->
    
    
    <script src="{{asset('assets/js2/vendor.min.js')}}"></script>

  <!-- Plugins js-->
  <script src="{{asset('assets/libs2/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('assets/libs2/apexcharts/apexcharts.min.js')}}"></script>

  <!-- Dashboar 1 init js-->
  <script src="{{asset('assets/js2/pages/dashboard-1.init.js')}}"></script>

  <!-- App js-->
  <script src="{{asset('assets/js2/app.min.js')}}"></script>
    <script src="{{asset('assets/js/styles.js')}}"></script>
   

</body>

</html>

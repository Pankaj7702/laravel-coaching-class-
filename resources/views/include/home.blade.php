@extends('layout.app')

@section('content')
<!DOCTYPE html>s
<html lang="en">
<style>


.footer {
background-color: black;
padding: 20px 0;
border-top: 1px solid #e7e7e7;
margin-bottom: -600px;
margin-left: -240px;
}
.footer h5 {
font-size: 18px;
margin-bottom: 20px;
text-align: center;
color: white;
}
.footer p, .footer ul, .footer a {
color: white;
text-align: center;
}
.footer ul {
padding-left: 0;
}
.footer ul li {
list-style: none;
margin-bottom: 10px;    
}
.footer ul li a {
text-decoration: none;
color: white;
}
.footer ul li a:hover {
text-decoration: underline;
}
.footer .list-inline-item a {
color: white;
font-size: 18px;
}
.footer .list-inline-item a:hover {
color:white;
}

</style>

<title>Classes</title> 
<!-- <body> -->
<div class="banner">
<div class="banner-text">WELCOME TO EDUCLASS</div>
<!-- Code for counter -->
<a href="{{route('user-register')}}" type="button" class="btn btn-outline-warning">Register Now</a></button>
</div><br></br>
<!-- </div> -->
<!-- </div> -->
<!-- Code for counter -->
<!-- </div> -->
<b><div class="banner-text" style="color: black; text-align:center;"><i class="fa fa-star" style="color: black; font-size: 30px;"></i> Our Reviews <i class="fa fa-star" style="color: black; font-size: 30px;"></i></div></b>
<div class="wrapper">
<div class="container">
  <i class="fas fa-user-graduate"></i>
  <span class="num" data-val="185">100</span>
  <span class="text">Students</span>
</div>
<div class="container">
  <i class="fas fa-smile-beam"></i>
  <span class="num" data-val="178">90</span>
  <span class="text">Satisfied Parents</span>
</div>
<div class="container">
  <i class="fas fa-list"></i>
  <span class="num" data-val="13">10</span>
  <span class="text">Courses</span>
</div>
<div class="container">
  <i class="fas fa-star"></i>
  <span class="num" data-val="143">50</span>
  <span class="text">Five Stars</span>
</div>
</div>
<!-- footer code-->

<footer class="footer">
<div class="container1">
    <div class="row">
        <div class="col-md-4">
            <h5>Contact Us</h5>
            <p>
                <strong>Address:</strong> 123 Main Street, Anytown, USA<br>
                <strong>Phone:</strong> (123) 456-7890<br>
                <strong>Email:</strong> info@coachingclass.com
            </p>
        </div>
        
        <div class="col-md-8">
            <h5 class="follow">Follow Us</h5>
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"style="font-size: 20px;"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"style="font-size: 20px;"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"style="font-size: 20px;"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"style="font-size: 20px;"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-11 text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Coaching Classes. All rights reserved.</p>
        </div>
    </div>
</div>
</footer>
<!-- </body>  -->
<!-- Script counter -->
<script src="{{asset('assets/js/styles.js')}}"></script>

<!-- Script code homepage -->

<!-- </body> -->

<!-- </html> -->
@endsection
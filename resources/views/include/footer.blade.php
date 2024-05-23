resources/views/layouts/footer.blade.php
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

@extends('admin.adminadd.admininclude.adminlayout.adminapp');

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Students</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <!--Include alert file-->
           
            <div class="card-box">
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered" id="tickets-table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Student Details</th>
                            <th>Course Details</th>
                            <th>Date</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($registrations as $index=>$registration)
                                <tr>
                                    <td><b>{{$index+1}}</b></td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Name :</b><span>{{ $registration->student_name }} </span></li>
                                            <li><b>Phone :</b><span>{{ $registration->phone_number }} </span></li>
                                            <li><b>Email :</b> <span> {{ $registration->email }}</span></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Course Name :</b><span>{{ $registration->course->name }} </span></li>
                                            <li><b>Course Fees :</b><span>{{ $registration->fees }} </span></li>
                                            <li><b>Course Durations :</b> <span> {{ $registration->duration }} </span></li>
                                        </ul>
                                    </td>

                                    <td>
                                    {{ $registration->created_at->format('d/m/Y') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div><!-- end col -->
        </div>
    </div>
    <!-- end row -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>

@endsection

@extends('admin.adminadd.admininclude.adminlayout.adminapp');


@section('content')
<!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <!-- start page title -->
        <div class="content-page">
            <div class="row">
                <div class="col">
                    <div class="page-title-box">
                        <h2 class="page-title font-weight-bold text-uppercase">Edit Courses</h2>
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
                    </div>
                </div>
            </div>
            
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <a href="{{route('add-course')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                            <i class="mdi mdi-plus-circle"></i> Add Courses
                        </a><br></br>
                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                            id="tickets-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Course Name</th>
                                    <th>Fees</th>
                                    <th>Durations</th>
                                    <th class="hidden-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($courses))
                                @foreach($courses as $index=>$course)
                                <tr>
                                    <td><b>{{$index+1}}</b></td>

                                    <td>{{$course->name}}</td>
                                    <td>{{$course->fees}}</td>
                                    <td>  {{$course->duration}}</td>


                                    
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);"
                                                class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('edit-course',$course->id) }}"><i
                                                        class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                               
                                                        <form method="post" action="{{route('delete-course',$course->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                      <button type = "submit" class="dropdown-item" ><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a> </button>
                                                        </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>


                    </div><!-- end col -->
                </div>

            </div>
            @endsection
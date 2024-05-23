@extends('admin.adminadd.admininclude.adminlayout.adminapp');
 

@section('content')
 <!-- Start Content-->
 <div class="container-fluid">
          <!-- start page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title font-weight-bold">DASHBORAD</h4>
              </div>
            </div>
          </div>
          <!-- end page title -->
          
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="widget-rounded-circle card-box">
                <div class="row">
                  <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                    <i class="fe-user font-22 avatar-title text-primary"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="text-right">
                      <h3 class="mt-1">
                        <span data-plugin="counterup">{{ $totalStudents }}</span>
                      </h3>
                      <p class="text-muted mb-1 text-truncate">
                        Total Students
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end row-->
              </div>
              <!-- end widget-rounded-circle-->
            </div>
            <!-- end col-->

            <div class="col-md-6 col-xl-3">
              <div class="widget-rounded-circle card-box">
                <div class="row">
                  <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                    <i class="fe-book-open font-22 avatar-title text-primary"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="text-right">
                      <h3 class="text-dark mt-1">
                        <span data-plugin="counterup">{{ $totalCourses }}</span>
                      </h3>
                      <p class="text-muted mb-1 text-truncate">
                        Total Courses
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end row-->
              </div>
              <!-- end widget-rounded-circle-->
            </div>
            <!-- end col-->
          

            <!-- <div class="col-md-6 col-xl-3">
              <div class="widget-rounded-circle card-box">
                <div class="row">
                  <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                      <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="text-right">
                      <h3 class="text-dark mt-1">
                        <span data-plugin="counterup">0.58</span>%
                      </h3>
                      <p class="text-muted mb-1 text-truncate">Conversion</p>
                    </div>
                  </div>
                </div> -->
                <!-- end row-->
              <!-- </div> -->
              <!-- end widget-rounded-circle-->
            <!-- </div> -->
            <!-- end col-->

            <!-- <div class="col-md-6 col-xl-3">
              <div class="widget-rounded-circle card-box">
                <div class="row">
                  <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                      <i class="fe-eye font-22 avatar-title text-warning"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="text-right">
                      <h3 class="text-dark mt-1">
                        <span data-plugin="counterup">78.41</span>k
                      </h3>
                      <p class="text-muted mb-1 text-truncate">
                        Today's Visits
                      </p>
                    </div>
                  </div>
                </div> -->
                <!-- end row-->
              <!-- </div> -->
              <!-- end widget-rounded-circle-->
            <!-- </div>
             end col
          </div>
        </div>
      </div> -->
      @endsection
@extends('layouts.admin')

@section('admin-content')
    <div class="row min-vh-50 d-flex flex-column">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                    <h5 class="font-weight-normal mb-0">All systems are running smoothly! You have 
                        <span class="text-primary">No alerts!</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="row flex-grow-1">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg h-100">
                    <div class="card-people mt-auto">
                        <img src={{ asset('admin/images/dashboard/people.svg') }} alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Murang'a</h4>
                                    <h6 class="font-weight-normal">Kenya</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row h-50">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale h-100">
                            <div class="card-body">
                                <p class="mb-4">Today’s Bookings</p>
                                <p class="fs-30 mb-2">4006</p>
                                <p>10.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue h-100">
                            <div class="card-body">
                                <p class="mb-4">Total Bookings</p>
                                <p class="fs-30 mb-2">61344</p>
                                <p>22.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue h-100">
                            <div class="card-body">
                                <p class="mb-4">Number of Meetings</p>
                                <p class="fs-30 mb-2">34040</p>
                                <p>2.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger h-100">
                            <div class="card-body">
                                <p class="mb-4">Number of Clients</p>
                                <p class="fs-30 mb-2">47033</p>
                                <p>0.22% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

@extends('layouts.app')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="com-md-12">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('delete-message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('delete-message') }}
                    </div>
                @endif
            </div>
        </div>


        



        

        <div class="row">
            <!-- Card -->
            <div class="card shadow-light-lg accordion" id="helpAccordionTwo">
                <div class="list-group">
                    <div class="list-group-item">
                        
                        <!-- Header -->
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                            
                                <!-- Heading -->
                                <h4 class="font-weight-bold mb-0">
                                    All Orders
                                </h4>

                                <!-- Text -->
                                <p class="font-size-sm text-muted mb-0">
                                    Click on each order to edit or delete.
                                </p>

                            </div>
                            
                            <!-- Badge -->
                            Order created:
                            <span class="badge badge-pill badge-success-soft ml-4">
                            <span class="h6 text-uppercase">
                                {{count($allDelivery)}}
                            </span>
                            </span>

                        </div> <!-- / .row -->

                    </div>
                    
                    
                    @foreach($allDelivery as $eachDelivery)
                        <div class="list-group-item">
                            
                            <!-- Toggle -->
                            <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpFive{{$eachDelivery->id}}" role="button" aria-expanded="false" aria-controls="helpFive">

                                <!-- Title -->
                                <span class="mr-4">
                                    Package owner: {{$eachDelivery->RFullName}}
                                </span>
                                
                                <!-- Metadata -->
                                <div class="text-muted ml-auto">

                                <!-- Text -->
                                <span class="font-size-sm mr-4 d-none d-md-inline">
                                    Trakcing Code: {{$eachDelivery->tracking_num}}
                                </span>
                                
                                <!-- Chevron -->
                                <span class="collapse-chevron text-muted">
                                    <i class="fe fe-lg fe-chevron-down"></i>
                                </span>
                                
                                </div>

                            </a> <!-- / .row -->
                            
                            <!-- Collapse -->
                            <div class="collapse" id="helpFive{{$eachDelivery->id}}" data-parent="#helpAccordionTwo">
                                <div class="py-5">

                                <!-- Text -->
                                    <p class="text-gray-700">
                                    ID: {{$eachDelivery->id}}
                                    <hr>
                                    Tracking Number: {{$eachDelivery->tracking_num}}
                                    <hr>
                                    Origin: {{$eachDelivery->origin}}
                                    <hr>
                                    Destination: {{$eachDelivery->destination}}
                                    <hr>
                                    Days In Transit: {{$eachDelivery->daysIntransit}}
                                    <hr>
                                    Couriers:{{$eachDelivery->DeliveredWith}}
                                    <hr>
                                    Current Location: {{$eachDelivery->CurrentLocation}}
                                    <hr>
                                    Longitude: {{$eachDelivery->Lng}}
                                    <hr>
                                    Latitude: {{$eachDelivery->Lat}}
                                </p>

                                <div class="d-flex align-items-center">
                                    
                                    <!-- Delete & Edit -->
                                    <div class="btn-group btn-group-toggle mr-4">
                                        <a href="/admin/edit/delivery/{{$eachDelivery->id}}" class="btn btn-sm btn-white">Edit</a>
                                        <a href="/admin/delete/delivery/{{$eachDelivery->id}}" class="btn btn-sm btn-white">Delete</a>
                                    </div>
                                    
                                    <!-- Text -->
                                    <span class="font-size-sm text-muted">
                                    Did this help solve your issue?
                                    </span>

                                </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- {{$allDelivery}} -->
@endsection
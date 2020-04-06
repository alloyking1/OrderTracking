@extends('layouts.app')
@section('content')
    
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h3>All Orders</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tracking Num</th>
                        <th scope="col">Oringin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Day In transit</th>
                        <th scope="col">Delivered with</th>
                        <th scope="col">Current Location</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    @foreach($allDelivery as $eachDelivery)
                        <tbody>
                            <tr>
                            <th scope="row">{{$eachDelivery->id}}</th>
                            <td>{{$eachDelivery->tracking_num}}</td>
                            <td>{{$eachDelivery->origin}}</td>
                            <td>{{$eachDelivery->destination}}</td>
                            <td>{{$eachDelivery->daysIntransit}}</td>
                            <td>{{$eachDelivery->DeliveredWith}}</td>
                            <td>{{$eachDelivery->CurrentLocation}}</td>
                            <td>{{$eachDelivery->Lng}}</td>
                            <td>{{$eachDelivery->Lat}}</td>
                            <td><a href="/admin/edit/delivery/{{$eachDelivery->id}}" class="btn btn-primary">Edit</a></td>
                            </tr>
                            
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- {{$allDelivery}} -->
@endsection
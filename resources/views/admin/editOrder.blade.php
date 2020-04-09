@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-light-lg accordion">
                <div class="card-body">
                <h4 style="text-align:center;padding-top:3%;font-size:1.5rem">Edit Order</h4>
                <form method="POST" action="/admin/save/edited/delivery/{{$content->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="trackingNum" class="col-md-4 col-form-label text-md-right">{{ __('Tracking code') }}</label>

                            <div class="col-md-6">
                                <input id="trackingNum" type="text" class="form-control" value="{{$content->tracking_num}}" name="trackingNum" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="origin" class="col-md-4 col-form-label text-md-right">{{ __('Country bought from') }}</label>

                            <div class="col-md-6">
                                <input id="origin" type="text" class="form-control" value="{{$content->origin}}" name="origin">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('Product Destination') }}</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" value="{{$content->destination}}" name="destination" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="daysIntransit" class="col-md-4 col-form-label text-md-right">{{ __('Days Intransit') }}</label>

                            <div class="col-md-6">
                                <input id="daysIntransit" type="text" class="form-control" value="{{$content->daysIntransit}}" name="daysIntransit" >

                            </div>
                        </div>

                        <!--  -->
                        <div class="form-group row">
                            <label for="deliveredWithin" class="col-md-4 col-form-label text-md-right">{{ __('Delivered With') }}</label>

                            <div class="col-md-6">
                                <input id="deliveredWithin" type="text" class="form-control" value="{{$content->DeliveredWith}}" name="deliveredWithin" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Current Location') }}</label>

                            <div class="col-md-6">
                                <input id="currentLocation" type="text" class="form-control" value="{{$content->CurrentLocation}}" name="currentLocation" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="lng" type="float" class="form-control" value="{{$content->Lng}}" name="lng" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="lat" type="float" class="form-control" value="{{$content->Lat}}" name="lat" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
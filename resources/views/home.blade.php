@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div>Welcome Admin</div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <h3>Total Active Orders</h3>
                                <h1>{{$count}}</h1>
                                <a href="/admin/show/delivery" class="btn btn-primary">See all</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h3>Total SMS Sent</h3>
                                <h1>0</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h3>Total Completed Orders</h3>
                                <h1>{{$completeOrders}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <h4>Create Order</h4>
                <form method="POST" action="/admin/create/delivery">
                        @csrf

                        <div class="form-group row">
                            <label for="trackingNum" class="col-md-4 col-form-label text-md-right">{{ __('Tracking code') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" id="generateCode" class="btn btn-primary">Generate</a></span>
                                    </div>
                                    <input id="trackingNum" type="text" class="form-control @error('trackingNum') is-invalid @enderror" value="" name="trackingNum" autofocus>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="origin" class="col-md-4 col-form-label text-md-right">{{ __('Country bought from') }}</label>

                            <div class="col-md-6">
                                <input id="origin" type="text" class="form-control @error('origin') is-invalid @enderror" name="origin">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('Product Destination') }}</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control @error('destination') is-invalid @enderror" name="destination" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="daysIntransit" class="col-md-4 col-form-label text-md-right">{{ __('Days Intransit') }}</label>

                            <div class="col-md-6">
                                <input id="daysIntransit" type="text" class="form-control @error('daysIntransit') is-invalid @enderror" name="daysIntransit" >

                            </div>
                        </div>

                        <!--  -->
                        <div class="form-group row">
                            <label for="deliveredWithin" class="col-md-4 col-form-label text-md-right">{{ __('Delivered With') }}</label>

                            <div class="col-md-6">
                                <input id="deliveredWithin" type="text" class="form-control @error('deliveredWithin') is-invalid @enderror" name="deliveredWithin" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Current Location') }}</label>

                            <div class="col-md-6">
                                <input id="currentLocation" type="text" class="form-control @error('currentLocation') is-invalid @enderror" name="currentLocation" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="lng" type="float" class="form-control " name="lng" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="currentLocation" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="lat" type="float" class="form-control" name="lat" >
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

<script>
    $(document).ready(function(){
      
      $('#generateCode').click(function(){
        $.ajax({
          method: 'get',
          url: '/admin/generate/code',
        }).then(res => {
            $('#trackingNum').val(res);
        });

      });
    });

    
  </script>
@endsection

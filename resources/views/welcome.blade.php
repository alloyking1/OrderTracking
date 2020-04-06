@extends('layouts.pagesApp')

@section('content')
    <div>
    @include('includes.nav')
    <!-- WELCOME
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(assets/img/covers/cover-1p.png); background-color: rgb(21, 42, 101);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
              Package Tracking
            </h1>

            <!-- Text -->
            <p class="lead mb-0 text-white-75">
              Keep up to date with what we're working on! Landkit is an ever evolving theme with regular updates. 
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>

    <!-- SEARCH
    ================================================== -->
    <section class="mt-n6" style="padding-bottom:10.5rem;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <!-- Form search -->
            <form class="rounded shadow mb-4">
              <div class="input-group input-group-lg">

                <!-- Prepend -->
                <div class="input-group-prepend">
                  <span class="input-group-text border-0 pr-1">
                    <i class="fe fe-search"></i>
                  </span>
                </div>

                <!-- Input -->
                <input type="text" class="form-control border-0 px-1" id="search" name="search" placeholder="Enter Tracking Number...">

                <!-- Append -->
                <div class="input-group-append">
                  <span class="input-group-text border-0 py-0 pl-1 pr-3">
                    <a class="btn btn-sm btn-primary" id="searchBtn" href="#">
                      Search
                    </a>
                  </span>
                </div>

              </div>
            </form>
            
            <!-- Badges -->
            <div class="row align-items-center">
              <div class="col-auto">
                
                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-muted mb-0">
                  couriers:
                </h6>

              </div>
              <div class="col ml-n5">
                
                <!-- Badges -->
                <a class="badge badge-pill badge-secondary-soft" href="blog-search.html">
                  <span class="h6 text-uppercase">Design</span>
                </a>
                <a class="badge badge-pill badge-secondary-soft" href="blog-search.html">
                  <span class="h6 text-uppercase">Product</span>
                </a>
                <a class="badge badge-pill badge-secondary-soft" href="blog-search.html">
                  <span class="h6 text-uppercase">UX</span>
                </a>
                <a class="badge badge-pill badge-secondary-soft" href="blog-search.html">
                  <span class="h6 text-uppercase">Resources</span>
                </a>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div>
    </section>

    <!-- map
    ================================================== -->
    <section class="pt-7 pt-md-10" style="display:none;" id="mapSection">
      <div class="container">

        <!-- map -->
        <div class="row">
          <div class="col-md-12">
            
            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="container">
                  <!--The div element for the map -->
                  <h4>Current Location</h4>
                  <div id="map"></div>
                </div>
                

              </div> <!-- / .row -->
            </div>

          </div>
        </div> 

        <div class="row">
          <div class="col-md-12">
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row">
                <div class="col-md-12" style="text-align:center;padding:3%;">
                  <h1>Package Details</h1>
                  
                </div>
              
              </div>

              <div class="row">
              
                <div class="col-md-12 col-md-6 order-md-1" style="text-align:center">

                  <!-- Body -->
                  <a class="card-body" href="#!">

                    <!-- Heading -->
                    <h3>Tracking number: <span class="badge badge-pill badge-light badge-float-inside">
                      <span class="h6 text-uppercase" id="code"></span></span>
                    </h3>
                    <hr>

                    <h3>Origin:<span class="badge badge-pill badge-light badge-float-inside">
                      <span class="h6 text-uppercase" id="origin"></span></span>
                    </span></h3>
                    <hr>

                    <h3>Destination:<span class="badge badge-pill badge-light badge-float-inside">
                      <span class="h6 text-uppercase" id="destination"></span></span>
                    </span></h3>
                    <hr>
                    <h3>Found in/Current Location:<span class="badge badge-pill badge-light badge-float-inside">
                    <span class="h6 text-uppercase" id="currentLocation"></span></span>
                    </span></h3>
                    <hr>
                    <h3>Tracked with couriers:<span class="badge badge-pill badge-light badge-float-inside">
                    <span class="h6 text-uppercase" id="courier"></span></span>
                    </span></h3>
                    <hr>
                    <h3>Days in transit: <span class="badge badge-pill badge-light badge-float-inside">
                    <span class="h6 text-uppercase" id="transit"></span></span>
                    </span></h3>
                    <hr>

                  </a>

                  <!-- Meta -->
                  <a class="card-meta" href="#!">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <!-- <div class="avatar avatar-sm mr-2">
                      <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div> -->
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                      Ab Hadley
                    </h6>
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                      <time datetime="2019-05-02">May 02</time>
                    </p>

                  </a>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div> 
    </section>
    </div>

  @include('includes.footer')
  
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy_A3VpejganUr-8YFp_pd1T6GVGJaJ2k&callback=initMap" type="text/javascript"></script>
  <script>
    $(document).ready(function(){

      let data = {};

      var displayContent = function(divId, text){
        divId.append(text);
      };
      
      $('#searchBtn').click(function(){
        var search = $("#search").val();
        $.ajax({
          method: 'get',
          url: '/search',
          data:{
            search:search,
          }
        }).then(res => {
          this.data = res;
          // call map
          // initMap();

          // display order details
          displayContent($("#code"), this.data[0].tracking_num);
          displayContent($("#origin"), this.data[0].origin);
          displayContent($("#destination"), this.data[0].destination);
          displayContent($("#currentLocation"), this.data[0].CurrentLocation);
          displayContent($("#courier"), this.data[0].DeliveredWith);
          displayContent($("#transit"), this.data[0].daysIntransit);
          

          // The location of Uluru
          // var location = {lat: -25.344, lng: 131.036};
          var location = {lat: parseFloat(this.data[0].Lat), lng: parseFloat(this.data[0].Lng)};
          // var uluru = {lat: this.data[0].Lat, lng: this.data[0].Lng};
            // The map, centered at Uluru
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: location});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: location, map: map});
        });

        $('#mapSection').fadeIn('10000');
        
        
      });
    });

    
  </script>
@endsection
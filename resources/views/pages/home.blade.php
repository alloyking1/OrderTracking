@extends('layouts.pagesApp')

@section('content')
    @include('includes.nav')
    <!-- WELCOME
    ================================================== -->
    <!-- <section data-jarallax data-speed=".8" class="pt-10 pt-md-14 pb-12 pb-md-15 overlay overlay-primary overlay-80 jarallax" style="background-image: url(assets/img/covers/cover-6.jpg);"> -->
    <!-- <section data-jarallax data-speed=".8" class="pt-10 pt-md-14 pb-12 pb-md-15 overlay overlay-primary overlay-80 jarallax" style="background-image: url(https://cdn5.vectorstock.com/i/1000x1000/00/84/isometric-delivery-concept-with-truck-courier-vector-15460084.jpg);"> -->
    <section data-jarallax data-speed=".8" class="pt-10 pt-md-14 pb-12 pb-md-15 overlay overlay-primary overlay-80 jarallax" style="background-image: url(https://i.pinimg.com/originals/cb/d6/36/cbd63612e6999c0813eed83552f7ce56.png);">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 text-center">
            
            <!-- Heading -->
            <h1 class="display-1 font-weight-bold text-white mb-6 mt-n3">
              Track packages within minutes
            </h1>

            <!-- Button -->
            <a href="/" class="btn btn-pill btn-white shadow lift" data-fancybox>
              <i class="fe fe-eye mr-2"></i>
              Get started
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Shape -->
      <div class="position-absolute right-0 bottom-0 left-0">

        <!-- Shape -->
        <div class="position-relative shape shape-bottom shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"/>
          </svg>
        </div>

        <!-- Button -->
        <div class="position-absolute center">
          <a class="btn btn-light btn-rounded-circle lift" data-toggle="smooth-scroll" href="#payItDown">
            <i class="fe fe-arrow-down"></i>
          </a>
        </div>

      </div>

    </section>

    <!-- PAY IT DOWN
    ================================================== -->
    <section class="pt-8 pt-md-11" id="payItDown">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">You are important</span>
            </span>

            <!-- Heading -->
            <h1>
              Track package while <span class="text-primary">enjoying a vacation.</span>
            </h1>

            <!-- Text -->
            <p class="lead text-gray-700 mb-7 mb-md-9">
              Anytime you make calls or worry about delivery, you're wasting potential effort! We are here for you.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-7">
            
            <!-- Screenshot -->
            <div class="mb-8 mb-md-0">

              <!-- Image -->
              <!-- <img src="assets/img/screenshots/desktop/rental.jpg" alt="..." class="screenshot img-fluid mw-md-110 float-right mr-md-6 mb-6 mb-md-0"> -->
              <img src="https://us.123rf.com/450wm/rastudio/rastudio1806/rastudio180600311/102566949-hands-holding-smartphone-with-opened-package-trace-tracker-application-parcel-online-mobile-tracking.jpg?ver=6" alt="..." class="screenshot img-fluid mw-md-110 float-right mr-md-6 mb-6 mb-md-0">
              
            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-5">
            
            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-primary-soft mt-1">
                <span>1</span>
              </div>
              
              <!-- Body -->
              <div class="ml-5">
                
                <!-- Heading -->
                <h3>
                  Get Trakcing Code 
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-6">
                  Trakcing code will to sent to email and text message.
                </p>

              </div>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-primary-soft mt-1">
                <span>2</span>
              </div>
              
              <!-- Body -->
              <div class="ml-5">
                
                <!-- Heading -->
                <h3>
                  Search With Code
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-6">
                  Use our state of the art tracking service to track current location of your package
                </p>

              </div>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-primary-soft mt-1">
                <span>3</span>
              </div>
              
              <!-- Body -->
              <div class="ml-5">
                
                <!-- Heading -->
                <h3>
                  Order Delivered to Door step
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  Track order down to your door steps.
                </p>

              </div>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- PRICING
    ================================================== -->
    <section class="py-8 py-md-12">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">

            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Pricing</span>
            </span>

            <!-- Heading -->
            <h2>
              Don't worry about pricing. <br>
              <span class="text-primary">Its completely free</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
              Instead of constantly worrying about when your package will get to you, just contact our customer care with our state of the art live chat support to express your concerns.
            </p>

            <!-- List -->
            <div class="row">
              <div class="col-12 col-lg-6">
                
                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <!-- Text -->
                  <p>
                    100% up time
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <p class="mb-lg-0">
                    No wasted time
                  </p>

                </div>

              </div>
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <span class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </span>
                  
                  <!-- Text -->
                  <p>
                    Life chat
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mr-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <!-- Text -->
                  <p class="mb-0">
                    Data driven
                  </p>

                </div>

              </div>
            </div> <!-- / .row -->
            
          </div>
          <div class="col-12 col-md-6">
            
            <!-- Image -->
            <img src="assets/img/illustrations/illustration-3.png" alt="..." class="img-fluid mw-md-130">
            <!-- <img src="https://cdn4.vectorstock.com/i/1000x1000/24/53/dollar-money-bag-flat-circle-icon-vector-3352453.jpg" alt="..." class="img-fluid mw-md-130"> -->
            <!-- <img src="https://governmentcontract.com/wp-content/uploads/Fotolia_117976642_Subscription_Monthly_M.jpg" alt="..." class="img-fluid mw-md-130"> -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    @include('includes.footer')
@endsection
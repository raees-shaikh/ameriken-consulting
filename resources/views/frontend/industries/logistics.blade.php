@extends('frontend.layouts.app')
@section('title', 'Logistics -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image logistic">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Logistics</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Logistics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->
<section>
      <!-- start service area -->
      <div class="rts-service-areah2-im-3 rts-section-gap pt-5 mt-5 pb-0">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-xl-5 mobile-size">
                    <div class="image-area">
                        <img src="frontend/images/service/h2/box.png" alt="Service_Image">
                        <img class="two" src="frontend/images/service/h2/logistic.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/logis.png" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">Ameriken</h3>
                            <span>Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 px-5 mt-0 pt-xl-5">
                    <div class="service-h2-content pt-xl-5">
                        <div class="title-area  service-h2 service">
                            {{-- <span>Why Choose Us</span> --}}
                            <h2 class="title text-md-start text-center">Logistics</h2>
                        </div>
                        <div class="content-wrapper">
                           <p class="disc mb-3">
                            Transporting products and raw materials are the heartbeat of Ameriken industry. Our knowledge of the issues and regulations unique to the transport industry is unsurpassed.
                           </p>
                           <p class="disc mb-3">The Transportation Group includes assurance, tax, technology and management consulting professionals who combine their individual expertise to serve our wide range of transportation and logistics clients.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->
</section>
@endsection

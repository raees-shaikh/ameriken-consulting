@extends('frontend.layouts.app')
@section('title', 'Construction Accounts and Advisors -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image construct">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Construction Accounts and Advisors</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Construction Accounts and Advisors</a>
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
            <div class="row g-5 align-items-start">
                <div class="col-xl-5 mobile-size">
                    <div class="image-area">
                        <img src="frontend/images/service/h2/box.png" alt="Service_Image">
                        <img class="two" src="frontend/images/service/h2/cons.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/cons-2.png" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">Ameriken</h3>
                            <span>Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 px-5 mt-0 mt-sm-5">
                    <div class="service-h2-content">
                        <div class="title-area  service-h2 service">
                            {{-- <span>Why Choose Us</span> --}}
                            <h2 class="title text-md-start text-center">Construction Accounts and Advisors </h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc mb-3">
                                Ameriken Consulting has extensive experience serving the tax, business planning and consulting needs of clients with varying business structures. We serve a wide variety of real estate clients ranging from commercial, residential and retail developers.
                            </p>
                            <p class="disc mb-3">
                                Real estate developers and investors need access to the most current information about regulatory changes as per RERA Act. Ameriken Consulting can help you discover the options that are available to you and implement planning strategies to make the most of your investment. We have a dedicated team of specialty tax experts to assist you with planning and structuring your next project to leverage tax incentives,. We can help you determine if you are taking advantage of every tax savings opportunity that’s available to you.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->

</section>

@endsection

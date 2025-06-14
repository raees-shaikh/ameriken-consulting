@extends('frontend.layouts.app')
@section('title', 'Technology -')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image technology">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Technology</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Technology</a>
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
                        <img class="two" src="frontend/images/service/h2/tech.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/technology.png" alt="Service_Image">
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
                            <h2 class="title text-md-start text-center">Technology</h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc mb-3">Ameriken Consulting has understand the complex issues executives face in technology industry, no matter the life cycle stage, our professionals possess the experience to assist—from tax planning and compliance to audit and assurance services to specialized consulting. Whether it’s structuring your business, recognizing revenue, evaluating the most beneficial tax structure domestically and internationally, capturing tax credits and incentives, or making introductions to potential funding sources.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->
</section>
@endsection

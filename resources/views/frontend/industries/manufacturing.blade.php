@extends('frontend.layouts.app')
@section('title', 'Manufacturing -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image manufacture">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Manufacturing</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Manufacturing</a>
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
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 mobile-size">
                    <div class="image-area">
                        <img src="frontend/images/service/h2/box.png" alt="Service_Image">
                        <img class="two" src="frontend/images/service/h2/manu.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/manufacture.png" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">Ameriken</h3>
                            <span>Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 px-5 mt-xl-5 pt-xl-5 mt-0">
                    <div class="service-h2-content">
                        <div class="title-area  service-h2 service">
                            {{-- <span>Why Choose Us</span> --}}
                            <h2 class="title text-md-start text-center">Manufacturing</h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc mb-3">Ameriken Consulting understands the pressure within the industry to manage production, operate efficiently and compete in an increasingly competitive global marketplace. We can help identify and implement strategies designed to keep your operations moving profitably and efficiently.</p>

                            <p class="disc mb-3">Decades of experience combined with our active participation in relevant industry associations ensures that our industry specialists are well-versed on the manufacturing issues your company faces. Our dedication to your success is demonstrated through guidance and consultation on:</p>
                            <div class="feature-one-wrapper mt--40 d-block">
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Inventory management, optimization and planning
                                    </p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Internal Audit & Assurance with government Compliance
                                    </p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Income tax planning tailored to manufacturers and distributors
                                    </p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                   <p>Business process improvements</p>
                                </div>

                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Cash flow forecasting</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->
</section>

@endsection

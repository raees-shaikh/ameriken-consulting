@extends('frontend.layouts.app')
@section('title', 'Government -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image gvt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Government</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Government</a>
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
                        <img class="two" src="frontend/images/service/h2/gvt.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/government.png" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">Ameriken</h3>
                            <span>Consulting </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 px-5 mt-0">
                    <div class="service-h2-content">
                        <div class="title-area  service-h2 service">
                            {{-- <span>Why Choose Us</span> --}}
                            <h2 class="title text-md-start text-center">Government</h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc mb-3">
                                We apply various strategies and business-consulting services tailored to your specific needs, including:
                            </p>

                            <div class="feature-one-wrapper mt--40 d-block">
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Governmental audits in accordance ICAI and Government Audit Standards Fraud prevention and internal controls</p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Compliance requirements related to grants and cooperative agreements
                                    </p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>General accounting, budget and reconciliation assistance
                                    </p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Financial statement preparation for non-attest clients
                                    </p>
                                </div>

                                <div class="single-feature-one">
                                    <i class="fal fa-check d-sm-block d-none"></i>
                                    <p>Operational policies and procedures analysis
                                    </p>
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

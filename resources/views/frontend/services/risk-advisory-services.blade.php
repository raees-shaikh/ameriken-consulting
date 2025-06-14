@extends('frontend.layouts.app')
@section('title', 'Risk Advisory Services -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image risk">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7  col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Risk Advisory Services</h1>
                </div>
                <div class="col-lg-5 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">Risk Advisory Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <section>

        <!-- start service details area -->
        <div class="rts-service-details-area  pt-5">

            <div class="container">
                <div class="row">
                    <h2 class="title text-md-start text-center">Risk Advisory Services</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/office-5.png" alt="business-area">
                            </div>

                            <p class="disc mb-3">
                                Ameriken Consulting dives in to meet this uncertainty head-on and become the client’s
                                trusted partner. We help you weather turbulent times as well as calm periods so your
                                business can maintain its forward momentum and thrive in today’s dynamic environment. We
                                work to deliver value, and assist clients in sustaining their businesses while propelling
                                them towards smart growth and expansion.
                            </p>


                        </div>
                    </div>
                    <!--rts blog wizered area -->
                    <div
                        class="d-xl-none-side col-xl-5 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                        <!-- single wizered start -->
                        <div class="rts-single-wized Categories service">
                            <div class="wized-header">
                                <h5 class="title text-cream text-md-start text-center">
                                  Related  Categories
                                </h5>
                            </div>
                            <div class="wized-body">
                                 <!-- single categoris -->
                                 <ul class="single-categories">
                                    <li><a href="{{ url('/audit-assurance') }}"> Audit & Assurance <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{ url('/income-tax') }}">Income Tax <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{url('/goods-service-tax')}}"> Goods And Services Tax <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{url('/risk-advisory-services')}}"> Risk Advisory Services <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{url('/services-non-residents')}}">Services For Non-Residents <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->

                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{url('/outsourcing-international-co')}}"> Outsourcing For International Corporates <i
                                                class="fas fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- single categoris End -->


                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{url('/us-outsourcing-work')}}"> US Outsourcing Work <i class="fas fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                                <!-- single categoris End -->
                            </div>
                        </div>
                        <!-- single wizered End -->

                    </div>
                    <!-- rts- blog wizered end area -->
                </div>
            </div>
        </div>
        <!-- End service details area -->


        <div class="container ">


            <div class="row">

                <div class=" col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        {{-- <div class="thumbnail">
                    <img src="frontend/images/service/01.jpg" alt="business-area">
                </div> --}}
                        <h4 class="title mt-3 text-cream text-md-start text-center">Diagnostic review of processes

                        </h4>



                        <div class="row g-5 mt--20 mb--40">
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="cloud-icon-book icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Comprehensive review</h6>
                                        <p class="disc">Comprehensive review of the existing processes ( manual and system
                                            ) and identifying the gaps.


                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/10.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Mapping areas</h6>
                                        <p class="disc">Mapping areas that would need detailed study to add value to the
                                            organization.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Step-wise description</h6>
                                        <p class="disc">Step-wise description of each process within the function is
                                            captured in the SOP.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details ml--text">
                                        <h6 class="title">Detailed flowcharts </h6>
                                        <p class="disc">Detailed flowcharts for each function are developed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->

                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-book icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Identifying the risks</h6>
                                        <p class="disc">Identifying the risks associated with the function and mapping the
                                            same with key Risk Mitigating solutions
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->


                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon-risk">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details ml--text-risk mx-2">
                                        <h6 class="title">Preparing of Risk</h6>
                                        <p class="disc">Preparing of Risk Governance Matrix.</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>


                        </div>
                    </div>

                </div>


                <div class="container ">


                    <div class="row">

                        <div class=" col-md-12 col-sm-12 col-12">
                            <!-- service details left area start -->
                            <div class="service-detials-step-1">
                                {{-- <div class="thumbnail">
                                <img src="frontend/images/service/01.jpg" alt="business-area">
                            </div> --}}
                                <h4 class="title mt-3 text-cream text-md-start text-center">Capex review and reporting
                                </h4>



                                <div class="row g-5 mt--20 mb--40">
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail ml--text-icon">
                                                <img src="frontend/images/service/icon/09.svg" alt=""
                                                    class="icon w-140 cloud-icon-com">
                                            </div>
                                            <div class="details ml--text">
                                                <h6 class="title">Comparison of Budget</h6>
                                                <p class="disc">Comparison of Budget with the Actual Spend
                                                </p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail ml--text-icon-risk">
                                                <img src="frontend/images/service/icon/10.svg" alt=""
                                                    class="icon w-140">
                                            </div>
                                            <div class="details ml--text mx-2">
                                                <h6 class="title">Preparation of Fixed</h6>
                                                <p class="disc">Preparation of Fixed Asset Register (FAR).
                                                </p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail ml--text-icon-risk mx-0">
                                                <img src="frontend/images/service/icon/11.svg" alt=""
                                                    class="icon w-140">
                                            </div>
                                            <div class="details ml--text-risk mx-0">
                                                <h6 class="title">Physical verification</h6>
                                                <p class="disc">Physical verification of assets.</p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/12.svg" alt=""
                                                    class="icon w-140">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Verification</h6>
                                                <p class="disc">Verification of all supporting documents that form a
                                                    backup for the Actual Spend.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->

                                </div>
                            </div>

                        </div>

                        <div
                            class="d-xl-block--1115 col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                            <!-- single wizered start -->
                            <div class="rts-single-wized Categories service">
                                <div class="wized-header">
                                    <h5 class="title text-cream text-md-start text-center">
                                       Related Categories
                                    </h5>
                                </div>
                                <div class="wized-body">
                       <!-- single categoris -->
                       <ul class="single-categories">
                        <li><a href="{{ url('/audit-assurance') }}"> Audit & Assurance <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->
                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{ url('/income-tax') }}">Income Tax <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->
                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{url('/goods-service-tax')}}"> Goods And Services Tax <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->
                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{url('/risk-advisory-services')}}"> Risk Advisory Services <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->
                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{url('/services-non-residents')}}">Services For Non-Residents <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->

                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{url('/outsourcing-international-co')}}"> Outsourcing For International Corporates <i
                                    class="fas fa-arrow-right"></i></a></li>
                    </ul>
                    <!-- single categoris End -->


                    <!-- single categoris -->
                    <ul class="single-categories">
                        <li><a href="{{url('/us-outsourcing-work')}}"> US Outsourcing Work <i class="fas fa-arrow-right"></i></a>
                        </li>
                    </ul>
                    <!-- single categoris End -->
                                </div>
                            </div>
                            <!-- single wizered End -->



                        </div>
                    </div>


    </section>


    <div class="pt-5">
        <!-- start call to action area -->
        <div class="rts-callto-acation-area rts-callto-acation-area5 mt-5 ">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-two-wrapper">
                            <div class="title-area">
                                <p class="text-cream mb-0 pb-0">Free Estimate</p>
                                <h3 class="title pt-0 mt-0">Request A Quote</h3>
                                    <p class="disc text-white mt-4">Please state what you want and let us redefine conventional
                                        accounting solutions.</p>
                            </div>
                            <a class="rts-btn banner-btn" href="{{ url('/contact-us') }}">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end call to action area -->
    </div>
@endsection

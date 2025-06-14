@extends('frontend.layouts.app')
@section('title', 'Audit & Assurance -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image audit">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2  text-md-start text-center">Audit & Assurance</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">Audit & Assurance</a>
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
                    <h2 class="title text-md-start text-center">Audit & Assurance</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/office-1.png" alt="business-area">
                            </div>
                            <h4 class="title text-primary text-md-start text-center">Statutory Audits</h4>
                            <p class="disc mb-3">
                                We at Ameriken Consulting carry out Statutory audits ensure the company has the ability to
                                survive in a competitive business environment, and continue to prosper. we do this by:
                            </p>


                            <div class="row g-5 mt--20 ">
                                <div class=" col-md-6">
                                    <!-- single service details card -->
                                    <div class="service-details-card">
                                        <div class="thumbnail">
                                            <img src="frontend/images/service/icon/09.svg" alt="" class="icon">
                                        </div>
                                        <div class="details">
                                            <h6 class="title">Monitoring</h6>
                                            <p class="disc">Monitoring, analyzing and assessing the risks and controls of
                                                the organization</p>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->
                                </div>


                                <div class=" col-md-6">
                                    <!-- single service details card -->
                                    <div class="service-details-card">
                                        <div class="thumbnail">
                                            <img src="frontend/images/service/icon/10.svg" alt="" class="icon">
                                        </div>
                                        <div class="details">
                                            <h6 class="title">Reviewing</h6>
                                            <p class="disc"> Reviewing the organization’s compliance with state and
                                                federal policies and laws
                                            </p>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->
                                </div>

                                <div class="col-xl-12 col-md-6">
                                    <!-- single service details card -->
                                    <div class="service-details-card">
                                        <div class="thumbnail">
                                            <img src="frontend/images/service/icon/10.svg" alt="" class="icon">
                                        </div>
                                        <div class="details">
                                            <h6 class="title">Reassurances</h6>
                                            <p class="disc">Making reassurances and recommendations to the organization or company’s owners or
                                                governing boards.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->
                                </div>
                                <div class="col-lg-6">
                                    {{-- <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Easy Customer Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End --> --}}
                                </div>
                                <div class="col-lg-6">
                                    {{-- <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Quality Cost Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End --> --}}
                                </div>
                            </div>

                        </div>
                        <div class="service-detials-step-2 ">


                            <!-- stem-area start -->
                            <div class="">


                                <div class=" col-sm-12 col-12">

                                    {{-- <div class="single-service-step text-center">
            <p class="step">07</p>

            <p class="disc">
                Review of the Risk Governance Matrix of each process.
            </p>
        </div> --}}
                                </div>
                            </div>

                            <!-- stem-area End -->
                        </div>

                        <!-- service details left area end -->
                        <div class="service-detials-step-3 mt--70 mt_md--50">
                            <div class="row g-5 align-items-center">


                            </div>
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
                        <!-- single wizered start -->
                        <div class="rts-single-wized download service">
                            <div class="wized-header">
                                <h5 class="title">Download</h5>
                            </div>
                            <div class="wized-body">
                                <!-- single downlaod area start -->
                                <div class="single-download-area">
                                    <img src="frontend/images/service/icon/07.svg" alt="Business_downlaod">
                                    <div class="mid">
                                        <h6 class="title">
                                            Our Brochures
                                        </h6>
                                        <span>Downlaod</span>
                                    </div>
                                    <a class=" rts-btn btn-primary download-btn" href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                                <!-- single downlaod area End -->
                                <!-- single downlaod area start -->
                                <div class="single-download-area">
                                    <img src="frontend/images/service/icon/08.svg" alt="Business_downlaod">
                                    <div class="mid">
                                        <h6 class="title">
                                            Company Details
                                        </h6>
                                        <span>Downlaod</span>
                                    </div>
                                    <a class=" rts-btn btn-primary download-btn" href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                                <!-- single downlaod area End -->
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

                <div class="service-detials-step-2 ">
                    <h4 class="title text-primary text-md-start text-center text-md-start text-center">Internal Management Audit</h4>

                    <!-- stem-area start -->
                    <div class="row mt-5  mb--40 g-5 mb_md--20 mb_sm--20">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">01</p>

                                <p class="disc">
                                    Preparation of audit schedule based on scope of work, finalized by management.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">02</p>

                                <p class="disc">
                                    Discussion of the gaps at various user levels before presenting to the
                                    management.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">03</p>

                                <p class="disc">
                                    Review of compliance with various regulations from time to time, as applicable
                                    to the entity

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- stem-area start -->
                    <div class="row  mb--40 g-5 mb_md--20 mb_sm--20">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">04</p>

                                <p class="disc">
                                    Quarterly discussion with management of important observations.


                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">05</p>

                                <p class="disc">
                                    Detailed analytical review of each process.


                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-service-step text-center">
                                <p class="step">06</p>

                                <p class="disc">
                                    Regular follow-up conducted with the user to ensure implementation of accepted
                                    suggestions.
                                </p>
                            </div>
                        </div>

                        <div class=" col-sm-12 col-12">
                            <div>
                                <i class="fas fa-check-circle"></i>

                                <span>Review of the Risk Governance Matrix of each process.
                                </span>
                            </div></div></div>

                <div class=" col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        {{-- <div class="thumbnail">
                    <img src="frontend/images/service/01.jpg" alt="business-area">
                </div> --}}
                        <h4 class="title text-primary text-md-start text-center">Systems Audit

                        </h4>



                        <div class="row g-5 mt--20 mb--40">
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Review of the software</h6>
                                        <p class="disc">Review of the software used in the organization in relation to
                                            the process.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/10.svg" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Review of the risks</h6>
                                        <p class="disc"> Review of the risks and controls within and outside the system.

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon">
                                    </div>
                                    <div class="details ml--text">
                                        <h6 class="title">Study Of Data</h6>
                                        <p class="disc">Study of data flow from start to end.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon">
                                    </div>
                                    <div class="details ml--text">
                                        <h6 class="title">Review of system</h6>
                                        <p class="disc">Review of system security features.</p>
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
                        <!-- single wizered start -->
                        <div class="rts-single-wized download service">
                            <div class="wized-header">
                                <h5 class="title">Download</h5>
                            </div>
                            <div class="wized-body">
                                <!-- single downlaod area start -->
                                <div class="single-download-area">
                                    <img src="frontend/images/service/icon/07.svg" alt="Business_downlaod">
                                    <div class="mid">
                                        <h6 class="title">
                                            Our Brochures
                                        </h6>
                                        <span>Downlaod</span>
                                    </div>
                                    <a class=" rts-btn btn-primary download-btn" href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                                <!-- single downlaod area End -->
                                <!-- single downlaod area start -->
                                <div class="single-download-area">
                                    <img src="frontend/images/service/icon/08.svg" alt="Business_downlaod">
                                    <div class="mid">
                                        <h6 class="title">
                                            Company Details
                                        </h6>
                                        <span>Downlaod</span>
                                    </div>
                                    <a class=" rts-btn btn-primary download-btn" href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                                <!-- single downlaod area End -->
                            </div>
                        </div>
                        <!-- single wizered End -->
                        {{-- <!-- single wizered start -->
                        <div class="rts-single-wized contact service">
                            <div class="wized-header text-center">
                                <a class="thumbnail " href="{{ url('/') }}">
                                    <img src="frontend/images/fav.png" alt="" class=" logo-sidebar  pt-md-4 pt-2">
                                    <span class="text-primary d-md-inline d-block  ">AmeriKen Consulting, LLC</span>
                                </a>
                            </div>
                            <div class="wized-body">
                                <h5 class="title">Need Help? We Are Here
                                    To Help You</h5>
                                <a class="rts-btn banner-btn" href="{{ url('/contact-us') }}">Contact Us</a>
                            </div>
                        </div>
                        <!-- single wizered End --> --}}
                    </div>
                </div>

                </div></div></div>


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
    </section>
@endsection

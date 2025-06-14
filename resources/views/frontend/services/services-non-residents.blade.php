@extends('frontend.layouts.app')
@section('title', 'Services For Non-Residents -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7  col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title text-md-start text-center display-2">Services For Non-Residents</h1>
                </div>
                <div class="col-lg-5  col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">Services For Non-Residents</a>
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
                    <h2 class="title text-md-start text-center">Services For Non-Residents</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/office-6.png" alt="business-area">
                            </div>



            <div class="row">

                <div class=" col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        {{-- <div class="thumbnail">
                    <img src="frontend/images/service/01.jpg" alt="business-area">
                </div> --}}


                        <div class="row g-5 mb--40">
                            <div class="col-lg-12">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--service-icon">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="icon cloud-icon-com w-140">
                                    </div>
                                    <div class="details ml--service-text">
                                        <h6 class="title">Obtaining Advance</h6>
                                        <p class="disc">Obtaining Advance Rulings on debatable issues.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/10.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details ml--text">
                                        <h6 class="title">Obtaining Lower</h6>
                                        <p class="disc">Obtaining Lower rate TDS Certificate</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon tax">
                                    </div>
                                    <div class="details ml--text-risk">
                                        <h6 class="title">Tax Planning</h6>
                                        <p class="disc">Tax planning
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                        </div>
                    </div></div>


                        </div>
                    </div></div>
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

                        <div class="row g-5  mb--40">
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="cloud-icon-com icon w-140">
                                    </div>
                                    <div class="details ml--text-ser ">
                                        <h6 class="title">Consultancy/ advice</h6>
                                        <p class="disc">Consultancy/ advice on FEMA/RBI matters.

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon-ser ml--text-service">
                                        <img src="frontend/images/service/icon/10.svg" alt="" class="icon ">
                                    </div>
                                    <div class="details ml--text-ser ml--text-service ">
                                        <h6 class="title">Filing Income Tax</h6>
                                        <p class="disc">Filing Income Tax/ Wealth Tax Returns

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon ">
                                    </div>
                                    <div class="details ml--text ml--text-adv">
                                        <h6 class="title">Advice</h6>
                                        <p class="disc">Advice on making investments

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Issuing certificate </h6>
                                        <p class="disc">Issuing certificate for repatriation of income / assets from US.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->

                            <div class="col-lg-8">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon-app ml--app-icon">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-book icon w-140">
                                    </div>
                                    <div class="details ml--text-app ml--service-icon">
                                        <h6 class="title">Application To RBI</h6>
                                        <p class="disc">Making application to RBI for various matters including sale and purchase of residential and commercial properties.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->

                        </div>
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

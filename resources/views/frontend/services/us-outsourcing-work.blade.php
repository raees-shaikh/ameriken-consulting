@extends('frontend.layouts.app')
@section('title', 'US Outsourcing Work -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title text-md-start text-center display-2">US Outsourcing Work</h1>
                </div>
                <div class="col-lg-5 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">US Outsourcing Work</a>
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
                    <h2 class="title text-md-start text-center">US Outsourcing Work</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/01.jpg" alt="business-area">
                            </div>

                            <p class="disc mb-3">
                                Our team include professional like CPA, CA and accountants pro at maintaining the books of accounts and provide you with a more organized set of business information.
                            </p>
                            <p class="disc mb-3">We provide virtual accounting so, you don’t need to be physically present at our office , Our team of experts who will help you prepare and file federal and state tax returns. Our services mainly include filling of different forms like form-1040, form 1041, form 1120, form 1120S,form 1065, FinCEN form 114, form 8938 preparing and applying for tax returns and many more. We also have experience in working on many top tax preparation software’s like Pro-connect intuit .</p>


                        </div>
                    </div>
                    <!--rts blog wizered area -->
                    <div
                        class="d-xl-none-side col-xl-5 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
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
                        <h4 class="title mt-3 text-cream">Ameriken Consulting – Outsourcing Accounting benefits </h4>



                        <div class="row g-5 mt--20 mb--40">
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnailml--text-icon-risk">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="icon cloud-icon">
                                    </div>
                                    <div class="details ml--text-text-risk">
                                        <h6 class="title">Cloud-based accounting</h6>
                                        <p class="disc">Cloud-based accounting on QuickBooks etc.
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
                                        <h6 class="title">Professional Bookkeeping</h6>
                                        <p class="disc">Experienced, certified and professional bookkeeping service

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail ml--text-icon-risk">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="icon">
                                    </div>
                                    <div class="details ml--text-risk mx-3">
                                        <h6 class="title">Daily Updates</h6>
                                        <p class="disc">Daily follow-up updates.

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon cloud-icon-book w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Various Bookkeeping</h6>
                                        <p class="disc">Various bookkeeping service such as accounts receivable, payable processing, payroll management, bank reconciliation etc. under a single roof.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->

                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon cloud-icon-book w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Timely Maintenance</h6>
                                        <p class="disc">Timely maintenance of books of accounts and 24 x 7 service with various communication media such as Microsoft teams chat, emails and calls.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->


                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Handling of sales tax</h6>
                                        <p class="disc">Handling of sales tax, federal tax and payroll taxes of New York & Florida and filling procedure.
                                        </p>
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

@extends('frontend.layouts.app')
@section('title', 'Outsourcing For International Corporates -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image outsource">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Outsourcing For International Corporates</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">Outsourcing For International Corporates</a>
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
                    <h2 class="title text-md-start text-center">Outsourcing For International Corporates</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/office-4.png" alt="business-area">
                            </div>
                            <p class="disc mb-3">Outsourcing bookkeeping service has become a new norm of handling the books of accounts. The reason being in house Bookkeeping not only takes an ample amount of time but also is a tiresome activity. Especially for small or medium scale business, it takes space, time and costs that may better put in use for other business purposes.</p>
                            <p class="disc mb-3">Being Ameriken’s leading bookkeeping and tax return firm, we believe in easy dealing with our clients for which we provide a set of an initial checklist of documents required from you. Your documents are safe with us. We remain in touch with our clients via various online platforms.</p>
                            <p class="disc mb-3">Being your virtual bookkeeper, it is essential that the book shall be easily available to you at all times. Ameriken Consulting provides cloud-based accounting on Quickbooks.</p>
                            <p class="disc mb-3">We guide our clients at quality bookkeeping and also assist them by providing various financial reports. Let us do your bookkeeping, so you can run your business well.</p>
                        </div>

                    </div>
                    <!--rts blog wizered area -->
                    <div class=" col-xl-5 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
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

        </div>

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

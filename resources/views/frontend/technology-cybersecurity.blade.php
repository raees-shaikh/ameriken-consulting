@extends('frontend.layouts.app')
@section('title', 'Technology & Cybersecurity -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image cyber">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Technology & Cybersecurity</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a  class="active">Technology & Cybersecurity</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <section>
        <!-- rts about area start -->
        <div class="rts-about-area rts-section-gap about-home-seven pt-advise-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-xl-center">
                        <div class="thumbnail">
                            <img src="{{ url('frontend/images/about/main/consulting.jpg') }}" alt="about_image" class="w-600 img-border-t">
                            {{-- <img src="frontend/images/about/main/about-02-sm.jpg" alt="small"
                                class="small d-md-block d-none">
                            <div class="experience-area six d-md-block d-none">
                                <h2 class="title">
                                    50
                                </h2>
                                <span class="text-cream">
                                    Years Of Experience
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-start home-seven-about">

                            <h3 class="title text-cream mt-lg-0 mt-5">CRM and ERP Consulting</h3>
                        </div>
                        <div class="inner-about-home-7">
                            <p class="disc">
                                Have you ever struggled with creating good reports or are you using multiple applications
                                even after spending thousands implemented a great ERP systems. Many times we find that the
                                systems were not implemented correctly leading to increased spending just to extract and
                                create custom reports. If you need a project manager or just some advice on new system
                                implementation, from how to set up chart-of accounts, departments, segments to control
                                implementation and segregation of duties then reach out to us.
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->

        <!-- rts about area start -->
        <div class="rts-about-area rts-section-gap about-home-seven pt-0 pb-5">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="text-start home-seven-about">
                            <h3 class="title text-cream mt-lg-0 mt-5">IT Risk Management and Cybersecurity consulting</h3>
                            <p class="disc">
                                We use the COBIT framework and several Cybersecurity frameworks to ensure your compliance
                                with industry standards.
                            </p>

                        </div>

                    </div>
                    <div class="col-lg-5  order-lg-2 order-1 ">
                        <div class="thumbnail">
                                <img src="Frontend/images/about/main/consult.jpg" alt="" class="img-border-t">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->
    </section>
@endsection

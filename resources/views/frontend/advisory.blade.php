@extends('frontend.layouts.app')
@section('title', 'Advisory -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image advisory">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Advisory</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a  class="active">Advisory</a>
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
                        <img src="frontend/images/about/main/manage.png" alt="about_image" class="w-600 img-border-t">
                        {{-- <img src="frontend/images/about/main/about-02-sm.jpg" alt="small" class="small d-md-block d-none">
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

                        <h3 class="title text-cream mt-lg-0 mt-5">Business Management & Consulting</h3>
                    </div>
                    <div class="inner-about-home-7">
                        <p class="disc">
                        Our consultants take an in-depth dive to understand issues at hand and deliver actionable solutions to real business challenges. Our business and management consultants provide enterprises and organizations with strategic leadership and transformational insights, obtained through years of experience. Together, we work with you to deliver thoughtful, practical guidance and recommendations. Some of the solutions we offer include, narrative preparation, walkthroughs, SWOT analysis, and root cause analysis (RCA) techniques.
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
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="text-start home-seven-about">

                        <h3 class="title text-cream mt-lg-0 mt-5">Transaction Advisory (Mergers & Acquisitions) & Valuation Services</h3>
                    </div>
                    <div class="inner-about-home-7">
                        <p class="disc">
                            We offer due diligence services in a very tailored approach. We understand that every transaction is different and thus we work with both buyers and sellers to ensure we understand their objectives and then create procedures accordingly. We also offer valuation services through our affiliate partners.
                        </p>


                    </div>
                </div>
                <div class="col-lg-6  order-lg-2 order-1 ">
                    <div class="thumbnail">
                        <img src="frontend/images/about/main/01.jpg" alt="about_image" class="w-600 img-border-t">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    </section>
@endsection

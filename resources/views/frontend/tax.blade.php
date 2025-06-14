@extends('frontend.layouts.app')
@section('title', 'Tax -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image tax">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Tax</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a  class="active">Tax</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <section>

        <!-- our service area start -->
        <div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image pt-5 " >
            <div class="container pt-5">
                <div class="row gy-sm-0 gy-5 gx-5 service padding-controler">
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail"><img
                                    src="frontend/images/service/busi.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Business Tax</h6>
                                    <p class="dsic mb-xl-2">As part of our Business Tax Services, we put together a custom corporate tax planning strategies and address any related tax issues prior to year-end. We’ll also review the most recent tax law changes and interpretations in order to maximize tax savings opportunities and reduce tax liability. With an effective business tax preparation plan, companies have greater assurance of realizing substantial cost savings, limiting interest and penalties and reducing the likelihood of IRS audits. </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream"
                                        href="{{ url('/construction-accounts-advisors') }}">Read More </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail two"><img src="frontend/images/service/ind-3.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Individual Tax </h6>
                                    <p class="dsic mb-xl-2">
                                        our individual tax services help reduce tax liability and maximize after-tax cash flow. Our personal tax preparation services include tax return compliance, tax planning, and assistance with investment strategies.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="#">Read More </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->

                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail three"><img src="frontend/images/service/african-2.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">International Tax</h6>
                                    <p class="dsic mb-xl-2">
                                        Businesses that operate internationally face unique challenges of having the stay compliant with multiple countries’ tax rules and regulations. Our international tax advisors work with organizations to maintain tax transparency, remediate cross-border tax disputes, minimize the risk of double-taxation and achieve maximum savings through international tax incentives.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--60 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail four"><img
                                    src="frontend/images/service/local.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">State & Local Tax</h6>
                                    <p class="dsic  mb-xl-2">
                                        The complexity and persistent changes in state and local tax (SALT) laws and regulations can make it difficult for businesses to navigate. Our consultants can help with compliance of laws and regulations and manage risk.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/government') }}">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                </div>
            </div>
        </div>
        <!-- our service area end -->
    </section>
@endsection

@extends('frontend.layouts.app')
@section('title', 'Industries -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image industry">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Industries</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a  class="active">Industries</a>
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
                            <a href="{{ url('/construction-accounts-advisors') }}" class="thumbnail"><img
                                    src="frontend/images/service/02.jpg" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Construction Accounts and Advisors</h6>
                                    <p class="dsic mb-xl-2">Ameriken Consulting has extensive experience serving the tax, business
                                        planning and consulting needs of clients with varying business structures. We serve
                                        a wide variety of real estate clients ranging from commercial, residential and
                                        retail developers.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream"
                                        href="{{ url('/construction-accounts-advisors') }}">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="#" class="thumbnail two"><img src="frontend/images/service/03.jpg"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Education</h6>
                                    <p class="dsic mb-xl-2">
                                        Ameriken Conssulting is committed to meeting the needs of educational institutions.
                                        Whether it’s working with management or Board of Trustees members, our dedicated
                                        accounting professionals will assist you in navigating issues related to financial
                                        reporting, tax-exempt status and grant compliance.
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
                            <a href="#" class="thumbnail three"><img src="frontend/images/service/fianance.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Financial Services</h6>
                                    <p class="dsic mb-xl-2">
                                        Financial Service organizations are operating in a challenging environment, where
                                        maintaining a competitive foothold and remaining compliant are vital. Our
                                        professionals are industry experts who go beyond the typical tax and audit functions
                                        to find unique ways to improve your overall operational efficiencies.
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
                            <a href="{{ url('/government') }}" class="thumbnail four"><img
                                    src="frontend/images/service/government.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Government</h6>
                                    <p class="dsic  mb-xl-2">
                                        We apply various strategies and business-consulting services tailored to your
                                        specific needs, including Governmental audits in accordance ICAI and Government
                                        Audit Standards Fraud prevention
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/government') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--60 pb-991-row">
                        <div class="service-two-inner">
                            <a href="#" class="thumbnail five"><img src="frontend/images/service/health.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Healthcare</h6>
                                    <p class="dsic  mb-xl-2">
                                        Our dedicated Healthcare Facilities Group is highly qualified to provide audit &
                                        assurance services, as well as implement services for your organization to help you
                                        thrive.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->

                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="{{ url('/manufacturing') }}" class="thumbnail six"><img
                                    src="frontend/images/service/11.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Manufacturing</h6>
                                    <p class="dsic  mb-xl-2">
                                        Ameriken Consulting understands the pressure within the industry to manage
                                        production, operate efficiently and compete in an increasingly competitive global
                                        marketplace.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/manufacturing') }}">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="#" class="thumbnail seven"><img src="frontend/images/service/04.jpg"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Non-Profits</h6>
                                    <p class="dsic  mb-xl-2">
                                        At Ameriken Consulting we understand We help you look beyond the numbers and provide
                                        your organization with valuable recommendations in accounting, auditing and
                                        assurance compliance.
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
                            <a href="{{ url('/retail-consumer-sector') }}" class="thumbnail eight"><img
                                    src="frontend/images/service/consumer.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Retail & Consumer Sector</h6>
                                    <p class="dsic  mb-xl-2">
                                        At Ameriken Consulting, our professionals know how to successfully predict these
                                        unforeseen changes, while enabling you to overcome challenges such as demanding
                                        competition and increasing technological change.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream"
                                        href="{{ url('/retail-consumer-sector') }}">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="{{ url('/technology') }}" class="thumbnail nine"><img
                                    src="frontend/images/service/technology.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Technology</h6>
                                    <p class="dsic  mb-xl-2">
                                        Ameriken Consulting has understand the complex issues executives face in technology
                                        industry, no matter the life cycle stage, our professionals possess the experience
                                        to assist—from tax planning and compliance to audit and assurance services.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/technology') }}">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="{{ url('/logistics') }}" class="thumbnail tenth"><img
                                    src="frontend/images/service/logistics.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Logistics</h6>
                                    <p class="dsic  mb-xl-2">
                                        Transporting products and raw materials are the heartbeat of US industry. Our
                                        knowledge of the issues and regulations unique to the transport industry is
                                        unsurpassed.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/logistics') }}">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="{{ url('/media-entertainment') }}" class="thumbnail eleven"><img
                                    src="frontend/images/service/media.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Media & Entertainment</h6>
                                    <p class="dsic  mb-xl-2">
                                        We are leading specialists for every accounting need of the media and entertainment
                                        industry. We understand and appreciate the very special nature of the industry.
                                    </p>
                                    <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/media-entertainment') }}">Read
                                        More</a>
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

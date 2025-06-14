@extends('frontend.layouts.app')
@section('title', '')
@section('content')

    <!-- rts banner area start -->
    <div class="rts-banner-area-two">
        <div class="swiper mySwiperh2_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-md-start text-center">
                                        <div class="wrapper px-sm-for-10">
                                            <span class="sub text-black banner-text ">A Step Above Conventional
                                                Accounting</span>
                                            <h1 class="title banner-title">
                                                Ameriken Consulting
                                            </h1>
                                            <div class=" pt-md-5 pt-4">
                                                <a class="rts-btn baner-custom-btn  mx-0 "
                                                    href="{{ url('/who-we-are') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-two slide-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-md-start text-center second-slide">
                                        <div class="wrapper px-sm-for-10">
                                            <span class="sub banner-text">Accounting Solutions With Trust And
                                                Accuracy</span>
                                            <h1 class="title banner-title">
                                                <span class="">Accounting </span> <br>
                                                Done Right Fast
                                            </h1>
                                            <div class=" pt-md-5 pt-4">
                                                <a class="rts-btn baner-custom-btn  mx-0  "
                                                    href="{{ url('/contact-us') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="banner-two slide-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-center">
                                        <div class="wrapper">
                                            <span class="sub">20+ Years In Business</span>
                                            <h1 class="title">
                                                <span>Making</span> Business Growth Is Our <span>Dedication</span>
                                            </h1>
                                            <a class="rts-btn banner-btn" href="#">View Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
    <!-- rts banner area end -->

    {{-- <!-- latest service area -->
    <div class="rts-service-area rts-section-gap bg-service-h2">
        <div class="container">
            <div class="row">
                <div class="title-area service-h2">
                    <span>Our Latest Services</span>
                    <h2 class="title">Service We Provide</h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="service-details.html" class="thumbnail">
                            <img src="frontend/images/service/10.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Business Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="service-details.html" class="thumbnail">
                            <img src="frontend/images/service/11.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Creative Ideas</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="service-details.html" class="thumbnail">
                            <img src="frontend/images/service/12.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Market Research</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="service-details.html" class="thumbnail">
                            <img src="frontend/images/service/13.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Best Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
            </div>
        </div>
    </div>
    <!-- latest service area End -->

    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h2">
        <div class="container">
            <div class="row">
                <div class="cta-h2-wrapper text-center">
                    <div class="icon">
                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                    </div>
                    <div class="body">
                        <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7 Available)</span></p>
                        <a href="tel:123-456-7890p123" class="number">+215 2153.2159</a>
                        <a href="#" class="rts-btn banner-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section end --> --}}

    <!-- start about our company -->
    <div class="rts-about-our-company-h2  mt-5 py-5">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                    <div class="title-area about-company text-sm-start text-center">
                        <span class="text-cream">Something About Us</span>
                        <h2 class="title text-capitalize text-primary">Well Organized.<br>
                            Trusted By Thousands.</h2>
                    </div>
                    <div class="about-company-wrapper">
                        <p class="disc text-capitalize mb-5">
                            {{-- AmeriKen Consulting is a Certified Public Accountant firm providing Accounting, Assurance, Advisory & Tax Services. AmeriKen Consulting has established itself as a reputable and dependable firm with over 50 year of combined experience, working with companies and individuals globally. --}}

                            AmeriKen Consulting is a Certified Public Accountant firm providing Accounting, Assurance,
                            Advisory & Tax Services. AmeriKen Consulting has established itself as a reputable and
                            dependable firm with over 50 years of experience, working with companies and individuals
                            globally.
                        </p>




                        <div class="row mb-5">
                            <div class="col-sm-6 px-md-2 px-sm-0">
                                <div class="check-area">
                                    <img src="{{ url('/frontend/images/icon/time.png') }}" alt="" class="icon-size">
                                    <p class="disc d-inline px-1">
                                        Ontime Everytime
                                        At Service
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6  mt-sm-0 mt-4 px-md-2 px-sm-0">
                                <div class="check-area">
                                    <img src="{{ url('/frontend/images/icon/location-40.png') }}" alt=""
                                        class="icon-size">
                                    <p class="disc d-inline px-1">
                                        Available At Your Location
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6   mt-4 px-md-2 px-sm-0">
                                <div class="check-area">
                                    <img src="{{ url('/frontend/images/icon/calendar-40.png') }}" alt=""
                                        class="icon-size">
                                    <p class="disc d-inline px-1">
                                        One To One Interaction
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-lg-start text-center pt-lg-4">
                            <a class="rts-btn banner-btn  mx-auto mt-4 about-us-mobile-btn"
                                href="{{ url('/who-we-are') }}">Read
                                More</a>
                        </div>
                        <div class="rts-tab-style-one">
                            <div class="d-flex align-items-start contoler-company">
                                {{-- <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">01. The Great Mission</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">02. Amazing Vision</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">03. Our Destination</button>
                                </div> --}}
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        {{-- <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn banner-btn " href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End --> --}}
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        {{-- <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn banner-btn " href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn banner-btn " href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End --> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1 d-lg-block d-flex justify-content-center">
                    <div class="about-company-thumbnail mt-md-5">
                        <img src="frontend/images/about/about-round.png" alt="Business_company">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start about our company End -->

    <section class="mt-5 pt-4">

        <!-- our service area start -->
        <div class="rts-service-area rts-section-gapTop pb--130 service-two-bg bg_image pt-5 ">
            <div class="container pt-5">
                <div class="row g-5 service padding-controler pt-5 justify-content-center">
                    <p class="mb-0 pb-0   text-cream text-capitalize  text-center">
                        What We Do
                    </p>
                    <h2 class="title text-center mt-0 pt-0">Our Services</h2>
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--125 pb_md--100 mt-0">
                        <div class="service-two-inner">
                            <a href="{{ url('/accounting-assurance') }}" class="thumbnail number-hide"><img
                                    src="frontend/images/service/audit.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Accounting & Assurance</h6>
                                    <p class="dsic fs-16">Corporation Internal And Statutory Audit Partnership, LLP, LLC
                                        Internal And Statutory Audit Bank Audit, Charitable Trust And Schools Internal Audit
                                    </p>
                                    <a class="rts-read-more-two text-cream baner-custom-btn-sm"
                                        href="{{ url('/accounting-assurance') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--125 pb_md--100 mt-0">
                        <div class="service-two-inner">
                            <a href="{{ url('/advisory') }}" class="thumbnail two number-hide"><img
                                    src="frontend/images/service/consulting.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream"> Advisory</h6>
                                    <p class="dsic fs-16">
                                        Risk Advisory Financial Consultancy, CMA Reports Private Equity Fund Consultancy
                                        Legal & Arbitration Consultancy
                                    </p>
                                    <a class="rts-read-more-two text-cream baner-custom-btn-sm"
                                        href="{{ url('/advisory') }}">Read More </a>
                                </div>
                                {{-- <i
                                            class="fas fa-arrow-right mx-1 "></i> --}}
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->

                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--125 pb_md--100 mt-0">
                        <div class="service-two-inner">
                            <a href="{{ url('/tax') }}" class="thumbnail three number-hide"><img
                                    src="frontend/images/service/i-tax.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Tax</h6>
                                    <p class="dsic fs-16">
                                        Returns – Individual, LLP, LLC, Corporation, Partnership, Audit – Partnership,
                                        Corporation, LLP, Tax Advisory
                                    </p>
                                    <a class="rts-read-more-two text-cream baner-custom-btn-sm"
                                        href="{{ url('/tax') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->

                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--125 pb_md--100 mt-0">
                        <div class="service-two-inner">
                            <a href="{{ url('/technology-cybersecurity') }}" class="thumbnail three number-hide"><img
                                    src="frontend/images/service/standard.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Technology & Cybersecurity</h6>
                                    <p class="dsic fs-16">
                                        We use the COBIT framework and several Cybersecurity frameworks to ensure your
                                        compliance with industry standards.
                                    </p>
                                    <a class="rts-read-more-two text-cream baner-custom-btn-sm"
                                        href="{{ url('/technology-cybersecurity') }}">Read More</a>
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


    <section>
        <!-- our service area start -->
        <div class="rts-service-area rts-section-gapTop pb--100 service-three-bg bg_image pt-5 ">
            <div class="container pt-5">
                <h2 class="title text-center mt-0 pt-0 pb-3">Our Authoritative Standards</h2>

                <div class="row gy-sm-0 gy-5 gx-5 service padding-controler">
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail num-none"><img
                                    src="frontend/images/service/indian-img.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Accounting Standards</h6>
                                    <p class="dsic mb-xl-2"> Did you know that Accounting Standards are standardized
                                        throughout the United States under U.S. GAAP and around the world under
                                        International Accounting Standards? Thus whether you are with a big firm or a small
                                        firm, we all abide by the same rules and regulations and the same quality standards.
                                    </p>
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
                            <a href="javascript:void(0)" class="thumbnail num-none"><img
                                    src="frontend/images/service/growth.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Growth Of Your Company</h6>
                                    <p class="dsic mb-xl-2">
                                        Are you looking for a firm that understands your needs and truly support the growth
                                        or development of your company? We know that many small and medium sized businesses
                                        don’t get the attention they deserve, they have small or fixed budgets and we
                                        understand that. That’s why we have created solutions where we charge fixed fees, do
                                        not extra bill and offer reasonable rates for our services.
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
                            <a href="javascript:void(0)" class="thumbnail num-none"><img
                                    src="frontend/images/service/quality.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">No Compromise On Quality</h6>
                                    <p class="dsic mb-xl-2">
                                        No compromise on quality – all our business professionals are highly qualified with
                                        designations that include: CPA, CA, CISA, CGMA, MBA, MSA and are well experienced
                                        with most of them coming from Big 4 or Top 30 firms worldwide. You are assured of
                                        quality work and top service.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="#">Read More </a> --}}
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

    <div class="row mt-5" id="indust">
        <div class="col-12">
            <div class=" team text-center">

                <h2 class="title">Industries</h2>
            </div>
        </div>
    </div>

    <!-- rts faq section area -->
    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image mt-4 pt-5 position-relative-sec">

        <div class="container pt-5">
            <h4 class="  text-center text-primary mt-0 pt-0">We Are Experienced
                In The Following Industries</h4>

            <div class="row  mt-5">
                <div class="col-xl-4 col-md-6 order-xl-1 order-2">
                    <div class="indust-tab">
                        <a href="{{ url('/construction-accounts-advisors') }}" class="h3 indust-link cons">
                            <div>
                                <img src="{{ url('frontend/images/icon/construction.png') }}" alt="">
                                Construction Accounts And Advisors
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="javascript:void(0)" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/education.png') }}" alt=""
                                    class="mx-1"> Education
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab align-items-center">
                        <a href="javascript:void(0)" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/financial.png') }}" alt=""
                                    class="mx-1"> Financial Services
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/government') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/government.png') }}" alt=""
                                    class="mx-1"> Government
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="javascript:void(0)" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/heathcare.png') }}" alt=""
                                    class="mx-1"> Healthcare
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/manufacturing') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/manufacture.png') }}" alt=""
                                    class="mx-1"> Manufacturing
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/manufacturing') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/biotech.png') }}" alt="" class="mx-1">
                                Biotech
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-xl-4 col-md-6 order-xl-2 order-3">


                    <div class="indust-tab">
                        <a href="javascript:void(0)" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/profit.png') }}" alt="" class="mx-1">
                                Non-Profits
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/retail-consumer-sector') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/retail.png') }}" alt="" class="mx-1">
                                Retail & Consumer Sector
                            </div>
                        </a>
                    </div>


                    <div class="indust-tab">
                        <a href="{{ url('/technology') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/technology.png') }}" alt=""
                                    class="mx-1"> Technology
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/logistics') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/logistics.png') }}" alt=""
                                    class="mx-1"> Logistics
                            </div>
                        </a>
                    </div>

                    <div class="indust-tab">
                        <a href="{{ url('/media-entertainment') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/media.png') }}" alt="" class="mx-1">
                                Media & Entertainment
                            </div>
                        </a>
                    </div>


                    <div class="indust-tab">
                        <a href="{{ url('/media-entertainment') }}" class="h3 indust-link">
                            <div>
                                <img src="{{ url('frontend/images/icon/science.png') }}" alt="" class="mx-1">
                                Life Sciences
                            </div>
                        </a>
                    </div>

                </div>


                <div class="col-xl-4 col-12 order-xl-3 order-1 text-center">

                    <img src="{{ url('frontend/images/faq/industry.png') }}" alt="">
                </div>
            </div>

        </div>

    </div>
    <!-- rts faq section area End -->

    {{-- <!-- start client review area start -->
    <div class="rts-client-review-two rts-section-gapTop bg-client-r-h2 mt-5">
        <div class="container">
            <div class="row mt--30">
                <div class="title-area left-right testimonial-h2">
                    <div class="title-left">
                        <span>Our Testimonial</span>
                        <h2 class="title mt--15">
                             What People Say

                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn banner-btn">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/images/testimonials/02.png" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title"> Director, ParekhEngimech</h6>
                                            </a>
                                            <span>US</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc text-capitalize">
                                            We appreciate Ameriken Consulting for continued support and guidance on Income Tax
                                            and VAT & GST matters . We value your personalized attention at all times .
                                            Considering the complexity of Income Tax and GST and frequent changes in
                                            compliance , your team is conceptually sound and has always delivered practical
                                            approach for Income Tax , VAT & GST compliance. The team is very professional,
                                            accessible and has quick turnaround time.
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="frontend/images/testimonials/icon/logo-01.png" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/images/testimonials/03.png" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title"> Director </h6>
                                            </a>
                                            <span>Nivaran Diagnostic Center Pvt Ltd, US</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc text-capitalize">
                                            Ameriken Consulting is doing our Audit and Income Tax compliance from almost 1
                                            decade, till date their support and professionalism is highly appreciable. D H
                                            Vadivalla & Co team has always given quality output in all the assignments ,
                                            which is commendable , Services provided by Ameriken Consulting team is well
                                            structured as they have taken care of our needs. We would like to thanks D H
                                            Vadivalla & Co entire team for a very thorough and comprehensive analysis of our
                                            firm Audit and Income Tax compliance
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="frontend/images/testimonials/icon/logo-02.png" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/images/testimonials/04.png" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Director</h6>
                                            </a>
                                            <span> Flameproof Equipments Pvt Ltd, US</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc text-cappitalize">
                                            We are engaged with Ameriken Consulting for more than 3 decade for Audit and
                                            Income Tax work of our company , till date their support and professionalism is
                                            highly appreciable. Throughout the period , we have received the direct and
                                            personal attention of their Mr Dinesh H Vadivalla, together with his team to
                                            address our specific issue and concerns .They have regularly kept us abreast of
                                            latest developments to ensure our compliance with laws at all times. Their
                                            proactive engagement with tax authorities ensured a quick and timely closure of
                                            the assessment proceedings.
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="frontend/images/testimonials/icon/logo-03.png" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client review area end -->
 --}}

    {{--
    <section>

        <!-- start client feed back section -->
        <div class="rts-client-feedback">
            <div class="container">
                <div class="row fixed-height">
                    <!-- start testimonials area -->
                    <div class="col-lg-7">
                        <div class=" text-start pl--30 pt--70 pl-for-mobile-0">
                            <p class="mb-0 pb-0 pre-title text-cream text-capitalize text-md-start text-center">
                                Our Testimonials
                            </p>
                            <h2 class="title text-md-start text-center mt-0 pt-0">What People Say</h2>

                            <!-- swiper area start -->
                            <div class="swiper mySwipertestimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                We appreciate Ameriken Consulting for continued support and guidance on
                                                Income Tax
                                                and VAT & GST matters . We value your personalized attention at all times .
                                                Considering the complexity of Income Tax and GST and frequent changes in
                                                compliance , your team is conceptually sound and has always delivered
                                                practical
                                                approach for Income Tax , VAT & GST compliance. The team is very
                                                professional,
                                                accessible and has quick turnaround time.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span> ParekhEngimech, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting is doing our Audit and Income Tax compliance from almost
                                                1
                                                decade, till date their support and professionalism is highly appreciable.
                                                Ameriken Consulting team has always given quality output in all the
                                                assignments ,
                                                which is commendable , Services provided by Ameriken Consulting team is well
                                                structured as they have taken care of our needs. We would like to thanks
                                                Ameriken Consulting entire team for a very thorough and comprehensive
                                                analysis of our
                                                firm Audit and Income Tax compliance.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>Nivaran Diagnostic Center<br> Pvt Ltd, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                We are engaged with Ameriken Consulting for more than 3 decade for Audit and
                                                Income Tax work of our company , till date their support and professionalism
                                                is
                                                highly appreciable. Throughout the period , we have received the direct and
                                                personal attention of their Ameriken Consulting, together with his team to
                                                address our specific issue and concerns .They have regularly kept us abreast
                                                of
                                                latest developments to ensure our compliance with laws at all times. Their
                                                proactive engagement with tax authorities ensured a quick and timely closure
                                                of
                                                the assessment proceedings.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>Flameproof Equipments<br> Pvt Ltd, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting has generally been good with their support , assistance
                                                and
                                                guidance . They have in -depth knowledge and acumen in Audit , Income Tax
                                                and
                                                GST practice. They have practical approach to problem solving and they are
                                                backed by good supportive team. We can recommend their high quality and
                                                professional work.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">CEO & Partner</h5>
                                                    </a>
                                                    <span>Electrocare Industries ,<br> India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                It was considered necessary to engage with Ameriken Consulting services in
                                                the
                                                areas of understanding the procedure of Income Tax and providing assistance
                                                to
                                                prepare and submit the complete set of case papers to tax authorities ,
                                                representing the company at the interaction with the authorities and
                                                providing
                                                necessary legal clarification and providing prompt response to queries
                                                raised.
                                                We are glad to observe that we have received professional and competent
                                                services
                                                especially in sector of Media and Entertainment business . We are pleased to
                                                convey our appreciation to Ameriken Consulting team for the services
                                                rendered by
                                                them, during the engagement.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>108 Production Inc, <br>NY USA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                We have had very good experience working with Ameriken Consulting . The team
                                                is
                                                extremely professional , technically very sound and team members are always
                                                available for any inputs and advice.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>WWT India Pvt Ltd,<br> India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting, Professional and skilled organization and have
                                                expertise in
                                                Income Tax and GST Compliance .The team has professional acumen and
                                                understanding , is always present with valuable input services .
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">CEO</h5>
                                                    </a>
                                                    <span>SP & SC Finance <br>Pvt Ltd, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting has associated with us since last 2 decade . This firm
                                                prompt
                                                service in Income tax ,Audit and GST . Ameriken Consulting has good blend of
                                                team
                                                resources with ensures that professional services of high standards is
                                                provided
                                                to client promptly. We appreciate prompt professional services provided by
                                                the
                                                firm.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>Sara Exports, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Has been associated with the Ameriken Consulting for last 3 decade , and are
                                                more
                                                happy to associate with them. The team has only improved over time and we
                                                appreciate prompt professional services provided by the firm.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">CEO</h5>
                                                    </a>
                                                    <span> Scan Décor, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting is doing our arbitration matter assignment work past few
                                                years
                                                , till date their support and professionalism is highly appreciable.
                                                Ameriken Consulting team has always given quality output in our all
                                                assignment ,which
                                                is commendable. We are very pleased with the quality of services and team is
                                                well structured as they have taken care of our needs.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>Vyas & Bhalwal Advocate<br>, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                It been nearly 3 decade since we started working together and it was
                                                probably one
                                                of the best decision I have ever made Professionalism, honesty, dedication
                                                making its happen , never saying no to anything and finding solutions ,
                                                thinking
                                                out of the box , and most important being treated as family is what is got
                                                from
                                                working with you and your team.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Chairman</h5>
                                                    </a>
                                                    <span>Power & Control, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting professional and skilled organization and have expertise
                                                in
                                                audit and tax issues. The team has professional acumen and understanding is
                                                always present with extraordinary services.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Director</h5>
                                                    </a>
                                                    <span>Scan Enterprise, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                The firm is know through the owner and I have good experience working with
                                                Ameriken Consulting ,have good knowledge of audit and taxation issue further
                                                we are associated with firm has 2 decade and further Ameriken Consulting
                                                team
                                                gone extra mile to ensure that our work and compliance get completed on
                                                time.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">CEO</h5>
                                                    </a>
                                                    <span> Partner Shreeji <br>Engineering Works</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                We have been associated with Ameriken Consulting since last two year for
                                                professional services
                                                rendering to us . The kind of support and Pro activeness in completing
                                                assignments is absolutely
                                                best. Team of Ameriken Consulting is well updated with every new changes in
                                                tax
                                                law which give us
                                                an edge to be fully compliant with law.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Partner</h5>
                                                    </a>
                                                    <span>BDO India LLP, India </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                The company and the family have been clients of the Ameriken Consulting firm
                                                for
                                                over 30 years
                                                and we really appreciate the personal service we get from Ameriken
                                                Connsulting and
                                                his team.
                                                They are always available and approachable. Between them they always deal
                                                directly with my
                                                problems. They are often the first professional we turn to when we are
                                                looking
                                                at something
                                                new.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title">Chairman</h5>
                                                    </a>
                                                    <span> Shreeji Engineering <br>Enterprises, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-inner">
                                            <p class="disc text-start">
                                                Ameriken Consulting has assisted us over the years in keeping to the various
                                                deadlines that
                                                businesses need to keep to. He has advised and assisted us with tax and
                                                business
                                                planning ideas.
                                                I would highly recommend Ameriken Consulting and his team.
                                            </p>
                                            <div class="testimonial-bottom-one">
                                                <div class="thumbnail">
                                                    <img src="frontend/images/testimonials/02.png"
                                                        alt="business-testimonials">
                                                </div>
                                                <div class="details">
                                                    <a href="#">
                                                        <h5 class="title"> Director</h5>
                                                    </a>
                                                    <span>Labdhi Electrocare <br>Ltd, India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- swiper area end -->
                        </div>
                    </div>
                    <!-- end testimonials are -->
                    <!-- images area -->
                    <div class="col-lg-5 d-lg-block d-flex justify-content-center z-index-img-div">
                        <div class="rts-test-one-image-inner">
                            <img src="{{url('/frontend/images/testimonials/person-1.png')}}" alt="business_testimobials" class=" pt-5 d-lg-block d-none">
                            <img src="{{url('/frontend/images/testimonials/01.png')}}" alt="" class="d-block d-lg-none testimonial-mobi-img">
                        </div>
                    </div>
                    <!-- image area end -->
                </div>
            </div>
        </div>
        <!-- start client feed back section End -->
    </section> --}}







    <section>
        <!-- contact area start -->
        <div class="rts-contact-area contact-one mt--60 pt--50">
            <div class="container">
                <div class="row align-items-center g-0">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="contact-image-one">
                            <img src="frontend/images/about/main/about-01.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="contact-form-area-one mb-5">
                            <div class=" text-start">
                                <p class="mb-0 pb-0   text-cream text-capitalize text-md-start text-center">
                                    Make An Appointment
                                </p>
                                {{-- <h2 class="mt-0 pt-0 title text-md-start text-center">Request A Free Quote</h2> --}}
                            </div>
                            <div id="form-messages"></div>
                            <form id="contact-form" action="{{ route('frontend.contact.submit') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" minlength="3" maxlength="30"
                                        placeholder="Full Name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                    </div>

                                    <div class="col-lg-6">
                                            <input type="text" name="company_name" minlength="3" maxlength="120"
                                                placeholder="Company Name" value="{{ old('company_name') }}" required>
                                            @if ($errors->has('company_name'))
                                                <div class="text-danger" role="alert">
                                                    {{ $errors->first('company_name') }}
                                                </div>
                                            @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" name="phone" minlength="10" maxlength="10"
                                        placeholder="Phone" value="{{ old('Phone') }}" required>
                                    @if ($errors->has('phone'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="email" name="email" minlength="5" maxlength="40"
                                        placeholder="E-Mail" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    </div>

                                </div>

                               <div class="col-12">
                                <textarea placeholder="Type Your Message" name="message" minlength="5" maxlength="250" required>{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                               </div>
                                <button type="submit" class="rts-btn banner-btn mx-auto ">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->

    </section>
    {{-- <!-- start client area -->
    <div class="rts-client-area ptb--100 client-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-two-wrapper">
                        <img src="frontend/images/client/01.png" alt="Business_client">
                        <img src="frontend/images/client/02.png" alt="Business_client">
                        <img src="frontend/images/client/03.png" alt="Business_client">
                        <img src="frontend/images/client/04.png" alt="Business_client">
                        <img src="frontend/images/client/05.png" alt="Business_client">
                        <img src="frontend/images/client/06.png" alt="Business_client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client area End --> --}}

    <!-- start header area -->

@endsection

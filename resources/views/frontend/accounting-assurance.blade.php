@extends('frontend.layouts.app')
@section('title', 'Accounting & Assurance -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image account">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Accounting & Assurance</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a class="active">Accounting & Assurance</a>
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
                                    src="frontend/images/service/ind-1.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Audit Services</h6>
                                    <p class="dsic mb-xl-2"> Audits are performed based on a risk-based approach. We conduct our audits under the concept of “understanding the entity.” This concept is based fundamentally on the fact that your company’s business environment is unique. By understanding the company and the industry it operates in, we gain the necessary perspective for performing an effective and efficient audit.
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
                            <a href="javascript:void(0)" class="thumbnail two"><img src="frontend/images/service/03.jpg"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Audit Preparedness</h6>
                                    <p class="dsic mb-xl-2">
                                         We offer a great solution for companies that have never been audited. Our consultants work with the Company to ensure policies, procedures and documentation are properly set-up in order to successfully complete an audit.
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
                            <a href="javascript:void(0)" class="thumbnail three"><img src="frontend/images/service/fianance.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Agreed Upon Procedures</h6>
                                    <p class="dsic mb-xl-2">
                                         Certain stakeholders such as lenders and partners require specific testing and assurance over certain subject matters. Our team will work with the company and it’s stakeholders to understand their needs and design appropriate procedures to ensure the goal is met.
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
                                    src="frontend/images/service/government.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Internal Audit Services & SOX Compliance</h6>
                                    <p class="dsic  mb-xl-2">
                                         We can act as your internal audit service group by bringing a systematic and disciplined approach to risk management, control and governance processes. We use the COSO and COBIT frameworks to ensure controls are well designed, implemented and operating effectively.
                                    </p>
                                    {{-- <a class="rts-read-more-two baner-custom-btn-sm-industry baner-custom-btn-sm-industrytext-cream" href="{{ url('/government') }}">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    <!-- single service area -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--60 pb-991-row">
                        <div class="service-two-inner">
                            <a href="javascript:void(0)" class="thumbnail five"><img src="frontend/images/service/comp.png"
                                    alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Reviews & Compilations</h6>
                                    <p class="dsic  mb-xl-2">
                                        Review engagement services can be a cost-effective alternative to a full financial statement audit for an organization in that they provide limited assurance regarding the organization’s financial statements in accordance with the organization’s financial reporting framework. A compilation of a financial statement is not designed to provide assurance on the underlying financial statements. However, compiled financial statements present an economical way to report an organization’s financial performance and financial position at a high level.
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
                            <a href="javascript:void(0)" class="thumbnail six"><img
                                    src="frontend/images/service/out.png" alt="Business_image"></a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h6 class="title text-cream">Outsourced Accounting </h6>
                                    <p class="dsic  mb-xl-2">
                                        Outsourcing Bookkeeping Service Has Become A New Norm Of Handling The Books Of Accounts. The Reason Being In House Bookkeeping Not Only Takes An Ample Amount Of Time But Also Is A Tiresome Activity. Especially For Small Or Medium Scale Business, It Takes Space, Time And Costs That May Better Put In Use For Other Business Purposes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->


                        <!-- single service area -->
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100 pb-991-row">
                            <div class="service-two-inner">
                                <a href="javascript:void(0)" class="thumbnail seven"><img
                                        src="frontend/images/service/african.png" alt="Business_image"></a>
                                <div class="body-content">
                                    <div class="hidden-area">
                                        <h6 class="title text-cream">SEC Reporting </h6>
                                        <p class="dsic  mb-xl-2">
                                            We can set-up the financial reporting structure for Companies going public or assist with public companies that don’t have the resources to mage their SEC reporting. We prepare accounting materials and financial information to support regulatory and management reporting, as well as board meeting requirements. In addition, we can prepare or help with the preparation of SEC filings, such as quarterly, annual reports, proxy statements, and earnings releases. We also design and implement reporting processes and internal frameworks to support your regulatory requirements. 
                                        </p>
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

@extends('frontend.layouts.app')
@section('title', 'Goods & Service Tax -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image goods">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7  col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title  display-2 text-md-start text-center">Goods & Service Tax</h1>
                </div>
                <div class="col-lg-5  col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="#"> Services</a>
                        <span> / </span>
                        <a  class="active">Goods & Service Tax</a>
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
                    <h2 class="title text-md-start text-center">Goods & Service Tax</h2>
                    <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                        <!-- service details left area start -->
                        <div class="service-detials-step-1">
                            <div class="thumbnail mb-md-4 mb-5">
                                <img src="frontend/images/service/office-2.png" alt="business-area">
                            </div>

                            <p class="disc mb-3">
                                Goods and Services Tax (GST) is one of the biggest tax reforms introduced in the history of
                                US fiscal evolution. The all-pervasive impact of GST on a company’s services, material and
                                product costs, cash flow, profitability and, ultimately, shareholder value is an important
                                element that requires careful attention in a competitive world of fine margins.
                            </p>
                            <p class="disc mb-3">We at Ameriken Consulting are closely involved in monitoring the
                                developments on GST. We help businesses anticipate policy changes and assess their impact on
                                operations, offering a host of specialized GST-related services such as:</p>

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
                        <h4 class="title mt-3 text-cream text-md-start text-center">Advisory

                        </h4>



                        <div class="row g-5 mt--20 mb--40">
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/09.svg" alt="" class="icon cloud-icon-book w-140" >
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Advising on applicability</h6>
                                        <p class="disc">Advising on applicability of taxes on various transactions being
                                            undertaken and envisaged by the business.

                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/10.svg" alt="" class="cloud-icon-book icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Advising on issues</h6>
                                        <p class="disc">Advising on issues related to classification, valuation, place of
                                            supply, admissibility of tax benefits and exemptions.</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/11.svg" alt="" class="cloud-icon-book icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Undertaking</h6>
                                        <p class="disc">Undertaking a comprehensive review of the business operations to
                                            identify tax optimization opportunities and compliance gaps.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-com icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Opinions</h6>
                                        <p class="disc">
                                            Opinions on regular and technical tax issues faced by businesses.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->

                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-rew icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Conducting detailed</h6>
                                        <p class="disc">
                                            Conducting detailed indirect tax due diligence.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single service details card End -->


                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-bus icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Review of each business</h6>
                                        <p class="disc">
                                            Review of each business process and systems and prepare detailed SOP.</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="frontend/images/service/icon/12.svg" alt="" class="cloud-icon-book-260 icon w-140">
                                    </div>
                                    <div class="details">
                                        <h6 class="title"> Review of existing GST</h6>
                                        <p class="disc">
                                            Review of existing GST infrastructure and revalidate the correctness of stand
                                            taken by the business with respect to GST implication on various transactions.
                                        </p>
                                    </div>
                                </div>
                                <!-- single servic e details card End -->
                            </div>



                        </div>
                    </div>

                </div>


                <div class="container ">


                    <div class="row">

                        <div class=" col-md-12 col-sm-12 col-12">
                            <!-- service details left area start -->
                            <div class="service-detials-step-1">
                                {{-- <div class="thumbnail">
                                <img src="frontend/images/service/01.jpg" alt="business-area">
                            </div> --}}
                                <h4 class="title mt-3 text-cream text-md-start text-center">Compliance assistance (Retainership) and Outsourcing

                                </h4>



                                <div class="row g-5 mt--20 mb--40">
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/09.svg" alt=""
                                                    class="icon ">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Assistance In Periodic</h6>
                                                <p class="disc">Assistance in periodic computation of tax liabilities and
                                                    eligible Input Tax credits.


                                                </p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/10.svg" alt=""
                                                    class="icon">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Managing all GST</h6>
                                                <p class="disc">Managing all GST compliances on PAN-US basis.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/11.svg" alt=""
                                                    class="icon">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Assistance in preparing</h6>
                                                <p class="disc">Assistance in preparing and filing periodic return(s) and
                                                    refund claims.</p>
                                            </div>
                                        </div>
                                        <!-- single service details card End -->
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card p-x-0">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/12.svg" alt=""
                                                    class="icon cloud-icon-book-200">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Assistance in obtaining</h6>
                                                <p class="disc">Assistance in obtaining/amending Indirect Tax
                                                    registrations, as may be required.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->

                                    <div class="col-md-6 col-xl-4">
                                        <!-- single service details card -->
                                        <div class="service-details-card">
                                            <div class="thumbnail">
                                                <img src="frontend/images/service/icon/12.svg" alt=""
                                                    class="icon w-140 cloud-icon-book-250">
                                            </div>
                                            <div class="details">
                                                <h6 class="title">Extensive control</h6>
                                                <p class="disc">Extensive control checks ensuring accuracy and
                                                    completeness of data and exhaustive validation checks for return
                                                    finalization.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single service details card End -->




                                </div>
                            </div>

                        </div>



                        <div class="container ">


                            <div class="row">

                                <div class=" col-md-12 col-sm-12 col-12">
                                    <!-- service details left area start -->
                                    <div class="service-detials-step-1">
                                        {{-- <div class="thumbnail">
                                            <img src="frontend/images/service/01.jpg" alt="business-area">
                                        </div> --}}
                                        <h4 class="title mt-3 text-cream text-md-start text-center">Litigation assistance

                                        </h4>



                                        <div class="row g-5 mt--20 mb--40">
                                            <div class="col-md-6 col-xl-4">
                                                <!-- single service details card -->
                                                <div class="service-details-card">
                                                    <div class="thumbnail">
                                                        <img src="frontend/images/service/icon/09.svg" alt=""
                                                            class="icon w-140 cloud-icon-book-260">
                                                    </div>
                                                    <div class="details">
                                                        <h6 class="title">Assistance in drafting </h6>
                                                        <p class="disc">Assistance in drafting replies to notices,
                                                            enquiries and other such communications received from revenue/
                                                            assessing authorities.</p>
                                                    </div>
                                                </div>
                                                <!-- single service details card End -->
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <!-- single service details card -->
                                                <div class="service-details-card">
                                                    <div class="thumbnail">
                                                        <img src="frontend/images/service/icon/10.svg" alt=""
                                                            class="icon w-140 cloud-icon-book-260">
                                                    </div>
                                                    <div class="details">
                                                        <h6 class="title">Representing Matters</h6>
                                                        <p class="disc">Representing matters before the appropriate
                                                            authorities including tribunals and engaging an external legal
                                                            counsel, if required.</p>
                                                    </div>
                                                </div>
                                                <!-- single service details card End -->
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <!-- single service details card -->
                                                <div class="service-details-card">
                                                    <div class="thumbnail">
                                                        <img src="frontend/images/service/icon/11.svg" alt=""
                                                            class="icon w-140 cloud-icon-book-260">
                                                    </div>
                                                    <div class="details">
                                                        <h6 class="title">Filing Advance</h6>
                                                        <p class="disc">Filing advance ruling application with the
                                                            authorities to seek clarification on ambiguous matters.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- single service details card End -->
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="container ">


                                    <div class="row">

                                        <div class=" col-md-12 col-sm-12 col-12">
                                            <!-- service details left area start -->
                                            <div class="service-detials-step-1">
                                                {{-- <div class="thumbnail">
                                                        <img src="frontend/images/service/01.jpg" alt="business-area">
                                                    </div> --}}
                                                <h4 class="title mt-3 text-cream text-md-start text-center">Audit

                                                </h4>



                                                <div class="row g-5 mt--20 mb--40">
                                                    <div class="col-md-6 col-xl-4">
                                                        <!-- single service details card -->
                                                        <div class="service-details-card">
                                                            <div class="thumbnail">
                                                                <img src="frontend/images/service/icon/09.svg"
                                                                    alt="" class="icon w-140 custom-icon-rew">
                                                            </div>
                                                            <div class="details">
                                                                <h6 class="title">Review of data</h6>
                                                                <p class="disc">Review of data collated and
                                                                    reconciliations prepared.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- single service details card End -->
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                        <!-- single service details card -->
                                                        <div class="service-details-card">
                                                            <div class="thumbnail">
                                                                <img src="frontend/images/service/icon/10.svg"
                                                                    alt="" class="icon w-140">
                                                            </div>
                                                            <div class="details">
                                                                <h6 class="title">Assistance in preparation</h6>
                                                                <p class="disc">Assistance in preparation and filling of
                                                                    GST annual returns and audit report.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- single service details card End -->
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                        <!-- single service details card -->
                                                        <div class="service-details-card">
                                                            <div class="thumbnail">
                                                                <img src="frontend/images/service/icon/11.svg"
                                                                    alt="" class="icon w-140 cloud-icon-book-260">
                                                            </div>
                                                            <div class="details">
                                                                <h6 class="title">Guidance</h6>
                                                                <p class="disc">Guidance in the collation of documents
                                                                    and information required to file an annual return and
                                                                    audit report.
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

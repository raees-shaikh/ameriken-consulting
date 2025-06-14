@extends('frontend.layouts.app')
@section('title', 'Our Clients -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image clients">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Our Clients</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a  class="active">Our Clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->
    <section>

        <!-- rts pricing area start -->
        <div class="rts-pricing-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-three-title-area">
                            <div class="title-area">
                                {{-- <span class="sub">Our</span>
                            <h2 class="title">Clients</h2> --}}
                            </div>
                            <div class="pricing-tab-button-area pb-5 pt-3 mx-auto">
                                <ul class="nav nav-tabs p-2 pt-1" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Clients</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">View More</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row g-5">
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                                        <div class="pricing-wrapper-one h-100 h-100">
                                            {{-- <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$160</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4
                                                    class="title text-primary client-title text-primary text-md-start text-center">
                                                    Outsourcing US Based Business Companies
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">3090 Mcdonald Ave. LLC</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Siokis Brothers Inc.</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Bhagwan Inc.</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing ">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Clermont Community Pharmacy Inc.</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Shree Foods Inc.</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Shreeji Sales Inc.</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Aarav Enterprise LLC</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Ora Bleu LLC</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Ample LLC</span>
                                                </div>
                                                <!-- single pricing End -->
                                                {{-- <a class="rts-btn btn-primary" href="#">Buy This</a> --}}
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 mt-for-client-card mt_sm--80">
                                        <div class="pricing-wrapper-one h-100">
                                            {{-- <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$180</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4 class="title text-primary client-title text-md-start text-center ">
                                                    Manufacturing
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Flameproof Equipments Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Mutual Industries Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Sovereign Diamonds Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing ">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Power and Control</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Electrocare Industries</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Labdhi Electrocare Ltd</span>
                                                </div>
                                                <!-- single pricing End -->



                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">
                                                        Shreeji Engineering Works
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">
                                                        Aland Engineering Works</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">
                                                        Neel Fashion
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">
                                                        Shahfibrottech
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Shreeji Engineering Enterprises</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Classic Fastening Systems Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->


                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details"> Maharashtra Control Panels Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                {{-- <a class="rts-btn btn-primary" href="#">Buy This</a> --}}
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 mt_md--80 mt-for-client-card mt_sm--80">
                                        <div class="pricing-wrapper-one h-100">
                                            {{-- <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$260</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4 class="title text-primary client-title text-md-start text-center">
                                                    Trading Co
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Parekh Engimech</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Sara Exports</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Scan Décor</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing ">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Scan Enterprises</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Unqiue Décor</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Atul Industrial Services</span>
                                                </div>
                                                <!-- single pricing End -->


                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Essel Trading Corporation</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Shreyansth Corporation</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Shree Randal Infra Projects</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Aceinfraline</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Ace Infraline Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Sadanaand Fire Systems</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Vivek Industrial Corporation</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">P Vrajlal & Co</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Gaga Fabrics</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Risha International</span>
                                                </div>
                                                <!-- single pricing End -->


                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Chaitanya Enterprises
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Gandhi Co</span>
                                                </div>
                                                <!-- single pricing End -->

                                                {{-- <a class="rts-btn btn-primary" href="#">Buy This</a> --}}
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-5">
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6">
                                        <div class="pricing-wrapper-one h-100">
                                            {{-- <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$1800</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4 class="title text-primary client-title text-md-start text-center">
                                                    Services
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">BDO US LLP</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">SC Finance Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">SP Finance Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing ">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Dena Bank</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">WWT US Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->


                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Virtus IT US Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Flolive , Uk</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Jarr Digital LLP</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Vishal Hospitality Mangement</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details"> Mathew International Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Mathew Tours & Travels Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Carlton Builders & Engineers Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Best US Properties Pvt Ltd
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Industrial Security Force
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->

                                                <!-- single pricing -->
                                                <div class="single-pricing">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">HCS Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->

                                                {{-- <a class="rts-btn btn-primary-3" href="#">Buy This</a> --}}
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6">
                                        <div class="pricing-wrapper-one h-100">
                                            {{-- <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2000</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4 class="title text-primary client-title text-md-start text-center">
                                                    Logistics
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Decent Cargo Movers Pvt Ltd</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Pawar Roadways</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Supreme Transline</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing ">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Pawar Corporation</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->

                                            </div>
                                            <!-- pricing body end -->


                                            <!-- pricing header -->
                                            <div class="pricing-header-start mt-5">

                                                <h4
                                                    class=" text-primary text-md-start text-center title client-title mb-3">
                                                    Healthcare
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Nivaran Diagnostic Center Pvt Ltd
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Arjan Imaging LLP
                                                    </span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Nivaran LLP</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->

                                                <!-- single pricing -->

                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                    <!-- single pricing plane -->
                                    <div class="col-xl-4 col-md-6">
                                        <div class="pricing-wrapper-one h-100">
                                            {{-- <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2300</h3>
                                        </div> --}}
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4 class="title text-primary client-title text-md-start text-center">
                                                    Government
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">USn Navy Officer WNC (O) Colaba</span>
                                                </div>
                                                <!-- single pricing End -->


                                            </div>
                                            <!-- pricing body end -->


                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4
                                                    class="title text-primary client-title mt-5 mb-3 text-md-start text-center">
                                                    Chartiable Trust & School
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">Lions club Of Ghatkopar ( Medical
                                                        Center)</span>
                                                </div>
                                                <!-- single pricing End -->
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">
                                                        St Francis International School</span>
                                                </div>
                                                <!-- single pricing End -->


                                            </div>
                                            <!-- pricing body end -->



                                            <!-- pricing header -->
                                            <div class="pricing-header-start">

                                                <h4
                                                    class="title text-primary client-title mt-5 mb-3 text-md-start text-center">
                                                    Media & Entertainment
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->
                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <!-- single pricing -->
                                                <div class="single-pricing available">
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <span class="price-details">108 Production Inc.</span>
                                                </div>
                                                <!-- single pricing End -->



                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>
                                    <!-- single pricing plane -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts pricing area end -->


    </section>
@endsection

@extends('frontend.layouts.app')
@section('title', 'Diversity, Equity & Inclusion -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image diversity">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Diversity, Equity & Inclusion</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="javascript:void(0)">About</a>
                        <span> / </span>
                        <a  class="active">Diversity, Equity & Inclusion</a>
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
                    <div class="col-lg-6 text-xl-center pb-4">
                        <div class="thumbnail">
                            <img src="{{ url('frontend/images/about/main/diversity.jpeg') }}" alt="about_image"
                                class="w-600 img-border-t">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-start home-seven-about">

                            {{-- <h3 class="title text-cream mt-lg-0 mt-5">CRM and ERP Consulting</h3> --}}
                        </div>
                        <div class="inner-about-home-7">
                            <p class="disc mb-0 px-1">
                                We recruit and support workers of various backgrounds and encompass policies and initiatives
                                designed to help all employees feel welcome and contribute freely to the company.
                            </p>

                            <p class="disc mb-0 px-1">
                                We believe in Business Karma (Generosity, Fairness, Positivity & Mindfullness) and have
                                created an organization that helps promote education and providing opportunities to those
                                who are less fortunate from around the world.
                            </p>

                            <p class="disc px-1">
                                Our employees and Company support various causes around the world such as Clean Water
                                Projects, Disaster Relief, Environmental, Economic Development, Education, Hunger, Social
                                Justice, Women & Girls Programs, Wildlife Conservation and several other programs that our
                                employee are passionate about.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->

    </section>
@endsection

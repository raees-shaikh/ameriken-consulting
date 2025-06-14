@extends('frontend.layouts.app')
@section('title', 'Contact Us -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Contact Us</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="javascript:void(0)">About</a>
                        <span> / </span>
                        <a  class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <section>
        <!-- conact us form fluid start -->
        <div class="rts-contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rts-contact-fluid pb-5 pt-5 mt-4">
                            <div class=" text-center mb--30">
                                <p class="mb-0 pb-0 pre-titlem text-cream text-capitalize">
                                    Contact Us
                                </p>
                                <h2 class="mt-0 pt-0 title contact-us-title">Needs Help? Let’s Get in Touch</h2>
                            </div>
                            <div class="form-wrapper pb-4">
                                <div id="form-messages"></div>
                                <form id="contact-form" action="{{ route('frontend.contact.submit') }}" method="post">
                                    @csrf
                                    <div class="name-email d-block">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="w-100 " name="name" minlength="3"
                                                    maxlength="30" placeholder="Full Name" value="{{ old('name') }}"
                                                    required>
                                                {{-- <p class="text-danger d-block error-msg px-2">Error</p> --}}
                                                @if ($errors->has('name'))
                                                    <div class="text-danger" role="alert">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif

                                            </div>
                                            <div class="col-lg-6">

                                                <input type="text" class="w-100 " name="company_name" minlength="3"
                                                    maxlength="120" placeholder="Company Name"
                                                    value="{{ old('company_name') }}" required>
                                                {{-- <p class="text-danger d-block error-msg px-2">Error</p> --}}
                                                @if ($errors->has('company_name'))
                                                    <div class="text-danger" role="alert">
                                                        {{ $errors->first('company_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-email d-block">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="w-100" name="phone" minlength="10"
                                                    maxlength="10" placeholder="Phone" value="{{ old('Phone') }}" required>
                                                {{-- <p class="text-danger d-block error-msg px-2">Error</p> --}}
                                                @if ($errors->has('phone'))
                                                    <div class="text-danger" role="alert">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                @endif

                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" class="w-100" name="email" minlength="5"
                                                    maxlength="40" placeholder="E-Mail" value="{{ old('email') }}"
                                                    required>
                                                {{-- <p class="text-danger d-block error-msg px-2">Error</p> --}}
                                                @if ($errors->has('email'))
                                                    <div class="text-danger" role="alert">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <textarea placeholder="Type Your Message" name="message" minlength="5" maxlength="250" required>{{ old('message') }}</textarea>
                                    {{-- <p class="text-danger d-block  p-2">Error</p> --}}
                                    @if ($errors->has('message'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('message') }}
                                        </div>
                                    @endif
                                    <button type="submit" class="rts-btn banner-btn mt-5">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- conact us form fluid end -->


        <!-- contact single area start -->
        <div class="rts-contact-area rts-section-gap pb-md-5 pb-1  pt-contact-sec">
            <div class="container">
                <div class="row g-5">
                    <!-- single contact area -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="single-contact-one-inner ">
                            <div class="thumbnail">
                                <img src="frontend/images/contact/ind-2.png" alt="">
                            </div>
                            <div class="content w-auto m-0 pb-xl-50">
                                <div class="icone">
                                    <img src="frontend/images/contact/shape/telephone-60.png" alt="">
                                </div>
                                <div class="info px-0 contact">
                                    <span class="text-cream">Call Us 24/7</span>
                                    <a href="tel:+18475555555">
                                        <h5 class="m-0 p-0 contact-details-text"><a
                                                href="tel:+18136003510">+1 (813)-600-3510</a></h5>
                                        <h5 class="m-0 p-0 contact-details-text"> <a
                                                href="tel:+18135147187">+1 (813)-514-7187</a></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                    <!-- single contact area -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="single-contact-one-inner">
                            <div class="thumbnail">
                                <img src="frontend/images/contact/02.png" alt="">
                            </div>
                            <div class="content w-auto pb-xl-70 m-0 pb-for-991-767">
                                <div class="icone">
                                    <img src="frontend/images/contact/shape/email-60.png" alt="">
                                </div>
                                <div class="info">
                                    <span class="text-cream d-block mb-0">E-Mail Address</span>

                                        <a href="mailto:info@amerikenconsulting.com" class="h5 contact-details-text email text-lowercase">info@amerikenconsulting.com</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                    <!-- single contact area -->
                    <div class="col-xl-4 col-lg-6 col-md-6  col-12">
                        <div class="single-contact-one-inner">
                            <div class="thumbnail">
                                <img src="frontend/images/contact/03.png" alt="">
                            </div>
                            <div class="content w-auto m-0 pb-location align-items-start">
                                <div class="icone">
                                    <img src="frontend/images/contact/shape/office-60.png" alt=""
                                        style="max-width:none">
                                </div>
                                <div class="info ">
                                    <span class="text-cream">Our Locations</span>

                                    <h5 class="m-0 p-0 contact-details-text">Tampa, Florida & Atlanta, Georgia, Mumbai, India, Nairobi, & Kenya</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                </div>
            </div>
        </div>
        <!-- conact single area end -->

        <!-- bizup map area start -->
        <div class="rts-contact-map-area pb-5 ">
            <div class="contaciner-fluid pb-md-5">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-map-area-fluid">
                            <div class="RemoveTop">
                                <iframe id="newiframe"
                                    src="https://www.google.com/maps/d/embed?mid=1gm-VBsiIZVmsUhNeNAANjfVK13ESfu4&ehbc=2E312F"
                                    width="640" height="480"></iframe>
                                {{-- <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                            {{-- <img class="location" src="frontend/images/contact/shape/location.svg" alt="Business_map"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bizup map area end -->





    </section>
@endsection

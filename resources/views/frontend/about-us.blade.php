@extends('frontend.layouts.app')
@section('title', 'Who We Are -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6  col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-lg-start text-center">Who We Are</h1>
                </div>
                <div class=" col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="javascript:void(0)">About</a>
                        <span> / </span>
                        <a  class="active">Who We Are</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap pt-5 mt-4 pb-sm-5 pb-0">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 mt-0 mt-lg-5">
                    <div class="about-image-v-inner">
                        <div class="image-area pt-4 d-block">
                            <img class=" img-1 about-img-size w-100" src="frontend/images/about/about-us.png"
                                alt="BUsiness_image">
                            {{-- <img class=" img-1 about-img-size d-lg-none d-block" src="frontend/images/about/about-us-2.png"
                                alt="BUsiness_image">
                            <img class="img-over d-lg-none d-block" src="frontend/images/about/main/about-04.jpg"
                                alt="BUsiness_image"> --}}
                            <div class="goal-button-wrapper">

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7  mt-lg-5 pt-lg-0 pt-2 px-lg-2 px-md-5 px-4">
                    <div class="about-progress-inner ">
                        <div class="title-area text-md-start text-center">
                            {{-- <span class="text-cream">Something About Us</span> --}}
                            <h2 class="title">Well Organized.
                                Trusted By Thousands. </h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc mb-3">
                                {{-- AmeriKen Consulting is a Certified Public Accountant firm providing
                                Accounting, Assurance, Advisory & Tax Services. AmeriKen Consulting has established itself
                                as a reputable and dependable firm with over 50 year of combined experience, working with
                                companies and individuals globally. --}}
                                AmeriKen Consulting is a Certified Public Accountant firm providing Accounting, Assurance,
                                Advisory & Tax Services. AmeriKen Consulting has established itself as a reputable and
                                dependable firm with over 50 years of experience, working with companies and individuals
                                globally.
                            </p>
                            {{-- <p class="disc mb-3">Ameriken Consulting has established itself as a reputable and dependable
                                financial associate, working with companies and corporations from diverse sectors including,
                                - Logistics, Investment Banking, Banking & NBFC, Real Estate, Healthcare, Hospitality, Media
                                & Entertainment, Manufacturing, & Trading, Information Technology, and Other Services.</p>
                            <p class="disc mb-3">A registered member of the Institute of US, Ameriken Consulting comprises
                                highly qualified accountants and financial analysts With over 4 Decade of cumulative work
                                experience, We at Ameriken Consulting strive to deliver sincere, secure and smart assistance
                                with personalized attention devoted to untangling the complexities of the financial
                                landscape so you, the client, can focus on the core competencies of your business.</p> --}}
                            <div class="row ">
                                <div class="col-sm-6 px-md-2 px-sm-0">
                                    <div class="check-area">
                                        <img src="{{ url('/frontend/images/icon/time.png') }}" alt=""
                                            class="icon-size">
                                        <p class="disc d-inline px-1 ">
                                            Ontime Everytime
                                            At Service
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6  mt-sm-0 mt-4">
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
                            {{-- <a href="#" class="rts-btn btn-primary">Make an Appointment</a> --}}
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts about us section end -->
    {{--
    <div class="container mt-xl-4 mt-for-sm-size">
        <h2 class="text-capitalize title text-center py-4">Some Of Our Clients</h2>

        <section class="customer-logos slider">
            <div class="slide"><img src="frontend/images/client/bdo.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/shapoorji.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/dena-bank.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/i-navy.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/saint.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/wwt.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/mutual.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/r.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/nivaran.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/virtus.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/flo.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/sover-new.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/elect.jpg" alt="Business_client"></div>

            <div class="slide"><img src="frontend/images/client/production.jpg" alt="Business_client"></div>
        </section>
    </div> --}}
    {{-- <div class="container">
        <div class="row justify-content-center mb-5">
            <h2 class="text-capitalize title text-center py-4 text-black"><span class="text-gold">Founders</span></h2>
            <div class="col-lg-4 col-md-6 p-lg-4">
                <div class="card pb-4">
                    <img src="{{ asset('frontend/images/team/1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jitendra Swaly </h5>
                        <p class="card-text mb-4">CPA Swaly Jitendra Trikamdas
                            has kept a full diary in his
                            mind that just about dates
                            back to the date of his birth
                            in India in 1945.</p>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mt-md-0 mt-5 p-lg-4">
                <div class="card pb-4">
                    <img src="{{ asset('frontend/images/team/2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dinesh Vadivalla</h5>
                        <p class="card-text mb-4">D H Vadivalla & Co. is a Chartered Accountant firm providing Audit, Tax,
                            Advisory and assurance services to businesses.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center mb-5">
            <h2 class="text-capitalize title text-center py-4 text-black mb-2">Partners/Senior<span class="text-gold">
                    Members</span></h2>
            <div class="col-lg-4 col-md-6 p-lg-4">
                <div class="card pb-4 radius-0">
                    <img src="{{ asset('frontend/images/team/3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Devanshu Swaly </h5>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mt-md-0 mt-5 p-lg-4">
                <div class="card pb-4 radius-0">
                    <img src="{{ asset('frontend/images/team/4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vivek Vadivalla</h5>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    {{-- <div class="container mt-xl-4 mt-for-sm-size pb-5">
        <h2 class="text-capitalize title text-center py-4 text-black"> Managers <span class="text-gold">And</span> Staff
        </h2>

        <section class="customer-logos slider ">
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/1.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Jitendra Swaly</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/2.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Dinesh Vadivalla</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/3.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Devanshu Swaly</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/4.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Vivek Vadivalla</p>
            </div>


            <div class="slide text-center"><img src="{{ asset('frontend/images/team/1.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Jitendra Swaly</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/2.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Dinesh Vadivalla</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/3.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Devanshu Swaly</p>
            </div>
            <div class="slide text-center"><img src="{{ asset('frontend/images/team/4.png') }}" alt="Business_client"
                    class="mx-auto w-100">
                <p class="pt-sm-3 pt-2">Vivek Vadivalla</p>
            </div>


        </section>
    </div> --}}


    <section>
   <div class="container">
    <div class="row mt-5 justify-content-center">
        <h2 class="text-capitalize title text-center mt-5 text-black"> Article
        </h2>
        <div class="col-lg-6 col-md-8 ">
            <div class="card-wrapper">
                <div class="card-top">
                  <img class="image" src="{{asset('frontend/images/team/jitendra.png')}}" >
                </div>
                <div class="card-bottom">
                  <span class="top-text text-center">Swaly Jitendra Trikamdas</span><br>
                 <span class="bottom-text  text-center">Founder</span>
                  <br>
                  <a class="button mx-auto  text-center" href="{{ asset('ICPAK-JTS.pdf') }}" target="_blank">View Article</a>
                </div>
              </div>
        </div>
    </div>
   </div>
    </section>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>



    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                prevArrow: '<svg class="pre" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40C8.9543 40 -2.7141e-06 31.0457 -1.74846e-06 20C-7.8281e-07 8.9543 8.95431 -2.7141e-06 20 -1.74846e-06C31.0457 -7.8281e-07 40 8.9543 40 20C40 31.0457 31.0457 40 20 40ZM16.1206 13.5198C15.7554 13.1055 15.1632 13.1055 14.798 13.5198L9.58704 19.4308C9.22182 19.8451 9.22182 20.5168 9.58704 20.931L14.798 26.8421C15.1632 27.2563 15.7554 27.2563 16.1206 26.8421C16.4858 26.4278 16.4858 25.7561 16.1206 25.3418L12.4912 21.2248L29.6865 21.2248C30.2388 21.2248 30.6865 20.7771 30.6865 20.2248C30.6865 19.6725 30.2388 19.2248 29.6865 19.2248L12.4138 19.2248L16.1206 15.02C16.4858 14.6057 16.4858 13.934 16.1206 13.5198Z" fill="#7C8B9C"/></svg>',
                nextArrow: '<svg class="nxt" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3.49691e-06C31.0457 5.4282e-06 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 1.56562e-06 31.0457 3.49691e-06 20C5.4282e-06 8.95431 8.95431 1.56562e-06 20 3.49691e-06ZM23.8794 26.4802C24.2446 26.8945 24.8368 26.8945 25.202 26.4802L30.413 20.5692C30.7782 20.1549 30.7782 19.4833 30.413 19.069L25.202 13.1579C24.8368 12.7437 24.2446 12.7437 23.8794 13.1579C23.5142 13.5722 23.5142 14.2439 23.8794 14.6582L27.5088 18.7752L10.3135 18.7752C9.7612 18.7752 9.31348 19.2229 9.31348 19.7752C9.31348 20.3275 9.76119 20.7752 10.3135 20.7752L27.5862 20.7752L23.8794 24.98C23.5142 25.3943 23.5142 26.066 23.8794 26.4802Z" fill="#7C8B9C"/></svg>',

                responsive: [{
                        breakpoint: 1116,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>
@endsection

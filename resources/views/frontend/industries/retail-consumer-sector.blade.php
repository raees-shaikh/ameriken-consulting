@extends('frontend.layouts.app')
@section('title', 'Retail & Consumer Sector -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image consumer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Retail & Consumer Sector</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Retail & Consumer Sector</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->
<section>
      <!-- start service area -->
      <div class="rts-service-areah2-im-3 rts-section-gap pt-5 mt-5 pb-0">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-xl-5 mobile-size">
                    <div class="image-area">
                        <img src="frontend/images/service/h2/box.png" alt="Service_Image">
                        <img class="two" src="frontend/images/service/h2/retail.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/retail-2.png" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">Ameriken</h3>
                            <span>Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 px-5 mt-0 pt-xl-5">
                    <div class="service-h2-content pt-xl-5">
                        <div class="title-area  service-h2 service">
                            {{-- <span>Why Choose Us</span> --}}
                            <h2 class="title text-md-start text-center">Retail & Consumer Sector </h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc mb-3">
                                Ameriken Consulting, our professionals know how to successfully predict these unforeseen changes, while enabling you to overcome challenges such as demanding competition and increasing technological change.
                            </p>
                            <p class="disc mb-3">We formulate ways to take advantage of the opportunities that these challenges present while avoiding potential pitfalls. Whether it’s organizing systems, obtaining financing, minimizing taxes or staying compliant with accounting requirements.</p>

                            <p>Ameriken Consulting team have worked closely with a range of retail establishments, restaurants, hotels, food wholesalers, franchise operators, dealership and automotive manufacturers.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->

</section>

@endsection

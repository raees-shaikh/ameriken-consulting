@extends('frontend.layouts.app')
@section('title', 'Media & Entertainment -')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image media">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Media & Entertainment</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>

                        <a href="{{url('/#indust')}}">Industries</a>
                        <span> / </span>
                        <a  class="active">Media & Entertainment</a>
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
                    <div class="image-area ">
                        <img src="frontend/images/service/h2/box.png" alt="Service_Image">
                        <img class="two" src="frontend/images/service/h2/media.png" alt="Service_Image">
                        <img class="three" src="frontend/images/service/h2/01.jpg" alt="Service_Image">
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
                            <h2 class="title text-md-start text-center">Media & Entertainment</h2>
                        </div>
                        <div class="content-wrapper">
                          <p class="disc">We are leading specialists for every accounting need of the media and entertainment industry. We understand and appreciate the very special nature of the industry. Whatever your role in the media and entertainment industry we believe our expertise, compassion and understanding from working in the sector ensures we are best placed to look after your financial affairs. We are well proficient in the accountancy needs and tax issues affecting TV production companies, film production companies and commercial production companies.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->
</section>
@endsection

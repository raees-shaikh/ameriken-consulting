@extends('frontend.layouts.app')
@section('title', 'Affiliate Offices -')
@section('content')


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image office">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title display-2 text-md-start text-center">Affiliate Offices</h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Home</a>
                        <span> / </span>
                        <a href="javascript:void(0)">About</a>
                        <span> / </span>
                        <a  class="active">Affiliate Offices</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="container mt-xl-4 mt-for-sm-size pb-5">
        <h2 class="text-capitalize title text-center py-4 text-black"> Our <span class="text-gold">Affiliate</span> Offices
        </h2>

        <div class=" row justify-content-center ">
            <div class="col-md-3 col-6">

                <div class=" office-card"><a href="https://vadivalla.com/" target="_blank"><img
                            src="{{ asset('frontend/images/office/vadivalla.png') }}" alt="Business_client"
                            class="mx-auto w-100"></a>
                </div>
            </div>

            <div class="col-md-3 col-6">

                <div class=" office-card"><a href="https://www.5eadvisory.com/" target="_blank"><img
                            src="{{ asset('frontend/images/office/ef.png') }}" alt="Business_client"
                            class="mx-auto w-100"></a>
                </div>
            </div>
        </div>
    </div>

@endsection

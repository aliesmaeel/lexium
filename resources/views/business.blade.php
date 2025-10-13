@extends('layouts.master')

@section('meta_title', 'Business Setup in Dubai | Free Zone, Mainland & Offshore')
@section('meta_description', 'Set up your company in Dubai with Lexium Business Hub. Mainland, free zone, and offshore company formation with expert guidance and fast licensing.')
@section('meta_keywords', 'business setup in Dubai, company formation UAE, free zone company Dubai, Dubai mainland license, offshore company UAE')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page business_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Business Setup in Dubai</div>

        </div>
        <div class="content">
            <div class="text_desc">
                <div class="title" data-aos="fade-left">
                    Business Setup in Dubai Made Simple.
                </div>
                <div class="desc">
                    Dubai is one of the world’s fastest-growing business hubs,
                     attracting entrepreneurs, investors, and global corporations.
                      Whether you are launching a startup or relocating an established company,
                       Lexium Business Hub provides end-to-end
                    support to make your business setup seamless, compliant, and cost-effective.
                </div>
            </div>
            <div class="content_business">
                <div class="grid_container">
                    <div class="col" data-aos="fade-up">
                        <div class="flex_col">
                            <div class=" icon">
                                <img src="/images/company.png">
                            </div>
                            <div class="title">
                                Mainland Company Formation
                            </div>
                            <div class="desc">
                                Enjoy access to Dubai’s local market with 100% foreign ownership under new laws.
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="/images/b1.webp"/>
                        </div>

                    </div>
                    <div class="col" data-aos="fade-up">

                        <div class="flex_col">
                            <div class=" icon">
                                <img src="/images/free_zone.png">
                            </div>
                            <div class="title">
                                Free Zone Company Formation
                            </div>
                            <div class="desc">
                                Benefit from zero taxes, full profit repatriation, and fast licensing in over 40 free zones.
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="/images/b2.webp"/>
                        </div>

                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="flex_col">
                            <div class=" icon">
                                <img src="/images/offshore.png">
                            </div>
                            <div class="title">
                                Offshore Company Formation
                            </div>
                            <div class="desc">
                                Protect assets, optimize taxation, and expand globally with offshore structures.
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="/images/b3.webp"/>
                        </div>

                    </div>
                </div>
                <div class="button" >
                    <a class="btn_link" href="/cost_calculator">
                        Cost Calculator
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

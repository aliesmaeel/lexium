@extends('layouts.master')

@section('meta_title', 'Corporate Services in Dubai | PRO, Document Clearing & More')
@section('meta_description', 'From PRO services to document clearing and license renewals, Lexium Business Hub provides complete corporate support for Dubai businesses.')
@section('meta_keywords', 'PRO services Dubai, corporate services UAE, document clearing Dubai, business support UAE')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page business_page services_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Corporate Services</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title" data-aos="fade-left"> 
                    Comprehensive Corporate Services for Dubai Businesses.
                </div>
                <div class="desc">
                    Beyond setup, we provide ongoing support, 
                    so your company remains compliant and operational.
                </div>
            </div>
            <div class="content_business">
                <div class="grid_container">
                    <div class="main_col">
                        <div class="col" data-aos="fade-up">
                            <div class="flex_col">
                                <div class=" icon">
                                    <img src="/images/id.png">
                                </div>
                                <div class="text">
                                    <div class="title">
                                    PRO Services 
                                    </div>
                                    <div class="desc">
                                        Visa renewals, labour cards, Emirates ID.
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col" data-aos="fade-up">
                            
                            <div class="flex_col">
                                <div class=" icon">
                                    <img src="/images/document.png">
                                </div>
                                <div class="text">
                                    <div class="title">
                                        Document Clearing 
                                    </div>
                                    <div class="desc">
                                        Legal translations, attestations, approvals.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up">
                            <div class="flex_col">
                                <div class=" icon">
                                    <img src="/images/support.png">
                                </div>
                                <div class="text">
                                    <div class="title">
                                        Business Support 
                                    </div>
                                    <div class="desc">
                                        License renewals, corporate structuring, admin support.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second_col" data-aos="fade-up">
                        <img src="/images/services_col.webp"/>
                    </div>
                </div>
                <div class="button">
                    <a class="btn_link">
                        Explore Corporate Services
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
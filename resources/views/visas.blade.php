@extends('layouts.master')

@section('meta_title', 'Golden Visa & Residency Services in Dubai | Lexium')
@section('meta_description', 'Apply for a UAE Golden Visa or residency in Dubai with Lexium Business Hub. Investor visas, family sponsorship, and employment visas made easy.')
@section('meta_keywords', 'Golden Visa Dubai, UAE residency visa, Dubai investor visa, long-term visa UAE')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page visas_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Visas & Residency</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title" data-aos="fade-left"> 
                    Secure Your Future in the UAE with Dubai Visas & Residency Solutions.
                </div>
                <div class="desc">
                    Lexium helps entrepreneurs, investors, and families obtain long-term residency in the UAE. 
                    From Golden Visa applications to employment and family visas, our experts handle the entire process.
                </div>
            </div>
            <div class="grid_container">
                <div class="col" data-aos="fade-up">
                    <div class="text_desc">
                        <ul>
                            <li>
                                <span>Golden Visa </span>– 10-year residency for investors, property buyers, entrepreneurs, and professionals.
                            </li>
                            <li>
                                <span>Investor & Family Visas</span>– Sponsor your loved ones with ease.
                            </li>
                            <li>
                                <span>Employment Visas</span> – Smooth onboarding for your team.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col img_container" data-aos="fade-up">
                    <img src="/images/imm.jpg"/>
                </div>
            </div>
           
            <div class="button">
                <a class="btn_link">
                    Apply for Golden Visa
                </a>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
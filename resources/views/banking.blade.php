@extends('layouts.master')

@section('meta_title', 'Open a Corporate Bank Account in Dubai | Lexium')
@section('meta_description', 'Simplify banking in Dubai. Lexium Business Hub helps you open corporate bank accounts, register VAT, and manage accounting & compliance.')
@section('meta_keywords', 'open corporate bank account UAE, Dubai business banking, VAT registration UAE, accounting services Dubai')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page banking_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Banking & Finance</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title" data-aos="fade-left"> 
                    Corporate Banking & Accounting Made Easy.
                </div>
                <div class="desc">
                    Opening a bank account in Dubai can be challenging. With Lexium, you gain direct access to our partner banks, ensuring smooth account opening. We also provide accounting, VAT registration,
                    and financial compliance services, so your business runs effortlessly.
                </div>
            </div>
            <div class="banking_container">
                <div class="grid_container">
                    <div class="col" data-aos="fade-up">
                        <div class="flex_col">
                            <img class="img_container" src="/images/building_b.png"/>
                            <div class="text">Corporate Bank Account Opening.</div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="flex_col">
                            <img class="img_container" src="/images/vat.png"/>
                            <div class="text">VAT & Tax Registration.</div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="flex_col">
                            <img class="img_container" src="/images/accounting.png"/>
                            <div class="text">Accounting & Bookkeeping.</div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="button">
                <a class="btn_link">
                    Open Your Business Bank Account
                </a>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
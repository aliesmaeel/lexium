@extends('layouts.master')

@section('title', 'About Lexium Business Hub | Dubai Company Formation Experts')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="about_page">
        <div class="banner_about">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title">About US</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title"> 
                    Your Boutique Partner in Dubai Business Setup.
                </div>
                <div class="desc">
                    Lexium Business Hub LLC is founded by experienced entrepreneurs who understand the challenges of starting and scaling businesses in Dubai. With transparency, trust, and deep expertise, we deliver tailored solutions that make your business journey smooth and successful. Unlike large one-size-fits-all agencies, we provide a boutique approach, ensuring every client receives dedicated guidance.
                </div>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
@extends('layouts.master')

@section('meta_title', 'Dubai Business Setup Guides & Free Tools | Lexium Blog')
@section('meta_description', 'Explore expert insights on Dubai business setup, Golden Visa, free zones, and banking. Free tools, guides, and resources from Lexium Business Hub.')
@section('meta_keywords', 'free zone company Dubai guide, how to start a business in Dubai, Dubai company setup cost, Dubai entrepreneur resources')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page blog_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Resources (Blog)</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title"> 
                    Guides, Insights & Tools to Build Your Business.
                </div>
                <div class="desc">
                    With a team of experienced professionals and a passion for innovation, we combine cutting-edge strategies
                </div>
            </div>
            <div class="content_business">
                
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
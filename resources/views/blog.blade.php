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
                <div class="title sft_font"> 
                    Guides, Insights & Tools to Build Your Business.
                </div>
                <div class="desc">
                    Explore expert guides, setup tips, and cost insights for entrepreneurs in Dubai’s free zones and beyond.
                </div>
            </div>
            <div class="content_business">
                <div class="grid_container_blogs">
                    <div class="col span_2">
                        <a class="single_blog" href="#">
                            <div class="img_container">
                                <img src="/images/blog.webp"/>
                            </div>
                            <div class="category">
                                Business Setup / By Lexium
                            </div>
                            <div class="title_blog_single">
                                Transforming Your Best Of Approach to Business
                            </div>
                            <div class="desc">
                                Learn the key differences between Dubai’s business zones and which one fits your goals.
                            </div>
                        </a>
                        <a class="single_blog" href="#">
                            <div class="img_container">
                                <img src="/images/blog.webp"/>
                            </div>
                            <div class="category">
                                Visas & Residency / By Lexium
                            </div>
                            <div class="title_blog_single">
                                The Complete Guide to Getting a UAE Golden Visa in 2025
                            </div>
                            <div class="desc">
                                Understand eligibility, application steps, and the benefits of Dubai’s Golden Visa.
                            </div>
                        </a>
                        <a class="single_blog" href="#">
                            <div class="img_container">
                                <img src="/images/blog.webp"/>
                            </div>
                            <div class="category">
                                Finance / By Lexium
                            </div>
                            <div class="title_blog_single">
                                How Much Does It Really Cost to Start a Business in Dubai?
                            </div>
                            <div class="desc">
                                Find out the real setup costs, hidden fees, and tips to save money on your business.
                            </div>
                        </a>
                        <a class="single_blog" href="#">
                            <div class="img_container">
                                <img src="/images/blog.webp" alt="Corporate Bank Account in Dubai">
                            </div>
                            <div class="category">
                                Banking & Finance / By Lexium
                            </div>
                            <div class="title_blog_single">
                                How to Open a Corporate Bank Account in Dubai: Step-by-Step
                            </div>
                            <div class="desc">
                                A complete guide to opening a UAE corporate bank account and choosing
                                 the best bank.
                            </div>
                        </a>

                        <a class="single_blog" href="#">
                            <div class="img_container">
                                <img src="/images/blog.webp" alt="VAT Registration Dubai">
                            </div>
                            <div class="category">
                                Banking & Finance / By Lexium
                            </div>
                            <div class="title_blog_single">
                                VAT Registration in Dubai: Requirements & Compliance in 2025
                            </div>
                            <div class="desc">
                                Everything you need to know about VAT registration and
                                 compliance for businesses in Dubai.
                            </div>
                        </a>
                       


                    </div>
                    <div class="col">
                        <div class="boxes">
                            <div class="box">
                                <div class="box_content">
                                    <div class="title">Categories </div>
                                    <a class="flex_row" href="#">
                                        <div>Corporate Services</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                    <a class="flex_row" href="#">
                                        <div>Visas & Residency</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                    <a class="flex_row" href="#">
                                        <div>Business Setup / Free Zones</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                    <a class="flex_row" href="#">
                                        <div>Banking & Finance</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                    <a class="flex_row" href="#">
                                        <div>Entrepreneurship & Lifestyle</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="recent_posts boxes">
                            <div class="box">
                                <div class="box_content">
                                    <div class="title">ٌRecent Posts </div>
                                    <a href="#">
                                        <img src="/images/blog.webp" class="latest_post_img"/>
                                        <div class="desc">
                                            <div class="flex">
                                                <img src="/images/clock.png"/>
                                                <span>15 Jan, 2023</span>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos sequi voluptas eius, maxime quod corrupti. Debitis harum alias nobis 
                                                ratione nam perferendis nemo doloremque velit maxime exercitationem, eaque quas architecto!
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="/images/blog.webp" class="latest_post_img"/>
                                        <div class="desc">
                                            <div class="flex">
                                                <img src="/images/clock.png"/>
                                                <span>15 Jan, 2023</span>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos sequi voluptas eius, maxime quod corrupti. Debitis harum alias nobis 
                                                ratione nam perferendis nemo doloremque velit maxime exercitationem, eaque quas architecto!
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="/images/blog.webp" class="latest_post_img"/>
                                        <div class="desc">
                                            <div class="flex">
                                                <img src="/images/clock.png"/>
                                                <span>15 Jan, 2023</span>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos sequi voluptas eius, maxime quod corrupti. Debitis harum alias nobis 
                                                ratione nam perferendis nemo doloremque velit maxime exercitationem, eaque quas architecto!
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
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
                        @foreach($blogs as $blog)
                            <a class="single_blog" href="/{{$blog->slug}}">
                                <div class="img_container">
                                    <img src="/images/blog.webp"/>
                                </div>
                                <div class="category">
                                    Business Setup / By {{ $blog->author }}
                                </div>
                                <div class="title_blog_single">
                                    {{ $blog->title }}
                                </div>
                                <div class="desc">
                                    {!!   Str::limit($blog->content, 150) !!}
                                </div>
                            </a>

                        @endforeach




                    </div>
                    <div class="col">
                        <div class="boxes">
                            <div class="box">
                                <div class="box_content">
                                    <div class="title">Categories </div>
                                    @foreach($blog_categories as $category)
                                    <a class="flex_row" href="#">
                                        <div>{{ $category->category }}</div>
                                        <img src="/images/arrow.png">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="recent_posts boxes">
                            <div class="box">
                                <div class="box_content">
                                    <div class="title">ٌRecent Posts </div>
                                    @foreach($recent_blogs as $blog)
                                        <a href="#">
                                            <img src="/images/blog.webp" class="latest_post_img"/>
                                            <div class="desc">
                                                <div class="flex">
                                                    <img src="/images/clock.png"/>
                                                    <span>{{\Carbon\Carbon::make($blog->updated_at)->diffForHumans()}}</span>
                                                </div>
                                                <div>
                                                    {{ $blog->title }}
                                                </div>
                                            </div>
                                        </a>

                                    @endforeach


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

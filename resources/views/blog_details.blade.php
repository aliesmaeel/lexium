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
    <div class="contact_page blog_page blog_details_page">
        <div class="banner_contact">
            {{-- <img src="/images/blog_details.webp">  --}}
        </div>
        <div class="content content_details">
            <div class="text_desc_details">
                <div class="title sft_font">
                    {{$blog->title}}
                </div>
            </div>
            <div class="content_business">
                <div class="flex_col blog_details_cont">
              {!! $blog->content !!}
                </div>
                </div>

                <div class="flex_col blog_details_cont">
                    <div class="title">FAQ Questions</div>
                    <div class="question_container">
                        <div class="faq">
                            <div class="faq-item active">
                              <button class="faq-question">
                                    <div>Can a free zone company do business in mainland Dubai?</div>
                                    <img src="/images/arrow-down.png" class="faq-icon rotate">
                              </button>
                              <div class="faq-answer">
                                <p>
                                    Only via a distributor or with a mainland branch license.
                                </p>
                              </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-question">
                                    <div>How long does company setup take?</div>
                                    <img src="/images/arrow-down.png" class="faq-icon">
                                </button>
                                <div class="faq-answer">
                                    <p>
                                        Mainland: 2–4 weeks. Free zone: 3–7 days. Offshore: 2–3 weeks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn_link m-auto">
                    Book a Free Consultation
                </a>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

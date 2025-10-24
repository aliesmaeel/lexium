@extends('layouts.master')

@section('meta_title', 'Dubai Business Setup by Industry | Lexium Business Hub')
@section('meta_description', 'Whether in real estate, trading, consulting, tech startups, or e-commerce, Lexium offers industry-specific Dubai business setup solutions.')
@section('meta_keywords', 'Dubai business setup for trading, setup company tech startup UAE, e-commerce license Dubai, consultancy license Dubai')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page business_page industries_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title"> Industries We Serve</div>
            
        </div>
        <div class="content"> 
            <div class="text_desc">
                <div class="title sft_font" data-aos="fade-left"> 
                    Trusted Across Industries in Dubai.
                </div>
                <div class="desc">
                    Whether you are in trading, technology, consulting, real estate, 
                    or e-commerce, Lexium provides tailored solutions to match your industry’s unique needs.
                </div>
            </div>
            <div class="content_business">
                <div class="grid_container">
                    <div class="col">
                        <div class="flex_row" data-aos="fade-up">
                            <div class="icon">
                                <img src="/images/real-estate.png"/>
                            </div>
                            <div class="text">
                                <div class="title">
                                    Real Estate
                                </div>
                                <div class="desc">
                                    Guiding investors and developers through Dubai’s 
                                    fast-growing property landscape with tailored business setup support.
                                </div>
                            </div>
                        </div>
                        <div class="flex_row" data-aos="fade-up">
                            <div class="icon">
                                <img src="/images/rocket.png"/>
                            </div>
                            <div class="text">
                                <div class="title">
                                    Technology Startups
                                </div>
                                <div class="desc">
                                    Empowering innovators to launch, scale, and secure 
                                    funding for tech ventures in the UAE’s thriving startup ecosystem.
                                </div>
                            </div>
                        </div>
                        <div class="flex_row" data-aos="fade-up">
                            <div class="icon">
                                <img src="/images/e-commerce.png"/>
                            </div>
                            <div class="text">
                                <div class="title">
                                    E-Commerce
                                </div>
                                <div class="desc">
                                    Helping brands establish a seamless online 
                                    presence with the right e-commerce license and strategic market entry.
                                </div>
                            </div>
                        </div>
                        <div class="flex_row" data-aos="fade-up">
                            <div class="icon">
                                <img src="/images/person.png"/>
                            </div>
                            <div class="text">
                                <div class="title">
                                    Professional Consulting
                                </div>
                                <div class="desc">
                                    Assisting consultants and advisory 
                                    firms with efficient licensing, compliance, and operational setup in Dubai.
                                </div>
                            </div>
                        </div>
                        <div class="flex_row" data-aos="fade-up">
                            <div class="icon">
                                <img src="/images/point.png"/>
                            </div>
                            <div class="text">
                                <div class="title">
                                    Trading & Import-Export
                                </div>
                                <div class="desc">
                                    Simplifying trade and logistics setup for
                                     companies dealing in international goods, imports, and exports across Dubai.
                                </div>
                            </div>
                        </div>
                       
                       
                        
                    </div>
                    <div class="img_container col" data-aos="fade-up">
                        <img src="/images/img_col.png"/>
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
@extends('layouts.master')

@section('meta_title', 'Contact Lexium Business Hub | Dubai Company Formation')
@section('meta_description', 'Get in touch with Lexium Business Hub. Book a free consultation for business setup, Golden Visa, and corporate services in Dubai.')
@section('meta_keywords', 'contact Lexium Business Hub, Dubai business setup consultation, start company UAE contact')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_page">
        <div class="banner_contact">
            {{-- <img src="/images/banner_about.jpg"> --}}
            <img src="/images/bg1.png" class="one"/>
            <img src="/images/bg2.png" class="two"/>
            <img src="/images/bg3.png" class="three"/>
            <div class="main_title">Contact US</div>

        </div>
        <div class="content">
            <div class="text_desc">
                <div class="title" data-aos="fade-left">
                    Start Your Dubai Business Journey Today.
                </div>
                <div class="form_contact_us">
                    <form class="form_contact">
                        <div class="grid_container">
                            <div class="col">
                                <div class="title_form" data-aos="fade-left">
                                    Get In Touch
                                </div>
                                <div class="grid_form" >
                                    <div class="flex_img" data-aos="fade-up" >
                                        <div class="flex_row" >
                                            <a class="call" href="#">
                                                <img src="/images/black_call.png"/>
                                                <div>
                                                    <div class="gray">Call Us 24/7</div>
                                                    <div>+971563148567</div>
                                                </div>
                                            </a>
                                            <a class="call" href="tel:+971563148567">
                                                <img src="/images/whatsapp.png"/>
                                                <div>
                                                    <div class="gray">WhatsApp</div>
                                                    <div>+971563148567</div>
                                                </div>
                                            </a>
                                        </div>
                                        <img src="/images/family.webp" class="img"/>
                                    </div>
                                    <div class="flex_col" data-aos="fade-up">
                                        <div class="input_container">
                                            <input type="text" placeholder="Phone" id="phoneInput" />
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="input_container span_2">
                                            <input type="text" placeholder="Email" />
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="input_container">
                                            <textarea placeholder="Enter tour message"></textarea>
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="input_container span_2 btn_link">
                                            <input type="submit" placeholder="Get in Touch" />
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="col" data-aos="fade-up">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.4008617019394!2d55.16317207422065!3d25.094327135861878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b65e5103b1f%3A0x6794a3c51b8caa4e!2s35V8%2BQ84%20Emaar%20Business%20Park%20-%20Building%201%20Office%20629%20-%20Al%20Thanyah%20Third%20-%20Dubai%20-%20United%20Arab%20Emirates!5e1!3m2!1sen!2suk!4v1760132347176!5m2!1sen!2suk"
                                width="100%" height="400" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                              </iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

@extends('layouts.master')

@section('title', 'contact Lexium Business Hub, Dubai business setup consultation, start company UAE contact.')
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
                <div class="title"> 
                    Start Your Dubai Business Journey Today.
                </div>
                <div class="form_contact_us">
                    <form class="form_contact">
                        <div class="grid_container">
                            <div class="col">
                                <div class="title_form">
                                    Get In Touch
                                </div>
                                <div class="grid_form">
                                    <div class="flex_img">
                                        <div class="flex_row">
                                            <a class="call" href="#">
                                                <img src="/images/black_call.png"/>
                                                <div>
                                                    <div class="gray">Call Us 24/7</div>
                                                    <div>(+256) 2145.2156</div>
                                                </div>
                                            </a>
                                            <a class="call" href="#">
                                                <img src="/images/whatsapp.png"/>
                                                <div>
                                                    <div class="gray">WhatsApp</div>
                                                    <div>(+256) 2145.2156</div>
                                                </div>
                                            </a>
                                        </div>
                                        <img src="/images/family.webp" class="img"/>
                                    </div>
                                    <div class="flex_col">
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
                            <div class="col">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.9961046069464!2d55.27078231501054!3d25.20484998389708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f434f06f6d0f5%3A0x33b7c59f82a0c8c4!2sDubai!5e0!3m2!1sen!2sae!4v1697387581234!5m2!1sen!2sae"
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
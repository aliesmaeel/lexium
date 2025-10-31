@extends('layouts.master')

@section('meta_title', 'Business Setup in Dubai | Lexium Business Hub LLC')
@section('meta_description', 'Start your business in Dubai with Lexium Business Hub. Company formation, Golden Visa, corporate services, and banking solutions — simplified and tailored for entrepreneurs and investors.')
@section('meta_keywords', 'Dubai business setup, company formation Dubai, start a business in UAE, UAE corporate services, Golden Visa Dubai')

{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="homepage">
        {{-- start banner --}}
        <div class="banner">
            <div class="swiper banner_swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide relative">
                        <img src="/images/buildings.jpg" alt="Dubai skyline with business professionals" class="img_swiper">
                        <div class="text_desc">
                        <div class="title sft_font">Launch Your Business in Dubai with Confidence</div>
                        <a href="#" class="btn apply_btn">
                            Start Your Company
                        </a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide relative">
                        <img src="/images/family.jpg" alt="Luxury Dubai lifestyle / family" class="img_swiper">
                        <div class="text_desc">
                        <div class="title sft_font">Golden Visa & Residency – Secure Your Future in the UAE</div>
                        <a href="#" class="btn apply_btn">
                            Apply Today
                        </a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide relative">
                        <img src="/images/work.jpg" alt="Team working in modern Dubai office" class="img_swiper">
                        <div class="text_desc">
                        <div class="title sft_font">Corporate Services That Let You Focus on Growth</div>
                        <a href="/services" class="btn">
                            Explore Services
                        </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Popup -->
            <div class="popup">
                @include('popup')
            </div>
        </div>
        {{-- end banner --}}
        {{-- main sections in home --}}
        <div class="home" id="home">
            <div class="content">
                <div class="flex-col">
                    <div class="btn flex">
                        <img src="/images/icon.svg"/>
                        <div> Business Success Starts Here</div>
                    </div>
                    <div class="title sft_font" data-aos="fade-left">Start Your Business in Dubai with Confidence.</div>
                    <div class="desc">
                        Lexium Business Hub is your trusted partner for company formation, Golden Visa, and corporate services in Dubai.
                        From business setup to banking, we simplify the process so you can focus on growth.
                    </div>
                    <a class="btn_link" href="#">View Services</a>
                    {{-- Why Dubai --}}
                    <div class="why_dubai">
                        <div class="main_title sft_font" data-aos="fade-left">Why Dubai</div>
                        <div class="black_bg grid">
                            <div class="col flex_col">
                                <div class="circle" data-percent="50">
                                  <div class="inner">
                                    <img src="/images/tax.png"/>
                                  </div>
                                </div>
                                <div class="text_desc">
                                  <div class="title">Tax-Free Benefits</div>
                                  <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                </div>
                              </div>
                              <div class="col flex_col">
                                <div class="circle" data-percent="40">
                                  <div class="inner">
                                    <img src="/images/ownership.png"/>
                                  </div>
                                </div>
                                <div class="text_desc">
                                  <div class="title">100% Ownership</div>
                                  <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                </div>
                              </div>
                              <div class="col flex_col">
                                <div class="circle" data-percent="70">
                                  <div class="inner">
                                    <img src="/images/global.png"/>
                                  </div>
                                </div>
                                <div class="text_desc">
                                  <div class="title">Global Business Hub</div>
                                  <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                </div>
                              </div>
                        </div>
                    </div>
                    {{-- Why Dubai --}}
                    {{-- start Services --}}
                    <div class="services_col">
                        <div class="main_title sft_font" data-aos="fade-left">Our Services</div>
                        <div class="grid">
                            <div class="order_ser col">
                                <div class="service">
                                    <div class="flex">
                                        <div class="flex_icon">
                                            <div class="icon">
                                                <img class="se_white" src="/images/bussiness_white.png">
                                                <img class="se_black" src="/images/bussiness_black.png">
                                            </div>
                                            <div>Business Setup</div>
                                        </div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="flex_icon">
                                            <div class="icon">
                                                <img class="se_white" src="/images/visa_w.png">
                                                <img class="se_black" src="/images/visa_b.png">
                                            </div>
                                            <div>Golden Visa</div>
                                        </div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="flex_icon">
                                            <div class="icon">
                                                <img class="se_white" src="/images/bank_w.png">
                                                <img class="se_black" src="/images/bank_b.png">
                                            </div>
                                            <div>Banking & Finance</div>
                                        </div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="flex_icon">
                                            <div class="icon">
                                                <img class="se_white" src="/images/pro_w.png">
                                                <img class="se_black" src="/images/pro_b.png">
                                            </div>
                                            <div>PRO & Corporate Services</div>
                                        </div>

                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="title" data-aos="fade-left">
                                    EFFECTIVE SERVICES
                                </div>
                                <div class="desc">
                                    we believe in the power of collaboration and personalized solutions. By understanding our
                                    clients' unique needs and goals, we tailor our approach to deliver strategic insights,
                                    creative solutions.

                                </div>

                                <img src="/images/08.png" class="arrow">
                            </div>
                        </div>
                    </div>
                    {{-- end Services --}}
                    {{-- phone --}}
                    <div class="contact_whatsapp">
                        <div class="pos flex">
                            <div>Do You Need Any Kind Of Work?</div>
                            <a href="tel:+971563148567" class="img_container">
                                <img src="/images/call.png">
                            </a>
                            <div>
                                Call Us Anytime!<a style="color: white" href="tel:+971563148567">+971563148567</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- about --}}
            <div class="about_section">
                <div class="container">
                    <div class="flex_row">
                        <div class="text_container">
                            <div class="btn">About US </div>
                            <div class="title sft_font" data-aos="fade-left">Businesses Through <span>Management</span></div>
                            <div class="desc">
                                we specialize in providing comprehensive business management solutions
                                tailored to meet the unique needs of our clients. With years of
                                experience and a team of dedicated professionals, we help businesses of all sizes streamline.
                            </div>
                            <div class="grid">
                                <div class="col flex_col">
                                    <div class="number" data-target="800">0+</div>
                                    <div class="text">Successful Projects </div>
                                </div>
                                <div class="col flex_col">
                                    <div class="number" data-target="567">0+</div>
                                    <div class="text">Skilled Experts </div>
                                </div>
                                <div class="col flex_col">
                                    <div class="number" data-target="28K">0+</div>
                                    <div class="text">Happy Clients  </div>
                                </div>
                            </div>
                            <div class="flex_col">
                                <div class="phone_text">Call Us Anytime!</div>
                                <a href="tel:+971563148567" class="phone_number">+971563148567</a>
                            </div>
                        </div>
                        <div class="img_container">
                            <div class="pos">
                                ABOUT<br>COMPANY
                            </div>

                            <img src="/images/girl.webp">
                        </div>
                    </div>
                </div>
            </div>
            {{-- about --}}
            <div class="content">
                <div class="flex-col">
                    {{-- phone --}}

                    {{-- start testimonials --}}
                    <div class="testimonials_section">
                        <div class="container">
                            <div class="btn">
                                Testimonials
                            </div>
                            <div class="main_title sft_font" data-aos="fade-left">
                             What They Say About<br>
                             <span>Our Company</span>
                            </div>
                            <div class="dark_bg">
                                <div class="flex">
                                    <div class="img_container">
                                        <img src="/images/testi.png"/>
                                    </div>

                                    <div class="swiper swiper_testi">
                                        <div class="swiper-wrapper">
                                            <!-- Slide 1 -->
                                            <div class="swiper-slide relative">
                                                <div class="flex-col">
                                                    <div class="desc">
                                                        I can’t recommend Lexium enough. It’s the perfect place for special occasions, date nights, or whenever you’re craving something extraordinary. The mix of impeccable service, stunning ambiance, and world-class cuisine makes it stand out from any other restaurant in town.

                                                    </div>
                                                    <div class="flex_row">
                                                        <div class="img_user">
                                                            <img src="/images/user.webp">
                                                        </div>
                                                        <div class="name_info">
                                                            <div>William Henry</div>
                                                            <div>Designer at  <span>Vertex Agency</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- Slide 2 -->
                                            <div class="swiper-slide relative">
                                                <div class="flex-col">
                                                    <div class="desc">
                                                        Lexium is an absolute gem! My partner and I celebrated our anniversary here, and everything was perfect—from the warm welcome to the exquisite dishes. The attention to detail and the romantic atmosphere made the night unforgettable. We can’t wait to come back!

                                                    </div>
                                                    <div class="flex_row">
                                                        <div class="img_user">
                                                            <img src="/images/user.webp">
                                                        </div>
                                                        <div class="name_info">
                                                            <div>William Henry</div>
                                                            <div>Designer at  <span>Vertex Agency</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- Slide 3 -->
                                            <div class="swiper-slide relative">
                                                <div class="flex-col">
                                                    <div class="desc">
                                                        Every visit to Lexium feels like a culinary journey. The flavors are bold, creative, and beautifully presented. You can tell the chefs truly care about their craft. It’s my go-to spot whenever I want to treat myself or impress guests.

                                                    </div>
                                                    <div class="flex_row">
                                                        <div class="img_user">
                                                            <img src="/images/user.webp">
                                                        </div>
                                                        <div class="name_info">
                                                            <div>William Henry</div>
                                                            <div>Designer at  <span>Vertex Agency</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- end testimonials --}}
                    {{-- start blogs --}}
                    <div class="blogs_section">
                        <div class="container">
                            <div class="btn">
                                Blog & News
                            </div>
                            <div class="main_title sft_font" data-aos="fade-left">
                                Recent blog post

                            </div>
                            <div class="swiper blogs_swiper">
                                <div class="swiper-wrapper">
                                   @foreach($blogs as $blog)
                                        <div class="swiper-slide single_blog">
                                            <div class="desc">
                                                Business Solution / by  <span>{{$blog->author}}</span>
                                            </div>
                                            <a class="title_blog_single" href="{{url('/blog/'.$blog->slug)}}">{{$blog->title}}</a>
                                            <div class="img_Container">
                                                <img src="{{asset('/storage/'.$blog->image)}}" />
                                            </div>
                                        </div>
                                   @endforeach


                                </div>
                                <!-- Pagination -->
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                    {{-- end blogs --}}
                    {{-- start Newsletter  --}}
                    <div class="newsletter">
                        <div class="flex_col">
                            <div class="btn">Subscribe Newsletter</div>
                            <div class="title sft_font" data-aos="fade-left">Your Connection to All Things New Subscribe Now</div>
                            <div class="form_container">
                                <form class="form_newsletter">
                                    <div class="input_container">
                                        <input type="text" placeholder="Enter Email Address"/>
                                        <div class="error-message">
                                            Must be a valid email and contain @
                                          </div>
                                    </div>
                                    <div class="submit btn_link">
                                        <button type="submit">Subscribe Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end Newsletter  --}}
                </div>

            </div>
        </div>
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

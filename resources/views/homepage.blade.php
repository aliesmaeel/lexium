@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="homepage">
        {{-- start banner --}}
        <div class="banner">
            <div class="content">
                <div class="swiper banner_swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide relative">
                            <img src="/images/buildings.jpg" alt="Dubai skyline with business professionals" class="img_swiper">
                            <div class="text_desc">
                            <div class="title">Launch Your Business in Dubai with Confidence</div>
                            <a href="#" class="btn">
                                Start Your Company
                            </a>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide relative">
                            <img src="/images/family.jpg" alt="Luxury Dubai lifestyle / family" class="img_swiper">
                            <div class="text_desc">
                            <div class="title">Golden Visa & Residency – Secure Your Future in the UAE</div>
                            <a href="#" class="btn">
                                Apply Today
                            </a>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide relative">
                            <img src="/images/work.jpg" alt="Team working in modern Dubai office" class="img_swiper">
                            <div class="text_desc">
                            <div class="title">Corporate Services That Let You Focus on Growth</div>
                            <a href="#" class="btn">
                                Explore Services
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
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
                    <div class="title" data-aos="fade-left">Start Your Business in Dubai with Confidence.</div>
                    <div class="desc">
                        Lexium Business Hub is your trusted partner for company formation, Golden Visa, and corporate services in Dubai. 
                        From business setup to banking, we simplify the process so you can focus on growth.
                    </div>
                    <a class="btn_link" href="#">View Services</a>
                    {{-- Why Dubai --}}
                    <div class="why_dubai">
                        <div class="main_title" data-aos="fade-left">Why Dubai</div>
                        <div class="black_bg grid">
                            <div class="col flex_col"> 
                                <img src="/images/tax.png"/>
                                <div>Tax-Free Benefits</div>
                            </div>
                            <div class="col"> 
                                <img src="/images/global.png"/>
                                <div>Global Business Hub</div>
                            </div>
                            <div class="col"> 
                                <img src="/images/ownership.png"/>
                                <div>100% Ownership</div>
                            </div>
                        </div>
                    </div>
                    {{-- Why Dubai --}}
                    {{-- start Services --}}
                    <div class="services_col">
                        <div class="main_title" data-aos="fade-left">Our Services</div>
                        <div class="grid">
                            <div class="order_ser col">
                                <div class="service">
                                    <div class="flex">
                                        <div>Business Setup</div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>Golden Visa</div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>Banking & Finance</div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>PRO & Corporate Services</div>
                                        <div class="img_container">
                                            <img src="/images/arrow.png" class="black_arrow"/>
                                            <img src="/images/arrow_white.png" class="white_arrow"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="btn_link">
                                    <div>Our Services</div> 
                                </div>
                                <div class="title" data-aos="fade-left">
                                    EFFECTIVE SERVICES
                                </div>
                                <div class="desc">
                                    we believe in the power of collaboration and personalized solutions. By understanding our
                                    clients' unique needs and goals, we tailor our approach to deliver strategic insights,
                                    creative solutions.
                                
                                </div>
                                <div class="btn_link all_btn">
                                    <div>View All Services</div> 
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
                            <div class="img_container">
                                <img src="/images/call.png">
                            </div>
                            <div>
                                Call Us Anytime!<a>+(125) 2153-2158</a>
                            </div>
                        </div>
                    </div>
                    {{-- phone --}}
                    {{-- about --}}
                    <div class="about_section">
                        <div class="container">
                            <div class="flex_row">
                                <div class="text_container">
                                    <div class="btn_link">About US </div>
                                    <div class="title" data-aos="fade-left">Businesses Through <span>Management</span></div>
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
                                        <a href="#" class="phone_number">+(125) 2153-2158</a>
                                    </div>
                                </div>
                                <div class="img_container">
                                    <img src="/images/about.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- about --}}
                    {{-- start testimonials --}}
                    <div class="testimonials_section">
                        <div class="container">
                            <div class="btn">
                                Testimonials
                            </div>
                            <div class="main_title" data-aos="fade-left">
                             What They Say About<br>
                             <span>Our Company</span>
                            </div>
                            <div class="dark_bg">
                                <div class="flex">
                                    <div class="img_container">
                                        <img src="/images/testi.webp"/>
                                    </div>
                                    
                                    <div class="swiper swiper_testi">
                                        <div class="swiper-wrapper">
                                            <!-- Slide 1 -->
                                            <div class="swiper-slide relative">
                                                <div class="flex-col">
                                                    <div class="desc">
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    
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
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    
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
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    
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
                            <div class="main_title" data-aos="fade-left">
                                Recent blog post
    
                            </div>
                            <div class="swiper blogs_swiper">
                                <div class="swiper-wrapper">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide single_blog">
                                        <div class="desc">
                                            Business Solution / by  <span>David Dolean</span>
                                        </div>
                                        <a class="title_blog_single" href="#">Transforming Your Best Of Approach to Business</a>
                                        <div class="img_Container">
                                            <img src="/images/blog.webp" />
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="swiper-slide single_blog">
                                        <div class="desc">
                                            Business Solution / by  <span>David Dolean</span>
                                        </div>
                                        <a class="title_blog_single" href="#">Transforming Your Best Of Approach to Business</a>
                                        <div class="img_Container">
                                            <img src="/images/blog.webp" />
                                        </div>
                                    </div>
                                    <!-- Slide 3 -->
                                    <div class="swiper-slide single_blog">
                                        <div class="desc">
                                            Business Solution / by  <span>David Dolean</span>
                                        </div>
                                        <a class="title_blog_single" href="#">Transforming Your Best Of Approach to Business</a>
                                        <div class="img_Container">
                                            <img src="/images/blog.webp" />
                                        </div>
                                    </div>
                                     <!-- Slide 4 -->
                                     <div class="swiper-slide single_blog">
                                        <div class="desc">
                                            Business Solution / by  <span>David Dolean</span>
                                        </div>
                                        <a class="title_blog_single" href="#">Transforming Your Best Of Approach to Business</a>
                                        <div class="img_Container">
                                            <img src="/images/blog.webp" />
                                        </div>
                                    </div>
                                    <!-- Slide 5 -->
                                    <div class="swiper-slide single_blog">
                                        <div class="desc">
                                            Business Solution / by  <span>David Dolean</span>
                                        </div>
                                        <a class="title_blog_single" href="#">Transforming Your Best Of Approach to Business</a>
                                        <div class="img_Container">
                                            <img src="/images/blog.webp" />
                                        </div>
                                    </div>
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
                            <div class="btn_link">Subscribe Newsletter</div>
                            <div class="title" data-aos="fade-left">Your Connection to All Things New Subscribe Now</div>
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
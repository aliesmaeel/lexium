@extends('layouts.master')

@section('meta_title', 'Business Setup in Dubai | Free Zone, Mainland & Offshore')
@section('meta_description', 'Set up your company in Dubai with Lexium Business Hub. Mainland, free zone, and offshore company formation with expert guidance and fast licensing.')
@section('meta_keywords', 'business setup in Dubai, company formation UAE, free zone company Dubai, Dubai mainland license, offshore company UAE')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<div class="contact_page business_page calculator_page">
    <div class="content">
        <div class="text_desc">
            <div class="title" data-aos="fade-left">
                Calculate Your UAE Business Setup Cost
            </div>
        </div>

        <div class="content_calculator">
            <form id="setupForm" action="" method="">

                {{-- Step 1 --}}
                <div class="form-step active">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">Choose your business activity to start your business setup cost estimate</div>
                        <div class="desc">
                            Choose the business activity that you would like to carry out in the UAE. Aside from helping you identify the location and licence that best suits your company,
                            this will also help you get a better estimate of the cost of your company setup.
                        </div>
                        <div class="input_container">
                            <select name="activity" required>
                                <option value="">Select</option>
                                <option value="Consulting">Consulting</option>
                                <option value="Technology">Technology</option>
                                <option value="Food and Beverage">Food and Beverage</option>
                                <option value="Retail">Retail</option>
                                <option value="Marketing">Marketing</option>
                                <option value="E-commerce">E-commerce</option>
                                <option value="Apparel">Apparel</option>
                                <option value="Construction">Construction</option>
                                <option value="Finance">Finance</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Education">Education</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Media">Media</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Recruitment">Recruitment</option>
                                <option value="Chemicals">Chemicals</option>
                                <option value="Sports Management Services">Sports Management Services</option>
                                <option value="Machinery">Machinery</option>
                                <option value="Communications">Communications</option>
                                <option value="Energy">Energy</option>
                                <option value="Business Accelerator">Business Accelerator</option>
                                <option value="Banking">Banking</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Private Equity">Private Equity</option>
                                <option value="Venture Capital">Venture Capital</option>
                                <option value="Recreation">Recreation</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Environmental">Environmental</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Not For Profit">Not For Profit</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Web3/Crypto">Web3/Crypto</option>
                                <option value="Government">Government</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" class="next-btn" data-aos="fade-up">Next</button>
                </div>

                {{-- Step 2 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">What is your main reason for setting up a company in the UAE?</div>
                        <div class="desc">
                            This will help us determine the potential type of company structure you will need for your company.
                        </div>
                        <div class="input_container">
                            <select name="location" required>
                                <option value="">Select</option>
                                <option value="new_company_formation">New company formation</option>
                                <option value="Expansion plan (ie. new branch or franchise)">Expansion plan (ie. new branch or franchise)</option>
                                <option value="company_relocation">Company relocation</option>
                                <option value="visa_purpose_only">Visa purpose only</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">
                            How many owners/shareholders will your company have?
                        </div>
                        <div class="desc">
                            The number of owners/shareholders your company will have can help in identifying
                            the most suitable legal structure for your company, as well as the number of
                            residence visas you will require.
                        </div>

                        <div class="input_container owners_container p_1" data-name="owners">
                            <div class="owners_buttons">
                                <button type="button" class="owner-btn" data-value="1">1</button>
                                <button type="button" class="owner-btn" data-value="2">2</button>
                                <button type="button" class="owner-btn" data-value="3">3</button>
                                <button type="button" class="owner-btn" data-value="4">4</button>
                                <button type="button" class="owner-btn" data-value="5">5</button>
                                <button type="button" class="owner-btn" data-value="6">6</button>
                                <button type="button" class="owner-btn" data-value="7">7</button>
                                <button type="button" class="owner-btn" data-value="8">8</button>
                            </div>
                            <input type="hidden" name="owners" required>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">
                            How many residence visas will you need?
                        </div>
                        <div class="desc">
                            In addition to residence visas for your shareholders,
                             you can apply for residence visas for your employees and family members.
                        </div>

                        <div class="input_container owners_container p_1" data-name="visas">
                            <div class="owners_buttons">
                                <button type="button" class="owner-btn" data-value="0">0</button>
                                <button type="button" class="owner-btn" data-value="1">1</button>
                                <button type="button" class="owner-btn" data-value="2">2</button>
                                <button type="button" class="owner-btn" data-value="3">3</button>
                                <button type="button" class="owner-btn" data-value="4">4</button>
                                <button type="button" class="owner-btn" data-value="5">5</button>
                                <button type="button" class="owner-btn" data-value="6">6</button>
                                <button type="button" class="owner-btn" data-value="7">7</button>
                            </div>
                            <input type="hidden" name="visas" required>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 5 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">What type of office space do you need?</div>
                        <div class="desc">
                            Dependants include your family members, nanny or other household staff you may personally employ.
                        </div>

                        <div class="input_container office_container p_1" data-name="office_type">
                            <div class="office_buttons">
                                <label class="office-btn">
                                    <input type="radio" name="office_type" value="Virtual Office">
                                    <span>Virtual Office</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="office_type" value="Physical Office">
                                    <span>Physical Office</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="office_type" value="Shop Front">
                                    <span>Shop Front</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="office_type" value="Business Centre">
                                    <span>Business Centre</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="office_type" value="Warehouse">
                                    <span>Warehouse</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                 {{-- Step 6 --}}
                 <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">When do you plan to start your business?</div>
                        <div class="desc">
                            Depending on the nature of your business, will you need a flexi-desk, a co-working space or an entire office space? This is an important factor in calculating your total setup cost.
                        </div>

                        <div class="input_container office_container p_1" data-name="business_plan">
                            <div class="office_buttons">
                                <label class="office-btn">
                                    <input type="radio" name="business_plan" value="This Month">
                                    <span>This Month</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="business_plan" value="Next Month">
                                    <span>Next Month</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="business_plan" value="3 Month">
                                    <span>3 Month</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="business_plan" value="6 Month">
                                    <span>6 Month</span>
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                 {{-- Step 7 --}}
                 <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">Choose your preferred jurisdiction</div>
                        <div class="desc">
                            This will have the biggest impact on your final proposal, but is also required based on your choice of activity and whether you need to be based in the mainland or not.
                        </div>

                        <div class="input_container office_container p_1" data-name="preferred_jurisdiction">
                            <div class="office_buttons">
                                <label class="office-btn">
                                    <input type="radio" name="preferred_jurisdiction" value="Free Zone">
                                    <span>Free Zone</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="preferred_jurisdiction" value="Mainland">
                                    <span>Mainland</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                 {{-- Step 8 --}}
                 <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">Are you currently living in the UAE?</div>
                        <div class="input_container office_container p_1" data-name="living_UAE">
                            <div class="office_buttons">
                                <label class="office-btn">
                                    <input type="radio" name="living_UAE" value="yes">
                                    <span>Yes</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="living_UAE" value="no">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 9 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">Will you also require visas for your dependants?</div>
                        <div class="input_container office_container p_1" data-name="visas_dependants">
                            <div class="office_buttons">
                                <label class="office-btn">
                                    <input type="radio" name="visas_dependants" value="yes">
                                    <span>Yes</span>
                                </label>
                                <label class="office-btn">
                                    <input type="radio" name="visas_dependants" value="no">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 10 --}}
                <div class="form-step">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">What's your nationality?</div>
                        <div class="input_container ">
                            <select name="nationality" required>
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                {{-- Step 11 --}}
                <div class="form-step info_form">
                    <div class="shadow_border" data-aos="fade-up">
                        <div class="title">Your business setup estimate is ready!</div>
                        <div class="desc">
                            To receive your proposal instantly, enter a valid email address and phone number below. We’ll deliver the proposal and next steps to that inbox.
                        </div>
                        <div class="grid_container">
                            <div class="col">
                                <div class="label">
                                    First name
                                </div>
                                <div class="input_container ">
                                    <input type="text" placeholder="First name" First name/>

                                </div>
                            </div>
                            <div class="col">
                                <div class="label">
                                    Last name
                                </div>
                                <div class="input_container">
                                    <input type="text" placeholder="Last name" name="Last name"/>

                                </div>
                            </div>
                            <div class="col col_span_2">
                                <div class="label">
                                    Email
                                </div>
                                <div class="input_container">
                                    <input type="email" name="email" placeholder="Email"/>

                                </div>
                            </div>
                            <div class="col col_span_2">
                                <div class="label">Phone number</div>
                                <div class="input_container">
                                    <div class="phone_dropdown_wrapper">
                                        <div class="city_code">
                                            <img id="selected-flag" src="https://flagcdn.com/w320/ae.png" alt="Flag" style="width: 20px; height: 15px;">
                                            <img src="/images/arrow-down.png"/>
                                        </div>
                                    </div>
                                    <input type="text" name="phone_number" id="phone-input" placeholder="+971" class="phone_number"/>
                                    <div class="dropdown_phone" style="display:none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <button type="button" class="prev-btn">Previous</button>
                        <button type="submit" class="submit-btn">Get My Estimate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>`
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

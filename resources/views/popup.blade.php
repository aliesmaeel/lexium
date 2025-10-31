
<style>
    .popup .abs_container .popup_form .input_container input, .popup .abs_container .popup_form .input_container textarea{
        margin: 0;
    }
</style>
<div class="abs_container">
    <form class="popup_form" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="input_container">
            <div class="title">Name:</div>
            <input type="text" placeholder="your name" name="name">
            <div class="error-message"></div>
        </div>
        <div class="input_container">
            <div class="title">Email:</div>
            <input type="email" placeholder="your email" name="email">
            <div class="error-message"></div>
        </div>

        <!-- ✅ Phone with flag and country dropdown -->
        <div class="input_container" style="display: flex; align-items: center; position: relative;">
            <div class="phone_dropdown_wrapper" style="position: relative;">
                <div class="city_code" style="display: flex; align-items: center; cursor: pointer;">
                    <img id="selected-flag" src="https://flagcdn.com/w320/ae.png" alt="Flag" style="width: 20px; height: 15px; margin-right: 5px;">
                    <img src="/images/arrow-down.png" style="width: 12px;">
                </div>
                <div class="dropdown_phone" style="display:none; position:absolute; top:100%; left:0; background:white; border:1px solid #ddd; border-radius:6px; width:250px; max-height:200px; overflow-y:auto; z-index:10;">
                    <div class="dropdown-search-wrapper" style="padding:5px; position:sticky; top:0; background:#fff;">
                        <input type="text" class="dropdown-search" placeholder="Search..." style="width:100%; padding:5px; border:1px solid #ccc; border-radius:4px;">
                    </div>
                </div>
            </div>
            <input type="text" name="phone" id="phone-input" placeholder="+971" class="phone_number" style="margin-left:10px; flex:1;">
            <input type="hidden" name="country_code" id="country_code" value="+971">
        </div>

        <div class="input_container span_2 message">
            <div class="title">Message:</div>
            <textarea placeholder="your message" name="message"></textarea>
            <div class="error-message"></div>
        </div>
        <button type="submit" class="btn_link">Submit</button>
    </form>
</div>

<!-- ✅ Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#contactForm');
        const phoneDropdown = form.querySelector('.dropdown_phone');
        const phoneInput = form.querySelector('#phone-input');
        const selectedFlag = form.querySelector('#selected-flag');
        const countryCodeInput = form.querySelector('#country_code');
        const cityCode = form.querySelector('.city_code');

        // Example countries (you can add more)
        const countries = [
            { code: 'AF', name: 'Afghanistan', dial_code: '+93' },
            { code: 'AL', name: 'Albania', dial_code: '+355' },
            { code: 'DZ', name: 'Algeria', dial_code: '+213' },
            { code: 'AS', name: 'American Samoa', dial_code: '+1684' },
            { code: 'AD', name: 'Andorra', dial_code: '+376' },
            { code: 'AO', name: 'Angola', dial_code: '+244' },
            { code: 'AI', name: 'Anguilla', dial_code: '+1264' },
            { code: 'AQ', name: 'Antarctica', dial_code: '+672' },
            { code: 'AG', name: 'Antigua and Barbuda', dial_code: '+1268' },
            { code: 'AR', name: 'Argentina', dial_code: '+54' },
            { code: 'AM', name: 'Armenia', dial_code: '+374' },
            { code: 'AU', name: 'Australia', dial_code: '+61' },
            { code: 'AT', name: 'Austria', dial_code: '+43' },
            { code: 'AZ', name: 'Azerbaijan', dial_code: '+994' },
            { code: 'BH', name: 'Bahrain', dial_code: '+973' },
            { code: 'BD', name: 'Bangladesh', dial_code: '+880' },
            { code: 'BY', name: 'Belarus', dial_code: '+375' },
            { code: 'BE', name: 'Belgium', dial_code: '+32' },
            { code: 'BZ', name: 'Belize', dial_code: '+501' },
            { code: 'BJ', name: 'Benin', dial_code: '+229' },
            { code: 'BM', name: 'Bermuda', dial_code: '+1441' },
            { code: 'BT', name: 'Bhutan', dial_code: '+975' },
            { code: 'BO', name: 'Bolivia', dial_code: '+591' },
            { code: 'BA', name: 'Bosnia and Herzegovina', dial_code: '+387' },
            { code: 'BW', name: 'Botswana', dial_code: '+267' },
            { code: 'BR', name: 'Brazil', dial_code: '+55' },
            { code: 'BN', name: 'Brunei Darussalam', dial_code: '+673' },
            { code: 'BG', name: 'Bulgaria', dial_code: '+359' },
            { code: 'BF', name: 'Burkina Faso', dial_code: '+226' },
            { code: 'BI', name: 'Burundi', dial_code: '+257' },
            { code: 'KH', name: 'Cambodia', dial_code: '+855' },
            { code: 'CM', name: 'Cameroon', dial_code: '+237' },
            { code: 'CA', name: 'Canada', dial_code: '+1' },
            { code: 'CL', name: 'Chile', dial_code: '+56' },
            { code: 'CN', name: 'China', dial_code: '+86' },
            { code: 'CO', name: 'Colombia', dial_code: '+57' },
            { code: 'CR', name: 'Costa Rica', dial_code: '+506' },
            { code: 'HR', name: 'Croatia', dial_code: '+385' },
            { code: 'CU', name: 'Cuba', dial_code: '+53' },
            { code: 'CY', name: 'Cyprus', dial_code: '+357' },
            { code: 'CZ', name: 'Czech Republic', dial_code: '+420' },
            { code: 'DK', name: 'Denmark', dial_code: '+45' },
            { code: 'DJ', name: 'Djibouti', dial_code: '+253' },
            { code: 'DO', name: 'Dominican Republic', dial_code: '+1' },
            { code: 'EC', name: 'Ecuador', dial_code: '+593' },
            { code: 'EG', name: 'Egypt', dial_code: '+20' },
            { code: 'SV', name: 'El Salvador', dial_code: '+503' },
            { code: 'EE', name: 'Estonia', dial_code: '+372' },
            { code: 'ET', name: 'Ethiopia', dial_code: '+251' },
            { code: 'FI', name: 'Finland', dial_code: '+358' },
            { code: 'FR', name: 'France', dial_code: '+33' },
            { code: 'DE', name: 'Germany', dial_code: '+49' },
            { code: 'GH', name: 'Ghana', dial_code: '+233' },
            { code: 'GR', name: 'Greece', dial_code: '+30' },
            { code: 'HK', name: 'Hong Kong', dial_code: '+852' },
            { code: 'HU', name: 'Hungary', dial_code: '+36' },
            { code: 'IN', name: 'India', dial_code: '+91' },
            { code: 'ID', name: 'Indonesia', dial_code: '+62' },
            { code: 'IR', name: 'Iran', dial_code: '+98' },
            { code: 'IQ', name: 'Iraq', dial_code: '+964' },
            { code: 'IE', name: 'Ireland', dial_code: '+353' },
            { code: 'IL', name: 'Israel', dial_code: '+972' },
            { code: 'IT', name: 'Italy', dial_code: '+39' },
            { code: 'JP', name: 'Japan', dial_code: '+81' },
            { code: 'JO', name: 'Jordan', dial_code: '+962' },
            { code: 'KE', name: 'Kenya', dial_code: '+254' },
            { code: 'KW', name: 'Kuwait', dial_code: '+965' },
            { code: 'LB', name: 'Lebanon', dial_code: '+961' },
            { code: 'LY', name: 'Libya', dial_code: '+218' },
            { code: 'LU', name: 'Luxembourg', dial_code: '+352' },
            { code: 'MY', name: 'Malaysia', dial_code: '+60' },
            { code: 'MV', name: 'Maldives', dial_code: '+960' },
            { code: 'ML', name: 'Mali', dial_code: '+223' },
            { code: 'MT', name: 'Malta', dial_code: '+356' },
            { code: 'MX', name: 'Mexico', dial_code: '+52' },
            { code: 'MA', name: 'Morocco', dial_code: '+212' },
            { code: 'NP', name: 'Nepal', dial_code: '+977' },
            { code: 'NL', name: 'Netherlands', dial_code: '+31' },
            { code: 'NZ', name: 'New Zealand', dial_code: '+64' },
            { code: 'NG', name: 'Nigeria', dial_code: '+234' },
            { code: 'NO', name: 'Norway', dial_code: '+47' },
            { code: 'OM', name: 'Oman', dial_code: '+968' },
            { code: 'PK', name: 'Pakistan', dial_code: '+92' },
            { code: 'PS', name: 'Palestine', dial_code: '+970' },
            { code: 'PH', name: 'Philippines', dial_code: '+63' },
            { code: 'PL', name: 'Poland', dial_code: '+48' },
            { code: 'PT', name: 'Portugal', dial_code: '+351' },
            { code: 'QA', name: 'Qatar', dial_code: '+974' },
            { code: 'RO', name: 'Romania', dial_code: '+40' },
            { code: 'RU', name: 'Russia', dial_code: '+7' },
            { code: 'SA', name: 'Saudi Arabia', dial_code: '+966' },
            { code: 'RS', name: 'Serbia', dial_code: '+381' },
            { code: 'SG', name: 'Singapore', dial_code: '+65' },
            { code: 'ZA', name: 'South Africa', dial_code: '+27' },
            { code: 'KR', name: 'South Korea', dial_code: '+82' },
            { code: 'ES', name: 'Spain', dial_code: '+34' },
            { code: 'SE', name: 'Sweden', dial_code: '+46' },
            { code: 'CH', name: 'Switzerland', dial_code: '+41' },
            { code: 'SY', name: 'Syria', dial_code: '+963' },
            { code: 'TH', name: 'Thailand', dial_code: '+66' },
            { code: 'TR', name: 'Turkey', dial_code: '+90' },
            { code: 'UA', name: 'Ukraine', dial_code: '+380' },
            { code: 'AE', name: 'United Arab Emirates', dial_code: '+971' },
            { code: 'GB', name: 'United Kingdom', dial_code: '+44' },
            { code: 'US', name: 'United States', dial_code: '+1' },
            { code: 'VN', name: 'Vietnam', dial_code: '+84' },
            { code: 'YE', name: 'Yemen', dial_code: '+967' },
        ];


        // Populate dropdown
        function populateDropdown() {
            phoneDropdown.innerHTML = `
            <div class="dropdown-search-wrapper" style="padding:5px; position:sticky; top:0; background:#fff;">
                <input type="text" class="dropdown-search" placeholder="Search..." style="width:100%; padding:5px; border:1px solid #ccc; border-radius:4px;">
            </div>
        `;

            countries.forEach(country => {
                const flagUrl = `https://flagcdn.com/w40/${country.code.toLowerCase()}.png`;
                const item = document.createElement('div');
                item.classList.add('code');
                item.dataset.flag = flagUrl;
                item.dataset.code = country.dial_code;
                item.dataset.country = country.name;
                item.style.padding = '8px 10px';
                item.style.cursor = 'pointer';
                item.style.display = 'flex';
                item.style.alignItems = 'center';
                item.innerHTML = `
                <img src="${flagUrl}" style="width:20px; height:15px; margin-right:10px;">
                <span>${country.name} (${country.dial_code})</span>
            `;
                phoneDropdown.appendChild(item);
            });
        }

        populateDropdown();

        // Toggle dropdown
        cityCode.addEventListener('click', () => {
            phoneDropdown.style.display = phoneDropdown.style.display === 'none' ? 'block' : 'none';
        });

        // Handle country select
        phoneDropdown.addEventListener('click', e => {
            const item = e.target.closest('.code');
            if (!item) return;
            const flagSrc = item.dataset.flag;
            const code = item.dataset.code;
            selectedFlag.src = flagSrc;
            phoneInput.placeholder = code;
            countryCodeInput.value = code;
            phoneDropdown.style.display = 'none';
        });

        // Search filter
        phoneDropdown.addEventListener('input', e => {
            if (e.target.classList.contains('dropdown-search')) {
                const query = e.target.value.toLowerCase();
                phoneDropdown.querySelectorAll('.code').forEach(el => {
                    const name = el.dataset.country.toLowerCase();
                    const dial = el.dataset.code;
                    el.style.display = name.includes(query) || dial.includes(query) ? 'flex' : 'none';
                });
            }
        });

        // Click outside to close
        document.addEventListener('click', e => {
            if (!form.contains(e.target)) {
                phoneDropdown.style.display = 'none';
            }
        });
    });
</script>

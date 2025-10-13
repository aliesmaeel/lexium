

var swiper_banner = new Swiper(".banner_swiper", {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

});
var swiper_testimonial = new Swiper(".swiper_testi", {
  loop: true,
  effect: 'slide',
  slidesPerView: '1',
  speed: 500,


});
var blogs_swiper = new Swiper(".blogs_swiper", {
  loop: true,
  effect: 'slide',
  slidesPerView: 'auto',
  speed: 500,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },


});
$(document).ready(function () {
  var $progressCircle = $("circle.progress");
  var $scrollBtn = $("#scroll-progress");
  var $banner = $(".banner");
  var bannerHeight = $banner.length ? $banner.outerHeight() : 200;

  $(window).on("scroll", function () {
    let scrollTop = $(window).scrollTop();
    let docHeight = $(document).height() - $(window).height();
    let progress = (scrollTop / docHeight) * 138;
    $progressCircle.css("stroke-dashoffset", 138 - progress);
    if (scrollTop > bannerHeight) {
      $scrollBtn.addClass("show");
    } else {
      $scrollBtn.removeClass("show");
    }
  });

  $scrollBtn.on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
  });
});

const aboutSection = document.querySelector('.about_section');
const numbers = document.querySelectorAll('.about_section .number');

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return rect.top < window.innerHeight && rect.bottom > 0;
}

function parseTargetValue(targetStr) {
  let suffix = '';
  let multiplier = 1;

  if (targetStr.endsWith("K")) {
    suffix = 'K';
    multiplier = 1000;
  } else if (targetStr.endsWith("M")) {
    suffix = 'M';
    multiplier = 1_000_000;
  }

  const numericValue = parseFloat(targetStr.replace(/[KM]/, ""));
  return { target: numericValue * multiplier, suffix, base: numericValue, multiplier };
}

function animateNumber(element) {
  const { target, suffix, base, multiplier } = parseTargetValue(element.dataset.target);
  const increment = target / 200;
  let currentValue = 0;

  function update() {
    currentValue += increment;
    if (currentValue < target) {
      const displayValue = Math.ceil(currentValue / multiplier);
      element.textContent = `${displayValue}${suffix}+`;
      requestAnimationFrame(update);
    } else {
      element.textContent = `${base}${suffix}+`;
    }
  }

  update();
}

function animateNumbers() {
  numbers.forEach(animateNumber);
}

function onScroll() {
  if (aboutSection && isInViewport(aboutSection)) {
    animateNumbers();
    window.removeEventListener('scroll', onScroll);
  }
}

window.addEventListener('scroll', onScroll);
$(document).ready(function() {
  // $('.newsletter .flex_col .form_container form.form_newsletter .input_container input').focus();
  var lastScrollY = $(window).scrollTop();
  $(window).on('scroll', function() {
    var currentY = $(this).scrollTop();
    if (currentY === 0) {
      $('.top_section').removeClass('hide');
      $('.main_setion').removeClass('slide-up');
      $('.main_setion').removeClass('slide-down');
    } else if (currentY > lastScrollY) {
      $('.top_section').addClass('hide');
      $('.main_setion').removeClass('slide-down').addClass('slide-up');
    } else {
      $('.top_section').addClass('hide');
      $('.main_setion').removeClass('slide-up').addClass('slide-down');
    }

    lastScrollY = currentY;
  });
});
$(document).on('click', function (event) {
  const $sidebar = $('.right-list');
  const $svgIcon = $('img.icon');
  if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
      !$svgIcon.is(event.target) && $svgIcon.has(event.target).length === 0) {
      if ($sidebar.css('right') === '0px') {
          $sidebar.css('right', '-30rem');
      }
  }
});
$('img.icon_logo').on('click', function (event) {
  event.stopPropagation();
  const $sidebar = $('.right-list');

  if ($sidebar.css('right') === '0px') {
      $sidebar.css('right', '-30rem');
  } else {
      $sidebar.css('right', '0');
  }
});
$('.newsletter form').on('submit', function (e) {
  e.preventDefault();
  let isValid = true;

  $(this).find('input[type="text"]').each(function () {
      var value = $.trim($(this).val());
      var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
      var errorField = $(this).siblings('.error-message');

      if (value === '') {
          errorField.text('This field is required').show();
          isValid = false;
      } else if (placeholder.includes('email')) {
          var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(value)) {
              errorField.text('Must be a valid email and contain @').show();
              isValid = false;
          } else {
              errorField.hide();
          }
      } else {
          errorField.hide();
      }
  });

  if (isValid) {
      this.submit();
  }
});

$('.newsletter form input[type="text"]').on('input', function () {
  $(this).siblings('.error-message').hide();
});

 // Form submit validation
 $('.contact_page .form_contact_us .form_contact').on('submit', function (e) {
  e.preventDefault();
  let isValid = true;
  $('.error-message').hide();

  $('.contact_page .form_contact_us .form_contact input[type="text"], .contact_page textarea').each(function () {
      var value = $.trim($(this).val());
      var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
      var errorField = $(this).closest('.input_container').find('.error-message');

      if (value === '') {
          errorField.text('This field is required').show();
          isValid = false;
      } else if (placeholder.includes('email')) {
          var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(value)) {
              errorField.text('Please enter a valid email address').show();
              isValid = false;
          }
      }
  });
  if (isValid) {
      this.submit();
  }
});
 // only numbers + live error
//  $('#phoneInput').on('input', function () {
//   this.value = this.value.replace(/\D/g, '');
//   var errorField = $(this).closest('.input_container').find('.error-message');
//   if (this.value === '') {
//       errorField.text('This field is required').show();
//   } else {
//       errorField.hide();
//   }
// });
// validation
$('.contact_page .form_contact_us .form_contact input[type="text"], .contact_page textarea').on('input', function () {
  var value = $.trim($(this).val());
  var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
  var errorField = $(this).closest('.input_container').find('.error-message');

  if (value === '') {
      errorField.text('This field is required').show();
  } else if (placeholder.includes('email')) {
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
          errorField.text('Please enter a valid email address').show();
      } else {
          errorField.hide();
      }
  } else {
      errorField.hide();
  }
});
document.addEventListener('DOMContentLoaded', function () {
  function animateCircle(circle, duration = 1200) {
    const pct = Math.max(0, Math.min(100, parseFloat(circle.getAttribute('data-percent') || 0)));
    const targetDeg = (pct / 100) * 360;
    const startTime = performance.now();

    function step(now) {
      const elapsed = now - startTime;
      const t = Math.min(1, elapsed / duration);
      const ease = 1 - Math.pow(1 - t, 3); // ease-out cubic
      const currentDeg = ease * targetDeg;
      circle.style.setProperty('--deg', currentDeg + 'deg');
      if (t < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }


  const section = document.querySelector('.why_dubai');
  if (section && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const circles = entry.target.querySelectorAll('.circle');
          circles.forEach(c => {
            c.style.setProperty('--deg', '0deg');
            animateCircle(c, 1200);
          });
        }
      });
    }, { threshold: 0.4 });
    observer.observe(section);
  }
});
$('.blog_page .grid_container_blogs .recent_posts.boxes a .desc div').each(function () {
  var fullText = $(this).text().trim();
  if (fullText.length > 50) {
      var truncatedText = fullText.substring(0, 50) + '...';
      $(this).text(truncatedText);
  }
});
$(".faq-question").click(function () {
  var $item = $(this).closest(".faq-item");
  var isActive = $item.hasClass("active");
  $(".faq-item").removeClass("active");
  $(".faq-icon").removeClass("rotate");

  if (!isActive) {
    $item.addClass("active");
    $(this).find(".faq-icon").addClass("rotate");
  }
});

$(document).ready(function () {

  const $formWrapper = $(".calculator_page");
  const $form = $formWrapper.find("#setupForm");
  const $steps = $form.find(".form-step");
  let currentStep = 0;

  function showStep(index) {
    $steps.removeClass("active").eq(index).addClass("active");
    const $currentStep = $steps.eq(index);
    $currentStep.find('[data-aos]').removeClass('aos-animate');
    setTimeout(() => {
        AOS.refreshHard();
    }, 100);
}
  function validateStep($step) {
    let valid = true;
    $step.find("select, input[type='text'], input[type='email'], input[type='hidden']").each(function () {
        const $input = $(this);
        const $container = $input.closest(".input_container").length ? $input.closest(".input_container") : $input;
        const value = $input.val().trim();

        if (!value) {
            $container.css("border", "2px solid red");
            valid = false;
        }
        else if ($input.attr('type') === 'email' && !value.includes('@')) {
            $container.css("border", "2px solid red");
            valid = false;
        }
        else {
            $container.css("border", "1px solid #ccc");
        }
    });

    return valid;
}

  function autoAdvanceSteps() {
      $steps.each(function (index) {
          if (validateStep($(this))) {
              currentStep = index + 1;
          } else {
              return false;
          }
      });

      if (currentStep >= $steps.length) currentStep = $steps.length - 1;
      showStep(currentStep);
  }

  $formWrapper.on("click", ".next-btn", function () {
      const $currentStep = $steps.eq(currentStep);
      if (validateStep($currentStep)) {
          if (currentStep < $steps.length - 1) {
              currentStep++;
              showStep(currentStep);
          }
      }
  });

  $formWrapper.on("click", ".prev-btn", function () {
      if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
      }
  });

  $formWrapper.on("click", ".owner-btn", function () {
      const $container = $(this).closest(".owners_container");
      const $hiddenInput = $container.find("input[type='hidden']");
      $container.find(".owner-btn").removeClass("active");
      $(this).addClass("active");
      $hiddenInput.val($(this).data("value"));
      $container.css("border", "1px solid #ccc");
      const $step = $(this).closest(".form-step");
      if (validateStep($step)) {
          const index = $steps.index($step);
          if (index < $steps.length - 1) {
              currentStep = index + 1;
              showStep(currentStep);
          }
      }
  });

  $formWrapper.on("change", "input[type='radio']", function () {
      const $container = $(this).closest(".office_container");
      $container.find(".office-btn").removeClass("active");
      $(this).closest(".office-btn").addClass("active");
      $container.css("border", "1px solid #ccc");
      const $step = $(this).closest(".form-step");
      if (validateStep($step)) {
          const index = $steps.index($step);
          if (index < $steps.length - 1) {
              currentStep = index + 1;
              showStep(currentStep);
          }
      }
  });

  $formWrapper.on("change keyup", "select, input[type='text'], input[type='email']", function () {
      const $container = $(this).closest(".input_container").length ? $(this).closest(".input_container") : $(this);
      if ($(this).val().trim() !== "") {
          $container.css("border", "1px solid #ccc");
          const $step = $(this).closest(".form-step");
          if (validateStep($step)) {
              const index = $steps.index($step);
              if (index < $steps.length - 1) {
                  currentStep = index + 1;
                  showStep(currentStep);
              }
          }
      }
  });

  $form.on("submit", function (e) {
      e.preventDefault();
      const $currentStep = $steps.eq(currentStep);
      if (validateStep($currentStep)) {
          this.submit();
      }
  });

  function fetchCountries() {
      return $.get('/all-countries');
  }
  function populateNationalitySelect(countries) {
      const $select = $form.find('select[name="nationality"]');
      $select.find('option:not(:first)').remove();
      countries.forEach(country => {
          $select.append(`<option value="${country.name}">${country.name}</option>`);
      });
  }


  function populatePhoneDropdown(countries) {
      const phoneDropdown = $form.find('.dropdown_phone');
      const phoneInput = $form.find('#phone-input');
      const defaultCode = '+971';
      phoneDropdown.empty();
      phoneDropdown.append(`
          <div class="dropdown-search-wrapper" style="position: relative; padding: 5px;">
              <input type="text" class="dropdown-search" placeholder="Search..."
                  style="width: calc(100% - 30px); padding-left: 10px; border: 1px solid #ccc; border-radius: 4px;">
              <img src="/images/search.png" style="position: absolute; width: 20px; right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;"/>
          </div>
      `);

      countries.forEach(country => {
          const flagUrl = `https://flagcdn.com/w320/${country.code.toLowerCase()}.png`;
          phoneDropdown.append(`
              <div class="code" data-flag="${flagUrl}" data-code="${country.dial_code}" data-country="${country.name}" style="padding: 10px; cursor: pointer; display: flex; align-items: center;">
                  <img src="${flagUrl}" style="width: 20px; height: 15px; margin-right: 10px;">
                  <div class="name-city">${country.name} <span>${country.dial_code}</span></div>
              </div>
          `);
      });

      phoneInput.attr('placeholder', defaultCode);
      $form.find('.city_code').on('click', () => phoneDropdown.toggle());
      phoneDropdown.on('click', '.code', function () {
        const flagSrc = $(this).data('flag');
        selectedCode = $(this).data('code');
        $form.find('#selected-flag').attr('src', flagSrc);
        phoneInput.attr('placeholder', selectedCode);
        phoneDropdown.hide();
    });
      phoneDropdown.on('input', '.dropdown-search', function () {
          const query = $(this).val().toLowerCase();
          phoneDropdown.find('.code').each(function () {
              const countryName = $(this).data('country').toLowerCase();
              const countryCode = $(this).data('code');
              $(this).toggle(countryName.includes(query) || countryCode.includes(query));
          });
      });
      phoneInput.on('input', function () {
        let val = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(val ? selectedCode + val : selectedCode);
    });
  }
  fetchCountries().done(countries => {
      populateNationalitySelect(countries);
      populatePhoneDropdown(countries);
      autoAdvanceSteps();
  }).fail(err => {
      console.error('Failed to load countries:', err);
  });

});

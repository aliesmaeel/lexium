

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
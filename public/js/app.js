

var swiper_banner = new Swiper(".banner_swiper", {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
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
  if (isInViewport(aboutSection)) {
    animateNumbers();
    window.removeEventListener('scroll', onScroll);
  }
}

window.addEventListener('scroll', onScroll);
$(document).ready(function() {
  $('.newsletter .flex_col .form_container form.form_newsletter .input_container input').focus();
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




// let lastScrollY = window.scrollY;
// const header = document.querySelector('.header');
// const topSection = document.querySelector('.top_section');
// const mainSection = document.querySelector('.main_setion');

// window.addEventListener('scroll', () => {
//   const currentY = window.scrollY;

//   if (currentY === 0) {
//     // At top → show everything
//     header.classList.remove('hide');
//     topSection.classList.remove('hide');
//     mainSection.classList.remove('fix', 'show');
//   } else if (currentY > lastScrollY) {
//     header.classList.add('hide');
//     topSection.classList.remove('hide'); // reset topSection in case
//     mainSection.classList.add('fix');
//     mainSection.classList.remove('show');
//   } else {
//     // Scrolling up but not at top → show only main_section with slide down
//     header.classList.remove('hide');
//     topSection.classList.add('hide');
//     mainSection.classList.add('fix', 'show');
//   }

//   lastScrollY = currentY;
// });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 3000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

//NAVBAR//
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

//CLIENT SECTION//

new Swiper('.clients-slider', {
  centerSlide: true,
  direction: 'horizontal',
  fade: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  breakpoints: {
    320: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    480: {
      slidesPerView: 4,
      spaceBetween: 60
    },
    640: {
      slidesPerView: 5,
      spaceBetween: 80
    },
    992: {
      slidesPerView: 6,
      spaceBetween: 120
    }
  }
});


//SWIPER PORTOFOLIO//
let swiper = new Swiper(".swiper-container", {
  centerSlide: true,
  fade: true,
  grabCursor: true,
  loop: false,
  slidesPerView: 1,
  spaceBetween: 25,
  autoplay: {
      delay: 5000,
      disableOnInteraction: false
  },
  breakpoints: {
      0: {
          slidesPerView: 1,
          spaceBetweenL: 25
      },
      576: {
          slidesPerView: 2,
          spaceBetweenL: 25
      },
      768: {
          slidesPerView: 3,
          spaceBetweenL: 25
      },
      1200: {
          slidesPerView: 4,
          spaceBetweenL: 25
      }
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true
  }
});

//SEARCHBAR
// get input field and add 'keyup' event listener
let searchInput = document.querySelector('.search-input');
searchInput.addEventListener('keyup', search);

// get all title
let titles = document.querySelectorAll('.card-news');
let searchTerm = '';
let tit = '';

function search(e) {
  // get input fieled value and change it to lower case
  searchTerm = e.target.value.toLowerCase();

  titles.forEach((title) => {
    // navigate to p in the title, get its value and change it to lower case
    tit = title.textContent.toLowerCase();
    // it search term not in the title's title hide the title. otherwise, show it.
    tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
  });
}

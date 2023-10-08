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


  /*CONTACT FORM*/
      const contactForm = document.getElementById("contact-form");

      contactForm.addEventListener("submit", function (e){
        e.preventDefault();

        const url = e.target.action;
        const formData = new FormData(contactForm);

        fetch(url, {
          method: "POST",
          body: formData,
          mode: "no-cors",
        }).then(() => {
          window,location.href='sett';
        })
        .catch((e) => alert("Error occured"));
  });

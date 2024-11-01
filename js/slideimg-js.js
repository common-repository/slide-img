 // Determine the total amount of images in the carousel.
      let sliderCount = $("#slider").find(".slider-img li img").length;
      // Load images into the carousel
      let sliderImg = $("#slider").find(".slider-img");
      // Define the navigation arrows and pagination bullets.
      let sliderArrow = `<ul class="slider-arrow"><li class="arrow-left" role="button"><svg width="30px" height="50px" viewBox="0 0 50 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><use xlink:href="#_Image1" x="6.351" y="3.526" width="37.474px" height="63.052px" transform="matrix(0.986169,0,0,0.985182,0,0)"/><path d="M7.776,32.581l27.592,-27.592c0.638,-0.639 1.49,-0.991 2.399,-0.991c0.908,0 1.76,0.352 2.398,0.991l2.032,2.031c1.322,1.324 1.322,3.475 0,4.797l-23.17,23.17l23.196,23.196c0.638,0.639 0.99,1.49 0.99,2.398c0,0.909 -0.352,1.76 -0.99,2.399l-2.032,2.031c-0.639,0.639 -1.49,0.991 -2.399,0.991c-0.908,0 -1.76,-0.352 -2.398,-0.991l-27.618,-27.617c-0.64,-0.641 -0.991,-1.496 -0.989,-2.405c-0.002,-0.913 0.349,-1.768 0.989,-2.408Z" style="fill:#fff;fill-rule:nonzero;"/><defs><image id="_Image1" width="38px" height="64px" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAABACAYAAAB2kAXpAAAACXBIWXMAAA7EAAAOxAGVKw4bAAADB0lEQVRogc3aTW8TRxgA4Md2CihAiFQkIJQLoFbAAfXcAz2UL3Hg3wIFJA5UHDghlYIIHxJQmvTER0hIROxwmFnFWdaxvZ7d9UiRpbU9+3h29p3s+05Lva2DWRzHaRzFFt7hBZbwBb1OzagD+BkXcR2/41ecxB6sYBWbdcEy1C+4hGsRdAJHhJH7EV28x8pMA6grOIO5+B5htM4Ll3UDq1WPWBHqLA5hBq341464/fF7r6uEDUL1j1R/a8Xj61hsTwkqD2xXASuL6gp35b/4LzVsEtRHPMVfeJkSlo9T46L+wZ+4j6VUsH7UJVwtgbqJu3iJtRSwFKgbEfUcn9FrTSGqSwhsqVBl5lR2+XagJoGlQt0pQhGCWSrUoVSoMrBaUOPCakMx+hwbFDwrQTHaiOVRWUioDDUKrBHUMFhjqN1gjaIGwRpHFcGmAsXOcDEp6kkqVD9sqlBsP5mkQN1OhSKM2KyQR/hjWlAZbAEXcLkkKtnly8NO4TffP7YXtZ6Q9HiGWxG1mBqVwRbwkzDPhj2M9oSkxyM8EB4ckqMyGCGZMWpr5V4raR0hDXRKSAXtM/xfobaQENkQU0bYNN6PGwnWxl4cFib+3l1wrYg6GD+7JdwIyXEd4Zd/jp3OxxPu2QWXpYzmqsR1YmersfNuPFnjuE7sZFMYtQ/Cndc4LgsPU4frj1tFuPl40tpx+YA6NbiiSJ8K14vfL4UbtASlwM3Hfkrhdlsb+3FZKKkNN2zRbgw3Sp6/EdyoBYgUuOxuHQk3TmUkj8uCcCW4cUs2g1aI5LgytaRacGWLXJXjJqm+pcL1FCxfk5YFU+Dmi3Ap6pWV4FIVUlPi3uNTygpvCtycUOFdTl16ngT3g4pr4mVxWdF+HYtVbW/oRtjz3PFzhidttrBV5b6LIlzL4IxSF5/wBu+q3neRv6zZQ/WcMKey/Ec3vv9YyLU9rGMLTdGcO2g7u/RVCBGPhXzbPbyta29PhluJiPV4bB3/429hpO7hFdYqTSUVtLYQEo4J6dUFO7dpLWMNvW/NVOkaQeiZ/AAAAABJRU5ErkJggg=="/></defs></svg></li><li class="arrow-right" role="button"><svg width="30px" height="50px" viewBox="0 0 50 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><use xlink:href="#_Image2" x="6.351" y="3.526" width="37.474px" height="63.052px" transform="matrix(0.986169,0,0,0.985182,0,0)"/><path d="M42.224,32.581l-27.592,-27.592c-0.638,-0.639 -1.49,-0.991 -2.399,-0.991c-0.908,0 -1.76,0.352 -2.398,0.991l-2.032,2.031c-1.322,1.324 -1.322,3.475 0,4.797l23.17,23.17l-23.196,23.196c-0.638,0.639 -0.99,1.49 -0.99,2.398c0,0.909 0.352,1.76 0.99,2.399l2.032,2.031c0.639,0.639 1.49,0.991 2.399,0.991c0.908,0 1.76,-0.352 2.398,-0.991l27.618,-27.617c0.64,-0.641 0.991,-1.496 0.989,-2.405c0.002,-0.913 -0.349,-1.768 -0.989,-2.408Z" style="fill:#fff;fill-rule:nonzero;"/><defs><image id="_Image1" width="38px" height="64px" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAABACAYAAAB2kAXpAAAACXBIWXMAAA7EAAAOxAGVKw4bAAADKklEQVRogc3aTW/cRBgA4GfXIbSkJKVwgJbvooJaJITErUgIIcqHhMSvpUgBDoifUITUhgOtaCQuDYQEaLMJh5lRXNfeXXvH3h0p2uzasZ993/Ebz4xHQhvjLF7EW3gZI+xiB/dxiImBWhFRG3gTn+BrfIwPIvIs9vE3jnAyBGwtnviNiPoS72JTiNjreB5Pxy9wOwJ7j1yBVyPqK7wXIesRfQZbeE6I1J4Qvd4jt4bL+BDXImCtsn0LVyt/13vk1nAJrwnpK2r2KeK2qx6PUq+4cnRGU/Yr48qtN1whlIjLeEnoU+OGfcdC39sU0ttrnyuESJ3BC/GE6QpcKq7AQxzE91vxZ70F7hh/5sYV8WAH8eDHHXDn+8AV8SBHQideGVwqD3W48/GkS8GV61YVN1kmrlpQVwZXV+lXAlcHWwlcE6wOl67WQXDTYFXc3pC4WbCl4eaBLQU3L2xwXBtYbtyeKQOctrCcuHTLVIvrAhsE1xXWhOtahJ/ALQKrw510wKWbzcdwi8L6wj3KAcuJm+AB9nPBqriuN5ub+Be7OWFl3H7EneBCBD6leew6jts34vvfcsPKuEM8EuZCXsGzmqNGQI+FiN2etmOONqq8zt36gBU4J8ytXcf7QipnnWuCv3AP93PDEupt3MBn8feNGbAjoU/+gp+wkxNWRX0uTMI0zSJVUbfwLX7Ebi7YoqifcRPf41cctu6UPaG+wXe4I9TB40VhvaDocBkPgVoE1iuKbnUsoa7g0z5QtI9YGXUDX/SBol3EcqJ2pqHawAZFMV8q+0DNnH6fFbEqat6OPlkENQuWA3WzC4rmVDahtuZE3Yqo7S6oJtjSUTyZyqbiOSiqCqui0tXXFtWpT1VbSmVOVKroC63IjVYRRUjlM8LAoQuqXBKyoRLsIj4SBg5tUdV/yNkWVMfCIup1vKNbRc+OSrCLwgMg51YFlWAnZs+7D4pKsN9xVxgF152k945e11Lq1p3Oyqw7rW9p2J5Q20OgEuyhMG10LHT+DadL0oNHqgxLa+IP8E/8/D/8IRTPbfwQUQdDoDhNWSq06TGtS/Hz6mNaU2+Hc7b/Acia8XF+9MtyAAAAAElFTkSuQmCC"/></defs></svg></li></ul>`;
      let sliderDotLi = "";
      for (let i = 0; i < sliderCount; i++) {
        sliderDotLi += `<li><svg width="18px" height="18px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><use xlink:href="#_Image3" x="1.65" y="1.65" width="26.733px" height="26.733px" transform="matrix(0.990123,0,0,0.990123,0,0)"/><path d="M15,2l13,13l-13,13l-13,-13l13,-13Z" style="fill:#fff;"/><defs><image id="_Image1" width="27px" height="27px" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAA7EAAAOxAGVKw4bAAABV0lEQVRIia3WMUskMRQA4M+Np4La6SHYrJWIWt9vkGvPfylceVf7F8TGasHGQlBBUU9xr0gWxmV258XZQIrwwvvyGPIySXwMsIF9/MAqnvGOcSRBqoSO8As/8R13eMBbBIxgE+iwAR1gFyu4jYJd2DR0gj2sYxPbNeA8rA0aYq3Elks8DM7C5kFLZc9SLdiGRaDJqAKnsRqoGmxiX4GqwAnWBwqDaUFQCEw+d4Y+UBd4n+Redyp3hr2eUBu4VdbXA7mSY+yUU/SFmuBKyXuM4QAjXOAG/wQ7eGCMS76bkn+U5GfirpxiWy59Wb8Kx3iRC/mL37hK8nv0IH/ERYBN6A/OcImnVIJvCwJnQY/4SI1NfcG5EJ/bVR+wE5rGvgqGoDasFgxDs7AoWAXNw7rAhNcaqAubBW7hG67lCxuCIlgbqKzP5c4Qgqi7sAP5F25Y5qjMpwgE/wEPFLXiGHf4kQAAAABJRU5ErkJggg=="/></defs></svg></li>`;
      }
      let sliderDot = `<ul class="slider-dot">${sliderDotLi}</ul>`;
      $("#slider").append(sliderArrow + sliderDot);

      let activeDefaultCount = $(".slider-dot li.active").length;
      if (activeDefaultCount != 1) {
        $(".slider-dot li")
          .removeClass()
          .eq(0)
          .addClass("active");
      }
      let sliderIndex = $(".slider-dot li.active").index();
      sliderImg.css("left", -sliderIndex * 100 + "%");

      // switch between images
      function sliderPos() {
        sliderImg.css("left", -sliderIndex * 100 + "%");
        $(".slider-dot li")
          .removeClass()
          .eq(sliderIndex)
          .addClass("active");
      }

      $(".arrow-right").click(function() {
        sliderIndex >= sliderCount - 1 ? (sliderIndex = 0) : sliderIndex++;
        sliderPos();
      });

      $(".arrow-left").click(function() {
        sliderIndex <= 0 ? (sliderIndex = sliderCount - 1) : sliderIndex--;
        sliderPos();
      });

      $(".slider-dot li").click(function() {
        sliderIndex = $(this).index();
        sliderPos();
      });

      let goSlider = setInterval(() => {
        $(".arrow-right").click();
      }, 3000);

      $("#slider").on({
        mouseenter: () => {
          clearInterval(goSlider);
        },
        mouseleave: () => {
          goSlider = setInterval(() => {
            $(".arrow-right").click();
          }, 3000);
        }
      });
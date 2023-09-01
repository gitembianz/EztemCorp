//<-----------------------------------Header----------------------------------->
function setupScrollEffect(headerSelector) {
  const header = document.querySelector(headerSelector);
  if (!header) {
    return;
  }
  let prevScrollPos = window.pageYOffset;

  function handleScroll() {
    const currentScrollPos = window.pageYOffset;
    const burgerMenu = document.querySelector(".header__categories-list");
    const solutionsDropdown = document.querySelector(".header__dropdown--list");

    if (currentScrollPos > 200) {
      if (prevScrollPos > currentScrollPos) {
        header.style.transform = "translateY(0)";
      } else {
        header.style.transform = "translateY(-270px)";
        burgerMenu.classList.remove("active");
        solutionsDropdown.classList.remove("active");
      }
    } else {
      header.style.transform = "translateY(0)";
    }
    prevScrollPos = currentScrollPos;
  }
  window.addEventListener('scroll', handleScroll);
}
//<---------------------------------End-Header--------------------------------->
//<----------------------------------Dropdown---------------------------------->
function setupDropdownToggle(triggerSelector, targetSelector) {
  const trigger = document.querySelector(triggerSelector);
  const target = document.querySelector(targetSelector);

  if (!trigger || !target) {
    return;
  }

  const toggleClass = () => {
    target.classList.toggle('active');
  };

  trigger.addEventListener('click', toggleClass);

  // Închide dropdown-ul dacă se face clic în afara lui
  document.addEventListener('click', (event) => {
    const clickedElement = event.target;
    if (!target.contains(clickedElement) && !trigger.contains(clickedElement)) {
      target.classList.remove('active');
    }
  });
}
//<--------------------------------End-Dropdown-------------------------------->
//<-----------------------------Cookies-Banner--------------------------------->
function setupCookieBanner() {
  const cookieBanner = document.getElementById("cookie-banner");
  const acceptButton = document.getElementById("accept-btn");
  const advancedSettings = document.getElementById("advanced-settings");
  const cookieForm = document.querySelector(".cookie__form");


  if (cookieBanner && acceptButton) {
    function setCookie(name, value, days) {
      const expires = new Date();
      expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
      document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
    }

    acceptButton.addEventListener("click", function () {
      setCookie("cookieConsent", "accepted", 30); // Expires in 30 days
      cookieBanner.classList.add("hidden");
    });

    advancedSettings.addEventListener("click", function () {
      cookieForm.classList.toggle("show");
    })

    function getCookie(name) {
      const cookieArray = document.cookie.split("; ");
      for (const cookie of cookieArray) {
        const [cookieName, cookieValue] = cookie.split("=");
        if (cookieName === name) {
          return cookieValue;
        }
      }
      return null;
    }

    const cookieConsent = getCookie("cookieConsent");
    if (!cookieConsent) {
      cookieBanner.classList.remove("hidden");
    }
  }
}
//<---------------------------End-Cookies-Banner------------------------------->
//<----------------------------Scroll-top-button------------------------------->
function setupScrollTopButton() {
  const existingButton = document.getElementById('top-up-button');

  if (!existingButton) {
    const topButton = document.createElement('button');
    topButton.id = 'top-up-button';
    topButton.textContent = 'Top';
    document.body.appendChild(topButton);
  }

  const button = document.getElementById('top-up-button');

  if (button) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 200) {
        button.classList.add('show');
      } else {
        button.classList.remove('show');
      }
    });

    button.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
}
//<--------------------------End-Scroll-top-button----------------------------->
//<------------------------------Accordions------------------------------------>
function initializeAccordions(closeOthers) {
  const accordions = document.querySelectorAll(".accordion");

  if (accordions.length === 0) {
    return;
  }

  accordions.forEach((accordion) => {
    const button = accordion.querySelector(".accordion-button");
    const content = accordion.querySelector(".accordion-wrapper");

    button.addEventListener("click", () => {
      if (closeOthers) {
        accordions.forEach((otherAccordion) => {
          if (otherAccordion !== accordion) {
            otherAccordion.classList.remove("active");
            otherAccordion
              .querySelector(".accordion-wrapper")
              .classList.remove("active");
          }
        });
      }

      accordion.classList.toggle("active");
      content.classList.toggle("active");
    });
  });
}
//<----------------------------End-Accordions---------------------------------->
//<----------------------------------dropdown---------------------------------->
function dropdownToggle(dropBtn, dropContent) {
  const btn = document.querySelector(dropBtn);
  const content = document.querySelector(dropContent);

  const toggle = () => {
    content.classList.toggle('active');
  };

  btn.addEventListener('click', toggle);

  document.addEventListener('click', (event) => {
    const clickedElement = event.target;
    if (!btn.contains(clickedElement) && !content.contains(clickedElement)) {
      content.classList.remove('active');
    }
  });
}
//<--------------------------------END-dropdown-------------------------------->
//<------------------------------Start-Functions------------------------------->
// Header(ScrollEffect)
setupScrollEffect(".header");
// Burger-menu
setupDropdownToggle('.header__burger-menu', '.header__categories-list');
// Dropdown Header
dropdownToggle(".header__dropdown--button",".header__dropdown--list");
// Cookie
setupCookieBanner();
// ScrollTop
setupScrollTopButton();
// Accordions
initializeAccordions(false);
//<----------------------------End-Start-Functions----------------------------->


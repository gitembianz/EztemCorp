function setupScrollEffect(e){let t=document.querySelector(e);if(!t)return;let o=window.pageYOffset;window.addEventListener("scroll",function e(){let l=window.pageYOffset,c=document.querySelector(".header__categories-list");document.querySelector(".header__dropdown--list"),l>200?o>l?t.style.transform="translateY(0)":(t.style.transform="translateY(-270px)",c.classList.remove("active")):t.style.transform="translateY(0)",o=l})}function initializeCustomSelect(){let e=document.querySelector(".select-trigger"),t=document.querySelector(".select-options"),o=document.querySelectorAll(".select-options li");e&&t&&o.length>0?(e.addEventListener("click",()=>{t.classList.toggle("active")}),o.forEach(o=>{o.addEventListener("click",()=>{o.getAttribute("data-value"),e.textContent=o.textContent,t.classList.remove("active")})}),document.addEventListener("click",o=>{e.contains(o.target)||t.contains(o.target)||t.classList.remove("active")})):console.log("Nu exista custom select pe aceasta pagina")}function setupCookieBanner(){let e=document.getElementById("cookie-banner"),t=document.getElementById("accept-btn"),o=document.getElementById("advanced-settings"),l=document.querySelector(".cookie__form");if(e&&t){t.addEventListener("click",function(){(function e(t,o,l){let c=new Date;c.setTime(c.getTime()+2592e6),document.cookie=`${t}=${o};expires=${c.toUTCString()};path=/`})("cookieConsent","accepted",30),e.classList.add("hidden")}),o.addEventListener("click",function(){l.classList.toggle("show")});let c=function e(t){let o=document.cookie.split("; ");for(let l of o){let[c,s]=l.split("=");if(c===t)return s}return null}("cookieConsent");c||e.classList.remove("hidden")}}function setupScrollTopButton(){let e=document.getElementById("top-up-button");if(!e){let t=document.createElement("button");t.id="top-up-button",t.textContent="Top",document.body.appendChild(t)}let o=document.getElementById("top-up-button");o&&(window.addEventListener("scroll",()=>{window.scrollY>200?o.classList.add("show"):o.classList.remove("show")}),o.addEventListener("click",()=>{window.scrollTo({top:0,behavior:"smooth"})}))}function initializeAccordions(e){let t=document.querySelectorAll(".accordion");0!==t.length&&t.forEach(o=>{let l=o.querySelector(".accordion-button"),c=o.querySelector(".accordion-wrapper");l.addEventListener("click",()=>{e&&t.forEach(e=>{e!==o&&(e.classList.remove("active"),e.querySelector(".accordion-wrapper").classList.remove("active"))}),o.classList.toggle("active"),c.classList.toggle("active")})})}function setupDropdownToggle(e,t){let o=document.querySelector(e),l=document.querySelector(t),c=document.querySelector("body");if(!o||!l)return;let s=()=>{l.classList.toggle("active"),o.classList.toggle("opened"),c.classList.toggle("no-scroll")};o.addEventListener("click",s),document.addEventListener("click",e=>{let t=e.target;l.contains(t)||o.contains(t)||(l.classList.remove("active"),o.classList.remove("opened"))})}setupScrollEffect(".header"),setupDropdownToggle(".header__burger-menu",".header__categories-list"),setupCookieBanner(),setupScrollTopButton(),initializeAccordions(!1),initializeCustomSelect();

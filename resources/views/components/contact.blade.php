{{-- Sectia de contact ce se afla la final de pagina --}}{{-- Section of contact in the end of the page --}}
<section class="contact">
    <div class="container contact__container">
        {{-- <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/web" _target="_blank">
                @lang("components.breadcrums.Contact")
            </a>
        </div> --}}
        <div class="contact__title">
            <div class="contact__title--text">
                <h1>
                    @lang("components.contact.heading")
                </h1>
                <p>
                    @lang("components.contact.description")
                </p>
            </div>
        </div>

        <form class="contact__form" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
            method="POST">
            <input type=hidden name="oid" value="00D09000008XPQu">
            <input type=hidden name="retURL" value="dev.eztemcorp.com/confirm">

            <div class="contact__label">
                <label for="last_name">
                    @lang("components.contact.name")
                </label>
                <input id="last_name" maxlength="80" name="last_name" type="text" placeholder="Name">
            </div>
            <div class="contact__label">
                <label for="company">
                    @lang("components.contact.company")
                </label>
                <input id="company" maxlength="80" name="company" type="text" placeholder="Name">
            </div>

            <div class="contact__label">
                <label for="email">
                    @lang("components.contact.email")
                </label>
                <input type="email" id="email" name="email" autocomplete="email" required placeholder="E-mail"
                    maxlength="80">
            </div>

            <!-------------------------------------------------------------------------->
            <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
            <!--  these lines if you wish to test in debug mode.-->
            {{-- <input type="hidden" name="debug" value=0>
            <input type="hidden" name="_next" value="dev.eztemcorp.com">
            <!-------------------------------------------------------------------------->

            <div class="contact__solutions">
                <span>
                    @lang("components.contact.solutions")
                </span>
                <label class="contact-image">
                    <input type="checkbox" id="00N9N000000PZPh" name="00N9N000000PZPh" value="1">
                    <label for="00N9N000000PZPh">
                        <img src="/img/web.webp" alt="Soluție 1" class="image" loading="lazy">
                        <span>
                            @lang("components.contact.web")
                        </span>
                    </label>
                </label>

                <label class="contact-image">
                    <input type="checkbox" id="00N9N000000PZPr" name="00N9N000000PZPr" value="1">
                    <label for="00N9N000000PZPr">
                        <img src="/img/graphics.webp" alt="Soluție 4" class="image" loading="lazy">
                        <span>
                            @lang("components.contact.graphics")
                        </span>
                    </label>
                </label>

                <label class="contact-image">
                    <input type="checkbox" id="00N9N000000PZPm" name="00N9N000000PZPm" value="1">
                    <label for="00N9N000000PZPm">
                        <img src="/img/retouch.webp" alt="Soluție 2" class="image" loading="lazy">
                        <span>
                            @lang("components.contact.retouch")
                        </span>
                    </label>
                </label>

                <label class="contact-image">
                    <input type="checkbox" id="00N9N000000PZPw" name="00N9N000000PZPw" value="1">
                    <label for="00N9N000000PZPw">
                        <img src="/img/marketing.webp" alt="Soluție 3" class="image" loading="lazy">
                        <span>
                            @lang("components.contact.marketing")
                        </span>
                    </label>
                </label>
            </div>

            <div class="contact__label">
                <span for="description" id="description">
                    @lang("components.contact.message")
                </span>
                <textarea name="description" required placeholder="@lang("components.contact.message_placeholder")"></textarea>
            </div>
            <button class="button" type="submit" name="submit">
                @lang("components.contact.send_button")
                <svg>
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </button>
        </form>
        <div class="contact__connect">
            <img src="/img/illustrations/form.webp" alt="form-complete">
            <a class="contact__link" href="mailto:contact@eztemcorp.com">
                <svg>
                    <path d=" M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                contact@eztemcorp.com
            </a>
            <ul class="footer__nav--list" style="justify-content: center;width: 100%;">
                <li class="footer__nav--item">
                    <a href="https://viber.click" style="background-color: #5a267c;" aria-label="Viber">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                            height="50" viewBox="0,0,256,256">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.33333,5.33333)">
                                    <path
                                        d="M24,5c-2.639,0 -10.67,0 -15.11,4.054c-2.644,2.634 -3.89,6.44 -3.89,11.946v3c0,5.506 1.246,9.312 3.921,11.976c1.332,1.215 3.148,2.186 5.368,2.857l0.711,0.214v5.328c0,0.625 0.181,0.625 0.241,0.625c0.123,0 0.32,-0.039 0.694,-0.371c0.09,-0.089 0.75,-0.803 3.96,-4.399l0.324,-0.363l0.485,0.031c1.075,0.067 2.184,0.102 3.296,0.102c2.639,0 10.67,0 15.11,-4.055c2.643,-2.634 3.89,-6.44 3.89,-11.945v-3c0,-5.506 -1.246,-9.312 -3.921,-11.976c-4.409,-4.024 -12.44,-4.024 -15.079,-4.024z"
                                        fill-opacity="0" fill="#ffffff"></path>
                                    <path
                                        d="M33.451,28.854c-1.111,-0.936 -1.624,-1.219 -3.158,-2.14c-0.639,-0.383 -1.613,-0.714 -2.124,-0.714c-0.349,0 -0.767,0.267 -1.023,0.523c-0.656,0.656 -0.871,1.477 -2.021,1.477c-1.125,0 -3.09,-1.145 -4.5,-2.625c-1.48,-1.41 -2.625,-3.375 -2.625,-4.5c0,-1.15 0.806,-1.38 1.462,-2.037c0.256,-0.255 0.538,-0.673 0.538,-1.022c0,-0.511 -0.331,-1.47 -0.714,-2.109c-0.921,-1.535 -1.203,-2.048 -2.14,-3.158c-0.317,-0.376 -0.678,-0.548 -1.056,-0.549c-0.639,-0.001 -1.478,0.316 -2.046,0.739c-0.854,0.637 -1.747,1.504 -1.986,2.584c-0.032,0.147 -0.051,0.295 -0.057,0.443c-0.046,1.125 0.396,2.267 0.873,3.234c1.123,2.279 2.609,4.485 4.226,6.455c0.517,0.63 1.08,1.216 1.663,1.782c0.566,0.582 1.152,1.145 1.782,1.663c1.97,1.617 4.176,3.103 6.455,4.226c0.958,0.472 2.086,0.906 3.2,0.874c0.159,-0.005 0.318,-0.023 0.477,-0.058c1.08,-0.238 1.947,-1.132 2.584,-1.986c0.423,-0.568 0.74,-1.406 0.739,-2.046c-0.001,-0.378 -0.173,-0.739 -0.549,-1.056zM34,24c-0.552,0 -1,-0.448 -1,-1v-1c0,-4.962 -4.038,-9 -9,-9c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1c6.065,0 11,4.935 11,11v1c0,0.552 -0.448,1 -1,1zM27.858,22c-0.444,0 -0.85,-0.298 -0.967,-0.748c-0.274,-1.051 -1.094,-1.872 -2.141,-2.142c-0.535,-0.139 -0.856,-0.684 -0.718,-1.219c0.138,-0.534 0.682,-0.855 1.219,-0.718c1.748,0.453 3.118,1.822 3.575,3.574c0.139,0.535 -0.181,1.08 -0.715,1.22c-0.085,0.022 -0.17,0.033 -0.253,0.033z"
                                        fill="#ffffff"></path>
                                    <path
                                        d="M31,23c-0.552,0 -1,-0.448 -1,-1c0,-3.188 -2.494,-5.818 -5.678,-5.986c-0.552,-0.029 -0.975,-0.5 -0.946,-1.051c0.029,-0.552 0.508,-0.976 1.051,-0.946c4.247,0.224 7.573,3.731 7.573,7.983c0,0.552 -0.448,1 -1,1z"
                                        fill="#ffffff"></path>
                                    <path
                                        d="M24,4c-4.5,0 -11.512,0.414 -15.784,4.316c-3.02,3.007 -4.216,7.225 -4.216,12.684c0,0.452 -0.002,0.956 0.002,1.5c-0.004,0.543 -0.002,1.047 -0.002,1.499c0,5.459 1.196,9.677 4.216,12.684c1.626,1.485 3.654,2.462 5.784,3.106v4.586c0,1.596 1.049,1.625 1.241,1.625h0.009c0.494,-0.002 0.921,-0.244 1.349,-0.624c0.161,-0.143 2.02,-2.215 4.042,-4.481c1.204,0.077 2.348,0.105 3.358,0.105v0v0c4.5,0 11.511,-0.415 15.784,-4.317c3.019,-3.006 4.216,-7.225 4.216,-12.684c0,-0.452 0.002,-0.956 -0.002,-1.5c0.004,-0.544 0.002,-1.047 0.002,-1.5c0,-5.459 -1.196,-9.677 -4.216,-12.684c-4.272,-3.901 -11.283,-4.315 -15.783,-4.315zM41,23.651v0.348c0,4.906 -1.045,8.249 -3.286,10.512c-3.882,3.489 -11.277,3.489 -13.715,3.489c-0.742,0 -1.946,-0.001 -3.367,-0.1c-0.395,0.444 -4.632,5.183 -4.632,5.183v-5.863c-2.104,-0.505 -4.183,-1.333 -5.714,-2.708c-2.241,-2.264 -3.286,-5.607 -3.286,-10.513v-0.348c0,-0.351 -0.001,-0.73 0.002,-1.173c-0.003,-0.4 -0.003,-0.778 -0.002,-1.13v-0.348c0,-4.906 1.045,-8.249 3.286,-10.512c3.881,-3.489 11.277,-3.489 13.714,-3.489c2.437,0 9.832,0 13.713,3.489c2.242,2.263 3.286,5.606 3.286,10.512v0.348c0,0.351 0.001,0.73 -0.002,1.173c0.003,0.401 0.003,0.779 0.003,1.13z"
                                        fill="#ffffff"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="footer__nav--item">
                    <a href="http://whatsapp.com" style="background-color: #50c351;" aria-label="Whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                            height="50" viewBox="0 0 48 48">
                            <path fill="#fff"
                                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                            </path>
                            <path fill="#fff"
                                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                            </path>
                            <path fill="#cfd8dc"
                                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                            </path>
                            <path fill="#40c351"
                                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                            </path>
                            <path fill="#fff" fill-rule="evenodd"
                                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li class="footer__nav--item">
                    <a href="http://web.telegram.org" style="background-color: #2bb6f5;" aria-label="Telegram">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                            height="50" viewBox="0 0 48 48">
                            <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path>
                            <path fill="#fff"
                                d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z">
                            </path>
                            <path fill="#b0bec5"
                                d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z">
                            </path>
                            <path fill="#cfd8dc"
                                d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="footer__nav--item">
                    <a href="https://www.messenger.com/" style="background-color: #1884ff;" aria-label="Messenger">
                        <svg width="50" height="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#0084ff" d="M512 0H0v512h512z" />
                            <path
                                d="M257 93c-88.918 0-161 67.157-161 150 0 47.205 23.412 89.311 60 116.807V417l54.819-30.273C225.449 390.801 240.948 393 257 393c88.918 0 161-67.157 161-150S345.918 93 257 93zm16 202l-41-44-80 44 88-94 42 44 79-44-88 94z"
                                fill="#ffffff" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <span class="hero__subtext">
        @lang("components.contact.quote")
    </span>
</section>

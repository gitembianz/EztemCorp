    <!DOCTYPE html>
    <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
            <title>@lang("components.title")</title>
            <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
            <meta name="description"
                content="Explore our creative solutions for web development, graphics design, photo retouching, and marketing services.">
            <link rel="stylesheet" href="/dist/css/style.css">
        </head>

        <body>
            <header>
                <div class="header">
                    <div class="container header__container">
                        <a href="/" class="header__logo">
                            <img class="logo" src="/img/logo.webp" alt="Logo = Creative Solutions" loading="lazy">
                        </a>
                        <nav class="header__categories">
                            <ul class="header__categories-list">
                                <li class="header__category">
                                    <a href="/web">
                                        @lang("components.header.solutions_dropdown.Web")
                                    </a>
                                </li>
                                <li class="header__category">
                                    <a href="/graphics">
                                        @lang("components.header.solutions_dropdown.Graphics")
                                    </a>
                                </li>
                                <li class="header__category">
                                    <a href="/retouch">
                                        @lang("components.header.solutions_dropdown.Retouch")
                                    </a>
                                </li>
                                <li class="header__category">
                                    <a href="/marketing">
                                        @lang("components.header.solutions_dropdown.Marketing")
                                    </a>
                                </li>
                                </li>
                                <li class="header__category">
                                    <a href="/contact" data-text="Contact Us">
                                        @lang("components.header.contact_us")
                                    </a>
                                </li>
                                <li class="header__category">
                                    <a href="/about" data-text="About">
                                        @lang("components.header.about_us")
                                    </a>
                                </li>
                            </ul>
                            <div class="header__burger-menu">
                                <svg>
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </div>
                            <div class="select">
                                <div class="select-trigger"> @lang("components.lang.name")</div>
                                <ul class="select-options">
                                    <li data-value="optiune1" data-lang="en">
                                        <a href="{{ route("locale", "en") }}">
                                            EN
                                        </a>
                                    </li>
                                    <li data-value="optiune1" data-lang="en">
                                        <a href="{{ route("locale", "ro") }}">
                                            RO
                                        </a>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

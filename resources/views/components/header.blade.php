<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        {{-- <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"> --}}
        <link rel="stylesheet" href="/scss/style.css">

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $metadescription }}">
        {{-- ----------------------------------------------------------- --}}
        <meta property="og:image" content="img/logo-banner.webp" />
        <meta property="twitter:image" content="img/logo-banner.webp" />
        {{-- ----------------------------------------------------------- --}}
        <meta property="og:url" content="http://dev.eztemcorp.com/" />
        <meta property="twitter:url" content="http://dev.eztemcorp.com/" />
        {{-- ----------------------------------------------------------- --}}
        <meta property="og:type" content="website" />
        <meta property="twitter:card" content="summary_large_image" />
        {{-- ----------------------------------------------------------- --}}
        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $metadescription }}" />
        <!-- Twitter -->
        <meta property="twitter:title" content="{{ $title }}" />
        <meta property="twitter:description" content="{{ $metadescription }}" />
        {{-- ----------------------------------------------------------- --}}

        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
        <link rel="manifest" href="img/favicons/site.webmanifest">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00a300">
        <meta name="theme-color" content="#ffffff">

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
                                <a href="/contact">
                                    @lang("components.header.contact_us")
                                </a>
                            </li>
                            <li class="header__category">
                                <a href="/about">
                                    @lang("components.header.about_us")
                                </a>
                            </li>
                        </ul>
                        {{-- <div class="header__burger-menu">
                                <svg>
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </div> --}}
                        <button class="header__burger-menu menu" aria-label="Main Menu">
                            <svg width="60" height="60" viewBox="0 0 100 100">
                                <path class="line line1"
                                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                <path class="line line2" d="M 20,50 H 80" />
                                <path class="line line3"
                                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                            </svg>
                        </button>
                        <div class="select">
                            <div class="select-trigger">
                                <svg>
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12">
                                    </line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                                @lang("components.lang.name")
                            </div>
                            <ul class="select-options">
                                <li data-value="optiune1">
                                    <a href="{{ route("locale", "en") }}">
                                        EN
                                    </a>
                                </li>
                                <li data-value="optiune1">
                                    <a href="{{ route("locale", "ro") }}">
                                        RO
                                    </a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

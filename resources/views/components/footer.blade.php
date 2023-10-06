<footer class="footer">
    <div class="container footer__container">
        <div class="footer__nav">
            <a href="/">
                <img src="/img/logo.webp" alt="Logo = Creative Solutions" class="logo" loading="lazy">
            </a>
            <ul class="footer__nav--list">
                <li class="footer__nav--item">
                    <a href="https://www.instagram.com/eztemcorp" target="_blank" aria-label="Instagram">
                        <svg>
                            <rect x="2" y="2" width="20" height="20" rx="5"
                                ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </li>
                <li class="footer__nav--item">
                    <a href="https://www.facebook.com/eztemcorp" target="_blank"
                        aria-label="Facebook">
                        <svg>
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </li>
                <li class="footer__nav--item">
                    <a href="https://linkedin.com/company/eztemcorp " target="_blank" aria-label="LinkedIn">
                        <svg>
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__list">
            <ul class="footer__categories">
                <li class="footer__category">
                    <a href="/">
                        @lang('components.footer.home')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/contact">
                        @lang('components.footer.contact_us')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/about">
                        @lang('components.footer.about_us')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/faq">
                        @lang('components.footer.faq')
                    </a>
                </li>
            </ul>
            <ul class="footer__categories">
                <li class="footer__category">
                    <a href="/web">
                        @lang('components.footer.web')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/graphics">
                        @lang('components.footer.graphics')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/retouch">
                        @lang('components.footer.retouch')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/marketing">
                        @lang('components.footer.marketing')
                    </a>
                </li>
            </ul>
            <ul class="footer__categories">
                <li class="footer__category">
                    <a href="/cookie'">
                        @lang('components.footer.cookies')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="/privacy">
                        @lang('components.footer.privacy')
                    </a>
                </li>
                <li class="footer__category">
                    <a
                        href="/sitemap.xml">
                        @lang('components.footer.sitemap')
                    </a>
                </li>
                <li class="footer__category">
                    <a href="https://anpc.ro/">
                        @lang('components.footer.anpc')
                    </a>
                </li>
            </ul>
        </div>
        <span class="footer__subtext">
            @lang('components.footer.copyright')
        </span>
    </div>
</footer>
<button id="top-up-button" aria-label="Go to top">
    <svg>
        <polyline points="17 11 12 6 7 11"></polyline>
        <polyline points="17 18 12 13 7 18"></polyline>
    </svg>
</button>
<script src="/scripts/min-script.js"></script>
<x-main-bottom />
</body>

</html>

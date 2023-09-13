<x-header :title='"Eztem Corp - " . __("home.pageTitle")' />


{{-- Pagina "Home sau Index" --}}{{-- Page "Home or Index" --}}
<main>
    {{-- Sectiunea de hero --}}{{-- Section of hero --}}
    <section class="hero">
        <div class="container hero__container">
            <div class="hero__text">
                <h1>
                    @lang("home.hero.heading")
                </h1>
                <p>
                    @lang("home.hero.description")
                </p>
            </div>
            <img class="hero__img" src="img/homecentercolored.webp" alt="Globus Creative Solutions" loading="lazy">
        </div>
        <span class="hero__subtext">
            @lang("home.hero.quote")
        </span>
    </section>

    {{-- Sectiunea de detalii --}}{{-- Section of details --}}
    <section class="details">
        <h1>
            @lang("home.details.heading")
        </h1>
        <div class="container details__container">
            <div class="details__content">
                <div class="details__title">
                    <img src="img/web.webp" alt="website details" loading="lazy">
                    <h2>
                        @lang("home.details.card_web1.heading")
                    </h2>
                </div>
                <p class="details__text">
                    @lang("home.details.card_web1.description")
                </p>
                <a href="/solutions/web" class="button">
                    @lang("home.details.card_web1.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/graphics.webp" alt="graphics details" loading="lazy">
                    <h2>
                        @lang("home.details.card_web2.heading")
                    </h2>
                </div>
                <p class="details__text">
                    @lang("home.details.card_web2.description")
                </p>
                <a href="/solutions/graphics" class="button">
                    @lang("home.details.card_web2.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/retouch.webp" alt="retouch details" loading="lazy">
                    <h2>
                        @lang("home.details.card_web3.heading")
                    </h2>
                </div>
                <p class="details__text">
                    @lang("home.details.card_web3.description")
                </p>
                <a href="/solutions/retouch" class="button">
                    @lang("home.details.card_web3.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/marketing.webp" alt="marketing details" loading="lazy">
                    <h2>
                        @lang("home.details.button")
                    </h2>
                </div>
                <p class="details__text">
                    @lang("home.details.card_web4.description")
                </p>
                <a href="/solutions/marketing" class="button">
                    @lang("home.details.card_web4.button")
                </a>
            </div>
            <span class="hero__subtext">
                @lang("home.details.quote")
            </span>
        </div>
    </section>

    {{-- Sectiunea de related --}}{{-- Section of related --}}
    <section class="related">
        <div class="container">
            <div class="related__text">
                <h1>
                    @lang("home.related.heading")
                </h1>
                <p>
                    @lang("home.related.description")
                </p>
            </div>
            <div class="related__container">
                <div class="related__image">
                    <img src="img/cube.webp" alt="cube related" loading="lazy">
                </div>
                <ul class="related__list">
                    <li class="related__list--item">
                        <p>
                            @lang("home.related.list.item1")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p>
                            @lang("home.related.list.item2")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p>
                            @lang("home.related.list.item3")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p>
                            @lang("home.related.list.item4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span class="hero__subtext">
            @lang("home.related.quote")
        </span>
    </section>

    {{-- Sectiunea de contact --}}{{-- Section of contact --}}
    <x-contact />
</main>
<x-cookie />
<x-footer />

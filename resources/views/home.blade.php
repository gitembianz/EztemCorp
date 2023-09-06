<x-header />
{{-- Pagina "Home sau Index" --}}{{-- Page "Home or Index" --}}
<main>
    {{-- Sectiunea de hero --}}{{-- Section of hero --}}
    <section class="hero">
        <div class="container hero__container">
            <div class="hero__text">
                <h1 data-text="creative_solutions_heading">
                    @lang("home.hero.heading")
                </h1>
                <p data-text="solutions_paragraph">
                    @lang("home.hero.description")
                </p>
            </div>
            <img class="hero__img" src="img/homecentercolored.webp" alt="Globus Creative Solutions" loading="lazy">
        </div>
        <span class="hero__subtext" data-text="success_quote">
            @lang("home.hero.quote")
        </span>
    </section>

    {{-- Sectiunea de detalii --}}{{-- Section of details --}}
    <section class="details">
        <h1 data-text="our_solutions_heading">
            @lang("home.details.heading")
        </h1>
        <div class="container details__container">
            <div class="details__content">
                <div class="details__title">
                    <img src="img/web.webp" alt="website details" loading="lazy">
                    <h2 data-text="Web">
                        @lang("home.details.card_web1.heading")
                    </h2>
                </div>
                <p class="details__text" data-text="web_app_details">
                    @lang("home.details.card_web1.description")
                </p>
                <a href="/solutions/web" class="button" data-text="learn_more_link">
                    @lang("home.details.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/graphics.webp" alt="graphics details" loading="lazy">
                    <h2 data-text="Graphics">
                        @lang("home.details.card_web2.heading")
                    </h2>
                </div>
                <p class="details__text" data-text="illustrations_details">
                    @lang("home.details.card_web2.description")
                </p>
                <a href="/solutions/graphics" class="button" data-text="learn_more_link">
                    @lang("home.details.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/retouch.webp" alt="retouch details" loading="lazy">
                    <h2 data-text="Retouch">
                        @lang("home.details.card_web3.heading")
                    </h2>
                </div>
                <p class="details__text" data-text="photo_composition_details">
                    @lang("home.details.card_web3.description")
                </p>
                <a href="/solutions/retouch" class="button" data-text="learn_more_link">
                    @lang("home.details.button")
                </a>
            </div>
            <div class="details__content">
                <div class="details__title">
                    <img src="img/marketing.webp" alt="marketing details" loading="lazy">
                    <h2 data-text="Marketing">
                        @lang("home.details.button")
                    </h2>
                </div>
                <p class="details__text" data-text="content_conversion_details">
                    @lang("home.details.card_web4.description")
                </p>
                <a href="/solutions/marketing" class="button" data-text="learn_more_link">
                    @lang("home.details.button")
                </a>
            </div>
            <span class="hero__subtext" data-text="success_quote">
                @lang("home.details.quote")
            </span>
        </div>
    </section>

    {{-- Sectiunea de related --}}{{-- Section of related --}}
    <section class="related">
        <div class="container">
            <div class="related__text">
                <h1 data-text="build_bundle_heading">
                    @lang("home.related.heading")
                </h1>
                <p data-text="project_support">
                    @lang("home.related.description")
                </p>
            </div>
            <div class="related__container">
                <div class="related__image">
                    <img src="img/cube.webp" alt="cube related" loading="lazy">
                </div>
                <ul class="related__list">
                    <li class="related__list--item">
                        <p data-text="choose_options">
                            @lang("home.related.list.item1")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p data-text="exclusive_service">
                            @lang("home.related.list.item2")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p data-text="guidance_support">
                            @lang("home.related.list.item3")
                        </p>
                    </li>
                    <li class="related__list--item">
                        <p data-text="unique_works">
                            @lang("home.related.list.item4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span class="hero__subtext" data-text="success_quote">
            @lang("home.related.quote")
        </span>
    </section>

    {{-- Sectiunea de contact --}}{{-- Section of contact --}}
    <x-contact />
</main>
<x-cookie />
<x-footer />

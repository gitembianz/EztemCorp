<x-header :title='"Eztem Corp - " . __("banner.pageTitle")' />

<main>
    <div class="container job__container">
        <div class="job__title">
            <img src="/img/icons/Banner.svg" alt="Figma Icon">
            <h1>
                @lang("banner.title")
            </h1>
        </div>
        <p>
            @lang("banner.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/banner-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("banner.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/banner-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("banner.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/banner-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("banner.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("banner.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("banner.quote")
        </span>
        <a href="/graphics" class="button">
            @lang("banner.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
